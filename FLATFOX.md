## API Documentation
https://flatfox.ch/en/docs/api/#/guides/listing-status-update


<article class="markdown-section" id="main"><h1 id="listing-status-update"><a href="#/guides/listing-status-update?id=listing-status-update" data-id="listing-status-update" class="anchor"><span>Listing status update</span></a></h1><p>Use to Flatfox <a href="#/resources/public-listing">PublicListing API</a> to retrieve information about listings and update your website accordingly.  </p><p>You will not require an API key.</p><p>In short you can get all information for a given project ID via the following URL. The example is with project ID 1, change this number to the ID given by Flatfox<br><a href="https://flatfox.ch/api/v1/public-listing/?project=1&amp;status=pre&amp;status=act&amp;status=dis&amp;status=arc&amp;status=rem" target="_blank" rel="noopener">https://flatfox.ch/api/v1/public-listing/?project=1&amp;status=pre&amp;status=act&amp;status=dis&amp;status=arc&amp;status=rem</a></p><p>Always display the information of the object with the highest listing primary key (PK) when multiple listings share the same reference number.</p><h2 id="python-example"><a href="#/guides/listing-status-update?id=python-example" data-id="python-example" class="anchor"><span>Python example</span></a></h2><pre v-pre="" data-lang="python"><code class="lang-python"># External library, installed with `pip install requests`
import requests

# API details stage.flatfox.ch for testing, flatfox.ch for production use
API_SERVER_URL = "https://flatfox.ch"

# The status a listing can be in
LISTING_STATUS_ALL = ["pre", "act", "dis", "arc", "rem"]
LISTING_STATUS_ACTIVE = ["pre", "act", "dis"]
LISTING_STATUS_REMOVED = ["arc", "rem"]

# Your final listing status
STATUS_FREE = "free"
STATUS_RESERVED = "reserved"
STATUS_TAKEN = "taken"

# The project id provided by Flatfox
PROJECT_ID = 1

if __name__ == "__main__":

    res = requests.get(
        url=f"{API_SERVER_URL}/api/v1/public-listing/",
        params=dict(
            project=PROJECT_ID,  # Only listings of a specific project
            status=LISTING_STATUS_ALL,
        ),
    )

    # The final request URL looks like this:
    # https://flatfox.ch/api/v1/public-listing/?project=1&amp;status=pre&amp;status=act&amp;status=dis&amp;status=arc&amp;status=rem

    # get all listings from the first page of the API answer
    all_listings = res.json()["results"]

    # as the API is paginated, go through all pages and receive all listings
    while res.json()["next"]:
        # res = requests.get(url=res.json()["next"], auth=(API_KEY, ""))
        res = requests.get(url=res.json()["next"])
        all_listings.extend(res.json()["results"])

    # `all_listings` looks now like this:
    #
    # [
    #     {
    #         "pk": 338626,
    #         "status": "pre",
    #         "num_applications": 0,
    #         "reserved": false,
    #         "ref_property": "5013",
    #         "ref_house": "01",
    #         "ref_object": "0202",
    #         ...
    #     },
    #     {
    #         "pk": 312680,
    #         "status": "pre",
    #         "num_applications": 16,
    #         "reserved": true,
    #         "ref_property": "5013",
    #         "ref_house": "01",
    #         "ref_object": "0403",
    #         ...
    #     }
    # ]

    def handle_removed_listings(all_listings, listing_status):
        """
        Go through all listings but ignores listings which are still active.
        All inactive listings will have a final status of "taken"
        """
        for listing in all_listings:
            if listing["status"] in LISTING_STATUS_ACTIVE:
                # skip listing if listing is active
                continue
            if not listing["reference"]:
                listing_ref = listing["pk"]
            else:
                listing_ref = listing["reference"]

            listing_status[listing_ref] = STATUS_TAKEN
        return listing_status

    def handle_active_listings(all_listings, listing_status):
        """
        Go through all listings but ignores listings which are not active anymore.
        The final status will then be decided based on the "reserved" field of the listing.
        """

        for listing in all_listings:
            if listing["status"] in LISTING_STATUS_REMOVED:
                # skip listing if listing is not active
                continue
            # use pk if reference is not given
            if not listing["reference"]:
                listing_ref = listing["pk"]
            else:
                listing_ref = listing["reference"]

            # now identify the status of the listing based on the reserved label
            if listing["reserved"]:
                listing_status[listing_ref] = STATUS_RESERVED
            else:
                listing_status[listing_ref] = STATUS_FREE

        return listing_status

    # Group status by listing reference (or id, if reference is missing)
    listing_status = {}

    # first we handle all removed listings and set the status to rented
    listing_status = handle_removed_listings(all_listings, listing_status)

    # then handle the active listings, set the status and if necessary overwrite it
    listing_status = handle_active_listings(all_listings, listing_status)

    # `listing_status` looks now like this:
    #
    # {
    #   "1234.56.78": "free",
    #   "1234.65.87": "taken",
    #   ...
    # }

    # Group listings by status
    reserved_listings = []
    taken_listings = []
    free_listings = []
    for listing_ref, status in listing_status.items():
        if status == STATUS_RESERVED:
            reserved_listings.append(listing_ref)
        if status == STATUS_TAKEN:
            taken_listings.append(listing_ref)
        if status == STATUS_FREE:
            free_listings.append(listing_ref)

    # `reserved_listings`, `taken_listings` and `free_listing` look now like this:
    #
    # free_listing =&gt; ["1234.56.78"]
    # taken_listings    =&gt; [" 1234.65.87"]

    # Print number of listings by status
    print(f"## Num reserved listings: {len(reserved_listings)}")
    print(f"## Num taken listings: {len(taken_listings)}")
    print(f"## Num free listings: {len(free_listings)}")</code></pre></article>