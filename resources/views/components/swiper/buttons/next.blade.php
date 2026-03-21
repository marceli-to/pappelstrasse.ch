@props([
  'class' => '',
])

<button class="swiper-button-next absolute top-1/2 right-30 -translate-y-1/2 z-10 cursor-pointer w-36 h-36 flex items-center justify-center border border-forest rounded-full bg-dew/20 transition-colors {{ $class }}">
  <x-icons.arrow-right class="w-16 h-auto" />
</button>
