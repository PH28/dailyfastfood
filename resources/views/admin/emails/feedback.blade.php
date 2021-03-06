<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title>Document</title>
</head>
<body>
<center>foody chào bạn:{{$data_user->first_name}} </center>
<center>
<div class="box">
	        <div class="box-header with-border">
			<div class="row">
			</div>
	            <div class="row">
					<hr>
	                <div class="col-sm-4">
	                    <table class="table table-bordered table-hover dataTable">					
						<tr>
						<td class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Address</td>
						<td>{{$data_product->address}}</td>
                        </tr>
                        <tr>
                        <td class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">PHONE</td>
						<td>{{$data_product->phone}}</td>
                        </tr>
                        <tr>
                        <td class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">date order</td>
						<td>{{$data_product->date}}</td>
                        </tr>
                        <tr> 
                        <td class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Total</td>
						<td>{{number_format($data_product->total_price)}} VN</td>
						
						</tr>
						</table>
	                </div>
                    <div class="col-sm-8">
                    <h2>Order detail</h2>
                    <table class="table table-bordered table-hover dataTable">
						<thead>
	                        <tr role="row">
	                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">name</th>
	                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="">quantity</th>
	                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">price </th>
								
								</tr>
	                        </thead>
						@foreach($data_detail as $key => $value)
						<tr>
						<td>{{$value['name_product']}}</td>
						<td>{{$value['quantity']}}</td>
						<td>{{$value['price']}}</td>
						</tr>
						@endforeach
						<tr>						
						<td colspan="3"  align="right">
						{{number_format($data_product->total_price)}} VN
						</td>
						</tr>
						</table>
                    </div>

	            </div>
	        </div>

	    </div>
		</center>

	    <!-- /.box -->
		
</body>
</html>

