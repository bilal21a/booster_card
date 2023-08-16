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
        return DataTables::of($data)->rawColumns()->make(true);
    }
}