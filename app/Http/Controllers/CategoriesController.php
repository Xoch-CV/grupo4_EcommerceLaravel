<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Category;

class CategoriesController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view("/main")->with("categories", $categories);

    } 

    public function show($categoryid)
    {
        $events=Event::where('category_id','like',$categoryid)->paginate(6);
        return view("/listado")->with("events", $events);
    } 
}