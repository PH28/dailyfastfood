@foreach($posts as $post)
<div class="panel panel-default">
	<div style="border-radius: 5px; background-color: honeydew">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<img src="{{ url('images/users/68220.jpg') }}" alt="Smiley face" width="42" height="42">
				<samp style="font-size:16px;"><b>{{ $post->user->last_name }}</b></samp>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
				<samp>
					<h4 style="padding-top:10px;">{{ $post->content }}</h4>
				</samp>
				<p style="font-size:11px; margin-top:-10px;">{{ date('M d, Y h:i A', strtotime($post->created_at)) }}</p>
			</div>
		</div>



	</div>

</div>

</form>
</div>
@endforeach