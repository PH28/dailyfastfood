@extends('layouts.admin')

@section('content')

    <section class="content-header">
      <h1>
        Discounts
        <small>List Discounts</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Discounts</a></li>
        <li class="active">List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    	<a href="{{ route('admin.discounts.create') }}" class="btn btn-success">
	        <i class="fa fa-plus"></i>
	        <span>Add Discount</span>
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
                  <th>Percent discount</th>
                  <th>Date start</th>
                  <th>Date end</th>
                  <th>Products</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if (isset($discounts) && count($discounts) > 0)
	                            @foreach($discounts as $disc)
	                                <tr role="row" class="odd">
	                                    <td>{{ $disc->id }}</td>
	                                    <td class="sorting_1">{{ $disc->percent_discount }}</td>
	                                    <td>{{ $disc->date_start }}</td>
                                      <td>{{ $disc->date_end }}</td>
                                      <td>{{ $disc->product->name }}</td>
	                                    <td>
	                                        <div class="btn-group">
	                                            <a href="{{ route('admin.discounts.edit', $disc->id) }}" class="btn btn-default bg-purple">
	                                                <i class="fa fa-edit"></i>
	                                                <span>Edits</span>
	                                            </a>
	                                            
	                                            <a href="{{ route('admin.discounts.destroy', $disc->id) }}" class="btn btn-default bg-red btnDelete" onclick="return confirm('Are you sure?')">
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
