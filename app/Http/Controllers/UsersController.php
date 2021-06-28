<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Auth;

class UsersController extends Controller
{
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
    	$user = Auth::user();
        $products = $user->posts;
        return view('Users.home', compact('products'));
    }
    
    public function destroy($id){
        Post::destroy($id);
        return redirect()->route('home');
    }

    public function showEditForm($id){
        $product = Post::find($id);
        return view('Users.update-product', compact('id', 'product'));
    }

    public function update(Request $request, $id){
    	$user = Auth::user();
        $title = $request->title;
        $description = $request->description;
        $price = $request->price;
        $location = $request->location;
        $seller_contact = $request->seller_contact;
        $product = Post::find($id);
        $product->update(['title'=>$title, 'description'=>$description, 'price'=>$price, 'location'=>$location, 'seller_contact'=>$seller_contact]);
        return redirect()->route('home');
    }

}
