<?php
namespace App\Actions;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class FetchData
{
  public function execute(): void
  {
    $url = config('estate.flatfox.api_uri');
    $response = Http::get($url);
    $json_data = $response->json();
    $all_listings = $json_data['results'] ?? [];

    // if $json_data['next'] is not null, there are more pages to fetch
    while ($json_data['next'] !== null)
    {
      $response = Http::get($json_data['next']);
      $json_data = $response->json();
      $all_listings = array_merge($all_listings, $json_data['results'] ?? []);
    }

    // save the data to a file
    Storage::disk('public')->put('apartements.json', json_encode($all_listings));
  }
}
