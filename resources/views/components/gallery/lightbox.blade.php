@props([
  'groups' => [],
])

<div
  data-lightbox-overlay
  x-data="{ open: false }"
  x-show="open"
  x-cloak
  @lightbox-open.window="open = true"
  @lightbox-close.window="open = false"
  @keydown.escape.window="open = false"
  class="fixed inset-0 z-100 bg-forest/95 flex items-center justify-center">

  <script type="application/json" data-lightbox-groups>@json($groups)</script>

  <button
    type="button"
    data-lightbox-dismiss
    @click="open = false"
    aria-label="Schliessen"
    class="absolute top-16 right-24 z-20 w-44 h-44 flex items-center justify-center rounded-full border border-dew text-dew cursor-pointer">
    <span class="block w-20 h-px bg-dew rotate-45 translate-y-px"></span>
    <span class="block w-20 h-px bg-dew -rotate-45"></span>
  </button>

  <div class="relative w-full h-full max-w-7xl max-h-[85vh] mx-24 my-60">
    <div class="swiper lightbox-swiper w-full h-full">
      <div class="swiper-wrapper" data-lightbox-wrapper></div>
    </div>
    <x-swiper.buttons.prev class="lightbox-swiper-prev border-white! bg-dew/20!" arrowClass="stroke-white!" />
    <x-swiper.buttons.next class="lightbox-swiper-next border-white! bg-dew/20!" arrowClass="stroke-white!" />
    <div class="lightbox-swiper-pagination swiper-pagination absolute -bottom-30 left-0 right-0 z-10"></div>
  </div>
</div>
