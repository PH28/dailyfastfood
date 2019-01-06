@extends('users.master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">{{$category->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('users.index')}}">Home</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
</div>
<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-3">
					<ul class="aside-menu">
					@foreach($categories as $cate)
						<li><a href="{{route('users.category', $cate->id)}}">{{$cate->name}}</a></li>
					@endforeach
					</ul>
				</div>
				<div class="col-sm-9">
					<div class="beta-products-list">
						<h4>New Products</h4>
						<div class="beta-products-details">
							<p class="pull-left">Tìm thấy {{count($products_by_category)}} sản phẩm</p>
							<div class="clearfix"></div>
						</div>

						<div class="row">
						@foreach($products_by_category as $product)
							<div class="col-sm-4"  id="pro-{{ $product->id }}">
								<div class="single-item">
									<!-- <div class="single-item-header">
										<a href="{{route('users.product', $product->id)}}"><img src="{{$product->path}}" alt="" height="250px"></a>
									</div> -->
									<div>
											@foreach($product->images as $item1)
                                <img src="{!! url($item1->path) !!}" width="300"  height="240" alt="">
								
                                @endforeach 
										</div>
									<div class="single-item-body">
										<p class="single-item-title" id="productName">{{$product->name}}</p>
										<p class="single-item-price" style="font-size: 18px">
												<span class="flash-sale" id="price">{{number_format($product->price)}} đồng</span>
										</p>
									</div>

									<div class="single-item-caption">
									<button type="button" productId="{{ $product->id }}" class="btn btn-sm btn-warning add2cart"><i class="fa fa-shopping-cart"></i></button>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						@endforeach
						</div>
					</div> <!-- .beta-products-list -->

					<div class="space50">&nbsp;</div>

					<div class="beta-products-list">
						<h4>Sản phẩm khác</h4>
						<div class="beta-products-details">
							<p class="pull-left">Tìm thấy {{count($products_other)}} sản phẩm</p>
							<div class="clearfix"></div>
						</div>
						<div class="row">
						@foreach($products_other as $product_o)
							<div class="col-sm-4" id="pro-{{ $product_o->id }}">
								<div class="single-item">
									<div class="single-item-header">
										<a href="{{route('users.product', $product_o->id)}}"><img src="{{$product_o->path}}" alt="" height="250px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title" id="productName">{{$product_o->name}}</p>
										<p class="single-item-price" style="font-size: 18px">
												<span class="flash-sale" >{{number_format($product_o->price)}} đồng</span>
												<span hidden id="price">{{$product_o->price}}</span>
										</p>
									</div>
									<div>
											@foreach($product_o->images as $item1)
                                <img src="{!! url($item1->path) !!}" width="300"  height="240" alt="">
								
                                @endforeach 
										</div>
									<div class="single-item-caption">
									<button type="button" productId="{{ $product_o->id }}" class="btn btn-sm btn-warning add2cart"><i class="fa fa-shopping-cart"></i></button>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						@endforeach
						</div>
						<div class="row">{{$products_other->links()}}</div>
						<div class="space40">&nbsp;</div>
						
					</div> <!-- .beta-products-list -->
				</div>
			</div> <!-- end section with sidebar and main content -->


		</div> <!-- .main-content -->
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection