@props([
  'image' => '',
  'alt' => '',
  'class' => '',
])
<figure class="h-screen w-screen relative">
  
  <img
    src="/img/{{ $image }}-portrait.jpg"
    alt="{{ $alt }}"
    title="{{ $alt }}"
    height="1600"
    width="900"
    class="w-full h-full object-cover block md:hidden {{ $class }}">

  <img
    src="/img/{{ $image }}-landscape.jpg"
    alt="{{ $alt }}"
    title="{{ $alt }}"
    height="1600"
    width="900"
    class="w-full h-full object-cover hidden md:block {{ $class }}">

    <div class="w-196 h-196 absolute top-24 left-1/2 -translate-x-1/2 flex items-center justify-center">
      <x-icons.logo class="w-160 h-auto" />
    </div>

    <button class="cursor-pointer absolute bottom-70 left-1/2 -translate-x-1/2 flex flex-col items-center group">
      <span class="uppercase text-white">Wohnen in Dietlikon</span>
      <x-icons.arrow-scroll class="w-68 h-auto group-hover:translate-y-2 transition-transform" />
    </button>

</figure>
