@props([
  'title' => '',
  'items' => [],
  'bg' => 'bg-sand',
])

<section class="{{ $bg }} pb-40 pt-30 md:pb-60 md:pt-40 lg:pb-80 lg:pt-60">
  <x-layout.inner>
    <div class="max-w-4xl mx-auto">
      <x-headings.h2 data-reveal>
        {{ $title }}
      </x-headings.h2>
      <div class="text-[20px] md:text-[24px] uppercase" data-reveal>
        @foreach($items as $item)
          <div class="py-10 md:py-15 border-t border-forest @if($loop->last) border-b @endif">{{ $item }}</div>
        @endforeach
      </div>
    </div>
  </x-layout.inner>
</section>
