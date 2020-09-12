<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishListController extends Controller
{
    public function store($id){
        $course = Course::find($id);
        $wishlist = \Cart::session(Auth::user()->id . '_wishlist');
        $wishlist->add([
            'id' => $course->id,
            'name' => $course->title,
            'price' => $course->price,
            'quantity' => 1,
            'associatedModel' => $course
        ]);
        
        return redirect()->route('cart.index')->with('success', 'Cours ajouté à votre liste de souhaits.');
    }

    public function destroy($id){
        \Cart::session(Auth::user()->id . '_wishlist')->remove($id);
        return redirect()->route('cart.index')->with('success', 'Cours supprimé de votre liste de souhaits !');
    }

    public function toCart($id){
        $course = Course::find($id);
        $toCart = \Cart::session(Auth::user()->id);
        $toCart->add([
            'id' => $course->id,
            'name' => $course->title,
            'price' => $course->price,
            'quantity' => 1,
            'associatedModel' => $course
        ]);
        \Cart::session(Auth::user()->id . '_wishlist')->remove($id);
        return redirect()->route('cart.index')->with('success', 'Cours a bien été transféré à votre panier.');
    }

    public function toWishList($id){
        $course = Course::find($id);
        $toWishList = \Cart::session(Auth::user()->id . '_wishlist');
        $toWishList->add([
            'id' => $course->id,
            'name' => $course->title,
            'price' => $course->price,
            'quantity' => 1,
            'associatedModel' => $course
        ]);
        \Cart::session(Auth::user()->id)->remove($id); 
        return redirect()->route('cart.index')->with('success', 'Cours a bien été transféré à votre liste de souhaits.');
    }
}
