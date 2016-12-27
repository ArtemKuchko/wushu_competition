<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

use App\Group;

class GroupController extends Controller
{
    //
	
	
	public function show(Request $request)
	{		
        $groups = App\Group::all();
		
		//для вывода номера соревнования:
		$i=1;
		
        return view('groups', ['groups' => $groups, 'i' => $i]);
		
	}
	
	public function add(Request $request)
	{
		$data = $request->all();
		
		$group = new Group;
		$group -> fill($data);		
		$group -> category_id ="1";		
		$group -> competition_id ="1";
		
		$group -> save();
		
		return redirect ('/groups');
		
		
	}
	
}
