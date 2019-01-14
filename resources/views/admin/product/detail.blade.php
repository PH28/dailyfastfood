@extends('layouts.admin')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">{{$product->name}}
                            <small>Detail</small>
                            <small><i class="fa fa-pencil fa-fw page-header"></i> <a href="{{route('admin.products.edit',$product->id)}}"  >Edit</a></small>

                        </h1>
                        
                    </div>
                    <div class="col-lg-3 ">
                <div class="form-group">
                                <label>Image</label>
                            </div>
                <div class="form-group">
                                @foreach($product->images as $item)
                                <img src="{!! url($item->path) !!}" width="200"  height="160" alt="">
                                @endforeach   
                            </div>
                </div>
                 <div class="col-lg-3 " >
                    <!-- /.col-lg-12 -->
                    <div class="form-group">
                                <center><h3><label>information </label></h3></center>
                            </div>
                    <table>
                        <tr>
                            <td><label>Category Name   </label></td>
                            <td>:{{$product->category->name}}</td>
                        </tr>
                        <tr>
                            <td><label>Product Name   </label></td>
                            <td> :{{$product->name}}</td>
                        </tr>
                        <tr>
                            <td><label>Product Quantity </label></td>
                            <td> :{{$product->quantity}}</td>
                        </tr>
                        <tr>
                            <td><label>Product Price</label></td>
                            <td>:{{number_format($product->price)}} VND</td>
                        </tr>
                        <tr>
                            <td> <label>Product Description</label></td>
                            <td>:{{$product->description}}</td>
                        </tr>
                    </table>
                        
                </div>
                
                <div class="col-lg-6">
                <div class="form-group">
                                <center><h3><label>comment</label></h3></center>
                            </div>
                <div class="form-group">
                    
                                @foreach($comment as $item)
                                
                                <div class="row ">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    @if($item->user->avatar=='')
                                    <img src="#" alt="avata" width="42" height="42">
                                    @else
                                    <img src="{{ url($item->user->avatar) }}" alt="avata" width="42" height="42">
                                    @endif
                                   
                                    <samp style="font-size:16px;"><b>{{$item->user->last_name }}</b></samp>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <samp>
                                        <h4 style="padding-top:10px;">{{$item->content}}</h4>
                                    </samp>
                                    <p style="font-size:11px; margin-top:-10px;">{{ date('M d, Y h:i A', strtotime($item->created_at)) }}</p>
                                </div>
                            </div>
                                @endforeach   
                            </div>
                </div>
            </div>

            
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection