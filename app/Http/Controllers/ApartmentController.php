<?php
namespace App\Http\Controllers;

use App\Actions\GetData;

class ApartmentController extends Controller
{
  public function index()
  {
    $apartments = (new GetData)->execute();
    return view('pages.apartments', ['apartments' => $apartments]);
  }
}
