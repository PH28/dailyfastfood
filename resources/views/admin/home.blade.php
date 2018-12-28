@extends('layouts.admin')

@section('content')
	<section class="content-header">
      <h1>
        Home
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Home</li>
      </ol>
     </section> 
    <section class="content">
    <a href="{{ route('admin.products.create') }}" class="btn btn-success">
	        <i class="fa fa-plus"></i>
	        <span>Add Product</span>
	</a>
    <p style="height: 5px"></p>

        @if (Session::has('message'))
	        <div class="alert alert-info"> {{ Session::get('message') }}</div>
	    @endif
		@if (Session::has('success'))
	        <div class="alert alert-info"> {{ Session::get('success') }}</div>
	    @endif
      <input type="text" id="myInput" onkeyup="searchByColumnNo('1')" placeholder="Search for names.." class="form-control">  
      <div class="box">
	        <div class="box-header with-border">
	            <div class="row">
	                <div class="col-sm-12">
        
            <table id="myTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">

            <thead >
	                        <tr role="row">
	                            <th class="sorting"  aria-controls="example2" rowspan="1" colspan="1" aria-label="">Name</th>
	                            <th class="sorting_asc">Price</th>
								<th class="sorting">quantity</th>
								<th>image</th>
								<th>detail</th>
								<th colspan="2" >action</th>
								</tr>
	                        </thead>

                        <tbody>
						@foreach( $products as $item)
		 					
                          <tr class="even pointer">
                    
                            <td class=" ">{{ $item->name }}</td>
                            <td class=" ">{{number_format($item->price)}} VND </td>
                            <td class=" ">{{ $item->quantity }}</td>
							<td> @foreach($item->images as $item1)
                                <img src="{!! url($item1->path) !!}" width="100"  height="80" alt="">
								
                                @endforeach </td>
                            <td><a  href="{{route('admin.products.detail',$item->id)}}"><i class="fa fa-eye" style="font-size:20px;"></i></a> </td>
                            <!-- <td class=" ">{{ $item->category_id }}</td> -->
                            <td><a href="{{route('admin.products.edit',$item->id)}}" class="btn btn-default bg-purple"><i class="fa fa-edit"></i>Edit</a></td>
                            <td><form action="{{route('admin.products.destroy', $item->id)}}" method="POST" id="formDelete">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-default bg-red btnDelete" onclick="return confirm('Bạn có chắc chắn muốn xóa!')"><i class="fa fa-trash "></i>Delete</button>
                                </form>

                                </td>
                          </tr>	
						@endforeach
                        
                                            
</tbody>
                      </table>
                    
                    </div>
	            </div>
	        </div>
            

	    </div>    
					<div class="dataTables_paginate paging_simple_numbers" id="datatable-buttons_paginate">
					<ul class="pagination">
						@if($products->currentPage() !=1)
						<li class="paginate_button previous disabled" id="datatable-buttons_previous">
							<a href="#" aria-controls="datatable-buttons" data-dt-idx="0" tabindex="0">Previous</a>
						</li>
						@endif
						@for ($i=1;$i<= $products->lastPage();$i++)
						<li class="paginate_button {{ ($products->currentPage() == $i) ? 'active' : ' ' }}">
							<a href="{{str_replace('/?','?',$products->url($i))}}">{{$i}}</a>
						</li>
						@endfor
						@if($products->currentPage() !=$products->lastPage())
						<li class="paginate_button next" id="datatable-buttons_next">
							<a href="#" aria-controls="datatable-buttons" data-dt-idx="7" tabindex="0">Next</a>
						</li>
						@endif
						</ul>
							</div>
               </div>	
 
    

    </section>
    <a href="" class="btn btn-default bg-purple">
	                                                <i class="fa fa-edit"></i>
	                                                <span>Edits</span>
	                                            </a>
@endsection
