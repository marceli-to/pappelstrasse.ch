@extends('app')
@section('content')
<div class="bg-dew">

  <x-layout.inner>

    <h1 class="text-forest text-2xl md:text-3xl lg:text-4xl !mb-15 lg:!mb-30">
      Impressum
    </h1>

    <div class="leading-[1.2] text-sm md:text-md lg:text-lg flex flex-col gap-y-25 lg:gap-y-45">
      <div>
        <h2 class="!mb-0">
          Apleona Schweiz AG
        </h2>
        <p>
          Industriestrasse 21<br>
          8304 Wallisellen
        </p>
      </div>
      <div>
        <h2>
          Design und Entwicklung
        </h2>
        <p>
          Stoz Werbeagentur AG<br>
          Barzloostrasse 2<br>
          8330 Pfäffikon ZH<br>
          <a 
            href="mailto:hello@stoz.ch" 
            class="underline underline-offset-4 decoration-1 hover:no-underline">
            hello@stoz.ch
          </a><br>
          <a 
            href="https://www.stoz.ch" 
            target="_blank" 
            class="underline underline-offset-4 decoration-1 hover:no-underline">
            www.stoz.ch
          </a><br>
        </p>
      </div>
      <div>
        <h2>
          Programmierung
        </h2>
        <p>
          Marcel Stadelmann, Zürich<br>
          <a 
            href="https://marceli.to" 
            target="_blank" 
            class="underline underline-offset-4 decoration-1 hover:no-underline">
            marceli.to
          </a>
        </p>
      </div>
    </div>

  </x-layout.inner>

</div>
@endsection