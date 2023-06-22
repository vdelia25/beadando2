<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\horses;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Closure;

class HorsesController extends Controller
{
    public function admin() {
		if (Auth::guest()){
            return redirect('/home')->with('status','Access denied, please sign in');
     } 
    else{
            if (Auth::user()->role == '1') {
            return view('admin');
            }
             else{
            return redirect('/home')->with('status','Access denied');
        }}
       
       
    }
    public function index(){
     if (Auth::guest()){
            return redirect('/home')->with('status','Access denied, please sign in');
     } 
    else{
        if (Auth::user()->role == '1') {
            $horse=Horses::all();
            return view('horses.index')->with('horses', $horse);
        }
        else{
         return redirect('/home')->with('status','Access denied');
        
    }  
    }
}
    public function add(){
        if (Auth::guest()){
            return redirect('/home')->with('status','Access denied, please sign in');
     } 
    else{
        if (Auth::user()->role == '1') {
            return view('horses.add');
        }
        else{
         return redirect('/home')->with('status','Access denied');
     }  }
     
    }
    public function save(Request $request){
        if (Auth::guest()){
            return redirect('/home')->with('status','Access denied, please sign in');
     } 
    else{
        if (Auth::user()->role == '1') {
            Horses::create([
                'stable_id'=>$request->input('stable_id'),
                'name'=>$request->input('name'),
                'age'=>$request->input('age'),
                'gender'=>$request->input('gender'),
                'coat'=>$request->input('coat'),
                'breed'=>$request->input('breed'),
                
            ]);
            $horse=Horses::all();
            return view('horses.index')->with('horses', $horse);
        }
        else{
         return redirect('/home')->with('status','Access denied');
     } }
      
     
    }
    public function delete($id){
        if (Auth::guest()){
            return redirect('/home')->with('status','Access denied, please sign in');
     } 
    else{
        if (Auth::user()->role == '1') {
            DB::delete('DELETE from horses where id=?', [$id]);
            $horse=Horses::all();
            return view('horses.index')->with('horses', $horse);
           }
           else{
            return redirect('/home')->with('status','Access denied');
        } 
    }
    
     
    }
    public function edit($id){
        if (Auth::guest()){
            return redirect('/home')->with('status','Access denied, please sign in');
     } 
    else{
        if (Auth::user()->role == '1') {
            $horse = DB::select('SELECT * from horses where id=?', [$id]);
            return view('horses.edit', ['horses'=>$horse], ['id'=>$id]);
        }
        else{
         return redirect('/home')->with('status','Access denied');
     } 
    }
    
       
    }
    public function update(Request $request, $id){
        if (Auth::guest()){
            return redirect('/home')->with('status','Access denied, please sign in');
     } 
    else{
        if (Auth::user()->role == '1') {
            $stable_id=$request->get('stable_id');
        $name=$request->get('name');
        $age=$request->get('age');
        $gender=$request->get('gender');
        $coat=$request->get('coat');
        $breed=$request->get('breed');
        DB::update('update horses set stable_id=?, name=?, age=?, gender=?, coat=?, breed=? where id=?', [$stable_id, $name, $age,
        $gender, $coat, $breed, $id]);
        $horse=Horses::all();
        return view('horses.index')->with('horses', $horse);
        }
        else{
         return redirect('/home')->with('status','Access denied');
     } 
    } 
    }
      
}
