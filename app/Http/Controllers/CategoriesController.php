<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Event;
use Auth;
use App\Category;

class CategoriesController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view("main")->with([
          "categories" => $categories,
        ]);
    }

    public function show($categoryName)
    {
        $categoryName = Category::where('name', $categoryName);
        $categoryId = Category::where('name', $categoryName)->pluck('id');
        $events=Event::where('category_id','like',$categoryId)->paginate(6);
        return view("/listado")->with("events", $events)->with("category", $categoryName);
    }

    public function indexReq($categoryName,Request $request)
    {
        $category = Category::with([
            'events' => function ($qb) use ($request) {
                if ($request->has('q')) {
                    $qb->where('name', 'like', '%' . $request->get('q') . '%');
                }
                return $qb;
            }])
            ->where('name', $categoryName)->first();

        return view("/listado")->with([
            "events"=> $category->events,
            'category'=> $category
                //->paginate(2)
                //->appends($request ->only('q'))
            ]);
    }

}
