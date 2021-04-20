<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use App\Models\Countries;

class CountriesController extends Controller
{
    public function index($lang){
        App::setlocale($lang);
        $countries = Countries::all();
        return view('countries.countries_table')->with(['countries' => $countries]);
    }

    public function store(Request $request){
        if ($request->hasFile('photo')) {
            if ($request->file('photo')->isValid()) {
                $validated = $request->validate([
                    'photo' => 'mimes:jpeg,png,jpg',
                ]);
                $file = $request->file('photo');
                $path = 'images';
                $file->move($path, $file->getClientOriginalName());
                $path = '/images/'.$file->getClientOriginalName();
                $countries = Countries::create([
                    'photo' => $path,
                    'name' => $request->name,
                    'population' => $request->population,
                    'area' => $request->area
                ]);
                return back();
            }
        }
        else {
            abort(501, 'Could not upload image :(');
        }
    }
}
