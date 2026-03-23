@props(['buildings' => collect(), 'labels' => []])

{{-- Mobile: card list --}}
<div class="md:hidden">

  <div class="sticky top-0 z-30">
    <div class="bg-cream w-full px-24 pt-40 py-20">
      <x-objects.iso class="h-auto w-full block overflow-visible" />
    </div>

    {{-- Header --}}
    <div class="bg-forest font-display font-bold text-[16px] text-cream grid grid-cols-[30px_75px_auto_90px_50px] items-center py-10 uppercase tracking-wider">
      <div></div>
      <div>Zimmer</div>
      <div class="text-right pr-30">Nettomietzins/Mt.</div>
      <div class="text-right">Bewerben</div>
      <div></div>
    </div>
  </div>

  {{-- Apartment rows --}}
  <div x-data="{ active: null }" x-init="$watch('active', val => val ? Iso.select(val.ref, val.state) : Iso.clear())">
  @foreach($buildings->flatten(1) as $apartment)
    @php
      $state = $apartment['state'] ?? 'free';
      $isAvailable = in_array($state, ['free', 'reserved']);
      $floorLabel = $labels['floors'][$apartment['floor'] ?? 0] ?? ($apartment['floor'] ?? '-');
      $stateColor = match($state) {
        'free' => 'bg-state-free',
        'reserved' => 'bg-state-reserved',
        default => 'bg-state-taken',
      };
      $ref = $apartment['ref_house'] . '.' . $apartment['ref_object'];
    @endphp
    <div
      :class="active && active.ref === '{{ $ref }}' && 'bg-sand'"
      class="border-b border-forest"
      data-filterable="true"
      data-object
      data-object-number="{{ $apartment['ref_house'] }}.{{ $apartment['ref_object'] }}"
      data-object-state="{{ $state }}"
      data-object-rooms="{{ $apartment['number_of_rooms'] ?? '' }}"
      data-object-floor="{{ $apartment['floor'] ?? '' }}"
      data-object-building="Pappelstrasse {{ $apartment['ref_house'] }}">

      {{-- Summary row --}}
      <button
        @click="active = (active && active.ref === '{{ $ref }}') ? null : { ref: '{{ $ref }}', state: '{{ $state }}' }"
        class="w-full cursor-pointer grid grid-cols-[30px_75px_auto_90px_50px] items-center py-12 text-left">
        <div class="flex justify-center px-10">
          <span class="block w-8 h-8 rounded-full {{ $stateColor }} shrink-0"></span>
        </div>
        <div class="font-bold text-[16px]">
          {{ $apartment['number_of_rooms'] ?? '-' }}
        </div>
        <div class="text-right pr-30 font-bold text-[16px]">
          @if($state === 'free' && $apartment['price_display'])
            CHF {{ number_format($apartment['price_display'], 0, '.', "'") }}
          @elseif($state === 'reserved')
            Reserviert
          @elseif($state === 'taken')
            Vermietet
          @endif
        </div>
        <div class="flex justify-end">
          @if($state === 'free' && $apartment['price_display'])
            <a
              href="https://flatfox.ch/de/listing{{ $apartment['short_url'] }}submit/"
              target="_blank"
              title="Jetzt auf Flatfox anmelden"
              @click.stop
              class="border border-forest rounded-full leading-none text-[12px] uppercase inline-flex items-center px-10 py-8 hover:bg-sand transition-colors">
              Bewerben
            </a>
          @endif
        </div>
        <div class="flex justify-center">
          <span class="transition-transform" :class="active && active.ref === '{{ $ref }}' && 'rotate-180'">
            <x-icons.chevron-down class="w-24 h-24 text-forest shrink-0" />
          </span>
        </div>
      </button>

      {{-- Detail panel --}}
      <div x-show="active && active.ref === '{{ $ref }}'" x-collapse x-cloak>
        <div class="pt-10 pb-20 border-t border-forest ml-30 mr-50">
          <dl class="space-y-15 text-[16px]">
            <div class="flex justify-between">
              <dt>Whg.-Nr</dt>
              <dd>{{ $apartment['ref_house'] }}.{{ $apartment['ref_object'] }}</dd>
            </div>
            <div class="flex justify-between">
              <dt>BWF</dt>
              <dd>{{ $apartment['surface_living'] ?? '-' }} m²</dd>
            </div>
            <div class="flex justify-between">
              <dt>Etage</dt>
              <dd>{{ $floorLabel }}</dd>
            </div>
          </dl>
          <div class="mt-15 flex justify-end">
            <a
              href="/downloads/pappelstrasse-{{ $ref }}.pdf"
              target="_blank"
              class="border border-forest rounded-full leading-none text-[13px] uppercase inline-flex items-center gap-8 px-15 py-10 hover:bg-sand transition-colors">
              <svg class="w-16 h-16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
              </svg>
              Grundriss
            </a>
          </div>
        </div>
      </div>

    </div>
  @endforeach
  </div>

  {{-- Parking / extras --}}
  <div class="mt-20">
    <div class="bg-forest text-cream flex items-center px-15 py-10 text-xxs uppercase tracking-wider">
      <div class="flex-1">Typ</div>
      <div class="text-right">Preis/Mt.</div>
    </div>
    <div class="divide-y divide-forest/10">
      <div class="flex items-center justify-between px-15 py-12 text-sm">
        <span>46 Tiefgarageplätze</span>
        <span class="font-bold">CHF 130</span>
      </div>
      <div class="flex items-center justify-between px-15 py-12 text-sm">
        <span>E-Ladestation</span>
        <span class="font-bold">CHF 170</span>
      </div>
      <div class="flex items-center justify-between px-15 py-12 text-sm">
        <span>Motorradplätze</span>
        <span class="font-bold">CHF 40</span>
      </div>
    </div>
  </div>

</div>

{{-- Desktop: iso + table grid --}}
<div class="hidden md:px-24 md:grid grid-cols-12 mt-100">

  <div class="md:col-span-5 lg:col-span-6 md:pt-30 lg:pt-50">
    <x-objects.iso class="sticky top-120 w-full h-auto block mb-40 lg:mb-80 py-[26%] -my-[26%] overflow-visible" />
  </div>

  <div class="col-span-full md:col-span-7 lg:col-span-6 relative z-20">
    @foreach($buildings as $refHouse => $buildingApartments)
      <x-objects.building :apartments="$buildingApartments" :title="'Pappelstrasse ' . $refHouse" :building="$refHouse" :labels="$labels" />
    @endforeach
  </div>

</div>
