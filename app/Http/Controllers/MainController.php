<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Request;
use Alert;
use Auth;
use Hash;
use Carbon;

class MainController extends Controller
{
    
	public function home(){
        return view('main.home');
    }

    public function dashboard(){
        return view('main.dashboard');
    }

    public function reports(){
        return view('main.reports');
    }

}
