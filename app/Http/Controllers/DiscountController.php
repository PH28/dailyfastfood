<?php

namespace Food\Http\Controllers;

use Food\Discount;
use Food\Product;
use Illuminate\Http\Request;
use Food\Http\Requests\DiscountRequest;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discounts = Discount::with('product')->get();
        return view('admin.discounts.index', compact('discounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productIds = Product::orderBy('id', 'desc')->pluck('name', 'id');
        return view('admin.discounts.create', compact('productIds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DiscountRequest $request)
    {
        $discount = $request->all();

        if (Discount::create($discount)) {
            return redirect()->route('admin.discounts.index')->with('message', 'Successfully created discount');
        } else {
            return redirect()->route('admin.discounts.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Food\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Food\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit(Discount $discount)
    {
        $productIds = Product::orderBy('id', 'desc')->pluck('name', 'id');
        return view('admin.discounts.edit', compact('discount', 'productIds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Food\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function update(DiscountRequest $request, Discount $discount)
    {
        $data = $request->all();
        if($discount->update($data)) {
            return redirect()->route('admin.discounts.index')->with('message', 'Successfully updated discount');
        } else {
            return redirect()->back()->with('error', 'Update failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Food\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $discount = Discount::find($id);
        if($discount->delete()) {
            return redirect()->back()->with('message', 'Successfully deleted');
        }
        
        return redirect()->back()->with('error', 'Delete failed');
    }
}
