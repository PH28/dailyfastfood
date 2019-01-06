@extends('users.master')
@section('content')
<div class="container">
<p style="height: 5px"></p>

@if (Session::has('message'))
	<div class="alert alert-danger"> {{ Session::get('message') }}</div>
@endif
@if (Session::has('success'))
	<div class="alert alert-info" id="success"> {{ Session::get('success') }}</div>
@endif
<form action="{{route('users.orders.store')}}" method="POST" enctype="multipart/form-data" >
{{ csrf_field() }}
<div class="row">
<!-- cat -->
<div class="col-lg-8">
<h2> cart</h2>
<table class="table table-stripped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Product name</th>
					<th width="100">Image</th>
					<th>quantity</th>
					<th>Price</th>
				</tr>
			</thead>
			<tbody class="tbody1">
				
			</tbody>
		</table>
</div>
<!-- end cart  -->
<div class="col-lg-4 .p-3 " >
<div class="">

       <h3>order</h3>
	<table class="table">
			<thead>
				<tr>
					<th>stt</th>
					<th>Product name</th>
					<th>Price</th>
				</tr>
			</thead>
			<tbody class="order">
				
			</tbody>
	</table>
	
	@if(Auth::check())
<div class="row">
<h2>nhập thông tin cần đổi</h2>
<div class="form-group">
        <label for="phone">Phone Number</label>:</label>
         <input type="number" class="form-control" placeholder="Nhập số điện thoại" name="phone">
 </div>
 <div class="form-group">
        <label for="phone">addresss</label>:</label>
         <input type="number" class="form-control" placeholder="address" name="address">
 </div>
 </div>
@endif
<button type="submit" class="btn btn-primary">Tạo mới</button>
</div>

</div>

</div>

</form>
<!-- //contain -->
</div>

@endsection