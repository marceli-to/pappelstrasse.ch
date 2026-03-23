<footer class="bg-forest text-white pb-30 pt-30 md:pb-40 md:pt-30">

  <x-layout.inner>
     
    <div class="max-w-2xl mb-50">
      <x-headings.h2 class="text-4xl! md:text-7xl! text-pretty text-white! leading-[1.1] mb-10">
        Haben wir Ihr Interesse geweckt?
      </x-headings.h2>
      <p class="text-pretty">Gerne stehen wir für Fragen zur Verfügung und freuen uns auf Ihre Kontaktaufnahme.</p>
    </div>

    <div class="lg:flex lg:justify-between">

      <div class="mb-50 lg:mb-0 lg:self-end">
        <x-headings.h3 class="text-lg mb-10">
          Kontaktperson
        </x-headings.h3>
        <div class="text-xs xl:text-lg leading-[1.5]">
          <strong>Chantal Bieri</strong><br>
          <a 
            href="tel:0448787777" 
            class="text-white hover:text-white/80"
            aria-label="044 878 77 77">
            044 878 77 77
          </a><br>
          <a 
            href="mailto:mieten@apleona.com" 
            class="text-white hover:text-white/80"
            aria-label="mieten@apleona.com">
            mieten@apleona.com
          </a>
        </div>
      </div>

      <div class="md:flex md:gap-x-100">

        <div class="flex w-full _justify-between items-end justify-start gap-x-20 mb-50 lg:mb-0">
          <div class="min-w-160 md:min-w-auto">
            <x-headings.h3 class="text-lg mb-10">
              Vermarktung
            </x-headings.h3>
            <div class="text-xs xl:text-lg leading-[1.5]">
              <strong>Apleona Schweiz AG</strong><br>
              Industriestrasse 21<br>
              8304 Wallisellen
            </div>
          </div>
          <x-icons.logo-apleona class="w-150 h-auto mb-2" />
        </div>

        <div class="flex w-full _justify-between items-end justify-start gap-x-20 mb-50 lg:mb-0">
          <div class="min-w-160 md:min-w-auto">
            <x-headings.h3 class="text-lg mb-10">
              Im Auftrag von
            </x-headings.h3>
            <div class="text-xs xl:text-lg leading-[1.5]">
              <strong>Migros&nbsp;Pensionskasse</strong><br>
              Wiesenstrasse 15<br>
              8952 Schlieren
            </div>
          </div>
          <x-icons.logo-mpk class="w-150 h-auto mb-2 xl:mb-5" />
        </div>
      </div>

      <nav class="lg:self-end">
        <ul class="flex flex-col gap-y-4 text-xs xl:text-lg">
          <li>
            <a 
              href="{{ route('page.imprint') }}"
              aria-label="Impressum"
              class="text-white hover:text-white/80">
              Impressum
            </a>
          </li>
          <li>
            <a
              href="{{ route('page.privacy') }}"
              aria-label="Datenschutz"
              class="text-white hover:text-white/80">
              Datenschutz
            </a>
          </li>
          <li>
            <a
              href="https://stoz.ch"
              target="_blank"
              rel="noopener noreferrer"
              aria-label="design by stoz"
              class="text-white hover:text-white/80">
              design by stoz
            </a>
          </li>
        </ul>
      </nav>

    </div>

  </x-layout.inner>

</footer>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-3BMHNXQQCY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-3BMHNXQQCY');
</script>