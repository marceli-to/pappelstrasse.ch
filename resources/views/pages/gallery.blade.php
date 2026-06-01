@extends('app')
@section('meta_title', 'Galerie')
@section('meta_description', 'Galerie der Pappelstrasse in Dietlikon – Visualisierungen, virtueller Rundgang und Musterwohnung.')

@php
  $visualisierungen = [
    '/img/pappelstrasse-visualisierung-wohnen-essen',
    '/img/pappelstrasse-visualisierung-kueche',
    '/img/pappelstrasse-visualisierung-schlafzimmer',
  ];
  $musterwohnung = [
    '/img/pappelstrasse-musterwohnung-001',
    '/img/pappelstrasse-musterwohnung-006',
    '/img/pappelstrasse-musterwohnung-009',
    '/img/pappelstrasse-musterwohnung-012',
    '/img/pappelstrasse-musterwohnung-018',
    '/img/pappelstrasse-musterwohnung-027',
    '/img/pappelstrasse-musterwohnung-030',
    '/img/pappelstrasse-musterwohnung-036',
    '/img/pappelstrasse-musterwohnung-039',
    '/img/pappelstrasse-musterwohnung-042',
  ];
@endphp

@section('content')

<section class="bg-cream pb-40 pt-30 md:pb-60 md:pt-40 lg:pb-80 lg:pt-60">
  <x-layout.inner>
    <x-headings.h2>
      Visualisierungen
    </x-headings.h2>
    <x-gallery.grid id="visualisierungen" :images="$visualisierungen" />
  </x-layout.inner>
</section>

<section class="bg-sand pb-40 pt-30 md:pb-60 md:pt-40 lg:pb-80 lg:pt-60">
  <x-layout.inner>
    <x-headings.h2>
      Rundgang
    </x-headings.h2>
    <div class="aspect-video w-full" data-reveal>
      <iframe
        src="https://my.matterport.com/show/?m=U1563J1ezoX"
        class="w-full h-full"
        frameborder="0"
        allowfullscreen
        allow="xr-spatial-tracking"
        title="Virtueller Rundgang"></iframe>
    </div>
  </x-layout.inner>
</section>

<section class="bg-cream pb-40 pt-30 md:pb-60 md:pt-40 lg:pb-80 lg:pt-60">
  <x-layout.inner>
    <x-headings.h2>
      Musterwohnung
    </x-headings.h2>
    <x-gallery.grid id="musterwohnung" :images="$musterwohnung" />
  </x-layout.inner>
</section>

<x-gallery.lightbox :groups="[
  'visualisierungen' => $visualisierungen,
  'musterwohnung' => $musterwohnung,
]" />

@endsection
