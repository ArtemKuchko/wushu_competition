<?php

namespace App\Http\Controllers;

use App;
use App\Competition;
use Illuminate\Http\Request;
use DB;

class CompetitionController extends Controller
{

    //protected $competitions;

    public function index(Request $request)
    {
        $competitions = App\Competition::all();
		
		//для вывода номера соревнования:
		$i=1;
		
        return view('choose_competition', ['competitions' => $competitions, 'i' => $i]);
    }

    //создание новых соревнований:
    public function store(Request $request) 
	{
		$data = $request->all();		
		$competition = new Competition;		
		$competition->fill($data);		
		$competition->save();
				
        return redirect('/choose_competition');
    }

	public function showCurrent($id) 
	{	
		$competition = Competition::find($id);		
		session(['id'=>$id]);
		
		return view('competitionContent')->with('competition', $competition);
		
	}

	public function show_main_data (Request $request, Competition $competition)
	{		
		$id = $request->session()->get('id');				
		$competition = Competition::find($id);		
		
		return view('competition_main')->with('competition', $competition);		
		
	}
	
	
	public function edit_competition(Request $request, Competition $competition)
	{

		$id = $request->session()->get('id');		
		$competition = Competition::find($id);
		
		return view ('edit_competition', ['competition' => $competition] );
	}
	
	public function update_competition (Request $request, Competition $competition)
	{			
		$id = $request->session()->get('id');
				
		DB::table('competitions')->where('id', $id)->update(['name' => $request-> name, 
															'place' => $request-> place,
															'date_start' => $request->date_start,
															'date_end' => $request->date_end,
															'dead_line'=> $request->dead_line,
															'level'=> $request->level,
															'description'=> $request->description
																			
																			]);	
				
		//$competition = DB::table('competitions')->where('id', $competition_number)->get();
		$competition = Competition::find($id);
					
		return view('competition_main')->with('competition', $competition);
				
	}

	public function get_back(Request $request)
	{
		$id = $request->session()->get('id');
		$competition = Competition::find($id);		
		return view('competitionContent')->with('competition', $competition);
	}
		
}
