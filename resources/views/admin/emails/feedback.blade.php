
foody chào bạn:{{$data_user->first_name}}
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
	    <!-- /.box -->
