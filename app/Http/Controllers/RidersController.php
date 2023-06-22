<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\riders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Closure;

class RidersController extends Controller
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
            $rider=Riders::all();
            return view('riders.index')->with('riders', $rider);
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
            return view('riders.add');
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
            Riders::create([
                'stable_id'=>$request->input('stable_id'),
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'age'=>$request->input('age'),
               
                
            ]);
            $rider=Riders::all();
            return view('riders.index')->with('riders', $rider);
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
            DB::delete('DELETE from riders where id=?', [$id]);
            $rider=Riders::all();
            return view('riders.index')->with('riders', $rider);
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
            $rider = DB::select('SELECT * from riders where id=?', [$id]);
            return view('riders.edit', ['riders'=>$rider], ['id'=>$id]);
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
            $email=$request->get('email');
            $age=$request->get('age');
            DB::update('update riders set stable_id=?, name=?, email=?, age=? where id=?', [$stable_id, $name, $email, $age, $id]);
            $rider=Riders::all();
        return view('riders.index')->with('riders', $rider);
        }
        else{
         return redirect('/home')->with('status','Access denied');
     } 
    } 
    }
      
}