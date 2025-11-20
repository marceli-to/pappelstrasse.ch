@extends('app')
@section('content')

  <div class="bg-forest text-white">

    <x-layout.inner>

      <h1 class="text-3xl">
        Wohnen in Dietlikon
      </h1>

      <h2>
        Erstvermietung
      </h2>

      <p>
        An der Pappelstrasse 2/4 in Dietlikon entsteht per Herbst 2026 ein attraktives Neubauprojekt mit modernen 1.5- bis 3.5-Zimmerwohnungen.
      </p>

      <p>
        <strong class="text-dew">Interessiert?</strong><br>Gerne senden wir Ihnen weitere Informationen zu, sobald die Vermietung startet. Bitte füllen Sie bei Interesse das Kontaktformular aus.
      </p>
    
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

