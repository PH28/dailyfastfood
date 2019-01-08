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
		<center><h2 style="font-weight: bold; color: rgb(50, 72, 194);">giỏ hàng của bạn</h2></center>
		<br>
		<hr>
<table class="table table-stripped">
			<thead class="" style="font-size: 140%;">
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
	<br>
	<br>
		<div style="border-color: green; border-radius: 10px; background-color:rgb(151, 238, 238);">
			<center><h2 style="font-weight: bold; color: red;">hóa đơn</h2></center>
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
			
		</div>
	
	  <hr>
	  <hr>
	@if(Auth::check())
<div class="row" style="background: seashell; border-radius: 10px; border-color:red; ">
<center><h3>thông tin cần đổi</h3></center>
<hr>

<div class="form-group">
        <label for="phone">Phone Number</label>:</label>
         <input type="number" class="form-control" placeholder="Nhập số điện thoại" name="phone">
 </div>
 <div class="form-group">
        <label for="phone">addresss</label>:</label>
         <input type="text" class="form-control" placeholder="address" name="address">
 </div>
 </div>
@endif
<button type="submit" class="btn btn-primary "><i class="fa fa-check"> MUA  </i></button>
<br>
<hr>
</div>

</div>

</div>

</form>
<!-- //contain -->
</div>

@endsection