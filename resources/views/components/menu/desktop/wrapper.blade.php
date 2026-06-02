<div class="{{ $class ?? '' }}">
  <nav>
    <ul class="md:grid md:grid-cols-4 md:gap-x-30 xl:gap-x-100 md:text-right xl:text-center w-full">

      <x-menu.desktop.item
        href="{{ route('page.offer') }}"
        active="{{ request()->routeIs('page.offer') }}"
        title="Angebot" />

      <x-menu.desktop.item
        href="{{ route('page.living') }}"
        active="{{ request()->routeIs('page.living') }}"
        title="Wohnen" />

      <x-menu.desktop.item
        href="{{ route('page.gallery') }}"
        active="{{ request()->routeIs('page.gallery') }}"
        title="Galerie" />

      <x-menu.desktop.item
        href="{{ route('page.location') }}"
        active="{{ request()->routeIs('page.location') }}"
        title="Lage" />

    </ul>
  </nav>
</div>
  