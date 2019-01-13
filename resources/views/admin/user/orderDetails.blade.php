@extends('layouts.admin')

@section('content')
	 <!-- Content Header (Page header) -->
	<section class="content-header">
	    <h1>
	        Oder User
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
		@if (Session::has('success'))
	        <div class="alert alert-info"> {{ Session::get('success') }}</div>
	    @endif
	
	    <!-- Default box -->
	    <div class="box">
	        <div class="box-header with-border">
			<div class="row">
			</div>
	            <div class="row">
					<hr>
	                <div class="col-sm-4">
	                    <table class="table table-bordered table-hover dataTable bg-info">					
						<tr>
						<td class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Address</td>
						<td>{{$order->address}}</td>
                        </tr>
                        <tr>
                        <td class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">PHONE</td>
						<td>{{$order->phone}}</td>
                        </tr>
                        <tr>
                        <td class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">date order</td>
						<td>{{$order->date}}</td>
                        </tr>
                        <tr> 
                        <td class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Total</td>
						<td>{{number_format($order->total_price)}} VN</td>
						
						</tr>
						<tr>
                        <td class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">status</td>
						@if($order->status==1)
						<td class="text-success bg-warning"><b>hoàn thành</b></td>
						@else
						<td class="text-danger bg-danger"><b>chưa check</b></td>
						@endif
                        </tr>
						</table>
	                </div>
                    <div class="col-sm-8">
                    <h2>Order detail</h2>
                    <table class="table table-bordered table-hover dataTable">
						<thead class="bg-primary">
	                        <tr role="row">
	                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">name</th>
	                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="">quantity</th>
	                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">price </th>
								
								</tr>
	                        </thead>
						@foreach($order_detail as $key => $value)
						<tr>
						<td>{{$value['name_product']}}</td>
						<td>{{$value['quantity']}}</td>
						<td>{{$value['price']}}</td>
						</tr>
						@endforeach
						<tr class="bg-info">
						<td colspan="3"  align="right"  >
						<b>{{number_format($order->total_price)}} VN</b>
						</td>
						</tr>
						<tr>
						<td colspan="3"  align="right" >
						@if($order->status==0)
						<a href="{{route('admin.orders.check',$order->id)}}"><button type="button" class="btn btn-warning">approved</button></a>
						@endif
						<a href="{{route('admin.orders.index')}}"><button type="button" class="btn btn-primary float-right">Cancel</button></a>
						</td>
						</tr>
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