@extends('layouts.admin')

@section('content')
<section class="content-header">
<h1>
        USER
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">User</li>
      </ol>
          </section>
          <section class="content">
          <div class="dashboard_graph pt-10">
<div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
              <div class="count green">{{$totalUser}}</div>
            </div>
			<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"> </span>
              <a href="{{ route('admin.users.create') }}" class="btn btn-success">
	        <i class="fa fa-plus"></i>
	        <span>Add User Admin</span>
	</a>
             
            </div>
          </div>
          <p style="height: 5px"></p>

@if (Session::has('message'))
  <div class="alert alert-info"> {{ Session::get('message') }}</div>
@endif
<div class="box">
	        <div class="box-header with-border">
	            <div class="row">
	                <div class="col-sm-12">     
    <div class="countries_list">
	<h2>Admin</h2>
    <table class="table table-sm table-dark table-hover dataTable">
		<tr class="headings">
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
		@if($item->role_id==1)
			<tr>
				<td>{{ $item->id }}</td>
				<td>{{ $item->first_name }}</td>
				<td>{{ $item->last_name }}</td>
				<td>{{ $item->dob }}</td>
        @if($item->gender==2)
         <td class=" ">male</td>
         @else
          <td class=" ">female</td>
           @endif
				<td>{{ $item->email }}</td>
				<td>{{ $item->phone }}</td>
				<td>{{$item->role->name}}</td>
        <!-- @if($user->id == $item->id)
        <td><form action="{{route('admin.users.destroy', $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                                </td>
         @endif                        -->

				<td>
					

				</td>
			</tr>
			@endif
		@endforeach
    
    </div>
</div>

<div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover dataTable"  role="grid" aria-describedby="example2_info" >
					  <caption><h1>User </h1> </caption>
                        <thead>
                          <tr class="headings">
                            <th>
                              <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" id="check-all" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                            </th>
                            <th class=" sorting">First Name </th>
                            <th class="column-title">Last Name </th>
                            <th class="column-title">DOB </th>
                            <th class="column-title">giới tính </th>
                            <th class="column-title">Email </th>
                            <th class="column-title">Điện thoại </th>
                            <th>address</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            
                          </tr>
                        </thead>

                        <tbody>
						@foreach( $users as $item)
		 					@if($item->role_id==2)
                          <tr class="even pointer">
                            <td class="a-center ">
                              <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" name="table_records" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                            </td>
                            <td class=" ">{{ $item->first_name }}</td>
                            <td class=" ">{{ $item->last_name }}</td>
                            <td class=" ">{{ $item->dob }} <i class="success fa fa-long-arrow-up"></i></td>
                            @if($item->gender==2)
                            <td class=" ">male</td>
                            @else
                            <td class=" ">female</td>
                            @endif
                            <td class=" ">{{ $item->email }}</td>
                            <td class="a-right a-right ">{{ $item->phone }}</td>
                            <td>{{ $item->address}}</td>
                            <td class=" last"><a href="{{route('admin.users.infomation',$item->id)}}">information</a>
                            </td>
                          </tr>
						  @endif	
						@endforeach
                        
                                                    
                        </tbody>
                      </table>
                    </div>
                    </div>
	            </div>
	        </div>
            

	    </div>                     
               </div>
 </section>
@endsection