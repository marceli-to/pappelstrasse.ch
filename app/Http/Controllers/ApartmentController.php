<?php
namespace App\Http\Controllers;

use App\Actions\GetData;

class ApartmentController extends Controller
{
  public function index()
  {
    $apartments = (new GetData)->execute();
    $buildings = $apartments->groupBy('ref_house')->sortKeys();

    $labels = config('estate.labels');
    $filters = config('estate.filters');

    $rooms = $apartments->pluck('number_of_rooms')->filter()->unique()->sort()->values();
    $floors = $apartments->pluck('floor')->filter(fn($f) => $f !== null)->unique()->sort()->values();

    $filterOptions = [
      'availability' => $filters['availability'],
      'rooms' => collect(['NULL' => $filters['rooms']['default']])->merge($rooms->mapWithKeys(fn($r) => [$r => $r])),
      'floors' => collect(['NULL' => $filters['floors']['default']])->merge($floors->mapWithKeys(fn($f) => [$f => $labels['floors'][$f] ?? $f])),
    ];

    return view('pages.offer', [
      'apartments' => $apartments,
      'buildings' => $buildings,
      'filterOptions' => $filterOptions,
      'labels' => $labels,
    ]);
  }
}
