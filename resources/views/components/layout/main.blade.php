<main role="main" class="flex-1 @if (!request()->routeIs('page.landing')) bg-dew @endif">
  {{ $slot }}
</main>