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
	   
	   
	    <!-- Default box -->
	    <div class="box">
	        <div class="box-header with-border ">
			<div class="row">
				<div  class="col-sm-12">
				<div class="col-sm-3 bg-info p-3 mb-2">
				<div>
				<h3>Tổng hóa đơn</h3>
				<h1>{{$number_order}}</h1>

				</div>
				
				</div>
				<div class="col-sm-3 bg-success p-3 mb-2">
					<div class="">
					<b><h3>hóa đơn đã hoàn thành</h3>
						<h1>{{$order_finish}}</h1></b>
					</div>
				</div>
                
				<div class="col-sm-4 bg-danger">
				<div>
					<h3>hóa đơn chưa hoàn thành</h3>
						<h1>{{$order_notfinish}}</h1>
					</div>
				</div>
				</div>
			</div>
			<p style="height: 5px"></p>
	    @if (Session::has('message'))
	        <div class="alert alert-danger"> {{ Session::get('message') }}</div>
	    @endif
		@if (Session::has('success'))
	        <div class="alert alert-info"> {{ Session::get('success') }}</div>
	    @endif
	            <div class="row">
					<hr>
	                <div class="col-sm-12">
	                    <table class="table table-bordered table-hover dataTable">
						<thead class="bg-primary">
	                        <tr role="row">
	                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Address</th>
	                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="">phone</th>
	                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Date order </th>
								<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Total price </th>
								<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">detail </th>
								<th>status</th>
								</tr>
	                        </thead>
							
						@foreach($orders as $item)
						
						<tr>
						<td>{{$item->address}}</td>
						<td>{{$item->phone}}</td>
						<td>{{$item->date}}</td>
						<td>{{number_format($item->total_price)}} VN</td>
						<td><a href="{{route('admin.users.orderdeatil',$item->id)}}">detail</a></td>
						@if($item->status==1)
						<!-- <td><a href="{{route('admin.orders.check',$item->id)}}"><button type="button" class="btn btn-success">Success</button></a></td> -->
						<td>đã hoàn thành</td>
						@else
						<td><a href="{{route('admin.orders.check',$item->id)}}"><button type="button" class="btn btn-warning">Check Order</button></a></td>
						
						@endif
						</tr>
						@endforeach
						</table>
	                </div>
	            </div>
	        </div>
			<div class="" id="">
				---------------------------------------------------------
					<ul class="pagination">
						@if($orders->currentPage() !=1)
						<li class="paginate_button previous disabled" id="datatable-buttons_previous">
							<a href="#" aria-controls="datatable-buttons" data-dt-idx="0" tabindex="0">Previous</a>
						</li>
						@endif
						@for ($i=1;$i<= $orders->lastPage();$i++)
						<li class="paginate_button {{ ($orders->currentPage() == $i) ? 'active' : ' ' }}">
							<a href="{{str_replace('/?','?',$orders->url($i))}}">{{$i}}</a>
						</li>
						@endfor
						@if($orders->currentPage() !=$orders->lastPage())
						<li class="paginate_button next" id="datatable-buttons_next">
							<a href="#" aria-controls="datatable-buttons" data-dt-idx="7" tabindex="0">Next</a>
						</li>
						@endif
						</ul>
						------------------------------------------------------------------------------------------------------------------------------
							</div>
	    </div>
	    <!-- /.box -->

	</section>
	<!-- /.content -->
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