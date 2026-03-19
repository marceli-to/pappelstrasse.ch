<x-layout.html>
  <x-layout.head />
  <x-layout.body>
    @if (request()->routeIs('page.landing'))
      <x-layout.header />
    @endif
    <x-layout.main>
      @yield('content')
    </x-layout.main>
    <x-layout.footer />
  </x-layout.body>
</x-layout.html>