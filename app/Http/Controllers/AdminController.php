<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\District;
use App\Models\Area;
use App\Models\Customer;
use App\Models\CustomerType;

class AdminController extends Controller
{
    public function index()
    {
        $data['lists'] = User::get();
        return view('admin.index', $data);
    }

    public function login()
    {
        return view('admin.login');
    }

    public function getType()
    {
        $data['types'] = CustomerType::query()
                            ->orderBy('id', 'ASC')
                            ->latest()
                            ->paginate(10);
        return view('admin.customer.getType', $data);
    }

    public function addType()
    {
        return view('admin.customer.addType');
    }

    public function storeType(Request $request)
    {
        try {
            $this->storeOrUpdateType($request);
        } catch (\Throwable $th) {
            return back()->withErrors($th)->withInput();
        }

        return redirect()->route('get-type')->withMessage('Customer Type added success !!');
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function editType($id)
    {
        $data['types'] = CustomerType::find($id);
        return view('admin.customer.editType', $data);
    }

    public function updateType(Request $request, $id)
    {
        // $this->storeOrUpdateType($request,$id);

        try {
            $this->storeOrUpdateType($request,$id);
        } catch (\Throwable $th) {
            return back()->withErrors($th)->withInput();
        }

        return redirect()->route('get-type')->with('success','Customer Type update success !!');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login')->with('success', 'Log Out Successfully', );
    }

    public function destroyType($id)
    {
        // dd($id);
        CustomerType::find($id)->delete();
        return redirect()->route('get-type')->with('warning', 'Data deleted successfully!');
    }

    private function storeOrUpdateType($request, $id = null)
    {
        isset($request->status) ? $status = $request->status=1 : $status = $request->status = 0;
        $request->validate([
            'name' => 'required',
        ]);

        CustomerType::updateOrCreate([
            'id'    => $id,
        ], [
            'name'              => $request->name,
            'percentage'        => $request->percentage,
            'status'            => $status,
        ]);
    }
}
