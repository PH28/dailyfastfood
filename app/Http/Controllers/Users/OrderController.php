<?php

namespace Food\Http\Controllers\Users;

use Illuminate\Http\Request;
use Food\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Food\Product;
use Food\Order;
use Food\OrderDetail;

class OrderController extends Controller
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
        try {
           if(Auth::check()){
            $id= explode(',',$request->productId);
            $quantity=explode(',',$request->quantity);
    
            $i=0;
            while($i<sizeof($id)){
                $product=Product::where('id',$id[$i])->first();
                if($product->quantity<$quantity[$i]){
                    return redirect()->back()->with('message', 'số lương '.$product->name.'qua so luong');
                }

                $i++;
            }
            
            //$phone1=$request->phone;
            if($request->phone==null){
                $phone=Auth::user()->phone;
            }else{
                $phone=$request->phone;
            }
            if($request->address==null){
                $address=Auth::user()->address;
            }else{
                $address=$request->address;
            }
            
            $data_order=['date' => date('Y-m-d H:i:s'),
                        'status'=>'0',
                        'address'=>$address,
                        'phone'=>$phone,
                        'total_price'=>$request->total,
                        'user_id'=>Auth::user()->id];
                        
            $order=Order::create($data_order);
            $j=0;
            while($j<sizeof($id)){
                $detail=['quantity'=>$quantity[$j],
                        'order_id'=>$order->id,
                        'product_id'=>$id[$j],

            ];
                OrderDetail::create($detail);
                $j++;
            }
            return redirect()->back()->with('success', 'order thành công');  
           }else{
            return view('auth.login');
           }
        }  catch (Exception $e) {
            return redirect()->back()->with('message', 'Không thể order vui lòng thử lại');
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
