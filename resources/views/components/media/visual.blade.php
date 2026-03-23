@props([
  'image' => '',
  'alt' => '',
  'class' => '',
])
<figure class="h-screen md:h-[calc(100vh_-_80px)] w-full relative">
  
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

    <div class="w-196 h-196 lg:w-240 lg:h-240 absolute top-24 lg:top-36 left-1/2 -translate-x-1/2 flex items-center justify-center">
      <x-icons.logo class="w-160 h-auto" />
    </div>

    <button 
      @click="$el.closest('figure').nextElementSibling.scrollIntoView({ behavior: 'smooth' })" 
      class="cursor-pointer absolute bottom-70 left-1/2 -translate-x-1/2 flex flex-col gap-y-4 lg:gap-y-8 items-center group">
      <span class="uppercase text-white">Wohnen in Dietlikon</span>
      <x-icons.arrow-scroll class="w-68 h-auto group-hover:translate-y-1 transition-transform" />
    </button>

</figure>
