@extends('app')
@section('meta_title', 'Angebot')
@section('meta_description', 'Verfügbare 1.5- bis 3.5-Zimmerwohnungen an der Pappelstrasse in Dietlikon.')
@section('content')

<section class="bg-sand pb-40 pt-30 md:pb-60 md:pt-40">
  <x-layout.inner>
    <div class="max-w-2xl">

      <div data-reveal>
        <x-headings.h1>
          Finden Sie Ihre<br>Traumwohnung
        </x-headings.h1>

        <p>Die 1.5- bis 3.5-Zimmerwohnungen erstrecken sich vom ersten bis zum siebten Obergeschoss und verfügen jeweils über einen einladenden Aussenbereich, der den Wohnkomfort zusätzlich erhöht. Ein gemeinschaftlich nutzbarer Dachgarten bietet zudem einen attraktiven Rückzugsort – ideal, um Sonne und frische Luft zu tanken.</p>
      </div>

    </div>
  </x-layout.inner>
</section>

{{-- <x-objects.filter :apartments="$apartments" />
<x-objects.objects :buildings="$buildings" /> --}}
@endsection
