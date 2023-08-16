<?php

namespace App\Http\Controllers;

use App\Models\User;
use Yajra\DataTables\DataTables;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function get_data()
    {
        $data = User::get();
        // dd($data);
        return DataTables::of($data)->rawColumns(['name','email','src'])->make(true);
    }
}