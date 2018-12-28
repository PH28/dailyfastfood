@extends('layouts.admin')

@section('content')
<div class="container">
<div class="x_panel">
        <h2>create user</h2>
    <div class="x_title">
        
        </div>
            <div class="x_content" style="display: block;">
                    @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            <div class="dashboard-widget-content">
            <div class="col-md-9 hidden-small">
                    <form action="{{route('admin.users.store')}}"  method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                          <div class="form-group">
                            <label for="first_name">First Name:</label>
                            <input type="text" class="form-control" placeholder="Nhập tên" name="first_name">
                            @if ($errors->has('first_name'))
                            <p class="text-danger">{{ $errors->first('first_name') }}</p>
                            @endif
                          </div>
                          <div class="form-group">
                                <label for="last_name">Last Name:</label>
                                <input type="text" class="form-control" placeholder="Nhập tên" name="last_name">
                                @if ($errors->has('last_name'))
                                <p class="text-danger">{{ $errors->first('last_name') }}</p>
                                @endif
                              </div>
                              @if( $errors->has('gender'))
                              <p>{{$errors->first('gender')}}</p>
                          @endif
                          <ul class="gendercheck">
                              
                                  <input type="radio" id="male" value="1" name="gender" checked>
                                  <label for=""><span></span>MALE</label>
                                  <input type="radio" id="female" value="2" name="gender">
                                  <label for=""><span></span>FEMALE</label>
                              
                          </ul>
                          <div class="form-group">
                            <label for="phone">Phone Number</label>:</label>
                            <input type="number" class="form-control" placeholder="Nhập số điện thoại" name="phone">
                            @if ($errors->has('phone'))
                            <p class="text-danger">{{ $errors->first('phone') }}</p>
                            @endif
                          </div>
                          <div class="form-group">
                            <label for="dob">birthday </label>:</label>
                            <input type="date" class="form-control" placeholder="ngày sinh" name="dob">
                            @if ($errors->has('dob'))
                            <p class="text-danger">{{ $errors->first('dob') }}</p>
                            @endif
                          </div>
                      
                          <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" placeholder="Nhập email" name="email">
                            @if ($errors->has('email'))
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                            @endif
                          
                        </div>
                      
                          <div class="form-group">
                            <label for="password">password:</label>
                            <input type="password" class="form-control"  placeholder="Nhập mật khẩu" name="password">
                            @if ($errors->has('password'))
                            <p class="text-danger">{{ $errors->first('password') }}</p>
                            @endif
                          </div>
                      
                          <div class="form-group">
                            <label for="address">address</label>
                            <input type="text" class="form-control" placeholder="Nhập địa chỉ" name="address">
                            @if ($errors->has('address'))
                            <p class="text-danger">{{ $errors->first('address') }}</p>
                            @endif
                          </div>
                      
                          <div class="form-group">
                              <label for="avata">Ảnh đại diện</label>
                              <input type="file" name="avata" class="form-control">
                              @if (session('message_errors'))
                                 <div class="alert alert-danger">
                                  {{ session('message_errors') }}
                                 </div>
                              @endif
                          </div>
                          
                          <button type="submit" class="btn btn-primary">Tạo mới</button>
                        </form>
            </div>
            </div>
            </div>  
             
</div>
@endsection