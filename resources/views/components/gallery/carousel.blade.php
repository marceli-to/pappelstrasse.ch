@props([
  'name' => 'gallery',
  'images' => [],
  'class' => '',
])

<div class="relative {{ $class }}">
  <x-swiper.wrapper class="{{ $name }}-swiper">
    @foreach($images as $image)
      <x-swiper.slide>
        <picture>
          <source srcset="{{ $image }}.avif" type="image/avif">
          <source srcset="{{ $image }}.webp" type="image/webp">
          <img src="{{ $image }}.jpg" alt="" class="w-full h-full lg:aspect-square 2xl:aspect-auto object-cover" />
        </picture>
      </x-swiper.slide>
    @endforeach
  </x-swiper.wrapper>
  <x-swiper.buttons.prev class="{{ $name }}-swiper-prev" />
  <x-swiper.buttons.next class="{{ $name }}-swiper-next" />
</div>
