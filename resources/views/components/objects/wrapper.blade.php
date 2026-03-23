@props(['buildings' => collect(), 'labels' => []])

{{-- Mobile: card list --}}
<div class="md:hidden pb-40">

  <div class="sticky top-0 z-30">
    <div class="bg-cream w-full px-24 pt-40 py-20">
      <x-objects.iso class="h-auto w-full block overflow-visible" />
    </div>

    {{-- Header --}}
    <div class="bg-forest font-display font-bold text-[16px] text-cream uppercase tracking-wider grid grid-cols-[30px_75px_auto_90px_50px] items-center py-10">
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
          class="w-full cursor-pointer grid grid-cols-[30px_75px_auto_90px_50px] items-center py-10 text-left">
          <div class="flex justify-center px-10">
            <span class="block w-8 h-8 rounded-full {{ $stateColor }} shrink-0"></span>
          </div>
          <div class="font-bold text-[16px]">
            {{ $apartment['number_of_rooms'] ?? '-' }}
          </div>
          <div class="text-right pr-30 font-bold text-[16px]">
            @if($state === 'free' && $apartment['price_display'])
              CHF {{ number_format($apartment['price_display'], 0, '.', "’") }}
            @elseif($state === 'reserved')
              Reserviert
            @elseif($state === 'taken')
              Vermietet
            @endif
          </div>
          <div class="flex justify-end">
            @if($state === 'free' && $apartment['price_display'])
              <span @click.stop>
                <x-buttons.primary href="https://flatfox.ch/de/listing{{ $apartment['short_url'] }}submit/" target="_blank" title="Jetzt auf Flatfox anmelden" :icon="false" class="!py-8 !px-10 !text-[12px]">
                  Bewerben
                </x-buttons.primary>
              </span>
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
              <x-buttons.primary href="/downloads/pappelstrasse-{{ $ref }}.pdf" target="_blank" iconPosition="before" class="!py-8 !pl-10 !pr-14 !text-[13px] !gap-8">
                <x-icons.file class="w-16 h-16" />
                Grundriss
              </x-buttons.primary>
            </div>
          </div>
        </div>

      </div>
    @endforeach
  </div>

  {{-- Parking / extras --}}
  <div class="mt-40 relative z-40 bg-cream">
    <div class="bg-forest font-display font-bold text-[16px] text-cream grid grid-cols-[30px_1fr_1fr_50px] items-center py-10 uppercase tracking-wider">
      <div></div>
      <div>Typ</div>
      <div class="text-right">Preis/Mt.</div>
      <div></div>
    </div>
    <div>
      <div class="grid grid-cols-[30px_1fr_1fr_50px] items-center py-12 border-b border-forest text-[16px]">
        <div></div>
        <div>46 Tiefgarageplätze</div>
        <div class="text-right font-bold">CHF 130</div>
        <div></div>
      </div>
      <div class="grid grid-cols-[30px_1fr_1fr_50px] items-center py-12 border-b border-forest text-[16px]">
        <div></div>
        <div>E-Ladestation</div>
        <div class="text-right font-bold">CHF 170</div>
        <div></div>
      </div>
      <div class="grid grid-cols-[30px_1fr_1fr_50px] items-center py-12 border-b border-forest text-[16px]">
        <div></div>
        <div>Motorradplätze</div>
        <div class="text-right font-bold">CHF 40</div>
        <div></div>
      </div>
    </div>
  </div>

</div>

{{-- Desktop: iso + table grid --}}
<div class="hidden md:px-24 md:mt-24 md:grid md:grid-cols-12 md:gap-x-24 lg:gap-x-48">

  <div class="md:col-span-5 lg:col-span-6 mt-125">
    <x-objects.iso class="sticky top-120 w-full h-auto block py-[26%] -my-[26%] overflow-visible" />
  </div>

  <div class="col-span-full md:col-span-7 lg:col-span-6 relative z-20">
    @foreach($buildings as $refHouse => $buildingApartments)
      <x-objects.building :apartments="$buildingApartments" :title="'Pappelstrasse ' . $refHouse" :building="$refHouse" :labels="$labels" />
    @endforeach
  </div>

</div>
