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
        $user = Auth::user();

        $_subjects = Subject::lists('name', 'id');
        $_careers = Career::lists('name', 'id');


    	$data = [
    		'user'      => $user,
            'subjects'  => Subject::all(),
            'careers'   => Career::all()
    	];

        $view = view('content.index', $data);

        if($user->changed){
            $arr = [];
            for($i = 0; $i < 101; $i++) { 
                $arr[$i] = 0;
            }

            $schedule = json_decode($user->schedule);

            foreach ($schedule as $val) {
                $arr[$val] = 1;
            }

            $subjects = json_decode($user->subjects);

            $arr2 = [];

            foreach ($subjects as $val) {
                $list = explode("-", $val);

                $arr2[] = [
                    'name'   => $_subjects[$list[1]],
                    'career' => $_careers[$list[0]] 
                ];
            }

            $data['schedule'] = $arr;
            $data['subjects'] = $arr2;

            $view = view('content.done', $data);
        }

        return $view;
    }

    public function saveChanges(SaveChangesRequest $request){
    	$data = [
    		'schedule' 	=> $request->input('schedule'),
    		'subjects'	=> $request->input('subjects')
    	];

    	$user = Auth::user();

        $user->schedule = $data['schedule'];
        $user->subjects = $data['subjects'];
        $user->changed = 1;

        $user->save();

        return redirect()->route('index')->with(["modal" => true]);
    }
}
