@extends('app')
@section('meta_title', 'Wohnen')
@section('meta_description', 'Wohnen an der Pappelstrasse in Dietlikon – moderne Architektur, hochwertige Materialien und grosszügige Grundrisse.')
@section('content')

<x-sections.hero-split>

  <x-headings.h1>
    Details zum Wohnen
  </x-headings.h1>

  <p>Die Wohnungen überzeugen durch grosszügige, gut möblierbare Grundrisse und einen modernen, hochwertigen Ausbaustandard. Durch die gewählten Farben und Materialien entsteht ein einheitliches Zusammenspiel zwischen Innen- und Aussenwirkung.</p>

  <div class="mt-30 flex justify-end">
    <div class="inline-flex flex-col gap-y-10 items-stretch">
      <x-buttons.primary href="/downloads/pappelstrasse-kurzbaubeschrieb.pdf" target="_blank" iconPosition="before" class="justify-center">
        <x-icons.file class="w-20 h-auto shrink-0" />
        Kurzbaubeschrieb
      </x-buttons.primary>
      <x-buttons.primary href="/downloads/pappelstrasse-facts-and-figures.pdf" target="_blank" iconPosition="before" class="justify-center">
        <x-icons.file class="w-20 h-auto shrink-0" />
        Facts and Figures
      </x-buttons.primary>
    </div>
  </div>

  <x-slot:aside>
    <x-gallery.carousel name="gallery" :images="[
      '/img/pappelstrasse-visualisierung-wohnung-04',
      '/img/pappelstrasse-visualisierung-wohnung-01',
      '/img/pappelstrasse-visualisierung-wohnung-03',
      '/img/pappelstrasse-visualisierung-wohnung-05',
      '/img/pappelstrasse-visualisierung-wohnung-02',
    ]" />
  </x-slot:aside>

</x-sections.hero-split>

