<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;
use App\Models\Auto;
use App\Models\Review;
use Carbon\Carbon;
use MetaTag;

class DatabaseController extends Controller
{
    public function getAutoModels()
    {
        $carnames = DB::table("autos")
            ->where("auto_name", $request->car_mark)
            ->pluck("auto_model", "auto_id");
        return response()->json($carnames);
    }

    public function getAutoFuel()
    {
        $carfueltype = DB::table("autos")
            ->where("auto_name", $request->car_mark)
            ->where("auto_model", $request->car_model)
            ->pluck("auto_fueltype", "auto_id");
        return response()->json($carfueltype);
    }

    public function getAutoBody()
    {
        $carbodytype = DB::table("autos")
            ->where("auto_name", $request->car_mark)
            ->where("auto_model", $request->car_model)
            ->where("auto_fueltype", $request->car_fuel)
            ->pluck("auto_bodytype", "auto_id");
        return response()->json($carbodytype);
    }

    public function prodfunc(Request $request)
    {
        $autoname = Auto::groupBy('auto_name')->get();
        return view('dropdown', compact('autoname'));
    }

    public function getCarModels(Request $request)
    {
        $data = Auto::where('auto_name', $request->auto_name)->groupBy('auto_model')->get();
        return response()->json($data);
    }

    public function getCarFuel(Request $request)
    {
        $data = Auto::select('auto_fueltype')->where('auto_model', $request->auto_model)->groupBy('auto_fueltype')->get();
        return response()->json($data);
    }

    public function addReview(Request $request)
    {
        $this->validate($request, [
            'ReviewerName' => 'required',
            'ReviewMessage' => 'required'
        ]);

        $review = new Review;
        $review->reviewer_name = $request->input('ReviewerName');
        $review->reviewer_text = $request->input('ReviewMessage');
        $review->reviewer_date = Carbon::now()->format('Y-m-d');
        $review->mark = 0;
        $review->save();

        return back()->with('success', 'Спасибо за ваш отзыв, он был передан на модерирование.');
    }
}
