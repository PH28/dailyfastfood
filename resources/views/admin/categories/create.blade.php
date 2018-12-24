@extends('layouts.admin')

@section('content')

	<section class="content-header">
       <h1>
           Add Category
       </h1>
       <ol class="breadcrumb">
           <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           <li><a href="#">Category</a></li>
           <li class="active">Add</li>
       </ol>
   </section>
   <section class="content">
       <form action="{{ route('admin.categories.store') }}" method="POST">
           @csrf
           @if(count($errors) > 0)
               <ul>
               @foreach($errors->all() as $error)
                   <li class="text-danger">{{ $error }}</li>
               @endforeach
               </ul>
           @endif
           <div class="box">
               <div class="box-body row">
                   <div class="form-group col-md-12">
                       <label>Name</label>
                       <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                   </div>
                   <div class="form-group col-md-12">
                       <label>SupCategory</label>
                       <select class="form-control" name="parent_id"  value="{{ old('parent_id') }}">
                       	<option value="0">---Select SupCategory</option>
                           @foreach($categoryIds as $key => $value)
                            @if ($key == NULL)
                           	  <option value="{{ $key }}">{{ $value }}</option>
                           @endif
                       </select>
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