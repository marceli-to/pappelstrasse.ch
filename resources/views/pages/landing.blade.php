@extends('app')
@section('content')

  <div class="bg-forest text-white">

    <x-layout.inner>

      <div class="max-w-3xl">

        <h1 class="text-dew text-3xl md:text-4xl lg:text-5xl">
          Wohnen in Dietlikon
        </h1>

        <h2 class="text-dew text-xl md:text-2xl lg:text-3xl">
          Erstvermietung
        </h2>

        <p class="text-sm md:text-md lg:text-lg leading-[1.2]">
          An der Pappelstrasse 2/4 in Dietlikon entsteht per Herbst 2026 ein attraktives Neubauprojekt mit modernen 1.5- bis 3.5-Zimmerwohnungen.
        </p>

        <p class="text-sm md:text-md lg:text-lg leading-[1.2]">
          <strong class="text-dew">Interessiert?</strong><br>Gerne senden wir Ihnen weitere Informationen zu, sobald die Vermietung startet. Bitte füllen Sie bei Interesse das Kontaktformular aus.
        </p>

      </div>
    
    </x-layout.inner>

  </div>
  
  <div class="bg-dew">
    <x-layout.inner>
      <div id="contact-form">
        <contact-form></contact-form>
      </div>
    </x-layout.inner>
  </div>
@endsection

