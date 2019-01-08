@extends('layouts.admin')

@section('content')
	 <!-- Content Header (Page header) -->
	<section class="content-header">
	    <h1>
	        Oder User {{$users->first_name}} {{$users->last_name}}
	    </h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> infomation</a></li>
	        <li><a href="#"> oder user</a></li>
	        <li class="active">List</li>
	    </ol>
	</section>

	<!-- Main content -->
	<section class="content">
	    <p style="height: 5px"></p>
	    @if (Session::has('message'))
	        <div class="alert alert-info"> {{ Session::get('message') }}</div>
	    @endif
	    <!-- Default box -->
	    <div class="box">
	        <div class="box-header with-border">
			<!-- top liles -->
			<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<label for="" > -Tên   &emsp;&emsp;: {{$users->first_name}} {{$users->last_name}}</label>
				<label for=""> -Mail   &emsp;&emsp;:{{$users->email}}</label>
				<label for=""> -phone  &emsp;:{{$users->phone}}</label>
				<label for=""> -phone  &emsp;:{{$users->address}}</label>
             </div>
			 <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
			 <label for=""> -tổng hóa đơn  &emsp;:{{$countOrder}}</label><br>
				<label for=""> -đã thanh toán  &emsp;:{{$checked}}</label><br>
				<label for=""> -số tiền  &emsp;:</label>
			 </div>
			<!-- end top loles -->
			<hr>
	            <div class="row">
					<hr>
	                <div class="col-sm-12">
	                    <table class="table table-bordered table-hover dataTable bg-warning ">
						<thead class="bg-primary">
	                        <tr role="row">
	                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Address</th>
	                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="">phone</th>
	                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Date order </th>
								<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Total price </th>
								<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">detail </th>
								</tr>
	                        </thead>
						@foreach($users->orders as $item)
						<tr>
						
						<td>{{$item->address}}</td>
						<td>{{$item->phone}}</td>
						<td>{{$item->date}}</td>
						<td>{{$item->total_price}}</td>
						<td><a href="{{route('admin.users.orderdeatil',$item->id)}}">detail</a></td>
						</tr>
						@endforeach
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
	
	<!-- /////////// -->

@endsection