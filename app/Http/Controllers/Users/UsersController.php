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
        $eat_cates = Category::where('parent_id' , 1)->pluck('id')->toArray();
        $eat_products = Product::whereIn('category_id', $eat_cates)->with('images')->paginate(8);
    	$drink_cates = Category::where('parent_id' , 2)->pluck('id')->toArray();
        $drink_products = Product::whereIn('category_id', $drink_cates)->with('images')->paginate(4);
    	return view('users.pages.index', compact('slides', 'categories', 'eat_products', 'drink_products'));
    }

    public function getCategory($id)
    {
    	$categories = Category::all();
    	unset($categories[0], $categories[1]);
    	$category = Category::where('id',$id)->first();
    	$products_by_category = Product::with('images')->where('category_id', $id)->get();
    	$products_other = Product::with('images')->where('category_id', '<>', $id)->paginate(6);
    	return view('users.pages.category', compact('categories', 'category', 'products_by_category', 'products_other'));
	}

    public function getProduct(Request $request)
    {
        $categories = Category::all();
        unset($categories[0], $categories[1]);
        $product = Product::where('id', $request->id)->with('images')->first();
        $similar_products = Product::where('category_id', $product->category_id)->with('images')->paginate(6);
        return view('users.pages.product',compact('categories', 'product','similar_products'));
    }

    public function getContact()
    {
        $categories = Category::all();
        unset($categories[0], $categories[1]);
        return view('users.pages.contact', compact('categories'));
    }

	public function cart()
    {
		$categories = Category::all();
		return view('users.pages.cart',compact('categories'));
    }

    public function searchProduct(Request $request)
    {
        $categories = Category::all();
        unset($categories[0], $categories[1]);
        $search = $request->search;
        $products = Product::where('name', 'like', '%'.$search.'%')->withCount('images')->paginate(6);
        return view('users.pages.search', compact('categories', 'search', 'products'));
    }
}
