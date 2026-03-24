<div class="{{ $class ?? '' }}">
  <nav>
    <ul class="md:grid md:grid-cols-3 md:gap-x-100 md:text-center w-full">

      <x-menu.desktop.item 
        href="{{ route('page.offer') }}" 
        active="{{ request()->routeIs('page.offer') }}" 
        title="Angebot" />

      <x-menu.desktop.item 
        href="{{ route('page.living') }}" 
        active="{{ request()->routeIs('page.living') }}" 
        title="Wohnen" />

      <x-menu.desktop.item 
        href="{{ route('page.location') }}" 
        active="{{ request()->routeIs('page.location') }}" 
        title="Lage" />

    </ul>
  </nav>
</div>
  