<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{

	protected $categorys;
	
	public function add_category (Request $request, Category $category)
	{
		$category= new Category;
		
		$category-> name = $request -> name;
		$category-> min_weight = $request -> min_weight;
		$category-> max_weight = $request -> max_weight;
		
		$category-> group_id = 1;
		
		$category-> save();
						
	}
		
}
