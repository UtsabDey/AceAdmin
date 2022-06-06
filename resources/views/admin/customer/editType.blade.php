@extends('layouts.master')
@section('title', 'Customer Type')
@section('content')
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>

                <li>
                    <a href="#">Customer Type</a>
                </li>
                <li class="active">Edit Customer Type</li>
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

            <div class="page-header" style="display: flex;justify-content: space-between">
                <h1><i class="fa fa-pencil"></i>
                    Edit Customer Type
                </h1>
            </div><!-- /.page-header -->
            <br>
            @include('partials.flash')
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="widget-body">
                        <div class="widget-main">
                            <form class="form-horizontal mt-2" action="{{ url('edit-type-submit',$types->id ) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <!-- NAME -->
                                        <div class="form-group">
                                        <input type="hidden" name="id" value="{{ $types->id }}">
                                            <div class="input-group width-100">
                                                <span class="input-group-addon width-30" style="text-align: left">Name <sup
                                                        class="text-danger">*</sup></span>
                                                <input type="text" class="form-control" name="name" id="name" value="{{ $types->name }}"
                                                    placeholder="Name" required="">
                                            </div>

                                        </div>

                                        <!-- Percentage -->
                                        <div class="form-group">
                                            <div class="input-group width-100">
                                                <span class="input-group-addon width-30" style="text-align: left">Percentage
                                                    (<span class="text-info">%</span>)</span>
                                                <textarea name="percentage" id="percentage" class="form-control" placeholder="Percentage">{{ $types->percentage }}</textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="col-sm-9 col-xs-4 text-right" for="form-field-1-1"> Status
                                                    </label>
                                                    <div class="col-sm-3 col-xs-8">
                                                        <label>
                                                            <input name="status" class="ace ace-switch ace-switch-6"
                                                                type="checkbox" checked="">
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ACTION -->
                                        <div class="btn-group pull-right">
                                            <button type="submit" class="btn btn-sm btn-primary"> <i
                                                    class="fa fa-save"></i> Save
                                            </button>
                                            <a href="" class="btn btn-sm btn-secondary"> <i class="fa fa-list"></i> List
                                            </a>
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
