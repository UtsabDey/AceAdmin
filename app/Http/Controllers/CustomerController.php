<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Area;
use App\Models\Customer;
use App\Models\CustomerType;

class CustomerController extends Controller
{
    public function addCustomer()
    {
        $data['districts'] = District::orderBy('name', 'ASC')->get();
        $data['areas'] = Area::orderBy('name', 'ASC')->get();
        $data['types'] = CustomerType::orderBy('name', 'desc')->get();
        return view('admin.customer.addCustomer', $data);
    }

    public function getCustomers()
    {
        $data['customers'] = Customer::query()
                                    ->orderBy('name', 'ASC')
                                    ->paginate(10);
        return view('admin.customer.getCustomers',$data)->with('no',1);
    }

    public function storeCustomer(Request $request)
    {
        try {
            $this->storeOrUpdateCustomer($request);
        } catch (\Throwable $th) {
            // dd($th);
            return back()->withErrors($th)->withInput();
        }
        return redirect()->route('get-customers')->withMessage('Customer Add Success!!');
    }

    public function editCustomer($id)
    {
        $data['customer'] = Customer::find($id);
        $data['districts'] = District::orderBy('name', 'ASC')->get();
        $data['areas'] = Area::orderBy('name', 'ASC')->get();
        $data['types'] = CustomerType::orderBy('name', 'desc')->get();
        return view('admin.customer.editCustomer', $data);
    }

    public function update(Request $request,$id)
    {
        // dd($request->all());
        try {
            $this->storeOrUpdateCustomer($request,$id);
        } catch (\Throwable $th) {
            // dd($th);
            return back()->withErrors($th)->withInput();
        }
        return redirect()->route('get-customers')->with('success','Customer Update Success!!');
    }

    public function destroyCustomer($id)
    {
        // dd($id);
        Customer::find($id)->delete();
        return redirect()->route('get-customers')->with('warning', 'Data deleted successfully!');
    }

    private function storeOrUpdateCustomer($request, $id = null)
    {
        // dd($request->all());

        isset($request->status) ? $status = $request->status = 1 : $status = $request->status = 0;
        isset($request->is_default) ? $default = $request->is_default = 'Yes' : $default = $request->is_default = 'No';

        $request->validate([
            'name'                  => 'required',
            'phone'                 => 'required',
            'customer_type_id'       => 'required',
        ]);
        // dd($request->all());
        // dd($request->id);

        $DATA = Customer::updateOrCreate([

            'id' => $id,
        ], [
            'register_from'         => $request->register_from,
            'customer_type_id'     => $request->customer_type_id,
            'name'                  => $request->name,
            'email'                 => $request->email,
            'phone'                 => $request->phone,
            'gender'                => $request->gender,
            'address'               => $request->address,
            'country'               => $request->country,
            'district_id'           => $request->district_id,
            'area_id'               => $request->area_id ,
            'zip_code'              => $request->zip_code,
            'is_default'            => $default,
            'current_balance'       => $request->current_balance,
            'opening_balance'       => $request->opening_balance,
            'reffered_by'           => $request->reffered_by,
            'status'                => $status,
        ]);
        // dd($DATA);
    }
}
