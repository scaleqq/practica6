<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{ 
    public function baskets(){
        $id_user=Auth::user()->id;
        $p=Basket::where("user_id",$id_user)->get();
        Auth::user()->id;
        return view("basket",compact('p'));
    }
    public function products($id){
        $test=Basket::create([
            'user_id'=>Auth::user()->id,
            'product_id'=>$id,
            'quantity'=>1,
        ]);
        return redirect('/katalog');
    }
    public function deletebasket($id){
        Basket::find($id)->delete();
        return redirect()->route('basket')->with('Товар удален');
    }
}
