@extends('users.master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Contacts</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{ route('users.index') }}">Home</a> / <span>Contacts</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="beta-map">
		
		<div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.110466129045!2d108.20677201433662!3d16.05975644395879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b41c93df91%3A0xdec6673c94264f37!2zMjAwIE5ndXnhu4VuIFbEg24gTGluaCwgVGjhuqFjIEdpw6FuLCBUaGFuaCBLaMOqLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1547036293229" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
	</div>
@endsection