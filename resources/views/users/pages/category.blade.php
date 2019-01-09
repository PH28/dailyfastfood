@extends('users.master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('users.index')}}">Home</a> / <span>Loại sản phẩm</span>
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
						<h4>{{ $category->name }}</h4>
						<div class="beta-products-details">
							
						</div>

						<div class="row">
						@foreach($products_by_category as $product_cate)
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="{{ route('users.product', $product_cate->id) }}">
											@foreach($product_cate->images as $p_cate)
												<img src="{{ url($p_cate->path) }}" alt="" height="200px" width="250">
											@endforeach
										</a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$product_cate->name}}</p>
										<p class="single-item-price" style="font-size: 18px">
												<span class="flash-sale">{{number_format($product->price)}} đồng</span>
												<span hidden id="price">{{$product->price}}</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href=""><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="">Details <i class="fa fa-chevron-right"></i></a>
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
							<div class="col-sm-4">
								<div class="single-item">

									<div class="single-item-header">
										<a href="{{ route('users.product', $product_o->id) }}">
											@foreach($product_o->images as $o)
												<img src="{{ url($o->path) }}" alt="" height="200px" width="250">
											@endforeach
										</a>
									</div>

									<div class="single-item-body">
										<p class="single-item-title">{{$product_o->name}}</p>
										<p class="single-item-price" style="font-size: 18px">
												<span class="flash-sale" >{{number_format($product_o->price)}} đồng</span>
												<span hidden id="price">{{$product_o->price}}</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href=""><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="">Details <i class="fa fa-chevron-right"></i></a>
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