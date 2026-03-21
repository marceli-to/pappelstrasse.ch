@extends('app')
@section('meta_title', 'Lage')
@section('meta_description', 'Zentrale Lage nahe Bahnhof Dietlikon – optimale Anbindung und naturnahe Umgebung.')

@section('content')

  <x-sections.hero-split>

    <x-headings.h1 class="text-[40px] md:text-[60px] text-pretty leading-[1.1] mb-15">
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
      <div class="lg:aspect-square 2xl:aspect-auto w-full h-full">
        <x-map class="h-full" />
      </div>
    </x-slot:aside>

  </x-sections.hero-split>

  <section class="bg-sand">
    <x-layout.inner>
      <div class="py-80 max-w-4xl mx-auto">
        <x-headings.h2 class="text-[40px] md:text-[60px] text-pretty leading-[1.1] mb-15">
          Mobilität und Anschlüsse
        </x-headings.h2>
        <div class="border-y border-forest divide-y divide-forest">
          <div class="flex items-center justify-between py-10 md:py-15">
            <div class="flex items-center gap-10">
              <x-icons.cart class="w-24 h-auto" />
              <span>Migros Dietlikon</span>
            </div>
            <div class="flex items-center gap-10">
              <x-icons.walk class="w-20 h-auto" />
              <span class="font-bold">1 Min.</span>
            </div>
          </div>
          <div class="flex items-center justify-between py-10 md:py-15">
            <div class="flex items-center gap-10">
              <x-icons.cart class="w-24 h-auto" />
              <span>Ikea Dietlikon</span>
            </div>
            <div class="flex items-center gap-10">
              <x-icons.car class="w-24 h-auto" />
              <span class="font-bold">2 Min.</span>
            </div>
          </div>
          <div class="flex items-center justify-between py-10 md:py-15">
            <div class="flex items-center gap-10">
              <x-icons.railway class="w-24 h-auto" />
              <span>Bahnhof Dietlikon</span>
            </div>
            <div class="flex items-center gap-10">
              <x-icons.walk class="w-20 h-auto" />
              <span class="font-bold">4 Min.</span>
            </div>
          </div>
          <div class="flex items-center justify-between py-10 md:py-15">
            <div class="flex items-center gap-10">
              <x-icons.school class="w-24 h-auto" />
              <span>Schule Hüenerweid</span>
            </div>
            <div class="flex items-center gap-10">
              <x-icons.walk class="w-20 h-auto" />
              <span class="font-bold">10 Min.</span>
            </div>
          </div>
        </div>
        <div class="border-y border-forest divide-y divide-forest mt-20">
          <div class="flex items-center justify-between py-10 md:py-15">
            <div class="flex items-center gap-10">
              <x-icons.train class="w-24 h-auto" />
              <span>Zürich HB</span>
            </div>
            <div class="flex items-center gap-10">
              <x-icons.train class="w-24 h-auto" />
              <span class="font-bold">17 Min.</span>
            </div>
          </div>
          <div class="flex items-center justify-between py-10 md:py-15">
            <div class="flex items-center gap-10">
              <x-icons.train class="w-24 h-auto" />
              <span>Winterthur</span>
            </div>
            <div class="flex items-center gap-10">
              <x-icons.train class="w-24 h-auto" />
              <span class="font-bold">19 Min.</span>
            </div>
          </div>
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
