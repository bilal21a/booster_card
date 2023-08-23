<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function auto_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'token' => 'required',
            'src' => 'required|in:udt,green_gen',
        ]);
        if ($validator->fails()) {
            return redirect()->route('login');
        }
        $token = $request->token;
        $src = $request->src;
        $udt_backend_base_url = config('links.udt_backend');
        $response = Http::withToken($token)->get($udt_backend_base_url . '/api/me');
        $jsonData = $response->json();
        if (isset($jsonData['error']) && $jsonData['error'] == 'Unauthenticated.') {
            return redirect()->route('login');
        }
        $existing_user = User::where('email', $jsonData['email'])->where('src', $src)->first();

        if ($existing_user === null) {
            $user = new User();
            $user->name = $jsonData['first_name'];
            $user->email = $jsonData['email'];
            $user->src = $src;
            $user->password = $token;
            // dd($user);
            $user->save();
            $message = "new Customer <span class='text-danger fw-semibold'>" . $user->name . "</span> registered successfully";
            generate_activity('users', $message, $user->id, 'add');
        } else {
            $user = $existing_user;
        }
        Auth::logout();
        Auth::login($user);


        return redirect()->route('pricing');
    }
}
