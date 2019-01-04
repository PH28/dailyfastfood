<?php

namespace Food\Http\Controllers\Users;

use Illuminate\Http\Request;
use Food\Http\Controllers\Controller;
use Food\Product;
use Food\Category;
use Food\Slide;

class UsersController extends Controller
{
    public function getIndex()
    {
    	$slides = Slide::all();
    	$categories = Category::all();
    	unset($categories[0], $categories[1]);
    	$eat_cate = Product::with('category', 'images')->where('category_id', array(3, 4, 5, 6, 7, 8))->paginate(8);
    	$drink_cate = Product::with('category', 'images')->where('category_id', array(9, 10, 11, 12))->paginate(8);
    	return view('users.pages.index', compact('slides', 'categories', 'eat_cate', 'drink_cate'));
    }

    public function getCategory($id)
    {
    	$categories = Category::all();
    	unset($categories[0], $categories[1]);
    	$category = Category::where('id',$id)->first();
    	$products_by_category = Product::with('images')->where('category_id', $id)->get();
    	$products_other = Product::with('images')->where('category_id', '<>', $id)->paginate(5);
    	return view('users.pages.category', compact('categories', 'category', 'products_by_category', 'products_other'));
	}
	public function cart(){
		$categories = Category::all();
		return view('users.pages.cart',compact('categories'));
   }
}
