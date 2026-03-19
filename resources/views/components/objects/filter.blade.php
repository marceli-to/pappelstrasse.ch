@props(['apartments' => collect()])

@php
  $rooms = $apartments->pluck('number_of_rooms')->filter()->unique()->sort()->values();
  $buildings = $apartments->map(fn($a) => 'Pappelstrasse ' . $a['ref_house'])->unique()->sort()->values();
  $floors = $apartments->pluck('floor')->filter(fn($f) => $f !== null)->unique()->sort()->values();

  $floorLabels = [
    0 => 'EG',
    1 => '1. OG',
    2 => '2. OG',
    3 => '3. OG',
    4 => '4. OG',
    5 => '5. OG',
    6 => '6. OG',
    7 => '7. OG',
  ];
@endphp

<div class="grid grid-cols-12 gap-x-15 sm:gap-x-16 lg:gap-x-20 mb-40 md:mb-60 lg:mb-80">

  <div class="col-span-6 lg:col-span-3">
    <div class="uppercase font-lato-black font-black text-sage text-md tracking-wider">Verfügbarkeit</div>
    <div>
      <select
        class="js-filter-attribute appearance-none bg-[url(../icons/chevron-down.svg)] bg-[length:15px_auto] bg-[right_1rem_center] bg-no-repeat !outline-none bg-sage font-lato-regular rounded-sm text-white text-base 2xl:text-md py-10 px-16 mt-10 w-full h-45"
        data-filterType="object-state"
        aria-label="Verfügbarkeit">
        <option value="NULL">Alle Wohnungen</option>
        <option value="free">frei</option>
        <option value="reserved">reserviert</option>
        <option value="taken">vermietet</option>
      </select>
    </div>
  </div>

  <div class="col-span-6 lg:col-span-3">
    <div class="uppercase font-lato-black font-black text-sage text-md tracking-wider">Zimmer</div>
    <div>
      <select
        class="js-filter-attribute appearance-none bg-[url(../icons/chevron-down.svg)] bg-[length:15px_auto] bg-[right_1rem_center] bg-no-repeat !outline-none bg-sage font-lato-regular rounded-sm text-white text-base 2xl:text-md py-10 px-16 mt-10 w-full h-45"
        data-filterType="object-rooms"
        aria-label="Zimmer">
        <option value="NULL">Alle Zimmer</option>
        @foreach($rooms as $room)
          <option value="{{ $room }}">{{ $room }}</option>
        @endforeach
      </select>
    </div>
  </div>

<div class="col-span-6 lg:col-span-3">
  <div class="w-full max-w-[540px]">
    <div class="relative">
      <label
        for="availability"
        class="pointer-events-none absolute left-20 top-10 z-10 text-[15px] font-medium uppercase tracking-[0.04em] text-[#0b4b46]"
      >
        Verfügbarkeit
      </label>

      <select
        id="availability"
        name="availability"
        class="block w-full appearance-none rounded-full border border-[#0b4b46] _bg-[#EBF0DF] bg-[#f3f0e6] px-20 pb-10 pt-30 text-[14px] text-[#0b4b46] outline-none transition"
      >
        <option>Alle Wohnungen</option>
        <option>Verfügbar</option>
        <option>Reserviert</option>
        <option>Vermietet</option>
      </select>

      <svg
        class="pointer-events-none absolute right-20 top-1/2 w-18 h-18 -translate-y-1/2 text-[#0b4b46]"
        viewBox="0 0 20 20"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M4 7L10 13L16 7"
          stroke="currentColor"
          stroke-width="1.8"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </svg>
    </div>
  </div>
</div>


  <div class="col-span-6 lg:col-span-3">
    <div class="uppercase font-lato-black font-black text-sage text-md tracking-wider">Hausteil</div>
    <div>
      <select
        class="js-filter-attribute appearance-none bg-[url(../icons/chevron-down.svg)] bg-[length:15px_auto] bg-[right_1rem_center] bg-no-repeat !outline-none bg-sage font-lato-regular rounded-sm text-white text-base 2xl:text-md py-10 px-16 mt-10 w-full h-45"
        data-filterType="object-building"
        aria-label="Hausteil">
        <option value="NULL">Alle Hausteile</option>
        @foreach($buildings as $building)
          <option value="{{ $building }}">{{ $building }}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="col-span-6 lg:col-span-3">
    <div class="uppercase font-lato-black font-black text-sage text-md tracking-wider">Etage</div>
    <div>
      <select
        class="js-filter-attribute appearance-none bg-[url(../icons/chevron-down.svg)] bg-[length:15px_auto] bg-[right_1rem_center] bg-no-repeat !outline-none bg-sage font-lato-regular rounded-sm text-white text-base 2xl:text-md py-10 px-16 mt-10 w-full h-45"
        data-filterType="object-floor"
        aria-label="Etage">
        <option value="NULL">Alle Etagen</option>
        @foreach($floors as $floor)
          <option value="{{ $floor }}">{{ $floorLabels[$floor] ?? $floor }}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="col-span-full lg:col-span-3 flex items-end">
    <button class="js-btn-reset bg-pearl text-pewter px-15 py-12 w-full h-45 mt-8 lg:mt-0 rounded-sm flex items-center justify-start hover:bg-sage hover:text-white transition-all">
      Filter zurücksetzen
    </button>
  </div>

</div>
