@extends('app')
@section('meta_description', 'Moderne 1.5- bis 3.5-Zimmerwohnungen an der Pappelstrasse 2/4 in Dietlikon – bezugsbereit ab Herbst 2026.')

@section('content')

  <x-media.visual image="pappelstrasse-visual-landing" alt="" />

  <section class="bg-forest text-dew text-xs md:text-2xl w-full py-30 lg:py-40">

    <x-layout.inner>

      <div class="grid grid-cols-2 gap-30 md:flex md:flex-row md:gap-60 lg:gap-80 md:justify-center md:items-start" data-reveal-children>
        <x-cards.feature label="Zentrale Lage">
          <x-icons.location class="w-40 h-auto" />
        </x-cards.feature>
        <x-cards.feature label="Naturnahe Umgebung">
          <x-icons.nature class="w-40 h-auto" />
        </x-cards.feature>
        <x-cards.feature label="Hochwertiger<br>Ausbaustandard" class="col-span-full">
          <x-icons.sparkle class="w-44 h-auto" />
        </x-cards.feature>
      </div>

    </x-layout.inner>

  </section>

  <x-sections.hero-split>

    <x-headings.h1>
      Wohnen und Leben<br>in Dietlikon
    </x-headings.h1>

    <p>Mit dem Neubauprojekt an der Pappelstrasse 2/4 entstehen nahe des Bahnhof Dietlikon 48 moderne 1.5- bis 3.5-Zimmerwohnungen, die ab 1. November 2026 bezugsbereit sind. Zwei elegant gestaltete, klar gegliederte Gebäude prägen das neue Ensemble und verleihen ihm mit ihren vertikalen Fassadenelementen und grosszügigen Fensterfronten eine zeitgemässe, urbane Ausstrahlung.</p>

    <div class="mt-30 flex justify-end">
      <x-buttons.primary href="#contact">
        Zu den Angeboten
        <x-icons.arrow-right class="w-16 h-auto shrink-0 group-hover:translate-x-3 transition-transform" />
      </x-buttons.primary>
    </div>

    <x-slot:aside>
      <x-gallery.carousel name="gallery" :images="[
        '/img/pappelstrasse-galerie-1.jpg',
        '/img/pappelstrasse-galerie-2.jpg',
        '/img/pappelstrasse-galerie-3.jpg',
      ]" />
    </x-slot:aside>

  </x-sections.hero-split>

  <x-sections.highlights title="Highlights" :items="[
    'Moderne Wohnungen',
    'Badezimmer mit Dusche oder Badewanne',
    'Eigener Waschturm',
    'Grosszügige Aussenbereiche',
    'Dachgarten',
  ]" />

@endsection
