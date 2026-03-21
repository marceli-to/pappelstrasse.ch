@extends('app')
@section('meta_title', 'Wohnungen')
@section('meta_description', 'Verfügbare 1.5- bis 3.5-Zimmerwohnungen an der Pappelstrasse in Dietlikon.')

@section('content')

<x-layout.inner>
  <x-objects.filter :apartments="$apartments" />
  <x-objects.objects :buildings="$buildings" />
</x-layout.inner>

@endsection
