@if (request()->routeIs('page.landing'))
  <x-map />
@endif
<footer class="w-full text-xs lg:text-sm leading-[1.2] text-black">

  <x-layout.inner class="!py-15 md:!py-25 lg:!py-35">
  
    <div class="flex flex-col gap-y-25 md:flex-row md:justify-between w-full">

      <div>
        <h3 class="mb-5 lg:mb-10">
          Vermarktung
        </h3>
        <div class="flex items-start gap-x-30 lg:gap-x-40">
          <x-icons.logo-apleona class="w-120 md:w-140 lg:w-160 h-auto mt-5" />
          <p>
            <strong>Apleona Schweiz AG</strong><br>
            Industriestrasse 21<br>
            8304 Wallisellen
          </p>
        </div>

      </div>

      <div>
        <h3 class="mb-5 lg:mb-10">
          Im Auftrag von
        </h3>
        <a 
          href="https://www.mpk.ch/immobilien/erstvermietung"
          target="_blank"
          rel="noopener noreferrer"
          aria-label="Migros Pensionskasse"
          class="block w-140 md:w-160 lg:w-180 mt-5">
          <img src="/img/logo-mpk.jpg" width="300" height="123" alt="Logo Migros Pensionskasse" class="w-full h-auto">
        </a>
      </div>

      <div>
        <nav class="md:mt-30 lg:mt-38">
          <ul class="flex flex-col gap-y-2 md:items-end">
            <li>
              <a 
                href="{{ route('page.imprint') }}"
                aria-label="Impressum"
                class="no-underline underline-offset-4 decoration-1 hover:underline">
                Impressum
              </a>
            </li>
            <li>
              <a
                href="{{ route('page.privacy') }}"
                aria-label="Datenschutz"
                class="no-underline underline-offset-4 decoration-1 hover:underline">
                Datenschutz
              </a>
            </li>
            <li>
              <a 
                href="https://stoz.ch"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="design by stoz"
                class="no-underline underline-offset-4 decoration-1 hover:underline">
                design by stoz
              </a>
            </li>
          </ul>
        </nav>
      </div>

    </div>

  </x-layout.inner>

</footer>

@vite('resources/js/forms/contact/app.js')
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3BMHNXQQCY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-3BMHNXQQCY');
</script>