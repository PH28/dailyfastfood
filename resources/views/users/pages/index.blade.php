@extends('users.master')
@section('content')
<div class="fullwidthbanner-container">
	<div class="fullwidthbanner">
		<div class="bannercontainer" >
	    <div class="banner" >
				<ul>
				@foreach($slides as $sl)
					<!-- THE FIRST SLIDE -->
					<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
		            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
						<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="{{$sl->path}}" data-src="{{$sl->path}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('{{$sl->path}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
						</div>
					</div>

		        </li>
		        @endforeach
				</ul>
			</div>
		</div>

		<div class="tp-bannertimer"></div>
	</div>
</div>
<!--slider-->
<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Đồ ăn</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($eat_cate)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
							@foreach($eat_cate as $eat)
								<div class="col-sm-3" id="pro-{{ $eat->id }}">
									<div class="single-item">
									
										<div>
											@foreach($eat->images as $item1)
                                <img src="{!! url($item1->path) !!}" width="250"  height="200" alt="">
								
                                @endforeach 
										</div>
										<div class="single-item-body">
											<h1 class="single-item-title" id="productName">{{$eat->name}}</h1>
											<p class="single-item-price" style="font-size: 18px">
												<span class="flash-sale" id="price">{{number_format($eat->price)}} đồng</span>
											</p>
										</div>
										<div class="single-item-caption">
											
											<button type="button" productId="{{ $eat->id }}" class="btn btn-sm btn-warning add2cart"><i class="fa fa-shopping-cart"></i></button>
											<a class="beta-btn primary" href="{{route('users.product',$eat->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endforeach
							</div>
							<div class="row">{{$eat_cate->links()}}</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Thức uống</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($drink_cate)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
							@foreach($drink_cate as $drink)
								<div class="col-sm-3" id="pro-{{ $drink->id }}>
									<div class="single-item">
										<div>
											@foreach($drink->images as $item1)
                                <img src="{!! url($item1->path) !!}" width="200"  height="160" alt="{{$item1->name}}">
								
                                @endforeach 
										</div>
										<div class="single-item-body">
											<p class="single-item-title" id="productName">{{$drink->name}}</p>
											<p class="single-item-price"  style="font-size: 18px">
												<span class="flash-sale" id="price">{{number_format($drink->price)}} đồng</span>
											</p>
										</div>
										<div class="single-item-caption">
										<button type="button" productId="{{ $drink->id }}" class="btn btn-sm btn-warning add2cart"><i class="fa fa-shopping-cart"></i></button>
											<a class="beta-btn primary" href="{{route('users.product',$drink->id)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endforeach
							</div>
							<div class="row">{{ $drink_cate->links() }}</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div>
@endsection