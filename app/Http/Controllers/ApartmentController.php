<?php
namespace App\Http\Controllers;

use App\Actions\GetData;

class ApartmentController extends Controller
{
  public function index()
  {
    $apartments = (new GetData)->execute();
    $buildings = $apartments->groupBy('ref_house')->sortKeys();
    return view('pages.offer', [
      'apartments' => $apartments,
      'buildings' => $buildings,
    ]);
  }
}
