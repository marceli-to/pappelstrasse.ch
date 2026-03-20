@props([
  'class' => '',
])

<button class="swiper-button-next {{ $class }}">
  {{ $slot }}
</button>
