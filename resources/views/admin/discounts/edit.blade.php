@extends('layouts.admin')

@section('content')

  <section class="content-header">
       <h1>
           Discounts
           <small>Edit Discount</small>
       </h1>
       <ol class="breadcrumb">
           <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           <li><a href="#">Discounts</a></li>
           <li class="active">Edit</li>
       </ol>
   </section>
   <section class="content">
       <form action="{{ route('admin.discounts.update', $discount->id) }}" method="POST">
           @csrf
           @method('PUT')
           <div class="box">
               <div class="box-body row">
                   <div class="form-group{{ $errors->has('percent_discount') ? ' has-error' : '' }} col-md-12">
                       <label>Percent discount</label>
                       <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-keyboard-o"></i>
                          </div>
                          <input type="text" name="percent_discount" class="form-control" value="{{ $discount->percent_discount }}">
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
                          <input type="text" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask name="date_start" value="{{ $discount->date_start }}">
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
                          <input type="text" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask name="date_end" value="{{ $discount->date_end }}">
                        </div>
                            @if ($errors->has('date_end'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_end') }}</strong>
                                    </span>
                            @endif
                   </div>
                   <div class="form-group{{ $errors->has('product_id') ? ' has-error' : '' }} col-md-12">
                       <label>Products</label>
                       <select class="form-control" name="product_id"">
                            @foreach($productIds as $key => $value)
                                @if($key == $discount->product_id)
                                  <option value="{{ $key }}" selected="seleted">{{ $value }}</option>
                                @else
                                  <option value="{{ $key }}">{{ $value }}</option>
                                @endif
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
                       <span>Update</span>
                   </button>
               </div>
           </div>
       </form>

@endsection