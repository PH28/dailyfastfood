@extends('layouts.admin')

@section('content')
	 <!-- Content Header (Page header) -->
	<section class="content-header">
	    <h1>
	        Categories
	    </h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
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
	    @if (Session::has('message'))
	        <div class="alert alert-info"> {{ Session::get('message') }}</div>
	    @endif
	    <input type="text" id="myInput" onkeyup="searchByColumnNo('1')" placeholder="Search for names.." class="form-control">
	    <!-- Default box -->
	    <div class="box">
	        <div class="box-header with-border">
	            <div class="row">
	                <div class="col-sm-12">
	                    <table id="myTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
	                        <thead>
	                        <tr role="row">
	                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">ID</th>
	                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="">Name</th>
	                             <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">SupCategory</th>
	                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Actions</th></tr>
	                        </thead>
	                        <tbody>
	                        @if (isset($categories) && count($categories) > 0)
	                            @foreach($categories as $cate)
	                                <tr role="row" class="odd">
	                                    <td>{{ $cate->id }}</td>
	                                    <td class="sorting_1">{{ $cate->name }}</td>
	                                    <td>
	                                        <div class="btn-group">
	                                            <a href="{{-- {{ route('admin.categories.edit'), $cate->id }} --}}" class="btn btn-default bg-purple">
	                                                <i class="fa fa-edit"></i>
	                                                <span>Edits</span>
	                                            </a>
	                                            <!--<a href="#" class="btn btn-default bg-red" onclick="delUser('{{ $cate->id }}');"></a>-->
	                                            <a href="#" class="btn btn-default bg-red btnDelete" data-id="{{ $cate->id }}">
	                                                <i class="fa fa-edit"></i>
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
	    <!-- /.box -->

	</section>
	<!-- /.content -->
	<form action="" method="post" id="formDelete">
	    <input type="hidden" name="_method" value="DELETE">
	    @csrf
	</form>
	<div id="confirm" class="modal fade" role="dialog">
	    <div class="modal-dialog">
	        <!-- Modal content-->
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
	                <h4 class="modal-title">Confirm delete</h4>
	            </div>
	            <div class="modal-body">
	                <p> Are you sure?</p>
	            </div>
	            <div class="modal-footer">
	                <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
	                <button type="button" data-dismiss="modal" class="btn">Cancel</button>
	            </div>
	        </div>
	    </div>
	</div>
	

@endsection