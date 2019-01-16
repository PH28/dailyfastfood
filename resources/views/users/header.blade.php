<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i> 200 Nguyễn Văn Linh - Đà Nẵng</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 0898.225.425</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
					@if(Auth::check())
						<li><a href="">Chào bạn {{ Auth::user()->first_name }}  {{ Auth::user()->last_name }}</a></li>
						<li><a href="{{route('logout')}}">Đăng xuất</a></li>
					@else
						<li><a href="{{route('register')}}">Đăng kí</a></li>
						<li><a href="{{route('login')}}">Đăng nhập</a></li>
					@endif

					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="{{ route('users.index') }}" id="logo"><img src="{{ url('user/images/logo-fastfood.jpeg') }}" width="200px" height="80px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="GET" id="searchform" action="{{ route('users.searchProduct') }}">
					        <input type="text" value="" name="search" id="s" placeholder="Search here..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">

							<!-- <div class="beta-select"> -->
							<div class="cart">
							<a  class="fa fa-shopping-cart" href="{{route('users.cart')}}" data-toggle="tooltip" data-placement="left" title="Cart">cart</a>
							
							</div>

					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{route('users.index')}}">Trang chủ</a></li>
						<li><a href="">Sản phẩm</a>
							<ul class="sub-menu">
								@foreach($categories as $cate)
								<li><a href="{{route('users.category',$cate->id)}}">{{$cate->name}}</a></li>
								@endforeach
							</ul>
						</li>
						<li><a href="{{route('users.about')}}">Giới thiệu</a></li>
						<li><a href="{{route('users.contact')}}">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->