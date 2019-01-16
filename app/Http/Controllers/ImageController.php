<?php

namespace Food\Http\Controllers;

use Food\Image;
use Food\Product;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::with('product')->get();
        return view('admin.images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productIds = Product::orderBy('id', 'desc')->pluck('name', 'id');
        return view('admin.images.create', compact('productIds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageRequest $request)
    {
        $array = [];
        $data = $request->all();
        if($request->hasFile('images')) {
            $files = $request->file('images');
            foreach($files as $file) {
                $name = $file->getClientOriginalName();
                $images = str_random(5)."_".$name;
                $path = public_path('/images/foods');
                while(file_exists(public_path('/images/foods').$images)) {
                    $images = str_random(5)."_".$name;
                }
                $file->move($path, $images);
                array_push($array, $images); 
            }
        }
        if(Image::create($data)) {
            return redirect()->route('admin.images.index')->with('message', 'Successfully created images');
        } else {
            return redirect()->route('admin.images.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Food\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Food\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Food\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Food\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        
    }
}
