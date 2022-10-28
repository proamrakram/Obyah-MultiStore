<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();

        if ($user) {
            if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'admin_employee') {

                return route('admin.home.index');
            }

            if (auth()->user()->user_type == 'store_admin' || auth()->user()->user_type == 'store_employee') {

                return route('store.home.index');
            }

            if (auth()->user()->user_type == 'customer') {
                return route('customer.home-page');
            }
        }

        return route('customer.home-page');

        // return route('loanding-home');
    }

    public function adminHome()
    {
        return view('AdminPanel.home');
    }

    public function storeHome()
    {
        return view('Store.home');
    }
}
