@extends('app')
@section('content')

  <div class="bg-forest">
    <x-layout.inner>
      <h1>Pappelstrasse Dietlikon</h1>
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

