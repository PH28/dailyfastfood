@extends('users.master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('users.index')}}">Home</a> / <span>Search</span>
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
							<h4>Tìm kiếm : {{ $search }}</h4>
							<div class="beta-products-details">
								
							</div>

							<div class="row">
							@foreach($products as $product)
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="{{ route('users.product', $product->id) }}">
												@foreach($product->images as $p)
													<img src="{{ url($p->path) }}" alt="" height="200px" width="250">
												@endforeach
											</a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$product->name}}</p>
											<p class="single-item-price" style="font-size: 18px">
												<span class="flash-sale">{{number_format($product->price)}} đồng</span>
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
							<div class="row">{{ $products->links() }}</div>
					</div> <!-- .beta-products-list -->

				</div>
			</div> <!-- end section with sidebar and main content -->


		</div> <!-- .main-content -->
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection