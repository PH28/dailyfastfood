@extends('layouts.admin')

@section('content')

  <section class="content-header">
       <h1>
           Add Discount
       </h1>
       <ol class="breadcrumb">
           <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           <li><a href="#">Discounts</a></li>
           <li class="active">Add</li>
       </ol>
   </section>
   <section class="content">
       <form action="{{ route('admin.discounts.store') }}" method="POST">
           @csrf
           <div class="box">
               <div class="box-body row">
                   <div class="form-group{{ $errors->has('percent_discount') ? ' has-error' : '' }} col-md-12">
                       <label>Percent discount</label>
                       <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-keyboard-o"></i>
                          </div>
                          <input type="text" name="percent_discount" class="form-control" value="{{ old('percent_discount') }}">
                       </div>
                            @if ($errors->has('percent_discount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('percent_discount') }}</strong>
                                    </span>
                            @endif
                   </div>
                   <div class="form-group{{ $errors->has('date_start') ? ' has-error' : '' }} col-md-12">
                        <label>Date start</label>
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask name="date_start" value="{{ old('date_start') }}">
                        </div>
                            @if ($errors->has('date_start'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_start') }}</strong>
                                    </span>
                            @endif
                   </div>
                   <div class="form-group{{ $errors->has('date_end') ? ' has-error' : '' }} col-md-12">
                        <label>Date end</label>
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask name="date_end" value="{{ old('date_end') }}">
                        </div>
                            @if ($errors->has('date_end'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_end') }}</strong>
                                    </span>
                            @endif
                   </div>
                   <div class="form-group{{ $errors->has('product_id') ? ' has-error' : '' }} col-md-12">
                       <label>Products</label>
                       <select class="form-control" name="product_id"  value="{{ old('product_id') }}">
                           @foreach($productIds as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                           @endforeach
                       </select>
                            @if ($errors->has('product_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_id') }}</strong>
                                    </span>
                            @endif
                   </div>
               </div>
               <div class="box-footer row">
                   <button type="submit" class="btn btn-success">
                       <i class="fa fa-save"></i>
                       <span>Add and save</span>
                   </button>
               </div>
           </div>
       </form>

@endsection