@extends('app')
@section('content')

  <x-media.visual image="pappelstrasse-visual-landing" alt="" />

  <section class="bg-forest text-dew text-[13px] md:text-[20px] w-full py-40">

    <x-layout.inner>

      <div class="grid grid-cols-2 gap-30 md:flex md:flex-row md:gap-60 lg:gap-80 md:justify-center md:items-start">
        <div class="flex flex-col justify-center items-center text-center">
          <div class="w-48 h-48 md:w-56 md:h-56 flex items-center justify-center">
            <x-icons.location class="w-40 h-auto" />
          </div>
          <strong>Zentrale Lage</strong>
        </div>
        <div class="flex flex-col justify-center items-center text-center">
          <div class="w-48 h-48 md:w-56 md:h-56 flex items-center justify-center">
            <x-icons.nature class="w-40 h-auto" />
          </div>
          <strong>Naturnahe Umgebung</strong>
        </div>
        <div class="col-span-full flex flex-col justify-center items-center text-center">
          <div class="w-48 h-48 md:w-56 md:h-56 flex items-center justify-center">
            <x-icons.sparkle class="w-44 h-auto" />
          </div>
          <strong>Hochwertiger<br>Ausbaustandard</strong>
        </div>
      </div>

    </x-layout.inner>

  </section>

  <section class="bg-cream">

    <x-layout.inner class="!px-0 !max-w-none">

      <div class="lg:grid lg:grid-cols-2">

        <div class="py-40 pl-24 pr-48 xl:pr-64 self-center xl:ml-[calc((100vw_-_80rem)_/_2_+_24px)] xl:pl-0">

          <x-headings.h1 class="text-[40px] md:text-[60px] text-pretty leading-[1.1] mb-15">
            Wohnen und Leben<br>in Dietlikon
          </x-headings.h1>
          
          <p>Mit dem Neubauprojekt an der Pappelstrasse 2/4 entstehen nahe des Bahnhof Dietlikon 48 moderne 1.5- bis 3.5-Zimmerwohnungen, die ab 1. November 2026 bezugsbereit sind. Zwei elegant gestaltete, klar gegliederte Gebäude prägen das neue Ensemble und verleihen ihm mit ihren vertikalen Fassadenelementen und grosszügigen Fensterfronten eine zeitgemässe, urbane Ausstrahlung.</p>
          
          <div class="mt-30 flex justify-end">
            <x-buttons.primary href="#contact" class="text-[15px] md:text-[18px] uppercase inline-flex items-center gap-10 py-12 pl-18 pr-12 group">
              Zu den Angeboten
              <x-icons.arrow-right class="w-16 h-auto shrink-0 group-hover:translate-x-3 transition-transform" />
            </x-buttons.primary>
          </div>

        </div>

        <div class="relative">
          <x-swiper.wrapper class="gallery-swiper">
            <x-swiper.slide>
              <img src="/img/pappelstrasse-galerie-1.jpg" alt="" class="w-full h-full lg:aspect-square 2xl:aspect-auto object-cover" />
            </x-swiper.slide>
            <x-swiper.slide>
              <img src="/img/pappelstrasse-galerie-2.jpg" alt="" class="w-full h-full lg:aspect-square 2xl:aspect-auto object-cover" />
            </x-swiper.slide>
            <x-swiper.slide>
              <img src="/img/pappelstrasse-galerie-3.jpg" alt="" class="w-full h-full lg:aspect-square 2xl:aspect-auto object-cover" />
            </x-swiper.slide>
          </x-swiper.wrapper>
          <x-swiper.buttons.prev class="gallery-swiper-prev absolute top-1/2 left-30 -translate-y-1/2 z-10 cursor-pointer w-36 h-36 flex items-center justify-center border border-forest rounded-full bg-dew/20 transition-colors">
            <x-icons.arrow-right class="w-14 h-auto rotate-180" />
          </x-swiper.buttons.prev>
          <x-swiper.buttons.next class="gallery-swiper-next absolute top-1/2 right-30 -translate-y-1/2 z-10 cursor-pointer w-36 h-36 flex items-center justify-center border border-forest rounded-full bg-dew/20 transition-colors">
            <x-icons.arrow-right class="w-14 h-auto" />
          </x-swiper.buttons.next>
        </div>

      </div>

    </x-layout.inner>

  </section>

  <section class="bg-sand">
    <x-layout.inner>
      <div class="py-80 max-w-4xl mx-auto">
        <x-headings.h2 class="text-[40px] md:text-[60px] text-pretty leading-[1.1] mb-15">
          Highlights
        </x-headings.h2>
        <div class="border-y border-forest divide-y divide-forest text-[20px] md:text-[24px] uppercase [&>div]:py-10 [&>div]:md:py-15">
          <div>
            Moderne Wohnungen
          </div>
          <div>
            Badezimmer mit Dusche oder Badewanne
          </div>
          <div>
            Eigener Waschturm
          </div>
          <div>
            Grosszügige Aussenbereiche
          </div>
          <div>
            Dachgarten
          </div>
        </div>
      </div>
    </x-layout.inner>
  </section>

@endsection



