<?php

namespace Food\Http\Controllers\Users;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Food\Http\Controllers\Controller;
use Food\Product;
use Food\Category;
use Food\Slide;
use Food\Comment;


class UsersController extends Controller
{
    public function getIndex()
    {

    	$slides = Slide::all();
    	$categories = Category::all();
    	unset($categories[0], $categories[1]);
        $eat_cates = Category::where('parent_id' , 1)->pluck('id')->toArray();
        $eat_products = Product::whereIn('category_id', $eat_cates)->with('images')->inRandomOrder()->paginate(8);
    	$drink_cates = Category::where('parent_id' , 2)->pluck('id')->toArray();
        $drink_products = Product::whereIn('category_id', $drink_cates)->with('images')->inRandomOrder()->paginate(4);
    	return view('users.pages.index', compact('slides', 'categories', 'eat_products', 'drink_products'));

    }

    public function getCategory($id)
    {
        $categories = Category::all();
        unset($categories[0], $categories[1]);
        $category = Category::where('id', $id)->first();
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
        $eat_cates = Category::where('parent_id' , 1)->pluck('id')->toArray();
        $eat_products = Product::whereIn('category_id', $eat_cates)->with('images')->inRandomOrder()->take(4)->get();
        $drink_cates = Category::where('parent_id' , 2)->pluck('id')->toArray();
        $drink_products = Product::whereIn('category_id', $drink_cates)->with('images')->inRandomOrder()->take(4)->get();
        return view('users.pages.product',compact('categories', 'product','similar_products', 'eat_products', 'drink_products'));
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
        return view('users.pages.cart', compact('categories'));
    }

    public function searchProduct(Request $request)
    {
        $categories = Category::all();
        unset($categories[0], $categories[1]);
        $search = $request->search;

        if($search == "")
        {
            $products = Product::inRandomOrder()->paginate(9);
        }
        else
        {
            $products = Product::where('name', 'like', '%'.$search.'%')->with('images')->paginate(6);
            $products->appends($request->only('search'));
        }
        return view('users.pages.search', compact('categories', 'search', 'products'));
    }
    
    public function getPost($id)
    {
        $posts = Comment::with('product', 'user')->where('product_id', $id)->get();

        return view('users.comment.postlist', compact('posts'));
    }
    public function post(Request $request)
    {

        if ($request->ajax()) {
            $user = Auth::user();
            $post = Comment::create([
                'content' => $request->content,
                'product_id' => $request->product_id,
                'comment_id' => '0',
                'user_id' => $user->id,
            ]);

            return response($post);
        }
    }
}
