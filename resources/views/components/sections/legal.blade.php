@props([
  'title' => '',
  'class' => '',
])

<section class="py-40">
  <x-layout.inner>
    <h1 class="text-forest text-2xl md:text-3xl lg:text-4xl !mb-15 lg:!mb-30">
      {{ $title }}
    </h1>
    <div class="leading-[1.3] flex flex-col gap-y-25 lg:gap-y-45 {{ $class }}">
      {{ $slot }}
    </div>
  </x-layout.inner>
</section>
