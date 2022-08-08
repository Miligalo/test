<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\House;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('main.index');
    }

    public function houses(Request $request)
    {
        $query = House::query();
        $minPrice = 0;
        $maxPrice = PHP_INT_MAX;
        if($search = $request->input('name')){
            $query->where('name', 'LIKE', "%{$search}%");
        }
        if($bedroomFilter = $request->input('bedrooms')){
            $query->where('bedrooms', '=', $bedroomFilter);
        }
        if($bathroomsFilter = $request->input('bathrooms')){
            $query->where('bathrooms', '=', $bathroomsFilter);
        }
        if($garagesFilter = $request->input('garages')){
            $query->where('garages', '=', $garagesFilter);
        }
        if($storeysFilter = $request->input('storeys')){
            $query->where('storeys', '=', $storeysFilter);
        }
        if($request->input('price_min')){
            $minPrice = $request->input('price_min');
        }
        if($request->input('price_max')){
            $maxPrice = $request->input('price_max');
        }
        $query->where('price', '>=', (int)$minPrice)->where('price', '<=', (int)$maxPrice);
        return json_encode($query->get());
    }

}
