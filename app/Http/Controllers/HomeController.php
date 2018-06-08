<?php

namespace App\Http\Controllers;

use App\Model\Account\Account;
use App\Model\Character\Character;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	foreach (Character::all() as $account) {
    		var_dump($account);
		}

		die();

        return view('home');
    }
}
