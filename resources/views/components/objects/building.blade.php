@props(['apartments', 'title', 'building', 'labels' => []])

<div data-building="{{ $building }}" class="mb-20 lg:mb-40">
  <x-headings.h2>{{ $title }}</x-headings.h2>

  <div class="w-full">
    <table class="w-full text-left">
      <thead>
        <tr class="bg-forest font-display font-bold md:text-[16px] lg:text-[18px] text-cream uppercase tracking-wider border-b border-forest/20">
          <th class="py-8 pr-10 pl-5">Objekt</th>
          <th class="py-8 pr-10">Etage</th>
          <th class="py-8 pr-10">Zimmer</th>
          <th class="py-8 pr-10 text-right">Fläche m²</th>
          <th class="py-8 pr-10 text-right">Miete CHF</th>
          <th class="py-8 pr-5 text-right">&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        @foreach($apartments as $apartment)
          @php
            $state = $apartment['state'] ?? 'free';
            $isAvailable = in_array($state, ['free', 'reserved']);
            $floorLabel = $labels['floors'][$apartment['floor'] ?? 0] ?? ($apartment['floor'] ?? '-');
          @endphp
          <tr
            class="border-b border-forest md:text-[14px] lg:text-[16px] hover:bg-dew/50 transition-colors"
            data-filterable="true"
            data-object
            data-object-number="{{ $apartment['ref_house'] }}.{{ $apartment['ref_object'] }}"
            data-object-state="{{ $state }}"
            data-object-rooms="{{ $apartment['number_of_rooms'] ?? '' }}"
            data-object-floor="{{ $apartment['floor'] ?? '' }}"
            data-object-building="{{ $title }}">
            <td class="py-8 pr-10 pl-5">
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
                {{ number_format($apartment['price_display'], 2, '.', "’") }}
              @endif
            </td>
            <td class="py-8 pr-5 text-right align-middle">
              @if($isAvailable)
                <x-buttons.primary 
                  href="https://flatfox.ch/de/listing{{ $apartment['short_url'] }}submit/" 
                  target="_blank" 
                  title="Jetzt auf Flatfox anmelden" 
                  :icon="false" 
                  class="py-6! px-10! text-[12px]!">
                  Bewerben
                </x-buttons.primary>
              @else
                {{ $labels['states'][$state] ?? $state }}
              @endif
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
