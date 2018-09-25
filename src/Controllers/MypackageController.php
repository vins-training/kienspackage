<?php

namespace Kiendo\Mypackage;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Kiendo\Mypackage\Mypackage;

class MypackageController extends Controller
{
    public function index(){
    	$teams = Mypackage::all();
    	return view('teams::teams', compact('teams'));
    }
}
