@extends('layouts.master')
@section('title', 'Product')
@section('content')
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>

                <li>
                    <a href="#">Product</a>
                </li>
                <li class="active">Product List</li>
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
                    Product List
                </h1>
                <div class="btn-group" style="padding-right: 30px">
                    <a class="btn btn-sm btn-primary" href="{{ url('add-product') }}">
                        <i class="fa fa-plus-circle"></i>
                        Add New
                    </a>
                </div>
            </div><!-- /.page-header -->
            <!-- PAGE CONTENT BEGINS -->
            <!-- PAGE CONTENT ENDS -->

            @include('partials.flash')
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="table-header-bg">
                                    <th width="2%" class="text-center">SL</th>
                                    <th width="60px">Image</th>
                                    <th width="23%">Name</th>
                                    <th width="10%">Sub Text</th>
                                    <th width="7%">Code</th>
                                    <th width="10%">Type</th>
                                    <th width="10%">Category</th>
                                    <th width="10%">Brand</th>
                                    {{-- <th width="10%">SKU</th> --}}
                                    <th width="7%">MRP</th>
                                    <th width="7%">Vat</th>
                                    <th width="8%" class="text-center">Status</th>
                                    <th width="15%" class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td>
                                        <img src="{{ $product->image }}" alt="product img" width="60px;">
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->sub_text }}</td>
                                    <td>{{ $product->code }}</td>
                                    <td>{{ $product->pt_name }}</td>
                                    <td>{{ $product->cat_name }}</td>
                                    <td>{{ $product->brand }}</td>
                                    <td class="text-center">{{ $product->sale_price }}</td>
                                    <td class="text-center">{{ $product->vat }}</td>
                                    <td class="text-center">
                                        <span class="badge label-success">
                                            Yes
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group btn-corner">
                                            <a href="{{ url('edit-product',$product->id) }}" type="button" class="btn btn-xs btn-success" title="Edit">
                                                <i class="fa fa-pencil-square-o"></i> 
                                            </a>
                                            <a href="{{ url('') }}" title="Delete" type="button" class="btn btn-xs btn-danger"
                                            onclick="return confirm('Are you want to delete?')">
                                                <i class="fa fa-trash"></i> 
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
@endsection
