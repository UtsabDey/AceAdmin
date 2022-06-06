<?php

namespace App\Http\Controllers;

use App\Models\CategoryType;
use App\Models\CustomerType;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductTypeController extends Controller
{
    public function productType()
    {
        $data['types'] = ProductType::query()
                        ->orderBy('id', 'ASC')
                        ->latest()
                        ->paginate(10);
        return view('admin.product.productType', $data)->with('no', 1);
    }

    public function getCategory()
    {
        $data['types'] = CategoryType::join('product_types', 'category_types.type_id', '=', 'product_types.id')
                        ->select('category_types.*', 'product_types.name as pname')
                        ->orderBy('type_id', 'ASC')
                        // ->latest()
                        ->paginate(10);
        return view('admin.product.getCategory', $data)->with('no', 1);
    }

    public function addProduct()
    {
        $data['types'] = ProductType::orderBy('id', 'ASC')->get();
        $data['cats'] = CategoryType::orderBy('id', 'ASC')->get();
        return view('admin.product.addProduct', $data);
    }

    public function getProduct()
    {
        // $data['pr_types'] = ProductType::orderBy('id','ASC')->get();
        // $data['cat_types'] = CategoryType::orderBy('id','ASC')->get();
        $data['products'] = Product::join('category_types', 'products.category_id', '=', 'category_types.id')
                            ->join('product_types', 'category_types.type_id', '=', 'product_types.id')
                            ->select('products.*', 'product_types.name as pt_name', 'category_types.name as cat_name')
                            ->orderBy('id', 'ASC')
                            ->paginate(10);
        return view('admin.product.getProduct', $data)->with('no', 1);
    }

    public function storeProduct(Request $request)
    {
        try {
            $this->storeOrUpdateProduct($request);
        } catch (\Throwable $th) {
            // dd($th);
            return back()->withErrors($th)->withInput();
        }
        // dd($request->all());
        return redirect()->route('get-products')->with('Product Add Success!!');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function editProduct($id)
    {
        $data['products'] = Product::join('category_types', 'products.category_id', '=', 'category_types.id')
        ->join('product_types', 'category_types.type_id', '=', 'product_types.id')
        ->select('products.id', 'product_types.id as pt_id', 'product_types.name as pt_name', 'category_types.id as cat_id','category_types.name as cat_name')
        ->where('id', '=', $id)
        ->first();
        $data['types'] = ProductType::all();
        return view('admin.product.editProduct', $data);
    }
    private function storeOrUpdateProduct($request, $id = null)
    {
        // dd($request->all());
        isset($request->status) ? $status = $request->status = 1 : $status = $request->status = 0;

        $request->validate([
            'name'                            => 'required',
            'product_type_id'                 => 'required',
            'sub_text'                        => 'required',
            'unit_measure_id'                 => 'required',
        ]);

        $DATA = Product::updateOrCreate([

            'id' => $id,
        ], [
            'name'                  => $request->name,
            'product_type_id'       => $request->product_type_id,
            'category_id'           => $request->category_id,
            'brand'                 => $request->brand,
            'country_id'            => $request->country_id,
            'code'                  => $request->code,
            'purchase_price'        => $request->purchase_price,
            'wholesale_price'       => $request->wholesale_price,
            'sale_price'            => $request->sale_price,
            'status'                => $status,
            'sub_text'              => $request->sub_text ,
            'unit_measure_id'       => $request->unit_measure_id,
            'image'                 => $request->image,
            'vat'                   => $request->vat,
            'vat_type'              => $request->vat_type,
        ]);
        // dd($DATA);
    }
}
