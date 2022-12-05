<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Country;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index(){
        $country = Country::first();

        $players = Player::all();
        return view ('player.index',compact('players','country'));
    }

    public function add(){
        $country = Country::all();
        return view ('player.add',compact('country'));
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'photo' => 'required|image',
            'name'   => 'required',
            'position'  => 'required',
            'age'  => 'required',
            'height'  => 'required',
            'country_id' => 'required'
        ]);

        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('player-photos', $fileName. 'public');
        $validatedData['photo'] = '/storage/' .$path;

        Player::create($validatedData);
        return redirect ('/playershow')->with('success','player succesfully added');

    }

    public function edit(Player $player){
        $country = Country::all();
        
        return view ('player.edit',compact('player','country'));
    }

    public function update(Player $player , Request $request){
        $validatedData = $request->validate([
            'photo' => 'required|image',
            'name'   => 'required',
            'position'  => 'required',
            'age'  => 'required',
            'height'  => 'required',
            'country_id' => 'required'
        ]);

        if($request->file()) {
            $fileName = time().$request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('player-photos', $fileName. 'public');
         $validatedData['photo'] = '/storage/' .$path;
        }

        Player::where('id',$player->id)->update($validatedData);
        return redirect ('/playershow')->with('success','Succesfully update');
    }

    public function delete(Player $player){
        Player::destroy($player->id);

        return redirect ('/playershow')->with('success','Player succesfullt deleted');
    }

    public function detail(Player $player){
        $country = Country::first();
        return view ('player.detail',compact('player','country'));
    }
}
