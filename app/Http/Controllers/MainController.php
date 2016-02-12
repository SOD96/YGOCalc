<?php namespace App\Http\Controllers;

use App\Game,
    App\Players,
    App\User;

use View;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Redirect;


class MainController extends Controller
{

// ===========================================
// :public
// ===========================================

    /**
     * Displays the main index page.
     *
     * @return view
     */
    public function showIndex()
    {
        $game = Game::all();
        return view('index', [
            'game'      => $game,
        ]);
    }


    public function showCreation()
    {
        return view('create');
    }

    public function showAbout()
    {
        return view('about');
    }

    public function showGame($id,Request $r)
    {
        //Gets the game
        $game = Game::where('id', '=', $id)->firstOrFail();
        if ($r->has('password')){
            if($r->input('password') !== $game->password){
                return 404;
            }
        }
        //Gets the players
        $players = Players::where('duel_id', '=', $game->id)->get();
        return view('game', [
            'game'      => $game,
            'players'   =>$players,
            'request'   => $r,
        ]);
    }

    public function createDuel(Request $r)
    {
        // sean you know you can make this simpler
        // one call, nice and simple.
        $this->validate($r, [
            'name'          =>  'max:250',
            'password'   =>  'required',
            'players'     =>  'required',
        ]);

        // Gets the name, if it's null it will change it to a random string.
        $name = $r->input('name');
        if ($r->input('name') == null){
            $name = str_random(12);
        }

        // Add our mod to the database!
        $mod = Game::create([
            'name'              => $name,
            'password'          => $r->input('password'),
            'players'           => $r->input('players'),
        ]);


        for($i = 0; $i < $mod->players; ++$i) {
        // Add our mod to the database!
        Players::create([
            'name'              => str_random(12),
            'lifepoints'        => "8000",
            'duel_id'           => $mod->id,
        ]);
        }


        return Redirect('duel' . "/" . $mod->id);
    }



public function modifyPlayer($id,$id2,Request $r)
{

    // get the mod that the user wants.
        $game = Players::where('id', '=', $id2)->first();
        $duel = Game::where('id', '=', $game->duel_id)->first();
        

        // OUR RULES
        $rules = [
            //Add rules here

        ];

        if($r->input(''))

        if ($r->has('name')) $rules['name'] = 'required|max:250';

        if ($r->has('points')) $rules['points'] = 'required';

        if ($r->has('deck')) $rules['deck'] = 'required|max:100';

        if ($r->has('note')) $rules['note'] = 'required';


// END RULES


        $this->validate($r, $rules);

        // we are good lets update get the user and being
        if ($r->has('name')) $game->name = $r->input('name');

        if ($r->has('points')){
            if($r->input('lifeadd') == "add"){
                $game->lifepoints = $game->lifepoints + $r->input('points');
            }
            if($r->input('lifeadd') == "remove"){
                $game->lifepoints = $game->lifepoints - $r->input('points');
            }
            if($r->input('lifeadd') == "set"){
                $game->lifepoints = $r->input('points');
            }
        }

        if ($r->has('deck')) $game->deck = $r->input('deck');      

        if ($r->has('note')) $game->note = $r->input('note');

        if($r->input('lifeadd') == "killplayer"){
            $game->lifepoints = 0;
        }

        $game->save();

        return redirect('duel' . "/" . $game->duel_id . "?&password=" . $duel->password);

    }
// ===========================================
// :ajax
// ===========================================



// ===========================================
// :private
// ===========================================


}
