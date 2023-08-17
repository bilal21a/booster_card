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
        $udt_users=  User::where('src', 'udt')->count();
        $booster_card= User::where('src', 'booster_card')->count();
        $green_gen = User::where('src', 'green_gen')->count();
        return view('admin.dashboard', compact('customer','udt_users','booster_card','green_gen'));
    }

    public function get_data(Request $request)
    {
        $type = $request->type;
        if ($type == 'udt') {
            // dd('udt');
            $data = User::where('src', 'udt')->where('role','user')->get();
        }
        if ($type == 'green_gen') {
            // dd('green_gen');
            $data = User::where('src', 'green_gen')->where('role','user')->get();
            // str_replace('_', ' ',$data->src);           
        }
        if ($type == 'booster_card') {
            // dd('booster_card');
            $data = User::where('src', 'booster_card')->where('role','user')->get();
        }
        if ($type == null) {
            $data = User::get();
        }
        // dd($data);
        return DataTables::of($data)
            ->rawColumns(['name', 'email', 'src'])->make(true);
    }
}
