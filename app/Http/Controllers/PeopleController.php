<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use App\Models\People;


class PeopleController extends Controller
{
    //
    public function index($lang){
        App::setlocale($lang);
        $people = People::all();
        return view('people.peoples_table')->with(['people' => $people]);
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
                $peoples = People::create([
                    'photo' => $path,
                    'name' => $request->name,
                    'surname' => $request->surname,
                    'age' => $request->age,
                    'country_id' => $request->country_id
                ]);
                return back();
            }
        }
        else {
            abort(501, 'Could not upload image :(');
        }
    }
}
