<div 
  x-cloak 
  x-show="menu"
  class="fixed inset-0 z-50 flex items-center justify-center w-full h-dvh bg-forest md:!hidden">

  @if (!request()->routeIs('page.landing'))
    <a href="{{ route('page.landing') }}" class="fixed top-25 left-25 text-dew ">
      <x-icons.logo class="w-66 h-auto" />
    </a>
  @endif

  <nav>
    <ul class="flex flex-col gap-y-48 items-center">
      
      <x-menu.mobile.item 
        href="{{ route('page.offer') }}" 
        active="{{ request()->routeIs('page.offer') }}" 
        title="Angebot" />

      <x-menu.mobile.item 
        href="{{ route('page.living') }}" 
        active="{{ request()->routeIs('page.living') }}" 
        title="Wohnen" />

      <x-menu.mobile.item 
        href="{{ route('page.location') }}" 
        active="{{ request()->routeIs('page.location') }}" 
        title="Lage" />

    </ul>
  </nav>
</div>
  