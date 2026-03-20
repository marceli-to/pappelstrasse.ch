@props([
  'class' => '',
])

<button class="swiper-button-prev {{ $class }}">
  {{ $slot }}
</button>
