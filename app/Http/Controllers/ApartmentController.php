<?php
namespace App\Http\Controllers;

use App\Actions\GetData;

class ApartmentController extends Controller
{
  public function index()
  {
    $apartments = (new GetData)->execute();
    $buildings = $apartments->groupBy('ref_house')->sortKeys();

    $floorLabels = [
      0 => 'EG',
      1 => '1. OG',
      2 => '2. OG',
      3 => '3. OG',
      4 => '4. OG',
      5 => '5. OG',
      6 => '6. OG',
      7 => '7. OG',
    ];

    $rooms = $apartments->pluck('number_of_rooms')->filter()->unique()->sort()->values();
    $floors = $apartments->pluck('floor')->filter(fn($f) => $f !== null)->unique()->sort()->values();

    $filterOptions = [
      'availability' => ['NULL' => 'Alle Wohnungen', 'free' => 'Verfügbar', 'reserved' => 'Reserviert', 'rented' => 'Vermietet'],
      'rooms' => collect(['NULL' => 'Alle Zimmer'])->merge($rooms->mapWithKeys(fn($r) => [$r => $r])),
      'floors' => collect(['NULL' => 'Alle Etagen'])->merge($floors->mapWithKeys(fn($f) => [$f => $floorLabels[$f] ?? $f])),
    ];

    return view('pages.offer', [
      'apartments' => $apartments,
      'buildings' => $buildings,
      'filterOptions' => $filterOptions,
    ]);
  }
}
