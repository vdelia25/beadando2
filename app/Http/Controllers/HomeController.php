<?php

namespace App\Http\Controllers;

use App\Models\Horses;
use App\Models\Riders;
use App\Models\Stables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function dashboard(){
        if(Auth::user()->role=='1'){
            return view('dashboard');
        }
        else return view('home');
    }
    public function stable(Request $request){
        $id = $request->input('id');
        return view('stable', compact('id'));
    }
    public function horse(Request $request){
        $id = $request->input('horse_id');
        $horses = DB::select('SELECT * FROM horses WHERE id=?', [$id]);
        return view('horse')->with('horses', $horses);
    }
    public function rider(Request $request){
        $id = $request->input('rider_id');
        $riders = DB::select('SELECT * FROM riders WHERE id=?', [$id]);
        return view('rider')->with('riders', $riders);
    }
    public function search(Request $request){
        $search = $request->input('search');
        $stables = Stables::where('name', 'LIKE', '%'.$search.'%')->get();
        $riders = Riders::where('name', 'LIKE', '%'.$search.'%')->get();
        $horses = Horses::where('name', 'LIKE', '%'.$search.'%')->get();
        return view('search',  ['stables'=>$stables, 'riders'=>$riders, 'horses'=>$horses]);
    }
    public function stablelist(){
        $stables = Stables::all();
        return view('stablelist')->with('stables', $stables);
    }
    public function horselist(){
        $horses = Horses::all();
        return view('horselist')->with('horses', $horses);
    }
    public function riderlist(){
        $riders = Riders::all();
        return view('riderlist')->with('riders', $riders);
    }
}
