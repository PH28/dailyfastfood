@extends('layouts.admin')

@section('content')
<div id="page-wrapper">
<div class="container-fluid">

<div class="row">
<h2 class=".p-3">edit product</h2>
<div class="col-lg-7" >
        
		<form action="{{route('admin.products.update',$product->id)}}" method="POST" accept-charset="utf-8">
			@csrf
			@method('PUT')
            <div class="form-group">
			<label>Name</label>
      <input type="text "class="form-control" name="name" value="{{$product->name}}">
        @if ($errors->has('name'))
         <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
        </span>
              @endif
              </div>
              <div class="form-group">       
      <label >descripttion</label>
      <textarea rows="4" cols="50" name="description" class="form-control">
        {{$product->description}}
      </textarea>
      @if ($errors->has('description'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
                                @endif 
        </div>
        <div class="form-group">
      <label >price</label>
      <input type="number" name="price" value="{{$product->price}}" class="form-control">
      @if ($errors->has('price'))
              <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('price') }}</strong>
                 </span>
         @endif
         </div>
         <div class="form-group">
      <label >quantity</label>
      <input type="number" name="quantity" value="{{$product->quantity}}" class="form-control">
      @if ($errors->has('quantity'))
             <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('quantity') }}</strong>
            </span>
        @endif
        </div>
        <div class="form-group">
		<select name="category_id" >
            @foreach ($category as $key => $value)
                @if($key!=1 && $key!=2)
                    @if( $key== $product->category_id)
                    <option value="{{$key}}" selected="seleted">{{$value}}</option>
                    @else
                    <option value="{{$key}}">{{$value}}</option>
                    @endif
                @endif
			@endforeach
		</select>
        </div>
        <div class="form-group ">
                   <button type="submit" class="btn btn-success">
                       <i class="fa fa-save"></i>
                       <span>save</span>
                   </button>
                   <a href="{{route('admin.home')}}"><button type="button" class="btn btn-primary float-right">Cancel</button></a>   
               </div>
		</form>
       
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

<!-- /////?\ -->
</div>
</div>
@endsection