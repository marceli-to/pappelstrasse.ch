@props([
  'title' => '',
  'items' => [],
  'bg' => 'bg-sand',
])

<section class="{{ $bg }} pb-40 pt-30 md:pb-60 md:pt-40 lg:pb-80 lg:pt-60">
  <x-layout.inner>
    <div class="max-w-4xl mx-auto" data-reveal>
      <x-headings.h2>
        {{ $title }}
      </x-headings.h2>
      <div class="text-2xl md:text-3xl uppercase">
        @foreach($items as $item)
          <div class="py-10 md:py-15 border-t border-forest @if($loop->last) border-b @endif">{{ $item }}</div>
        @endforeach
      </div>
    </div>
  </x-layout.inner>
</section>
