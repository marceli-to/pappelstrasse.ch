@props(['apartments' => collect()])

@php
  // Group apartments by ref_house (building)
  $buildings = $apartments->groupBy('ref_house')->sortKeys();
@endphp

<div class="sticky top-80 pt-30 z-50 w-full bg-white md:hidden">
  @include('components.objects.iso-sm', ['class' => 'h-150 w-auto block overflow-visible'])
</div>

<div class="grid grid-cols-12 gap-x-15 md:gap-x-20 lg:gap-x-30">

  <div class="hidden md:block md:col-span-5 lg:col-span-6 md:pt-30 lg:pt-50">
    @include('components.objects.iso', ['class' => 'sticky top-120 w-full h-auto block mb-40 lg:mb-80 py-[26%] -my-[26%] overflow-visible'])
  </div>

  <div class="col-span-full md:col-span-7 lg:col-span-6 relative z-20">
    @foreach($buildings as $refHouse => $buildingApartments)
      @include('components.objects.building', [
        'apartments' => $buildingApartments,
        'title' => 'Pappelstrasse ' . $refHouse,
        'building' => $refHouse,
      ])
    @endforeach
  </div>

</div>
