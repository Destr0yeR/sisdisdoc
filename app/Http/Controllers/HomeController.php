<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use Auth;
use App\Http\Requests\SaveChangesRequest;

use App\Models\Subject;
use App\Models\Career;

class HomeController extends Controller
{
    public function index()
    {
    	$data = [
    		'user'      => Auth::user(),
            'subjects'  => Subject::all(),
            'careers'   => Career::all()
    	];

        return view('content.index', $data);
    }

    public function saveChanges(SaveChangesRequest $request){
    	$data = [
    		'schedule' 	=> $request->input('schedule'),
    		'subjects'	=> $request->input('subjects')
    	];

    	var_dump($data);
    }
}
