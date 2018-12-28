<?php

namespace Food\Http\Controllers;

use Food\Order;
use Food\OrderDetail;
use Food\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $orders=Order::orderBy('date','desc')->paginate(10);
        $number_order=Order::count();
        $order_finish=Order::where('status','1')->count();
        $order_notfinish=Order::where('status','0')->count();
       //dd($orders);
        return view('admin.order.index',compact('user','orders','number_order','order_finish','order_notfinish'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \Food\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Food\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Food\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Food\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
    public function checkStatus($id){
        try {
            $order = Order::find($id);
            if($order->status==1){
             return back()->with('message', ('order này đã check rồi'));
            }
            else{
                $order_detail=OrderDetail::with('product')->where('order_id',$id)->get();
                //đi từng order_detail để xem có lỗi quantity ko
                foreach($order_detail as $key=>$value){
                    if($value->product->quantity < $value->quantity){
                        return back()->with('message', ('kiểm tra số lương '.$value->product->name.' vượt quá số lượng khác hàng yêu cầu'));
                    }
                   
                }

                foreach($order_detail as $key=>$value){
                    
                    
                    $product_update=$value->product->quantity-$value->quantity;
                    Product::where('id',$value->product->id)
                            ->update(['quantity' =>  $product_update]);
                }
                Order::where('id',$id)->update(['status'=>1]);
                return back()->with('success', ('check order thành công'));
                
            }
        } catch (\Exception $e) {
            return back()->with('message',$e->getMessage());
       }
    }
}
