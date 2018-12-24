@extends('layouts.admin')

@section('content')
create product
<div class="form-group row">
     <label  class="col-md-4 col-form-label text-md-right"></label>

        <div class="col-md-6 text-danger">
                                

            @if (session('message'))
                                    
                    <strong>{{ session('message') }}</strong>
                                    
                @endif
        </div>
    </div>
<div class="row">
    <form action="{{route('admin.products.store')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
      <label style="padding: 20px">Name</label>
      <input type="text" name="name" value="">
      @if ($errors->has('name'))
         <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
        </span>
              @endif
      <label style="padding: 20px">descripttion</label>
      <textarea rows="4" cols="50" name="description">
      </textarea>
      @if ($errors->has('description'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
                                @endif
      <label style="padding: 20px">price</label>
      <input type="number" name="price" value="">
      @if ($errors->has('price'))
              <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('price') }}</strong>
                 </span>
         @endif
      <label style="padding: 20px">quantity</label>
      <input type="number" name="quantity" value="">
      @if ($errors->has('quantity'))
             <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('quantity') }}</strong>
            </span>
        @endif
      
      <label style="padding: 20px">categoryid</label>
      <select name="category_id"> 
      @foreach ($category as $key => $value)
      @if($key!=1 && $key!=2)
        <option value="{{$key}}">{{$value}}</option>
        @endif 
      @endforeach
      </select>
      <input type="file" class="form-control"  name="image[]" multiple>
      <button type="submit">Create</button>
    </form>

  </div>

@endsection