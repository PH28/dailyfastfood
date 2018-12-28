<?php

namespace Food\Http\Controllers;
use Food\User;
use Food\Category;
use Food\Image;
use Food\Product;
use Illuminate\Http\Request;
use Food\Http\Requests\Admin\ProductRequest;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $category= Category::pluck('name','id');
        return view('admin.product.create',compact('user','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        
        try { 
            $imageData=[];
           if($request->hasFile('image'))
           {
               
               foreach(request()->file('image') as $key => $value ){
                   $filename = $value->getClientOriginalExtension();
                   
                   $newFilename= '/public/images/foods/'.$request->name.rand(11111, 99999). '.' . $value->getClientOriginalExtension();
                   $destinationPath = public_path('/public/images/foods');
                   $value->move($destinationPath, $newFilename);
                  // array_push();
                   $data=[
                       'name'=>$request->name,
                       'path'=>$newFilename,
                       
                   ];
                   array_push($imageData,$data);
                   
                   }        
               }else{
                   $newFilename='';
           }
          
           $product=Product::create([
               'name' => $request->name,
               'description' => $request->description,
               'price' => $request->price,
               'quantity' => $request->quantity,
               'category_id'=> $request->category_id,
           ]);
           foreach($imageData as $iten){
              
               $iten['product_id']=$product->id;
               //dd($iten);
               Image::create($iten);
           }
           return redirect()->route('admin.home')->with('success',('create success product'. $request->name));
      } catch (Exception $e) {
       return redirect()->back()->with('message', 'Không thể thêm. Có lỗi');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Food\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Food\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $user = Auth::user();
        $category= Category::pluck('name','id');
        return view('admin.product.edit',compact('user','category','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Food\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $Products= Product::find($product->id);
        $Products->update($request->all());
        return redirect()->route('admin.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Food\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->images()->delete();
        
        $product->delete();
        return back()->with('message',('Delete success'));
        // return redirect()->route('admin.home');
    }
    public function detailProduct($id)
    { $user = Auth::user();
        $product=Product::with('images')->where('id',$id)->first() ;
       
        return view('admin.product.detail',compact('product','user'));
    }
}
