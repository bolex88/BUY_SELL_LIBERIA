<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostsController extends Controller
{
    public function showAddProductForm(){
        return view('Posts.add-product');
    }

    public function addProduct(Request $request){
        $this->validate($request, [
            'images' => 'required',
            'images.*' => 'image'
        ]);
        $user = Auth::user();
        $title = $request->title;
        $description = $request->description;
        $price = $request->price;
        $seller_name = $user->name;
        $location = $request->location;
        $seller_contact = $request->seller_contact;
        $post = $user->posts()->create(['title'=>$title, 'description'=>$description, 'price'=>$price, 'seller_name'=>$user, 'location'=>$location, 'seller_contact'=>$seller_contact]);
        foreach($request->images as $image){
        $filename = "images".str_random(5).'.'.$image->getClientOriginalExtension();
        $path = $image->storeAs('images',$filename);
        $post->images()->create(['path'=>$path]);
        }
        return redirect('/');
    }

    public function showProducts(){
        $products = Post::all();
        return view('Posts.products', compact('products'));
    }

    public function showDetails($id){
         $product = Post::find($id);
         $user = $product->user;
        return view('Posts.details-product', compact('product', 'user'));
    }

//     public function search(Request $request){
//     // Get the search value from the request
//     $search = $request->input('search');

//     // Search in the title and body columns from the posts table
//     $products = Post::find($title)
//         ->where('title', 'LIKE', "%{$search}%")
//         ->orWhere('body', 'LIKE', "%{$search}%")
//         ->get();

//     // Return the search view with the resluts compacted
//     return view('search', compact('products'));
// }

}
