<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Subjects;

class FormController extends Controller
{
    //

    public function getSubjects($career_id){
    	$data = [
    		'subjects' => Subjects::where('')
    	];

    	return response()->json($data);
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