<section class="bg-sand pb-40 pt-30 md:pb-60 md:pt-40 lg:pb-80 lg:pt-60">
  <x-layout.inner>
    <div class="flex flex-col gap-y-40 max-w-5xl">

      <div data-reveal>
        <x-headings.h2>
          Kurzbaubeschrieb
        </x-headings.h2>
        <x-accordion.wrapper>
          <x-accordion.item id="k1">
            <x-accordion.button title="Grundausbau" />
            <x-accordion.content>
              <ul>
                <li>Bodenbelag: Parkett Eiche, Riemenfertigparkett, mattversiegelt</li>
                <li>Sockelleiste: in Holz, Farbe Eiche</li>
                <li>Wandbelag: Abrieb, weiss</li>
                <li>Decke: Weissputz, weiss gestrichen</li>
                <li>Garderobe: Weissgrau</li>
                <li>Wohnungs- und Zimmertüren: braungrau</li>
              </ul>
            </x-accordion.content>
          </x-accordion.item>
          <x-accordion.item id="k2">
            <x-accordion.button title="Küche" />
            <x-accordion.content>
              <ul>
                <li>Küchenfronten: Kunstharzbelegte Spanplatte, Hoch und Unterschränke Salbei, Oberschränke Weissgrau mit Beleuchtung</li>
                <li>Arbeitsplatte: Quarzstein, Miami White</li>
                <li>Spülbecken: Edelstahl matt</li>
                <li>Küchenrückwand: Quarzstein, Miami White</li>
                <li>Geräte: Induktionskochfeld, Dunstabzug, Kombigerät Backofen / Steamer, Geschirrspüler und Kühl-/ Gefriergerät, alle Geräte Marke Electrolux</li>
              </ul>
            </x-accordion.content>
          </x-accordion.item>
          <x-accordion.item id="k3">
            <x-accordion.button title="Badezimmer" />
            <x-accordion.content>
              <ul>
                <li>Bodenbelag: Feinsteinzeugplatten, braun, matt</li>
                <li>Wandbelag: Steingutplatten crèmeweiss, matt sowie Abrieb, weiss</li>
                <li>Sanitärapparate: Keramik weiss</li>
                <li>Spiegelschrank: weiss mit LED-Beleuchtung und Steckdose</li>
                <li>Badewanne mit Duschvorhangstange (2./4./6. OG) oder Dusche mit Glastrennwand (1./3./5./7. OG)</li>
              </ul>
            </x-accordion.content>
          </x-accordion.item>
          <x-accordion.item id="k4">
            <x-accordion.button title="Reduit" />
            <x-accordion.content>
              <ul>
                <li>Bodenbeläge: Feinsteinzeugplatten, braun, matt</li>
                <li>Wandbelag: Abrieb, weiss</li>
              </ul>
            </x-accordion.content>
          </x-accordion.item>
          <x-accordion.item id="k5">
            <x-accordion.button title="Aussenfläche" />
            <x-accordion.content>
              <ul>
                <li>Boden Balkon: Feinsteinzeugplatten, grau</li>
                <li>Steckdose und Deckenleuchte</li>
                <li>Teilweise Aussenschränke, braungrau</li>
              </ul>
            </x-accordion.content>
          </x-accordion.item>
          <x-accordion.item id="k6">
            <x-accordion.button title="Fenster" />
            <x-accordion.content>
              <ul>
                <li>Holz/Metall-Fenster, 3-fach verglast, innen weiss, aussen braungrau</li>
              </ul>
            </x-accordion.content>
          </x-accordion.item>
          <x-accordion.item id="k7">
            <x-accordion.button title="Verdunkelung" />
            <x-accordion.content>
              <ul>
                <li>Alu-Rafflamellenstoren, braungrau, elektrisch betrieben</li>
                <li>1 Vorhangschiene</li>
              </ul>
            </x-accordion.content>
          </x-accordion.item>
          <x-accordion.item id="k8">
            <x-accordion.button title="Sonnenschutz" />
            <x-accordion.content>
              <ul>
                <li>Senkrechtmarkisen, Stoff, braungrau</li>
              </ul>
            </x-accordion.content>
          </x-accordion.item>
          <x-accordion.item id="k9">
            <x-accordion.button title="Elektroanlagen" />
            <x-accordion.content>
              <ul>
                <li>Gegensprechanlage und elektrische Türöffnung</li>
                <li>Entrée, Reduit (falls vorhanden) und Badezimmer: Einbauleuchten</li>
                <li>Wohnzimmer: ausgebaute Multimedia-Dose inkl. Glasfaseranschluss</li>
                <li>Grosses Schlafzimmer: ausgebaute Multimedia-Dose</li>
                <li>PV-Anlage mit ZEV (Zusammenschluss für Eigenverbrauch)</li>
              </ul>
            </x-accordion.content>
          </x-accordion.item>
          <x-accordion.item id="k10">
            <x-accordion.button title="Heizungsanlagen" />
            <x-accordion.content>
              <ul>
                <li>Pelletheizung, Wärmeabgabe mittels Bodenheizung</li>
              </ul>
            </x-accordion.content>
          </x-accordion.item>
          <x-accordion.item id="k11">
            <x-accordion.button title="Lüftungsanlagen" />
            <x-accordion.content>
              <ul>
                <li>Zentrale Wohnungslüftung mit Frischluftversorgung von Wohn- und Schlafzimmern, Umluft in Küche, Abluft im Bad</li>
              </ul>
            </x-accordion.content>
          </x-accordion.item>
          <x-accordion.item id="k12">
            <x-accordion.button title="Liftanlagen" />
            <x-accordion.content>
              <ul>
                <li>Pro Haus, max. 8 Personen. Nutzlast 630 kg, rollstuhlgängig</li>
              </ul>
            </x-accordion.content>
          </x-accordion.item>
          <x-accordion.item id="k13">
            <x-accordion.button title="Keller" />
            <x-accordion.content>
              <ul>
                <li>Pro Wohnung ein Kellerabteil, beleuchtet und mit Steckdose auf Wohnungszähler</li>
              </ul>
            </x-accordion.content>
          </x-accordion.item>
          <x-accordion.item id="k14">
            <x-accordion.button title="Waschküche / Trocknungsraum" />
            <x-accordion.content>
              <ul>
                <li>Jede Wohnung verfügt über eine Waschmaschine und einen Trockner, Marke Electrolux</li>
                <li>Trocknungsraum pro Haus im UG</li>
              </ul>
            </x-accordion.content>
          </x-accordion.item>
          <x-accordion.item id="k15">
            <x-accordion.button title="Umgebung" />
            <x-accordion.content>
              <ul>
                <li>Begrünter Dachgarten</li>
              </ul>
            </x-accordion.content>
          </x-accordion.item>
        </x-accordion.wrapper>
      </div>

      <div data-reveal>
        <x-headings.h2>
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
              <p>Die Anmeldung erfolgt mittels Anmeldungsprozess auf der Projektwebsite / Flatfox</p>
            </x-accordion.content>
          </x-accordion.item>
          <x-accordion.item id="f3">
            <x-accordion.button title="Sicherheitsleistung" />
            <x-accordion.content>
              <p>Max. 3 Bruttomonatsmieten</p>
            </x-accordion.content>
          </x-accordion.item>
          <x-accordion.item id="f4">
            <x-accordion.button title="Kündigungsfrist" />
            <x-accordion.content>
              <p>Mindestmietdauer 1 Jahr, anschliessend 3 Monate Kündigungsfrist auf jedes Monatsende ausser Ende Dezember</p>
            </x-accordion.content>
          </x-accordion.item>
          <x-accordion.item id="f5">
            <x-accordion.button title="Besichtigung" />
            <x-accordion.content>
              <p>Aufgrund der laufenden Bauarbeiten werden die Wohnungen ab Plan vermietet</p>
            </x-accordion.content>
          </x-accordion.item>
          <x-accordion.item id="f6">
            <x-accordion.button title="Abstellräume" />
            <x-accordion.content>
              <p>Es können zwei Abstellräume dazu gemietet werden:</p>
              <ul>
                <li>Nr. 22.9101, 1 UG, ca. 9m², CHF 110.00 inkl. Strompauschale/Monat</li>
                <li>Nr. 22.9102, 1 UG, ca. 23m², CHF 270.00 inkl. Strompauschale/Monat</li>
              </ul>
            </x-accordion.content>
          </x-accordion.item>
          <x-accordion.item id="f7">
            <x-accordion.button title="Parkmöglichkeiten" />
            <x-accordion.content>
              <ul>
                <li>46 Tiefgaragenplätze à CHF 130.00/Monat</li>
                <li>E-Parkplatz: plus CHF 50.00/Monat für die E-Ladestation (zzgl. einmalige Onboarding Pauschale à CHF 69.00 und monatliche Stromkosten)</li>
                <li>7 Motorradabstellplätze à CHF 40.00/Monat</li>
                <li>3 Besucherparkplätze</li>
              </ul>
            </x-accordion.content>
          </x-accordion.item>
          <x-accordion.item id="f8">
            <x-accordion.button title="Fahrräder / Kinderwagen" />
            <x-accordion.content>
              <p>Raum für Velos / Kinderwagen vorhanden</p>
            </x-accordion.content>
          </x-accordion.item>
          <x-accordion.item id="f9">
            <x-accordion.button title="Haustiere" />
            <x-accordion.content>
              <p>Haustiere (Hunde, Katzen, Kleintiere) sind grundsätzlich erlaubt, sie müssen auf dem Anmeldeformular angegeben werden und benötigen eine separate Haustierbewilligung. Bauliche Veränderungen (Katzentreppen, Netze und Schleusen) sind nicht erlaubt.</p>
            </x-accordion.content>
          </x-accordion.item>
          <x-accordion.item id="f10">
            <x-accordion.button title="Internet" />
            <x-accordion.content>
              <p>Glasfaseranschluss vorhanden</p>
            </x-accordion.content>
          </x-accordion.item>
        </x-accordion.wrapper>
      </div>

    </div>
  </x-layout.inner>
</section>

@endsection
