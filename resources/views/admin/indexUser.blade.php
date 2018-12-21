@extends('layouts.admin')

@section('contentadmin')
<div class="dashboard_graph pt-10">

    <div class="countries_list">
    <table class="table table-sm table-dark">
		<tr class="">
			<th> ID</th>
			<th> first name</th>
			<th> last name</th>
			<th> ngày sinh</th>
			<th> giới tính</th>
            <th>email</th>
            <th>điện thoại</th>
			<th>quyền</th>
		</tr>
		@foreach( $users as $item)
		
			<tr>
				<td>{{ $item->id }}</td>
				<td>{{ $item->first_name }}</td>
				<td>{{ $item->last_name }}</td>
				<td>{{ $item->dob }}</td>
                <td>{{ $item->gender }}</td>
				<td>{{ $item->email }}</td>
				<td>{{ $item->phone }}</td>
				<td>{{$item->role->name}}</td>

				<td>
					

				</td>
			</tr>
		@endforeach
    
    </div>
</div>







	

@endsection