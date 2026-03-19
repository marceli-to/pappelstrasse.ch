<x-mail::message>
  <div class="text-base">
    Anfrage Kontaktformular
  </div>
  <br>
  @if (!empty($data['apartments']))
    <div class="text-base">
      <strong>Wohnungstyp</strong><br>
      {{ $data['apartments_string'] }}
    </div>
    <br>
  @endif
  @if ($data['firstname'])
    <div class="text-base">
      <strong>Vorname</strong><br>
      {{ $data['firstname'] }}
    </div>
    <br>
  @endif
  @if ($data['name'])
    <div class="text-base">
      <strong>Name</strong><br>
      {{ $data['name'] }}
    </div>
    <br>
  @endif
  @if ($data['street'])
    <div class="text-base">
      <strong>Strasse/Nr.</strong><br>
      {{ $data['street'] }}
    </div>
    <br>
  @endif
  @if ($data['location'])
    <div class="text-base">
      <strong>PLZ/Ort</strong><br>
      {{ $data['location'] }}
    </div>
    <br>
  @endif
  @if ($data['email'])
    <div class="text-base">
      <strong>E-Mail</strong><br>
      {{ $data['email'] }}
    </div>
    <br>
  @endif
  @if ($data['phone'])
    <div class="text-base">
      <strong>Telefon</strong><br>
      {{ $data['phone'] }}
    </div>
    <br>
  @endif
</x-mail::message>
