@extends('layouts.admin')

@section('content')

  <section class="content-header">
       <h1>
           Add Images
       </h1>
       <ol class="breadcrumb">
           <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           <li><a href="#">Images</a></li>
           <li class="active">Add</li>
       </ol>
   </section>
   <section class="content">
       <form action="{{ route('admin.images.store') }}" method="POST">
           @csrf
           <div class="box">
               <div class="box-body row">
                   <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-12">
                       <label>Name</label>
                       <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-keyboard-o"></i>
                          </div>
                          <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                       </div>
                            @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                   </div>

                   <div class="form-group{{ $errors->has('product_id') ? ' has-error' : '' }} col-md-12">
                       <label>Products</label>
                       <select class="form-control" name="product_id"  value="{{ old('product_id') }}">
                           @foreach($productIds as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                           @endforeach
                       </select>
                            @if ($errors->has('product_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_id') }}</strong>
                                    </span>
                            @endif
                   </div>

                   <div class="form-group{{ $errors->has('images') ? ' has-error' : '' }} col-md-12">
                       <label>Images</label>
                       <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-keyboard-o"></i>
                          </div>
                          <input type="file" name="images[]" class="form-control" value="" multiple>
                       </div>
                            @if ($errors->has('images'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('images') }}</strong>
                                    </span>
                            @endif
                   </div>
               </div>
               <div class="box-footer row">
                   <button type="submit" class="btn btn-success">
                       <i class="fa fa-save"></i>
                       <span>Add and save</span>
                   </button>
               </div>
           </div>
       </form>

@endsection