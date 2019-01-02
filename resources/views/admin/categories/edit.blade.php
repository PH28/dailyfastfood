@extends('layouts.admin')

@section('content')

  <section class="content-header">
       <h1>
           Categories
           <small>Edit Category</small>
       </h1>
       <ol class="breadcrumb">
           <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           <li><a href="#">Categories</a></li>
           <li class="active">Edit</li>
       </ol>
   </section>
   <section class="content">
       <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
           @csrf
           @method('PUT')
           <div class="box">
               <div class="box-body row">
                   <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-12">
                        <label>Name</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-keyboard-o"></i>
                            </div>
                            <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                        </div>
                            @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                   </div>

                   <div class="form-group{{ $errors->has('parent_id') ? ' has-error' : '' }} col-md-12">
                    @if($category->parent_id != NULL)
                       <label>SupCategory</label>
                       <select class="form-control" name="parent_id">
                        @foreach($categoryIds as $key => $value)
                          @if($key == $category->parent_id)
                            <option value="{{ $key }}" selected="seleted">{{ $value }}</option>
                          @else
                            <option value="{{ $key }}">{{ $value }}</option>
                          @endif
                        @endforeach
                       </select>
                            @if ($errors->has('parent_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('parent_id') }}</strong>
                                    </span>
                            @endif
                    @endif
                   </div>
               </div>
               <div class="box-footer row">
                   <button type="submit" class="btn btn-success">
                       <i class="fa fa-save"></i>
                       <span>Update</span>
                   </button>
               </div>
           </div>
       </form>

@endsection