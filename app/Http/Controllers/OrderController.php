<?php

namespace Food\Http\Controllers;

use Food\Order;
use Food\OrderDetail;
use Food\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Food\Mail\OrderFeedback;
use Illuminate\Support\Facades\Mail;


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
            
                $order_detail=OrderDetail::with('product')->where('order_id',$id)->get();

                foreach($order_detail as $key=>$value){
                    
                    
                    $product_update=$value->product->quantity-$value->quantity;
                    Product::where('id',$value->product->id)
                            ->update(['quantity' =>  $product_update]);
                }
                Order::where('id',$id)->update(['status'=>1]);
              
                $order_mail =Order::with('orderDetails','user')->where('id',$id)->first();
                $order_detail=[];
                        foreach($order_mail->orderDetails as $key => $value){
                            
                        $id_products=$value->product_id;
                        $products=Product::find($id_products);
                        $data=[
                            'name_product'=>$products->name,
                                'quantity'=>$value->quantity,
                                'price'=>$products->price * $value->quantity,
                        ];
                        array_push($order_detail,$data);
                        
                        }
                        $data_user=$order_mail->user;
                        // dd($order_detail);
               //dd($order_mail);
                Mail::to($data_user->email)->send(new OrderFeedback($data_user, $order_detail,$order_mail));
                return back()->with('success', ('cập nhật trạng thái order thành công'));
                
        
        } catch (\Exception $e) {
            return back()->with('message',$e->getMessage());
       }
    }
}
