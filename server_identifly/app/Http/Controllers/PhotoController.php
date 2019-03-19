<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoController extends Controller
{

  public function getPhotos(Request $request)
  {
    $photos = Photo::where('sighting_id', $request->sighting_id);
    return $photos;
  }
}
