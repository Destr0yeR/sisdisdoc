<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use Auth;

class HomeController extends Controller
{
    public function index()
    {
    	$data = [
    		'user' => Auth::user()
    	];

        return view('content.index', $data);
    }
}
