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
                <li class="active">Customers</li>
            </ul><!-- /.breadcrumb -->

            <div class="nav-search" id="nav-search">
                <form class="form-search">
                    <span class="input-icon">
                        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input"
                            autocomplete="off" />
                        <i class="ace-icon fa fa-search nav-search-icon"></i>
                    </span>
                </form>
            </div><!-- /.nav-search -->
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

            <div class="page-header" style="display: flex;justify-content: space-between">
                <h1><i class="fa fa-list"></i>
                    Customer List
                </h1>
                <div class="btn-group" style="padding-right: 30px">
                    <a class="btn btn-sm btn-primary" href="{{ route('add-customer') }}">
                        <i class="fa fa-plus-circle"></i>
                        Add New
                    </a>
                </div>
            </div><!-- /.page-header -->

            <form action="" method="GET">
                @csrf
                <div class="row" style="display: flex; justify-content:space-between">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="input-group mb-2 width-100" style="width: 100%">
                                    <span class="input-group-addon" style="text-align: left">
                                        Name
                                    </span>
                                    <input type="text" class="form-control" name="name" value="">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="input-group mb-2 width-100" style="width: 100%">
                                    <span class="input-group-addon" style="text-align: left">
                                        Email
                                    </span>
                                    <input type="text" class="form-control" name="email" value="">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="input-group mb-2 width-100" style="width: 100%">
                                    <span class="input-group-addon" style="text-align: left">
                                        Phone
                                    </span>
                                    <input type="text" class="form-control" name="phone" value="">
                                </div>
                            </div>

                            <div class="col-md-2 text-right">
                                <div class="btn-group mb-2">
                                    <button type="submit" class="btn btn-sm btn-black"
                                        style="height: 33px; width: 35px; border-top-left-radius: 2px; border-bottom-left-radius: 2px"><i
                                            class="fa fa-search"></i></button>
                                    <button type="button" class="btn btn-sm btn-dark" onclick="location.href=''"
                                        style="height: 33px; width: 35px; border-top-right-radius: 2px; border-bottom-right-radius: 2px"><i
                                            class="fa fa-refresh"></i></button>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </form><!-- /.search-content -->
            <br>
            @include('partials.flash')
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="table-header-bg">
                                    <th width="5%">SL</th>
                                    <th width="20%">Name</th>
                                    <th width="15%">Email</th>
                                    <th width="10%">Phone</th>
                                    <th width="15%">Current Balance</th>
                                    <th width="15%">Opening Balance</th>
                                    <th width="5%" class="text-center">Status</th>
                                    <th width="15%" class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->email }}</td>
                                        <td>{{ $customer->phone }}</td>
                                        <td>{{ $customer->current_balance }}</td>
                                        <td>{{ $customer->opening_balance }}</td>
                                        <td class="text-center">
                                            <div>
                                                <a class="updateStatus" id="id-1" item-id="1" item-url=""
                                                    href="javascript:void(0)">
                                                    <i class="fa fa-toggle-on text-success" style="font-size: 20px"
                                                        status="Active"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group btn-corner">
                                                <!-- LOG -->
                                                <span class="btn btn-info btn-xs popover-success" data-rel="popover"
                                                    data-placement="top" data-trigger="hover"
                                                    data-original-title="<i class='ace-icon fa fa-info-circle green'></i> Log Information"
                                                    data-content="<p>Created By: .</p> <p> Created At :  </p><hr/><p>Updated By: Mr. Admin.</p> <p> Updated At : 2022-05-30 17:01:59 </p>">
                                                    <i class="fa fa-info-circle"></i>
                                                </span>

                                                <!-- SHOW -->
                                                <a href="#showDetails" role="button" class="btn btn-xs btn-dark"
                                                    title="Show" data-toggle="modal" data-name="" data-email=""
                                                    data-phone="" data-current-balance="" data-opening-balance=""
                                                    data-status="Active">
                                                    <i class="fa fa-eye"></i>
                                                </a>

                                                <!-- EDIT -->
                                                <a href="{{ url('edit-customer', $customer->id) }}"
                                                    class="btn btn-xs btn-success" title="Edit">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </a>

                                                <!-- DELETE -->
                                                <a href="{{ url('delete-customer', $customer->id) }}"
                                                    class="btn btn-xs btn-danger"
                                                    onclick="return confirm('Are you want to delete?')"> <i class="fa fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <span class="pull-right" style="margin-right: 1px">
                            <ul class="pagination">
                                <li class="  disabled ">
                                    <a class="" href="">←
                                        First</a>
                                </li>

                                <li class="  disabled ">
                                    <a class="" href=""><i class="fa fa-angle-double-left"></i></a>
                                </li>
                                <li class="active"><span>1</span></li>

                                <li class="  disabled ">
                                    <a class="" href=""><i class="fa fa-angle-double-right"></i></a>
                                </li>
                                <li class="  disabled ">
                                    <a class="" href="">Last
                                        →</a>
                                </li>
                            </ul>

                        </span>
                    </div>
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
@endsection
