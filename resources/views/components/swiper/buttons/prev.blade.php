@props([
  'class' => '',
])

<button class="swiper-button-prev absolute top-1/2 left-30 -translate-y-1/2 z-10 cursor-pointer w-36 h-36 flex items-center justify-center border border-forest rounded-full bg-dew/20 transition-colors {{ $class }}">
  <x-icons.arrow-right class="w-16 h-auto rotate-180" />
</button>
