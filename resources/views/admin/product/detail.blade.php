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
                    
                 <div class="col-lg-7" >
                    <!-- /.col-lg-12 -->
                    @if(session('success'))
                        <div class="alert alert-success">     
                            {{session('success')}}
                        </div>
                        @endif
                        @if(session('fail'))
                        <div class="alert alert-danger">     
                            {{session('fail')}}
                        </div>
                        @endif
                     @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group" >
                                <label>Category Name :{{$product->category->name}}</label> 
                                <input class="form-control" name="name" value="{{$product->category->name}}" />
                        </div>
                            <div class="form-group">
                                <label>Product Name</label>
                                <input class="form-control" name="name" value="{{$product->name}}" />
                            </div>
                            <div class="form-group">
                                <label>Product Quantity</label>
                                <input class="form-control" name="quantity" value="{{$product->quantity}}" />
                            </div>
                            <div class="form-group">
                                <label>Product Price</label>
                                <input class="form-control" name="price" value="{{number_format($product->price)}} VND "/>
                            </div>
                            <div class="form-group">
                                <label>Product Description</label>
                                <textarea class="form-control" rows="3" name="description" >{{$product->description}}</textarea>
                            </div>

                 
                </div>
                <div class="col-lg-5">
                <div class="form-group">
                                <label>Image</label>
                            </div>
                <div class="form-group">
                                @foreach($product->images as $item)
                                <img src="{!! url($item->path) !!}" width="200"  height="160" alt="">
                                @endforeach   
                            </div>
                </div>
            </div>

            
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection