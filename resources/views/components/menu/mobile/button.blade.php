<button 
  @click="menu = !menu" 
  class="fixed top-25 right-25 z-80 w-48 h-48 cursor-pointer flex items-center justify-center border border-dew rounded-full bg-forest md:hidden {{ $class ?? '' }}">
  <x-icons.burger class="w-26 h-auto text-dew" />
</button>