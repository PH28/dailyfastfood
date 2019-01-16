@extends('users.master')
@section('content')
<div class="container">
	<p style="height: 5px"></p>

	<div class="col-lg-7">
		@if (Session::has('message'))
		<div class="alert alert-danger"> {{ Session::get('message') }}</div>
		@endif
		@if (Session::has('success'))
		<div class="alert alert-info" id="success"> {{ Session::get('success') }}</div>
		@endif

	</div>
	<form action="{{route('users.orders.store')}}" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="row">
			<!-- cat -->
			<div class="col-lg-8">
				<center>
					<h2 style="font-weight: bold; color: rgb(50, 72, 194);">Giỏ hàng của bạn</h2>
				</center>
				<br>
				<hr>
				<table class="table table-stripped">
					<thead class="" style="font-size: 140%;">
						<tr>
							<th>STT</th>
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
			<div class="col-lg-4 .p-3 ">
				<div class="">
					<br>
					<br>
					<div style="border-color: green; border-radius: 10px; background-color:rgb(151, 238, 238);">
						<center>
							<h2 style="font-weight: bold; color: red;">Hóa đơn</h2>
						</center>
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
					@if(Auth::check())
					<div>
						<table>
							<tr>
								<td><b>Tên&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
									</b></td>
								<td>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</td>
							</tr>
							<tr>
								<td><b> Địa chỉ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></td>
								<td> {{ Auth::user()->address }}</td>
							</tr>
							<tr>
								<td><b>số điện thoại&nbsp;: </b></td>
								<td>{{ Auth::user()->phone }}</td>
							</tr>
						</table>
						<p id="show" class=""><b>cập nhật thông tin hóa đơn</b></p>
					</div>
					<hr>
					<!-- // thông tin -->
					<div class="ifuser" style="display: none;">
						<div class="row" style="background: seashell; border-radius: 10px; border-color:red; ">
							<center>
								<h3>Thông Tin</h3>
							</center>
							<hr>

							<div class="form-group">
								<label for="phone">&nbsp;Số điện thoại</label>:</label>
								<input type="number" class="form-control" placeholder="Nhập số điện thoại" name="phone">
							</div>
							<div class="form-group">
								<label for="phone">&nbsp;Địa chỉ</label>:</label>
								<input type="text" class="form-control" placeholder="address" name="address">
							</div>
						</div>
					</div>
					<!-- end thông tin -->
					@endif
					<button type="submit" class="btn btn-primary "><i class="fa fa-check"> MUA </i></button>
					<br>
					<hr>
				</div>

			</div>

		</div>

	</form>
	<!-- //contain -->
</div>

@endsection