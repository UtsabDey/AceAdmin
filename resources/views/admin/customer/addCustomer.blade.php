@extends('layouts.master')
@section('title', 'Customer')
@section('content')
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>

                <li>
                    <a href="#">Customer</a>
                </li>
                <li class="active">Add Customer</li>
            </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
            <div class="ace-settings-container" id="ace-settings-container">
                <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                    <i class="ace-icon fa fa-cog bigger-130"></i>
                </div>

                <div class="ace-settings-box clearfix" id="ace-settings-box">
                    <div class="pull-left width-50">
                        <div class="ace-settings-item">
                            <div class="pull-left">
                                <select id="skin-colorpicker" class="hide">
                                    <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                    <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                    <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                    <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                </select>
                            </div>
                            <span>&nbsp; Choose Skin</span>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar"
                                autocomplete="off" />
                            <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar"
                                autocomplete="off" />
                            <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs"
                                autocomplete="off" />
                            <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
                            <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container"
                                autocomplete="off" />
                            <label class="lbl" for="ace-settings-add-container">
                                Inside
                                <b>.container</b>
                            </label>
                        </div>
                    </div><!-- /.pull-left -->

                    <div class="pull-left width-50">
                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
                            <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact"
                                autocomplete="off" />
                            <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight"
                                autocomplete="off" />
                            <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                        </div>
                    </div><!-- /.pull-left -->
                </div><!-- /.ace-settings-box -->
            </div><!-- /.ace-settings-container -->

            <div class="page-header">
                <h1><i class="fa fa-pencil"></i>
                    Customer
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Add &amp; customer
                    </small>
                </h1>
            </div><!-- /.page-header -->
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="widget-body">
                        <div class="widget-main">
                            <form class="form-horizontal mt-2" action="{{ route('add-customer-submit') }}" method="POST">
                                @csrf
                                <div class="row" style="margin-bottom: 30px">
                                    <div class="col-lg-5" style="margin-left: 80px">
                                        <div class="form-group">
                                            <input type="hidden" value="0" name="reffered_by">
                                            <div class="input-group width-100">
                                                <span class="input-group-addon width-30" style="text-align: left"> Register
                                                    From</span>
                                                <select class="form-control select2 select2-hidden-accessible"
                                                    name="register_from" id="register_from" data-placeholder="- Select -"
                                                    style="width: 100%" tabindex="-1" aria-hidden="true">
                                                    <option></option>
                                                    <option value="showroom" selected="">Showroom</option>
                                                    <option value="eccomerce">Eccomerce</option>
                                                    <option value="both">Both</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group width-100">
                                                <span class="input-group-addon width-30" style="text-align: left"> Customer
                                                    Type <span class="label-required" style="color: red">*</span></span>
                                                <select name="customer_type_id" id="customer_type_id"
                                                    class="form-control select2 select2-hidden-accessible"
                                                    data-placeholder="--- Select Customer Type ---" style="width: 100%"
                                                    tabindex="-1" aria-hidden="true">
                                                    <option value="">--- Select Type ---</option>
                                                    @foreach ($types as $type)
                                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group width-100">
                                                <span class="input-group-addon width-30" style="text-align: left"> Name
                                                    <span class="label-required" style="color: red">*</span></span>
                                                <input type="text" class="form-control" name="name" id="name" value=""
                                                    placeholder="Customer Name" required="">
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <div class="input-group width-100">
                                                <span class="input-group-addon width-30" style="text-align: left">
                                                    Email</span>
                                                <input type="text" class="form-control" name="email" id="email" value=""
                                                    placeholder="Customer Email">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group width-100">
                                                <span class="input-group-addon width-30" style="text-align: left">
                                                    Phone <span class="label-required" style="color: red">*</span></span>
                                                <input type="text" class="form-control" name="phone" id="phone" value=""
                                                    placeholder="Customer Phone" required="">
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <div class="input-group width-100">
                                                <span class="input-group-addon width-30" style="text-align: left">
                                                    Gender</span>
                                                <select class="form-control select2 select2-hidden-accessible" name="gender"
                                                    id="gender" onchange="getAreas(this)" data-placeholder="- Select -"
                                                    style="width: 100%" tabindex="-1" aria-hidden="true">
                                                    <option value="">--- Select Gender ---</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group width-100">
                                                <span class="input-group-addon width-30" style="text-align: left"> Address
                                                </span>
                                                <textarea name="address" id="address" class="form-control" placeholder="Customer Address"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5" style="margin-left: 30px; margin-right: 60px">
                                        <div class="form-group">
                                            <div class="input-group width-100">
                                                <span class="input-group-addon width-30" style="text-align: left"> Country
                                                </span>
                                                <input type="text" class="form-control" name="country"
                                                    id="customerCountry" value="Bangladesh" placeholder=" Country"
                                                    readonly="">
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <div class="input-group width-100">
                                                <span class="input-group-addon width-30"
                                                    style="text-align: left">District</span>
                                                <select name="district_id" id="district_id" onchange="getAreas(this)"
                                                    class="form-control select2 select2-hidden-accessible"
                                                    data-placeholder="--- Select District ---" style="width: 100%"
                                                    tabindex="-1" aria-hidden="true">
                                                    <option value="">--- Select District ---</option>
                                                    @foreach ($districts as $district)
                                                        <option value="{{ $district->id }}">{{ $district->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group width-100">
                                                <span class="input-group-addon width-30"
                                                    style="text-align: left">Area</span>
                                                <select name="area_id" id="area_id"
                                                    class="form-control select2 select2-hidden-accessible"
                                                    data-placeholder="--- Select an Area ---" style="width: 100%"
                                                    tabindex="-1" aria-hidden="true">
                                                    <option value="">--- Select an Area ---</option>
                                                    @foreach ($areas as $area)
                                                        <option value="{{ $area->id }}">{{ $area->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group width-100">
                                                <span class="input-group-addon width-30" style="text-align: left"> Zip
                                                    Code</span>
                                                <input type="text" class="form-control" name="zip_code"
                                                    id="customerZipCode" value="" placeholder="ZIP Code">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group width-100">
                                                <span class="input-group-addon width-30" style="text-align: left"> Opening
                                                    Balance</span>
                                                <input type="text" class="form-control" name="opening_balance"
                                                    id="opening_balance" value="" placeholder="Customer Opening Balance">
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <div class="input-group width-100">
                                                <span class="input-group-addon width-30" style="text-align: left"> Current
                                                    Balance</span>
                                                <input type="text" class="form-control" name="current_balance"
                                                    id="current_balance" value="" placeholder="Customer Current Balance">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" style="display: flex; justify-content: center;">
                                    <div class="col-sm-8" style="display: flex; justify-content: end;">
                                        <label class="col-sm-4 col-xs-4 control-label" for="form-field-1-1"
                                            style="margin-left:-12px"> Status </label>
                                        <div class="col-sm-8 col-xs-8">
                                            <label style="margin-top: 7px">
                                                <input name="status" class="ace ace-switch ace-switch-6" type="checkbox"
                                                    checked="">
                                                <span class="lbl"></span>
                                            </label>
                                        </div>
                                        <label class="col-sm-4 col-xs-4 control-label" for="form-field-1-1"
                                            style="margin-left:-12px"> Default </label>
                                        <div class="col-sm-8 col-xs-8">
                                            <label style="margin-top: 7px">
                                                <input name="is_default" class="ace ace-switch ace-switch-6"
                                                    type="checkbox" checked="">
                                                <span class="lbl"></span>
                                            </label>
                                        </div>

                                    </div>

                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12 text-right">
                                        <div class="btn-group">
                                            <button type="submit" class="btn btn-sm btn-success"> <i
                                                    class="fa fa-save"></i> Submit
                                            </button>
                                            <a href="{{ route('get-customers') }}" class="btn btn-sm btn-info"> <i
                                                    class="fa fa-list"></i> List </a>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
@endsection
