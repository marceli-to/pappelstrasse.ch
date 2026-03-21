@extends('app')
@section('meta_title', 'Impressum')

@section('content')

<x-sections.legal title="Impressum">
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
      <x-links.styled href="mailto:hello@stoz.ch">
        hello@stoz.ch
      </x-links.styled><br>
      <x-links.styled href="https://www.stoz.ch" target="_blank">
        www.stoz.ch
      </x-links.styled><br>
    </p>
  </div>
  <div>
    <h2>
      Programmierung
    </h2>
    <p>
      Marcel Stadelmann, Zürich<br>
      <x-links.styled href="https://marceli.to" target="_blank">
        marceli.to
      </x-links.styled>
    </p>
  </div>
</x-sections.legal>

@endsection
