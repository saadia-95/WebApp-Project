<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Song;

class AdminController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (\Auth::check()) {
            $data['data'] = \Auth::user();
            $d['d'] = Song::all();
            if ($data['data']->roletype == 0) {
                $users = \DB::table('users')->get();
                $songs = \DB::table('songs')->get();
                return view('admin')->with('users', $users)->with('songs', $songs);
            }
        }

        abort(404);
    }
    public function saveRoleType(Request $req)
    {
        $user = User::find($req->id);
        $user->roletype = $req->roletype;

        $user->save();

        return redirect('admin');
    }

    public function uploadSong(Request $req){
        $song = new Song;
        $song->name = $req->name;
        $song->artist = $req->artist;
        $song->genre = $req->genre;
        $song->filepath = $req->filepath;

        $song->save();

        return redirect('admin')->with('message', 'Song uploaded');
    }

    public function deleteSong(Request $req)
    {
        $song = Song::find($req->name);

        \Song::where($req->name, $song->name)->delete();

        return redirect('admin')->with('message', 'Song deleted');
    }
}
