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
                    Add Product
                </h1>
            </div><!-- /.page-header -->

            @include('partials.flash')
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <form action="{{ url('add-product-submit') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">

                            <!-- PRODUCT TYPE -->
                            <div class="input-group width-100 mb-1">
                                <span class="input-group-addon width-30" style="text-align: left">
                                    <span id="productTypeLabel">Product Type</span>
                                    <span class="label-required" style="color: red">*</span>
                                </span>
                                <select name="product_type_id" id="product_type_id"
                                    class="form-control select2 select2-hidden-accessible" data-placeholder="--- Select ---"
                                    onchange="productTypeData(this)" style="width: 100%" required="" tabindex="-1"
                                    aria-hidden="true">
                                    <option value="">--- Select ---</option>
                                    @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div><br>

                            <!-- CATEGORY -->
                            <div class="input-group width-100 mb-1">
                                <span class="input-group-addon width-30" style="text-align: left">
                                    <span id="categoryLabel">Category</span>
                                    <span class="label-required" style="color: red">*</span>
                                </span>
                                <select name="category_id" id="category_id"
                                    class="form-control select2 select2-hidden-accessible" data-placeholder="--- Select ---"
                                    required="" style="width: 100%" tabindex="-1" aria-hidden="true">
                                    <option value="">--- Select ---</option>
                                    @foreach ($cats as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div><br>

                            <!-- BRAND -->
                            <div class="input-group width-100 mb-1 fashion-type-field">
                                <span class="input-group-addon width-30" style="text-align: left">
                                    <span id="brandLabel">Brand</span>
                                </span>
                                <input type="text" class="form-control" name="brand" id="brand" value="">
                            </div><br>

                            <!-- UNIT -->
                            <div class="input-group width-100 mb-1">
                                <span class="input-group-addon width-30" style="text-align: left">
                                    <span id="unitLabel">Unit Measure</span>
                                    <span class="label-required" style="color: red">*</span>
                                </span>
                                <input type="text" class="form-control text-center" autocomplete="off" style="width: 50%"
                                    name="sub_text" id="sub_text" placeholder="e.g. 10" value="">
                                <select name="unit_measure_id" id="unit_measure_id"
                                    class="form-control select2 select2-hidden-accessible" data-placeholder="--- Select ---"
                                    style="width: 50%" required="" tabindex="-1" aria-hidden="true">
                                    <option></option>
                                    <option value="1">
                                        gm
                                    </option>
                                    <option value="2">
                                        Kg
                                    </option>
                                    <option value="3">
                                        Ltr
                                    </option>
                                    <option value="4">
                                        ml
                                    </option>
                                    <option value="5">
                                        Pcs
                                    </option>
                                    <option value="6">
                                        Piece
                                    </option>
                                </select>
                            </div><br>

                            <!-- COUNTRY ORIGIN -->
                            <div class="input-group width-100 mb-1 fashion-type-field">
                                <span class="input-group-addon width-30" style="text-align: left">
                                    <span id="countryOriginLabel">Country Origin</span>
                                </span>
                                <select name="country_id" id="country_id"
                                    class="form-control select2 select2-hidden-accessible" data-placeholder="--- Select ---"
                                    style="width: 100%" tabindex="-1" aria-hidden="true">
                                    <option></option>
                                    <option value="1">
                                        Afghanistan</option>
                                    <option value="2">
                                        Albania</option>
                                    <option value="3">
                                        Algeria</option>
                                    <option value="4">
                                        American Samoa</option>
                                    <option value="5">
                                        Andorra</option>
                                    <option value="6">
                                        Angola</option>
                                    <option value="7">
                                        Anguilla</option>
                                    <option value="8">
                                        Antarctica</option>
                                    <option value="9">
                                        Antigua and Barbuda</option>
                                    <option value="10">
                                        Argentina</option>
                                    <option value="11">
                                        Armenia</option>
                                    <option value="12">
                                        Aruba</option>
                                    <option value="13">
                                        Australia</option>
                                    <option value="14">
                                        Austria</option>
                                    <option value="15">
                                        Azerbaijan</option>
                                    <option value="16">
                                        Bahamas</option>
                                    <option value="17">
                                        Bahrain</option>
                                    <option value="18">
                                        Bangladesh</option>
                                    <option value="19">
                                        Barbados</option>
                                    <option value="20">
                                        Belarus</option>
                                    <option value="21">
                                        Belgium</option>
                                    <option value="22">
                                        Belize</option>
                                    <option value="23">
                                        Benin</option>
                                    <option value="24">
                                        Bermuda</option>
                                    <option value="25">
                                        Bhutan</option>
                                    <option value="26">
                                        Bolivia</option>
                                    <option value="27">
                                        Bosnia and Herzegowina</option>
                                    <option value="28">
                                        Botswana</option>
                                    <option value="29">
                                        Bouvet Island</option>
                                    <option value="30">
                                        Brazil</option>
                                    <option value="31">
                                        British Indian Ocean Territory</option>
                                    <option value="32">
                                        Brunei Darussalam</option>
                                    <option value="33">
                                        Bulgaria</option>
                                    <option value="34">
                                        Burkina Faso</option>
                                    <option value="35">
                                        Burundi</option>
                                    <option value="36">
                                        Cambodia</option>
                                    <option value="37">
                                        Cameroon</option>
                                    <option value="38">
                                        Canada</option>
                                    <option value="39">
                                        Cape Verde</option>
                                    <option value="40">
                                        Cayman Islands</option>
                                    <option value="41">
                                        Central African Republic</option>
                                    <option value="42">
                                        Chad</option>
                                    <option value="43">
                                        Chile</option>
                                    <option value="44">
                                        China</option>
                                    <option value="45">
                                        Christmas Island</option>
                                    <option value="46">
                                        Cocos (Keeling) Islands</option>
                                    <option value="47">
                                        Colombia</option>
                                    <option value="48">
                                        Comoros</option>
                                    <option value="49">
                                        Congo</option>
                                    <option value="50">
                                        Congo, the Democratic Republic of the</option>
                                    <option value="51">
                                        Cook Islands</option>
                                    <option value="52">
                                        Costa Rica</option>
                                    <option value="53">
                                        Cote d'Ivoire</option>
                                    <option value="54">
                                        Croatia (Hrvatska)</option>
                                    <option value="55">
                                        Cuba</option>
                                    <option value="56">
                                        Cyprus</option>
                                    <option value="57">
                                        Czech Republic</option>
                                    <option value="58">
                                        Denmark</option>
                                    <option value="59">
                                        Djibouti</option>
                                    <option value="60">
                                        Dominica</option>
                                    <option value="61">
                                        Dominican Republic</option>
                                    <option value="62">
                                        East Timor</option>
                                    <option value="63">
                                        Ecuador</option>
                                    <option value="64">
                                        Egypt</option>
                                    <option value="65">
                                        El Salvador</option>
                                    <option value="66">
                                        Equatorial Guinea</option>
                                    <option value="67">
                                        Eritrea</option>
                                    <option value="68">
                                        Estonia</option>
                                    <option value="69">
                                        Ethiopia</option>
                                    <option value="70">
                                        Falkland Islands (Malvinas)</option>
                                    <option value="71">
                                        Faroe Islands</option>
                                    <option value="72">
                                        Fiji</option>
                                    <option value="73">
                                        Finland</option>
                                    <option value="74">
                                        France</option>
                                    <option value="75">
                                        France Metropolitan</option>
                                    <option value="76">
                                        French Guiana</option>
                                    <option value="77">
                                        French Polynesia</option>
                                    <option value="78">
                                        French Southern Territories</option>
                                    <option value="79">
                                        Gabon</option>
                                    <option value="80">
                                        Gambia</option>
                                    <option value="81">
                                        Georgia</option>
                                    <option value="82">
                                        Germany</option>
                                    <option value="83">
                                        Ghana</option>
                                    <option value="84">
                                        Gibraltar</option>
                                    <option value="85">
                                        Greece</option>
                                    <option value="86">
                                        Greenland</option>
                                    <option value="87">
                                        Grenada</option>
                                    <option value="88">
                                        Guadeloupe</option>
                                    <option value="89">
                                        Guam</option>
                                    <option value="90">
                                        Guatemala</option>
                                    <option value="91">
                                        Guinea</option>
                                    <option value="92">
                                        Guinea-Bissau</option>
                                    <option value="93">
                                        Guyana</option>
                                    <option value="94">
                                        Haiti</option>
                                    <option value="95">
                                        Heard and Mc Donald Islands</option>
                                    <option value="96">
                                        Holy See (Vatican City State)</option>
                                    <option value="97">
                                        Honduras</option>
                                    <option value="98">
                                        Hong Kong</option>
                                    <option value="99">
                                        Hungary</option>
                                    <option value="100">
                                        Iceland</option>
                                    <option value="101">
                                        India</option>
                                    <option value="102">
                                        Indonesia</option>
                                    <option value="103">
                                        Iran (Islamic Republic of)</option>
                                    <option value="104">
                                        Iraq</option>
                                    <option value="105">
                                        Ireland</option>
                                    <option value="106">
                                        Israel</option>
                                    <option value="107">
                                        Italy</option>
                                    <option value="108">
                                        Jamaica</option>
                                    <option value="109">
                                        Japan</option>
                                    <option value="110">
                                        Jordan</option>
                                    <option value="111">
                                        Kazakhstan</option>
                                    <option value="112">
                                        Kenya</option>
                                    <option value="113">
                                        Kiribati</option>
                                    <option value="114">
                                        Korea, Democratic People's Republic of</option>
                                    <option value="115">
                                        Korea, Republic of</option>
                                    <option value="116">
                                        Kuwait</option>
                                    <option value="117">
                                        Kyrgyzstan</option>
                                    <option value="118">
                                        Lao, People's Democratic Republic</option>
                                    <option value="119">
                                        Latvia</option>
                                    <option value="120">
                                        Lebanon</option>
                                    <option value="121">
                                        Lesotho</option>
                                    <option value="122">
                                        Liberia</option>
                                    <option value="123">
                                        Libyan Arab Jamahiriya</option>
                                    <option value="124">
                                        Liechtenstein</option>
                                    <option value="125">
                                        Lithuania</option>
                                    <option value="126">
                                        Luxembourg</option>
                                    <option value="127">
                                        Macau</option>
                                    <option value="128">
                                        Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="129">
                                        Madagascar</option>
                                    <option value="130">
                                        Malawi</option>
                                    <option value="131">
                                        Malaysia</option>
                                    <option value="132">
                                        Maldives</option>
                                    <option value="133">
                                        Mali</option>
                                    <option value="134">
                                        Malta</option>
                                    <option value="135">
                                        Marshall Islands</option>
                                    <option value="136">
                                        Martinique</option>
                                    <option value="137">
                                        Mauritania</option>
                                    <option value="138">
                                        Mauritius</option>
                                    <option value="139">
                                        Mayotte</option>
                                    <option value="140">
                                        Mexico</option>
                                    <option value="141">
                                        Micronesia, Federated States of</option>
                                    <option value="142">
                                        Moldova, Republic of</option>
                                    <option value="143">
                                        Monaco</option>
                                    <option value="144">
                                        Mongolia</option>
                                    <option value="145">
                                        Montserrat</option>
                                    <option value="146">
                                        Morocco</option>
                                    <option value="147">
                                        Mozambique</option>
                                    <option value="148">
                                        Myanmar</option>
                                    <option value="149">
                                        Namibia</option>
                                    <option value="150">
                                        Nauru</option>
                                    <option value="151">
                                        Nepal</option>
                                    <option value="152">
                                        Netherlands</option>
                                    <option value="153">
                                        Netherlands Antilles</option>
                                    <option value="154">
                                        New Caledonia</option>
                                    <option value="155">
                                        New Zealand</option>
                                    <option value="156">
                                        Nicaragua</option>
                                    <option value="157">
                                        Niger</option>
                                    <option value="158">
                                        Nigeria</option>
                                    <option value="159">
                                        Niue</option>
                                    <option value="160">
                                        Norfolk Island</option>
                                    <option value="161">
                                        Northern Mariana Islands</option>
                                    <option value="162">
                                        Norway</option>
                                    <option value="163">
                                        Oman</option>
                                    <option value="164">
                                        Pakistan</option>
                                    <option value="165">
                                        Palau</option>
                                    <option value="166">
                                        Panama</option>
                                    <option value="167">
                                        Papua New Guinea</option>
                                    <option value="168">
                                        Paraguay</option>
                                    <option value="169">
                                        Peru</option>
                                    <option value="170">
                                        Philippines</option>
                                    <option value="171">
                                        Pitcairn</option>
                                    <option value="172">
                                        Poland</option>
                                    <option value="173">
                                        Portugal</option>
                                    <option value="174">
                                        Puerto Rico</option>
                                    <option value="175">
                                        Qatar</option>
                                    <option value="176">
                                        Reunion</option>
                                    <option value="177">
                                        Romania</option>
                                    <option value="178">
                                        Russian Federation</option>
                                    <option value="179">
                                        Rwanda</option>
                                    <option value="180">
                                        Saint Kitts and Nevis</option>
                                    <option value="181">
                                        Saint Lucia</option>
                                    <option value="182">
                                        Saint Vincent and the Grenadines</option>
                                    <option value="183">
                                        Samoa</option>
                                    <option value="184">
                                        San Marino</option>
                                    <option value="185">
                                        Sao Tome and Principe</option>
                                    <option value="186">
                                        Saudi Arabia</option>
                                    <option value="187">
                                        Senegal</option>
                                    <option value="188">
                                        Seychelles</option>
                                    <option value="189">
                                        Sierra Leone</option>
                                    <option value="190">
                                        Singapore</option>
                                    <option value="191">
                                        Slovakia (Slovak Republic)</option>
                                    <option value="192">
                                        Slovenia</option>
                                    <option value="193">
                                        Solomon Islands</option>
                                    <option value="194">
                                        Somalia</option>
                                    <option value="195">
                                        South Africa</option>
                                    <option value="196">
                                        South Georgia and the South Sandwich Islands</option>
                                    <option value="197">
                                        Spain</option>
                                    <option value="198">
                                        Sri Lanka</option>
                                    <option value="199">
                                        St. Helena</option>
                                    <option value="200">
                                        St.
                                        Pierre and Miquelon</option>
                                    <option value="201">
                                        Sudan</option>
                                    <option value="202">
                                        Suriname</option>
                                    <option value="203">
                                        Svalbard and Jan Mayen Islands</option>
                                    <option value="204">
                                        Swaziland</option>
                                    <option value="205">
                                        Sweden</option>
                                    <option value="206">
                                        Switzerland</option>
                                    <option value="207">
                                        Syrian Arab Republic</option>
                                    <option value="208">
                                        Taiwan, Province of China</option>
                                    <option value="209">
                                        Tajikistan</option>
                                    <option value="210">

                                        Tanzania, United Republic of</option>
                                    <option value="211">
                                        Thailand</option>
                                    <option value="212">
                                        Togo</option>
                                    <option value="213">
                                        Tokelau</option>
                                    <option value="214">
                                        Tonga</option>
                                    <option value="215">
                                        Trinidad and Tobago</option>
                                    <option value="216">
                                        Tunisia</option>
                                    <option value="217">
                                        Turkey</option>
                                    <option value="218">
                                        Turkmenistan</option>
                                    <option value="219">
                                        Turks and Caicos Islands</option>
                                    <option value="220">
                                        Tuvalu</option>
                                    <option value="221">
                                        Uganda</option>
                                    <option value="222">
                                        Ukraine</option>
                                    <option value="223">
                                        United Arab Emirates</option>
                                    <option value="224">
                                        United Kingdom</option>
                                    <option value="225">
                                        United States</option>
                                    <option value="226">
                                        United States Minor Outlying Islands</option>
                                    <option value="227">
                                        Uruguay</option>
                                    <option value="228">
                                        Uzbekistan</option>
                                    <option value="229">
                                        Vanuatu</option>
                                    <option value="230">
                                        Venezuela</option>
                                    <option value="231">
                                        Vietnam</option>
                                    <option value="232">
                                        Virgin Islands (British)</option>
                                    <option value="233">
                                        Virgin Islands (U.S.)</option>
                                    <option value="234">
                                        Wallis and Futuna Islands</option>
                                    <option value="235">
                                        Western Sahara</option>
                                    <option value="236">
                                        Yemen</option>
                                    <option value="237">
                                        Yugoslavia</option>
                                    <option value="238">
                                        Zambia</option>
                                    <option value="239">
                                        Zimbabwe</option>
                                </select>
                            </div><br>

                            <!-- NAME -->
                            <div class="input-group width-100 mb-1">
                                <span class="input-group-addon width-30" style="text-align: left">
                                    <span id="nameLabel">Product Name</span>
                                    <span class="label-required" style="color: red">*</span>
                                </span>
                                <input type="text" class="form-control" name="name" id="name" value="" required="">
                            </div><br>

                            <!-- STATUS -->
                            <div class="form-group">
                                <label class="col-sm-9 col-xs-4 text-right" for="form-field-1-1"> Status
                                </label>
                                <div class="col-sm-3 col-xs-8 pull-right">
                                    <label>
                                        <input name="status" class="ace ace-switch ace-switch-6" type="checkbox" checked="">
                                        <span class="lbl"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">

                            <!-- CODE -->
                            <div class="input-group width-100 my-1">
                                <span class="input-group-addon width-30" style="text-align: left">
                                    <span id="codeLabel">Product Code</span>
                                </span>
                                <input type="text" class="form-control" name="code" id="code" value="">
                            </div>
                            <span id="code_error" class="text-danger"></span><br>

                            <!-- PURCHASE PRICE -->
                            <div class="input-group width-100 mb-1">
                                <span class="input-group-addon width-30" style="text-align: left">
                                    <span id="purchasePriceLabel">Purchase Price</span>
                                </span>
                                <input type="text" class="form-control only-number" name="purchase_price"
                                    id="purchase_price" value="" autocomplete="off">
                            </div><br>

                            <!-- WHOLESALE PRICE -->
                            <div class="input-group width-100 mb-1">
                                <span class="input-group-addon width-30" style="text-align: left">
                                    <span id="wholeSalePriceLabel">Wholesale Price</span>
                                </span>
                                <input type="text" class="form-control only-number" name="wholesale_price"
                                    id="wholesale_price" value="" autocomplete="off">
                            </div><br>

                            <!-- SALE PRICE -->
                            <div class="input-group width-100 mb-1">
                                <span class="input-group-addon width-30" style="text-align: left">
                                    <span id="salePriceLabel">Sale Price</span>
                                </span>
                                <input type="text" class="form-control only-number" name="sale_price" id="sale_price"
                                    value="" autocomplete="off">
                            </div><br>

                            <!-- VAT -->
                            <div class="input-group width-100 mb-1">
                                <span class="input-group-addon width-30" style="text-align: left">
                                    <span id="vatLabel">VAT</span>
                                </span>
                                <input type="text" class="form-control text-center" style="width: 50%" name="vat" id="vat"
                                    value="" placeholder="VAT" autocomplete="off">
                                <select name="vat_type" id="vat_type" class="form-control select2 select2-hidden-accessible"
                                    style="width: 50%" data-placeholder="--- Select ---" tabindex="-1" aria-hidden="true">
                                    <option value="Percentage" selected="">Percentage</option>
                                    <option value="Flat">Flat</option>
                                </select>
                            </div><br>

                            <!-- IMAGE -->
                            <div class="input-group width-100">
                                <span class="input-group-addon width-30" style="text-align: left">
                                    <span id="imageLabel">Image</span>
                                    <span class="label-required">*</span>
                                </span>
                                <input type="file" class="form-control"
                                    onchange="convertImageToBase64(this, 'productImage')">
                                <textarea id="productImage" style="display: none"></textarea>
                            </div><br>
                        </div>

                        <button class="btn btn-sm btn-success pull-right mt-3" type="submit"><i class="fa fa-save"></i>
                            SAVE PRODUCT</button>
                    </form>
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
@endsection
