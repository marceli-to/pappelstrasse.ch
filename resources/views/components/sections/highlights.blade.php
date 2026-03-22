@props([
  'title' => '',
  'items' => [],
  'bg' => 'bg-sand',
])

<section class="{{ $bg }}">
  <x-layout.inner>
    <div class="py-80 max-w-4xl mx-auto">
      <x-headings.h2 class="text-[40px] md:text-[60px] text-pretty leading-[1.1] mb-15" data-reveal>
        {{ $title }}
      </x-headings.h2>
      <div class="border-y border-forest divide-y divide-forest text-[20px] md:text-[24px] uppercase [&>div]:py-10 [&>div]:md:py-15" data-reveal-children>
        @foreach($items as $item)
          <div>{{ $item }}</div>
        @endforeach
      </div>
    </div>
  </x-layout.inner>
</section>
