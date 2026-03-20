<header class="bg-forest w-full sticky top-0 z-50 min-h-80 hidden md:block">
  <x-layout.inner class="min-h-80 flex justify-center items-center relative">
    @if (!request()->routeIs('page.landing'))
      <a href="{{ route('page.landing') }}" class="absolute top-1/2 left-24 text-dew -translate-y-1/2">
        <x-icons.logo class="w-66 h-auto" />
      </a>
    @endif
    <x-menu.desktop.wrapper />
  </x-layout.inner>
</header>

@if (!request()->routeIs('page.landing'))
  <header class="md:hidden bg-cream min-h-80 sticky top-0 left-0">
    <a href="{{ route('page.landing') }}" class="absolute top-20 left-24 text-forest">
      <x-icons.logo class="w-66 h-auto" />
    </a>  
  </header>
@endif

<x-menu.mobile.button />
<x-menu.mobile.wrapper />

