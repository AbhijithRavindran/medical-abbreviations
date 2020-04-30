<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abbreviation;
use App\Category;
class MainController extends Controller
{
    public function home(){
        $categories = Category::where('category_type',"main")->get();
        return view('home', compact('categories'));
    }

    public function search(Request $request){
        $query = $request->input('search_query');
        $abbreviations = Abbreviation::where('abbreviation','LIKE','%'.$query.'%')->get();
        return view('abbreviations', compact('abbreviations'));
    }

    public function live_search($query){
        $abbreviations = Abbreviation::where('abbreviation','LIKE','%'.$query.'%')->get()->toJson();
        return response()->json($abbreviations, 200);
    }

    public function view_category($id){
        $sub_categories = Category::where('sub_parent_id',$id)->get();
        return view('sub_categories', compact('sub_categories'));
    }

    public function view_sub_category($id){
        $abbreviations = Abbreviation::where('sub_category_id',$id)->get();
        return view('abbreviations', compact('abbreviations'));
    }

    public function view_abbreviation($id){
        $abbreviation = Abbreviation::find($id);
        return view('view_abbreviation', compact('abbreviation'));
    }
}
