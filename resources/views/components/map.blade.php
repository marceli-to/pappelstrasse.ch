@props([
  'class' => 'aspect-[16/8] xl:aspect-[16/6] 2xl:aspect-[16/4]',
])

<div id="map" {{ $attributes->merge(['class' => 'w-full ' . $class]) }}></div>