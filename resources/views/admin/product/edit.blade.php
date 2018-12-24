@extends('layouts.admin')

@section('content')


<div class="row" style="padding: 30px">
	<h1> Cat {{$product->id}} Edit</h1>
	<div class="form-group">
		<form action="{{route('admin.products.update',$product->id)}}" method="POST" accept-charset="utf-8">
			@csrf
			@method('PUT')
			<label style="padding: 20px">Name</label>
      <input type="text" name="name" value="{{$product->name}}">
        @if ($errors->has('name'))
         <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
        </span>
              @endif

      <label style="padding: 20px">descripttion</label>
      <textarea rows="4" cols="50" name="description">
        {{$product->description}}
      </textarea>
      @if ($errors->has('description'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
                                @endif
      <label style="padding: 20px">price</label>
      <input type="number" name="price" value="{{$product->price}}">
      @if ($errors->has('price'))
              <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('price') }}</strong>
                 </span>
         @endif
      <label style="padding: 20px">quantity</label>
      <input type="number" name="quantity" value="{{$product->quantity}}">
      @if ($errors->has('quantity'))
             <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('quantity') }}</strong>
            </span>
        @endif
		<select name="category_id">
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
			<button type="submit">Update</button>
		</form>
	</div>
</div>

@endsection