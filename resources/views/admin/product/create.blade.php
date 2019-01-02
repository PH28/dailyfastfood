@extends('layouts.admin')

@section('content')
<div id="page-wrapper">
<div class="container-fluid">
 <h2>create product</h2>
<div class="form-group row">
     <label  class="col-md-4 col-form-label text-md-right"></label>

        <div class="col-md-6 text-danger">
                                

            @if (session('message'))
                                    
                    <strong>{{ session('message') }}</strong>
                                    
                @endif
        </div>
    </div>
<div class="row">

<div class="col-lg-7" >

    <form action="{{route('admin.products.store')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group" >
      <label >Name</label>
      <input type="text" name="name" value="" class="form-control">
      @if ($errors->has('name'))
      <div class="text-danger">
         <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
        </span></div>
        @endif
        </div>
        <div class="form-group" >
      <label>descripttion</label>
      <textarea rows="4" cols="50" name="description"  class="form-control">
      </textarea>
     
       </div>  
          <div class="form-group" >                   
      <label>price</label>
      <input type="number" name="price" value=""  class="form-control">
      @if ($errors->has('price'))
      <div class="text-danger">
              <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('price') }}</strong>
                 </span></div>
         @endif
         </div>
       <div class="form-group">   
      <label >quantity</label>
      <input type="number" name="quantity"  class="form-control" value="">
      @if ($errors->has('quantity'))
      <div class="text-danger">
      
             <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('quantity') }}</strong>
            </span></div>
        @endif
        </div> 
      <label >categoryid</label>
      <select name="category_id"  class="form-control"> 
      @foreach ($category as $key => $value)
      @if($key!=1 && $key!=2)
        <option value="{{$key}}" >{{$value}}</option>
        @endif 
      @endforeach
      </select>
      <label>Image</label>
      <input type="file"  class="form-control"  name="image[]" multiple>
      <div class="form-group ">
                   <button type="submit" class="btn btn-success">
                       <i class="fa fa-save"></i>
                       <span>Add and save</span>
                   </button>
               </div>
      </div>
    </form>

  </div>
  </div>
</div>
@endsection