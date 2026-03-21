@extends('app')
@section('meta_title', 'Wohnen')
@section('meta_description', 'Wohnen an der Pappelstrasse in Dietlikon – moderne Architektur, hochwertige Materialien und grosszügige Grundrisse.')

@section('content')

  <section class="bg-cream">

    <x-layout.inner class="!px-0 !max-w-none">

      <div class="lg:grid lg:grid-cols-2">

        <div class="py-40 pl-24 pr-48 xl:pr-64 self-center xl:ml-[calc((100vw_-_80rem)_/_2_+_24px)] xl:pl-0">

          <x-headings.h1 class="text-[40px] md:text-[60px] text-pretty leading-[1.1] mb-15">
            Details zum Wohnen
          </x-headings.h1>
          
          <p>Die Wohnungen überzeugen durch grosszügige, gut möblierbare Grundrisse und einen modernen, hochwertigen Ausbaustandard. Durch die gewählten Farben und Materialien entsteht ein einheitliches Zusammenspiel zwischen Innen- und Aussenwirkung.</p>
          
          <div class="mt-30 flex flex-col gap-y-10 items-end justify-end">
            <x-buttons.primary href="" class="text-[15px] md:text-[18px] uppercase inline-flex items-center gap-10 py-12 pl-12 pr-18 group">
              <x-icons.file class="w-20 h-auto shrink-0" />
              Kurzbaubeschrieb
            </x-buttons.primary>
            <x-buttons.primary href="" class="text-[15px] md:text-[18px] uppercase inline-flex items-center gap-10 py-12 pl-12 pr-18 group">
              <x-icons.file class="w-20 h-auto shrink-0" />
              Facts and Figures
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
      <div class="py-80 flex flex-col gap-y-40 max-w-5xl">

        <div>
          <x-headings.h2 class="text-[40px] md:text-[60px] text-pretty leading-[1.1] mb-15">
            Kurzbaubeschrieb
          </x-headings.h2>
          <x-accordion.wrapper>
            <x-accordion.item id="k1">
              <x-accordion.button title="Grundausbau" />
              <x-accordion.content>
                <ul class="list-disc pl-20">
                  <li>Bodenbelag: Parkett Eiche, Riemenfertigparkett, mattversiegelt</li>
                  <li>Sockelleiste: in Holz, Farbe Eiche Wandbelag: Abrieb, weiss</li>
                  <li>Decke: Weissputz, weiss gestrichen</li>
                  <li>Garderobe: Weissgrau</li>
                  <li>Wohnungs- und Zimmertüren: braungrau</li>
                </ul>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="k2">
              <x-accordion.button title="Küche" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="k3">
              <x-accordion.button title="Badezimmer" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="k4">
              <x-accordion.button title="Reduit" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="k5">
              <x-accordion.button title="Aussenfläche" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="k6">
              <x-accordion.button title="Fenster" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="k7">
              <x-accordion.button title="Verdunkelung" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="k8">
              <x-accordion.button title="Sonnenschutz" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="k9">
              <x-accordion.button title="Elektroanlagen" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="k10">
              <x-accordion.button title="Heizungsanlagen" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="k11">
              <x-accordion.button title="Lüftungsanlagen" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="k12">
              <x-accordion.button title="Liftanlagen" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="k13">
              <x-accordion.button title="Keller" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="k14">
              <x-accordion.button title="Waschküche / Trocknungsraum" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="k15">
              <x-accordion.button title="Umgebung" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
          </x-accordion.wrapper>
        </div>

        <div>
          <x-headings.h2 class="text-[40px] md:text-[60px] text-pretty leading-[1.1] mb-15">
            Facts and Figures
          </x-headings.h2>
          <x-accordion.wrapper>
            <x-accordion.item id="f1">
              <x-accordion.button title="Mietbeginn" />
              <x-accordion.content>
                <p>Voraussichtlich 1. November 2026</p>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="f2">
              <x-accordion.button title="Bewerbung" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="f3">
              <x-accordion.button title="Sicherheitsleistung" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="f4">
              <x-accordion.button title="Kündigungsfrist" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="f5">
              <x-accordion.button title="Besichtigung" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="f6">
              <x-accordion.button title="Abstellräume" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="f7">
              <x-accordion.button title="Parkmöglichkeiten" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="f8">
              <x-accordion.button title="Fahrräder / Kinderwagen" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="f9">
              <x-accordion.button title="Haustiere" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
            <x-accordion.item id="f10">
              <x-accordion.button title="Internet" />
              <x-accordion.content>
                <p>Content, content</p>
              </x-accordion.content>
            </x-accordion.item>
          </x-accordion.wrapper>
        </div>
        
      </div>
    </x-layout.inner>
  </section>

@endsection
