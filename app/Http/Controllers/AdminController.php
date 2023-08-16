<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $customer = $request->type;
        return view('admin.dashboard', compact('customer'));
    }

    public function get_data(Request $request)
    {
        $type = $request->type;
        if ($type == 'udt') {
            // dd('udt');
            $data = User::where('src', 'udt')->get();
        }
        if ($type == 'green_gen') {
            // dd('green_gen');
            $data = User::where('src', 'green_gen')->get();
            // str_replace('_', ' ',$data->src);           
        }
        if ($type == 'booster_card') {
            // dd('booster_card');
            $data = User::where('src', 'booster_card')->get();
        }
        if ($type == null) {
            $data = User::get();
        }
        return DataTables::of($data)
            ->rawColumns(['name', 'email', 'src'])->make(true);
    }
}
