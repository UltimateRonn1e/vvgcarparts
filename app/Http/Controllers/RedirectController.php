<?php

namespace App\Http\Controllers;

use App\Models\Part;
use App\Models\Auto;
use App\Models\Part_photo;
use App\Models\Category;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class RedirectController extends Controller
{
  public function homepage()
  {
    $partamount = Part::count('part_id');
    $miniparts = Part::inRandomOrder()->take(3)->get();
    return view('homepage', compact('partamount', 'miniparts'));
  }

  public function part($partid = null, Request $request)
  {
    $currentPart = Part::with('autos');

    $currentPart->whereHas('autos', function ($query) {
      $query->where('part_id', request()->part_id);
    });

    $currentPart->whereHas('categories', function ($query) {
      $query->where('cat_id', request()->category_id);
    });

    $currentPart = $currentPart->first();

    $miniparts = Part::where('car_id', request()->car_id)->inRandomOrder()->take(3)->get();
    $part_photos = DB::select("select photo_url from part_photos where part_id = " . request()->part_id . "");
    return view('part', compact('partid', 'currentPart', 'part_photos', 'miniparts'));
  }

  public function parts(Request $request)
  {

    $partsAll = Part::with('autos')->orderBy('part_id','DESC');
    $carnames = Auto::groupBy('auto_name')->get();
    $partnames = Part::groupBy('part_name')->get();
    $caryear = Auto::groupBy('auto_year')->get();
    $carfueltype = Auto::groupBy('auto_fueltype')->get();
    $carfuelvolume = Auto::groupBy('auto_fuelvolume')->get();
    $cartransmiss = Auto::groupBy('auto_transmissiotype')->get();
    $categories = Category::groupBy('category_name')->get();
    $miniparts = Part::inRandomOrder()->take(3)->get();

    if (request()->get('search') == "") {

      if ($request->filled('car_mark')) {
        $partsAll->whereHas('autos', function ($query) {
          $query->where('auto_name', request()->car_mark);
        });
      }

      if ($request->filled('car_model')) {
        $partsAll->whereHas('autos', function ($query) {
          $query->where('auto_model', request()->car_model);
        });
      }

      if ($request->filled('car_fuel')) {
        $partsAll->whereHas('autos', function ($query) {
          $query->where('auto_fuelvolume', request()->car_fuel);
        });
      }

      if ($request->filled('category_name')) {

        $partsAll->whereHas('categories', function ($query) {
          $query->where('category_name', request()->category_name);
        });
      }

      if ($request->filled('fuel_type')) {
        $partsAll->whereHas('autos', function ($query) {
          $query->where('auto_fueltype', request()->fuel_type);
        });
      }

      if ($request->filled('part_name')) {
        $partsAll->whereHas('autos', function ($query) {
          $query->where('part_name', request()->part_name);
        });
      }

      if ($request->filled('part_code')) {
        $partsAll->whereHas('autos', function ($query) {
          $query->where('part_code', request()->part_code);
        });
      }

      if ($request->filled('car_transmission')) {
        $partsAll->whereHas('autos', function ($query) {
          $query->where('auto_transmissiotype', request()->car_transmission);
        });
      }

      if ($request->filled('price_low')) {
        $partsAll->whereHas('autos', function ($query) {
          $query->where('part_cost', '>=', request()->price_low);
        });
      }

      if ($request->filled('price_high')) {
        $partsAll->whereHas('autos', function ($query) {
          $query->where('part_cost', '<=', request()->price_high);
        });
      }

      if ($request->filled('car_year')) {
        $partsAll->whereHas('autos', function ($query) {
          $query->where('auto_year', request()->car_year);
        });
      }

      $partsAll = $partsAll->paginate(6)->withPath("?" . $request->getQueryString());
      return view('parts', compact('partsAll', 'miniparts', 'carnames', 'caryear', 'carfueltype', 'carfuelvolume', 'cartransmiss', 'partnames', 'categories'));
    } else {
      $partsAll->whereHas('autos', function ($query) {
        $query->where('auto_name', 'LIKE', "%" . request()->search . "%")
          ->orWhere('part_name', 'LIKE', "%" . request()->search . "%")
          ->orWhere('part_code', 'LIKE', "%" . request()->search . "%");
      });
      $partsAll = $partsAll->paginate(6)->withPath("?" . $request->getQueryString());
      return view('parts', compact('partsAll', 'miniparts', 'carnames', 'caryear', 'carfueltype', 'carfuelvolume', 'cartransmiss', 'partnames', 'categories'));
    }
  }

  public function about()
  {
    $partamount = DB::table('parts')->count('part_id');
    return view('about', compact('partamount'));
  }

  public function reviews(Request $request)
  {
    $reviews = Review::where('mark', 1)->get();
    return view('reviews', compact('reviews'));
  }
}
