<div
  x-show="active === id"
  x-collapse
  x-cloak>
  <div class="pb-15 text-[16px] md:text-[20px]">
    {{ $slot }}
  </div>
</div>
