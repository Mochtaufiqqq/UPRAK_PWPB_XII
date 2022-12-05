<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function show(){
        $country = Country::all();
        
        return view ('country.show',compact('country'));
    }

    public function add(){
        return view ('country.add');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'photo_country'  => 'required|image',
            'name_country'  => 'required'
        ]);

        $fileName = time().$request->file('photo_country')->getClientOriginalName();
        $path = $request->file('photo_country')->storeAs('country-photos', $fileName. 'public');
        $validatedData['photo_country'] = '/storage/' .$path;

        Country::create($validatedData);
        return redirect ('/countryshow')->with('success','country succesfully added');
    }

    public function edit(Country $country){
        return view('country.edit',compact('country'));
    }

    public function update(Country $country, Request $request){
        $validatedData = $request->validate([
            'photo_country'  => 'required|image',
            'name_country'  => 'required'
        ]);

        if($request->file()) {
            $fileName = time().$request->file('photo_country')->getClientOriginalName();
            $path = $request->file('photo_country')->storeAs('country-photos', $fileName. 'public');
         $validatedData['photo_country'] = '/storage/' .$path;
        }
        Country::where('id',$country->id)->update($validatedData);
        return redirect ('/countryshow')->with('success','Succesfully update');
    }

    public function detail($id){
        $country = Country::where('id', $id)->first();

        // dd($country);
        return view ('country.detail',compact('country'));
    }

    public function delete(Country $country){
        Country::destroy($country->id);

        return redirect ('/countryshow')->with('success','Country succesfullt deleted');
    }
}
