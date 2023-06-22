<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\stables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Closure;

class StablesController extends Controller
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
            $stable=Stables::all();
            return view('stables.index')->with('stables', $stable);
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
            return view('stables.add');
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
            Stables::create([
                'name'=>$request->input('name'),
                'county'=>$request->input('county'),
                'city'=>$request->input('city'),
                'street'=>$request->input('street'),
                'number'=>$request->input('number'),
                'phone'=>$request->input('phone'),
                
            ]);
            $stable=Stables::all();
            return view('stables.index')->with('stables', $stable);
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
            DB::delete('DELETE from stable where id=?', [$id]);
            $stable=Stables::all();
            return view('stables.index')->with('stables', $stable);
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
            $stable = DB::select('SELECT * from stables where id=?', [$id]);
            return view('stables.edit', ['stables'=>$stable], ['id'=>$id]);
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
            $name=$request->get('name');
            $county=$request->get('county');
            $city=$request->get('city');
            $street=$request->get('street');
            $number=$request->get('number');
            $phone=$request->get('phone');
        DB::update('update stables set name=?, county=?, city=?, street=?, number=?, phone=?, where id=?', [$name, $county,
        $city, $street, $number, $phone, $id]);
        $stable=Stables::all();
        return view('stables.index')->with('stables', $stable);
        }
        else{
         return redirect('/home')->with('status','Access denied');
     } 
    } 
    }
      
}