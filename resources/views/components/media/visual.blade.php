@props([
  'image' => '',
  'alt' => '',
  'class' => '',
])
<figure>
  <picture>
    <source media="(min-width: 1200px)" srcset="/img/{{ $image }}-xl.avif" type="image/avif">
    <source media="(min-width: 768px)" srcset="/img/{{ $image }}-lg.avif" type="image/avif">
    <source srcset="/img/{{ $image }}-md.avif" type="image/avif">
    <source media="(min-width: 1200px)" srcset="/img/{{ $image }}-xl.webp" type="image/webp">
    <source media="(min-width: 768px)" srcset="/img/{{ $image }}-lg.webp" type="image/webp">
    <source srcset="/img/{{ $image }}-md.webp" type="image/webp">
    <source media="(min-width: 1200px)" srcset="/img/{{ $image }}-xl.jpg" type="image/jpeg">
    <source media="(min-width: 768px)" srcset="/img/{{ $image }}-lg.jpg" type="image/jpeg">
    <source srcset="/img/{{ $image }}-md.jpg" type="image/jpeg">
    <img
      src="/img/{{ $image }}.jpg"
      alt="{{ $alt }}"
      title="{{ $alt }}"
      height="1600"
      width="900"
      class="w-full h-auto {{ $class }}">
  </picture>
</figure>