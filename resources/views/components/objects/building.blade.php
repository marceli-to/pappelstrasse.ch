@props(['apartments', 'title', 'building'])

@php
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

  $stateLabels = [
    'free' => 'frei',
    'reserved' => 'reserviert',
    'taken' => 'vermietet',
  ];
@endphp

<div data-building="{{ $building }}" class="mb-20 lg:mb-40">
  <h2 class="text-lg lg:text-xl font-bold mb-5">{{ $title }}</h2>

  <div class="w-full">
    <table class="w-full text-left">
      <thead>
        <tr class="border-b border-forest/20 text-xxs sm:text-xs uppercase tracking-wider">
          <th class="py-8 pr-10">Objekt</th>
          <th class="py-8 pr-4 md:pr-10">Etage</th>
          <th class="py-8 pr-10">Zimmer</th>
          <th class="py-8 pr-10 text-right">Fläche m²</th>
          <th class="py-8 pr-10 text-right">Miete CHF</th>
          <th class="py-8 text-right">Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach($apartments as $apartment)
          @php
            $state = $apartment['state'] ?? 'free';
            $isAvailable = in_array($state, ['free', 'reserved']);
            $floorLabel = $floorLabels[$apartment['floor'] ?? 0] ?? ($apartment['floor'] ?? '-');
          @endphp
          <tr
            class="border-b border-forest/10 hover:bg-dew/50 transition-colors"
            data-filterable="true"
            data-object
            data-object-number="{{ $apartment['ref_house'] }}.{{ $apartment['ref_object'] }}"
            data-object-state="{{ $state }}"
            data-object-rooms="{{ $apartment['number_of_rooms'] ?? '' }}"
            data-object-floor="{{ $apartment['floor'] ?? '' }}"
            data-object-building="{{ $title }}">
            <td class="py-8 pr-10">
              {{ $apartment['ref_house'] }}-{{ $apartment['ref_object'] }}
            </td>
            <td class="py-8 pr-4 md:pr-10">
              {{ $floorLabel }}
            </td>
            <td class="py-8 pr-10">
              {{ $apartment['number_of_rooms'] ?? '-' }}
            </td>
            <td class="py-8 pr-10 text-right">
              {{ $apartment['surface_living'] ?? '-' }}
            </td>
            <td class="py-8 pr-10 text-right">
              @if($isAvailable && $apartment['price_display'])
                {{ number_format($apartment['price_display'], 2, '.', "'") }}
              @endif
            </td>
            <td class="py-8 text-xxs sm:text-sm text-right align-middle">
              @if($isAvailable)
                <a
                  href="https://flatfox.ch/de/listing{{ $apartment['short_url'] }}submit/"
                  target="_blank"
                  title="Jetzt auf Flatfox anmelden"
                  class="text-white hover:brightness-110 bg-sage transition-all inline-flex items-center px-5 h-25 rounded-sm leading-none">
                  Flatfox
                </a>
              @else
                {{ $stateLabels[$state] ?? $state }}
              @endif
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
