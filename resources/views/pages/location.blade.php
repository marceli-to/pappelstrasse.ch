@extends('app')
@section('meta_title', 'Lage')
@section('meta_description', 'Zentrale Lage nahe Bahnhof Dietlikon – optimale Anbindung und naturnahe Umgebung.')

@section('content')

  <x-sections.hero-split>

    <x-headings.h1>
      Lage
    </x-headings.h1>

    <p>Die zentrale Lage überzeugt durch eine hervorragende Anbindung: Der Bahnhof Dietlikon mit direkten Verbindungen nach Zürich und Winterthur, vielfältige Einkaufs-möglichkeiten sowie Dienstleister des täglichen Bedarfs sind bequem zu Fuss erreichbar. Im Erdgeschoss des Gebäudes befindet sich zudem ein Migros-Supermarkt, der eine besonders komfortable Versorgung direkt vor der Haustüre ermöglicht.</p>
    <p>Gleichzeitig sorgen umliegende Grünflächen und verkehrsberuhigte Bereiche für ein angenehmes, ent-spanntes Wohngefühl. Die Kombi-nation aus urbaner Nähe und naturnaher Umgebung bietet eine hohe Lebensqualität für unter-schiedlichste Wohnbedürfnisse.</p>

    <div class="mt-30 flex flex-col gap-y-10 items-end justify-end">
      <x-buttons.primary href="{{ config('site.google_maps_url') }}" target="_blank">
        Google Maps
        <x-icons.arrow-right class="w-16 h-auto shrink-0 -rotate-45" />
      </x-buttons.primary>
    </div>

    <x-slot:aside>
      <div class="aspect-video lg:aspect-square 2xl:aspect-auto w-full h-full">
        <x-map class="h-full" />
      </div>
    </x-slot:aside>

  </x-sections.hero-split>

  <section class="bg-sand pb-40 pt-30 md:pb-60 md:pt-40 lg:pb-80 lg:pt-60">
    <x-layout.inner>
      <div class="max-w-3xl mx-auto">
        <x-headings.h2 data-reveal>
          Mobilität und Anschlüsse
        </x-headings.h2>
        <div data-reveal>
          <div class="flex items-center justify-between py-10 md:py-15 border-t border-forest">
            <div class="flex items-center gap-10">
              <x-icons.cart class="w-24 h-auto" />
              <span>Migros Dietlikon</span>
            </div>
            <div class="flex items-center gap-10">
              <x-icons.walk class="w-24 h-auto" />
              <span class="font-bold w-70 md:w-80 text-right">1 Min.</span>
            </div>
          </div>
          <div class="flex items-center justify-between py-10 md:py-15 border-t border-forest">
            <div class="flex items-center gap-10">
              <x-icons.cart class="w-24 h-auto" />
              <span>Ikea Dietlikon</span>
            </div>
            <div class="flex items-center gap-10">
              <x-icons.car class="w-24 h-auto" />
              <span class="font-bold w-70 md:w-80 text-right">2 Min.</span>
            </div>
          </div>
          <div class="flex items-center justify-between py-10 md:py-15 border-t border-forest">
            <div class="flex items-center gap-10">
              <x-icons.railway class="w-24 h-auto" />
              <span>Bahnhof Dietlikon</span>
            </div>
            <div class="flex items-center gap-10">
              <x-icons.walk class="w-24 h-auto" />
              <span class="font-bold w-70 md:w-80 text-right">4 Min.</span>
            </div>
          </div>
          <div class="flex items-center justify-between py-10 md:py-15 border-y border-forest">
            <div class="flex items-center gap-10">
              <x-icons.school class="w-24 h-auto" />
              <span>Schule Hüenerweid</span>
            </div>
            <div class="flex items-center gap-10">
              <x-icons.walk class="w-24 h-auto" />
              <span class="font-bold w-70 md:w-80 text-right">10 Min.</span>
            </div>
          </div>
        </div>
        <div class="mt-[44px] md:mt-[56px]" data-reveal>
          <div class="flex items-center justify-between py-10 md:py-15 border-t border-forest">
            <div class="flex items-center gap-10">
              <x-icons.train class="w-24 h-auto" />
              <span>Zürich HB</span>
            </div>
            <div class="flex items-center gap-10">
              <x-icons.train class="w-24 h-auto" />
              <span class="font-bold w-70 md:w-80 text-right">17 Min.</span>
            </div>
          </div>
          <div class="flex items-center justify-between py-10 md:py-15 border-y border-forest">
            <div class="flex items-center gap-10">
              <x-icons.train class="w-24 h-auto" />
              <span>Winterthur</span>
            </div>
            <div class="flex items-center gap-10">
              <x-icons.train class="w-24 h-auto" />
              <span class="font-bold w-70 md:w-80 text-right">19 Min.</span>
            </div>
          </div>
        </div>
      </div>
    </x-layout.inner>
  </section>

@endsection
