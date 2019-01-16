@extends('users.master')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm {{$product->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('users.index')}}">Trang chủ</a> / <span>Thông tin chi tiết sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row" id="pro-{{ $product->id }}">
						<div class="col-sm-4">
							@foreach($product->images as $p)
								<img src="{{url($p->path)}}" alt="">
							@endforeach
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title"><h2 id="productName">{{$product->name}}</h2></p>
								<p class="single-item-price">
										<span class="flash-sale">{{number_format($product->price)}} đồng</span>
										<span hidden id="price">{{$product->price}}</span>
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>{{$product->description}}</p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Số lượng:</p>
							<div class="single-item-options">
								
								<input type="number" name="" value='1' id='qt'> 
								<button type="button" productId="{{ $product->id }}" class="btn btn-sm btn-warning addcart p-3"><i class="fa fa-shopping-cart"></i></button>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Mô tả</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p>{{$product->description}}</p>
						</div>
					</div>
					<div class="space50">&nbsp;
					<input type="hidden" value='/show/{{ $product->id }}' id="url">
					<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
				<input type="hidden"  value="{{Auth::user()}}" id="check">
                    <form id="postForm">
					<!-- @csrf -->
						<div class="col-lg-10 col-md-10 col-sm-6 col-xs-12">
						<textarea class="form-control" name="content" id="post" placeholder="What's on your mind?"></textarea>
						</div>
						<input type="hidden" name="product_id" value="{{$product->id}}">
                       <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
					   <button type="button" id="postBtn" class="btn btn-primary" style="margin-top:5px;"><i class="fa fa-pencil-square-o"></i> POST</button>
					   </div>
                    </form>
                </div>
            </div>
            <div id="postList"></div>
        </div>
    </div>
					</div>
					<div class="beta-products-list">
						<h4>Sản phẩm tương tự</h4>

						<div class="row">
						@foreach($similar_products as $sml_p)
							<div class="col-sm-4" id="pro-{{ $sml_p->id }}">
								<div class="single-item">
									<div class="single-item-header">
										<a href="{{route('users.product', $sml_p->id)}}">
											@foreach($sml_p->images as $sml)
												<img src="{{url($sml->path)}}" alt="" height="150px">
											@endforeach
										</a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title" id="productName">{{$sml_p->name}}</p>
										<p class="single-item-price" style="font-size: 18px">
												<span class="flash-sale">{{number_format($sml_p->price)}} đồng</span>
												<span hidden id="price">{{$sml_p->price}}</span>
										</p>
									</div>
									<div class="single-item-caption">
											<button type="button" productId="{{ $sml_p->id }}" class="btn btn-sm btn-warning add2cart"><i class="fa fa-shopping-cart"></i></button>
											<a class="beta-btn primary" href="{{route('users.product',$sml_p->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
									</div>
								</div>
							</div>
						@endforeach
						</div>
						<div class="row">{{$similar_products->links()}}</div>
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Đồ ăn</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								@foreach($eat_products as $eat)
									<div class="media beta-sales-item">
										@foreach($eat->images as $e)
											<a class="pull-left" href="{{route('users.product', $eat->id)}}"><img src="{{url($e->path)}}" alt=""></a>
										@endforeach
										<div class="media-body">
											<p class="single-item-title">{{ $eat->name }}</p>
											<span class="beta-sales-price">{{ $eat->price }} đồng</span>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div> <!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">Thức uống</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								@foreach($drink_products as $drink)
									<div class="media beta-sales-item">
										@foreach($drink->images as $d)
											<a class="pull-left" href="{{route('users.product', $drink->id)}}"><img src="{{url($d->path)}}" alt=""></a>
										@endforeach
										<div class="media-body">
											<p class="single-item-title">{{ $drink->name }}</p>
											<span class="beta-sales-price">{{ $drink->price }} đồng</span>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
<!-- @section('test')
<script src="{{ asset('js/test.js') }}"></script>
@endtest -->