@extends('layouts.master')
@section('title', 'Product Types')
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
                <li class="active">Customer Type</li>
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
                    Product Type List
                </h1>
            </div><!-- /.page-header -->

            @include('partials.flash')
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="table-header-bg">
                                    <th width="5%">SL</th>
                                    <th width="20%">Image</th>
                                    <th width="60%">Name</th>
                                    <th width="5%" class="text-center">Status</th>
                                    <th width="10%" class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($types as $type)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>
                                            <img src="{{ $type->image }}" alt="Logo" height="100">
                                        </td>
                                        <td>{{ $type->name }}</td>
                                        <td class="text-center">
                                            <div>
                                                <a class="updateStatus" id="id-6" item-id="6" item-url=""
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
                                                    data-placement="bottom" data-trigger="hover"
                                                    data-original-title="<i class='ace-icon fa fa-info-circle green'></i> Log Information"
                                                    data-content="<p>Created By: </p> <p> Created At : </p><hr/> <p>Updated By: </p> <p> Updated At : </p>">
                                                    <i class="fa fa-info-circle"></i>
                                                </span>

                                                <!-- SHOW -->
                                                <a href="#showDetails" role="button" class="btn btn-xs btn-black"
                                                    title="Show" data-toggle="modal" data-name="General"
                                                    data-status="Active" data-image="">
                                                    <i class="fa fa-eye"></i>
                                                </a>

                                                <!-- EDIT -->
                                                <a href="" class="btn btn-xs btn-success" title="Edit">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
@endsection
