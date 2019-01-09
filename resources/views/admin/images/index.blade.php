@extends('layouts.admin')

@section('content')

    <section class="content-header">
      <h1>
        Images
        <small>List Images</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Images</a></li>
        <li class="active">List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    	<a href="{{ route('admin.images.create') }}" class="btn btn-success">
	        <i class="fa fa-plus"></i>
	        <span>Add Images</span>
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
                  <th>Products</th>
                  <th>Images</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
	                            @foreach($images as $image)
	                                <tr role="row" class="odd">
	                                    <td>{{ $image->id }}</td>
	                                    <td>{{ $image->name }}</td>
	                                    <td>{{ $image->product->name }}</td>
                                      <td>{{ url($image->getFirstImageAttribute()->path) }}</td>
	                                    <td>
	                                        <div class="btn-group">                 
	                                            <a href="{{ route('admin.images.destroy', $image->id) }}" class="btn btn-default bg-red btnDelete" onclick="return confirm('Are you sure?')">
	                                                <i class="fa fa-times"></i>
	                                                <span>Delete</span>
	                                            </a>
	                                        </div>
	                                    </td>
	                                </tr>
	                            @endforeach
             	</tbody>
              </table>
           	</div>
          </div>
        </div>
      </div>
    </section>
	<!-- /.content -->

@endsection
