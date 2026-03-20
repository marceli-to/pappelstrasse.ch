
@props([
  'href' => '',
  'class' => '',
  'target' => '_self',
  'rel' => '',
  'title' => ''
])

<a 
  href="{{ $href }}" 
  class="border border-forest rounded-full leading-none {{ $class }}" 
  target="{{ $target }}" 
  rel="{{ $rel }}" 
  title="{{ $title }}">
  {{ $slot }}
</a>