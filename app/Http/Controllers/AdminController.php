<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $customer = $request->type;
        $udt_users =  User::where('src', 'udt')->where('role', 'user')->count();
        $booster_card = User::where('src', 'booster_card')->where('role', 'user')->count();
        $green_gen = User::where('src', 'green_gen')->where('role', 'user')->count();
        return view('admin.dashboard', compact('customer', 'udt_users', 'booster_card', 'green_gen'));
    }


    public function show_users(Request $request)
    {
        $customer = $request->type;
        return view('admin.show_users_data', compact('customer'));
    }
    public function get_data(Request $request)
    {

        $type = $request->type;
        if ($type == 'udt') {
            // dd('udt');
            $data = User::where('src', 'udt')->where('role', 'user')->get();
        }
        if ($type == 'green_gen') {
            // dd('green_gen');
            $data = User::where('src', 'green_gen')->where('role', 'user')->get();
            // str_replace('_', ' ',$data->src);           
        }
        if ($type == 'booster_card') {
            // dd('booster_card');
            $data = User::where('src', 'booster_card')->where('role', 'user')->get();
        }
        if ($type == null) {
            $data = User::get();
        }
        // dd($data);
        return DataTables::of($data)
            ->rawColumns(['name', 'email', 'src'])->make(true);
    }

    public function get_count()
    {
        $data['udt'] = User::where('src', 'udt')->where('role', 'user')->count();
        $data['booster_card'] = User::where('src', 'booster_card')->where('role', 'user')->count();
        $data['green_gen'] = User::where('src', 'green_gen')->where('role', 'user')->count();
        return $data;
    }
    public function get_count_graph($type = null, $table = 'users')
    {
        $customersCountPerMonth = DB::table($table)
            ->where(function ($query) use ($type) {
                if ($type == 'crm-udt') {
                    $query->where('src', 'udt')->where('role', 'user');
                }
                if ($type == 'crm-booster_card') {
                    $query->where('src', 'booster_card')->where('role', 'user');
                }
                if ($type == 'crm-green_gen') {
                    $query->where('src', 'green_gen')->where('role', 'user');
                }
            })
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as count'))
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->orderBy(DB::raw('MONTH(created_at)'))
            ->get();

        // Convert the result to an array of counts
        $customerCounts = $customersCountPerMonth->pluck('count')->toArray();

        return $customerCounts;
    }
    public function get_percentage($type = null, $table = 'users')
    {
        // Get the current month's count
        $currentMonthCount = DB::table($table)
            ->whereYear('created_at', '=', now()->year)
            ->where(function ($query) use ($type) {
                if ($type == 'crm-udt') {
                    $query->where('src', 'udt')->where('role', 'user');
                }
                if ($type == 'crm-booster_card') {
                    $query->where('src', 'booster_card')->where('role', 'user');
                }
                if ($type == 'crm-green_gen') {
                    $query->where('src', 'green_gen')->where('role', 'user');
                }
            })
            ->whereMonth('created_at', '=', now()->month)
            ->count();

        // Get the previous month's count
        $previousMonthCount = DB::table($table)
            ->whereYear('created_at', '=', now()->subMonth()->year)
            ->where(function ($query) use ($type) {
                if ($type == 'crm-udt') {
                    $query->where('src', 'udt')->where('role', 'user');
                }
                if ($type == 'crm-booster_card') {
                    $query->where('src', 'booster_card')->where('role', 'user');
                }
                if ($type == 'crm-green_gen') {
                    $query->where('src', 'green_gen')->where('role', 'user');
                }
            })
            ->whereMonth('created_at', '=', now()->subMonth()->month)
            ->count();

        // Calculate the percentage change
        if ($previousMonthCount === 0) {
            $percentageChange = 0; // Prevent division by zero
        } else {
            $percentageChange = (($currentMonthCount - $previousMonthCount) / $previousMonthCount) * 100;
        }

        // Determine whether the count increased or decreased
        $status = ($currentMonthCount > $previousMonthCount) ? 'success' : 'danger';

        return response()->json([
            'current_month_count' => $currentMonthCount,
            'previous_month_count' => $previousMonthCount,
            'status' => $status,
            'percentage_change' => $percentageChange,
        ]);
    }
}
