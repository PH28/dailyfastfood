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
    <a href="{{route('admin.products.create')}}">create</a>
    <div class="x_content">
        <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
                <thead>
                <tr class="headings">
                <th>
                 <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" id="check-all" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                </th>
                <th class="column-title"> tên  </th>
                <th class="column-title">giá </th>
                <th class="column-title">số lượng </th>
                <th class="column-title">miêu tả </th>
                <th class="column-title">Điện thoại </th>
                <th class="column-title no-link last"><span class="nobr">Action</span>
                </th>
                <th class="bulk-actions" colspan="7">
                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                </th>
                 </tr>
            </thead>

                        <tbody>
						@foreach( $products as $item)
		 					
                          <tr class="even pointer">
<td class="a-center ">
                              <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" name="table_records" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                            </td>
                            <td class=" ">{{ $item->name }}</td>
                            <td class=" ">{{ $item->price }} </td>
                            <td class=" ">{{ $item->quantity }}</td>
                            <td> {{ $item->description }}</td>
                            <!-- <td class=" ">{{ $item->category_id }}</td> -->
                            <td><a href="{{route('admin.products.edit',$item->id)}}">Edit</a></td>
                            <td><form action="{{route('admin.products.destroy', $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form></td>
                          </tr>	
						@endforeach
                        
                                            
</tbody>
                      </table>
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
 
    <section class="content container-fluid">

    </section>

@endsection
