<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Subject;

class FormController extends Controller
{
    //

    public function getSubjects($career_id){
    	$data = [
    		'subjects' => Subject::where('career_id', $career_id)->get()
    	];

        $view = view('select.subjects', $data)->render();

    	return response()->json(['html' => $view]);
    }

    private function format($subjects){
    	$res = [];

    	foreach ($subjects as $subject) {
    		$res[] = [
    			'id' => $subjects->id,
    			'name' => $subjects->name,
    		];
    	}

    	return $res;
    }
}
