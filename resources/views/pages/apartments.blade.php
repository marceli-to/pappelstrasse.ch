@extends('app')
@section('content')

<x-layout.inner>
  @include('components.objects.filter', ['apartments' => $apartments])
  @include('components.objects.objects', ['apartments' => $apartments])
</x-layout.inner>

@endsection
