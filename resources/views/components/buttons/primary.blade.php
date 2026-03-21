@props([
  'href' => '',
  'tag' => 'a',
  'class' => '',
  'target' => '_self',
  'rel' => '',
  'title' => '',
  'type' => 'button',
  'iconPosition' => 'after',
])

@php
  $padding = $iconPosition === 'before' ? 'pl-12 pr-18' : 'pl-18 pr-12';
@endphp

@if($tag === 'button')
<button
  type="{{ $type }}"
  class="border border-forest rounded-full leading-none text-[15px] md:text-[18px] uppercase inline-flex items-center gap-10 py-12 {{ $padding }} group {{ $class }}"
  title="{{ $title }}">
  {{ $slot }}
</button>
@else
<a
  href="{{ $href }}"
  class="border border-forest rounded-full leading-none text-[15px] md:text-[18px] uppercase inline-flex items-center gap-10 py-12 {{ $padding }} group {{ $class }}"
  target="{{ $target }}"
  rel="{{ $rel }}"
  title="{{ $title }}">
  {{ $slot }}
</a>
@endif
