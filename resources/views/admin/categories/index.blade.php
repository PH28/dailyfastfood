@extends('layouts.admin')

@section('content')

    <section class="content-header">
      <h1>
        Categories
        <small>List Supcategory</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Categories</a></li>
        <li class="active">List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    	<a href="{{ route('admin.categories.create') }}" class="btn btn-success">
	        <i class="fa fa-plus"></i>
	        <span>Add Category</span>
	    </a>
	    <p style="height: 5px"></p>
	    @if (Session('message'))
	        <div class="alert alert-success"> 
              <i class="icon fa fa-check"></i>{{ Session('message') }}
          </div>
	    @endif
	    @if (Session('error'))
	        <div class="alert alert-danger"> 
              <i class="icon fa fa-ban"></i>{{ Session('error') }}
          </div>
	    @endif
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Subcategory</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if (isset($categories) && count($categories) > 0)
	                            @foreach($categories as $cate)
	                                <tr role="row" class="odd">
	                                    <td>{{ $cate->id }}</td>
	                                    <td class="sorting_1">{{ $cate->name }}</td>
	                                    <td><a style="text-decoration: none" href="{{ route('admin.categories.subcategory', $cate->id) }}">Show</a></td>
	                                    <td>
	                                        <div class="btn-group">
	                                            <a href="{{ route('admin.categories.edit', $cate->id) }}" class="btn btn-default bg-purple">
	                                                <i class="fa fa-edit"></i>
	                                                <span>Edits</span>
	                                            </a>
	                                            
	                                            <a href="{{ route('admin.categories.destroy', $cate->id) }}" class="btn btn-default bg-red btnDelete" onclick="return confirm('Are you sure?')">
	                                                <i class="fa fa-times"></i>
	                                                <span>Delete</span>
	                                            </a>
	                                        </div>
	                                    </td>
	                                </tr>
	                            @endforeach
	                @endif
             	</tbody>
              </table>
           	</div>
          </div>
        </div>
      </div>
    </section>
	<!-- /.content -->

@endsection
