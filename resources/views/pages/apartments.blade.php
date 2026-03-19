@extends('app')
@section('content')

<x-layout.inner>
  <x-objects.filter :apartments="$apartments" />
  <x-objects.objects :buildings="$buildings" />
</x-layout.inner>

@endsection
