@props(['id', 'label', 'name' => null, 'options' => []])

<div class="w-full">
  <div class="relative">
    <label for="{{ $id }}" class="pointer-events-none absolute left-20 top-10 z-10 text-[15px] font-medium uppercase">
      {{ $label }}
    </label>

    <select
      id="{{ $id }}"
      name="{{ $name ?? $id }}"
      {{ $attributes->merge(['class' => 'block w-full appearance-none rounded-full border border-[#0b4b46] bg-[#f3f0e6] px-20 pb-10 pt-30 text-[14px] text-forest outline-none transition']) }}>
      @foreach($options as $value => $text)
        <option value="{{ $value }}">{{ $text }}</option>
      @endforeach
    </select>

    <x-icons.chevron-down class="pointer-events-none absolute right-20 top-1/2 w-18 h-18 -translate-y-1/2 text-forest" />
  </div>
</div>
