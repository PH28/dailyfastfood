@extends('layouts.admin')

@section('content')

  <section class="content-header">
       <h1>
           Add Category
       </h1>
       <ol class="breadcrumb">
           <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           <li><a href="#">Categories</a></li>
           <li class="active">Add</li>
       </ol>
   </section>
   <section class="content">
       <form action="{{ route('admin.categories.store') }}" method="POST">
           @csrf
           {{-- @if(count($errors) > 0)
               <ul>
               @foreach($errors->all() as $error)
                   <li class="text-danger">{{ $error }}</li>
               @endforeach
               </ul>
           @endif --}}
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
                   <div class="form-group{{ $errors->has('parent_id') ? ' has-error' : '' }} col-md-12">
                       <label>SupCategory</label>
                       <select class="form-control" name="parent_id"  value="{{ old('parent_id') }}">
                            <option value="">---None---</option>
                           @foreach($categories as $cate)
                            <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                           @endforeach
                       </select>
                            @if ($errors->has('parent_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('parent_id') }}</strong>
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