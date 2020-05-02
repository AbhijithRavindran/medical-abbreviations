<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abbreviation;
use App\Category;
use Session;

class MainController extends Controller
{
    public function home(){
        $categories = Category::where('category_type',"main")->get();
        return view('home', compact('categories'));
    }

    public function search(Request $request){
        $query = $request->input('search_query');
        $abbreviations = Abbreviation::where('abbreviation','LIKE','%'.$query.'%')->get();
        $abb_id_array = $abbreviations->pluck('id');
        session()->forget('abb_id_array');
        session()->put('abb_id_array', $abb_id_array);
        $categories = Category::where('category_type',"main")->get();
       return view('abbreviations', compact('abbreviations', 'categories'));
    }

    public function view_abbreviations_by_alphabet($alphabet){
        $abbreviations = Abbreviation::where('abbreviation','LIKE',''.$alphabet.'%')->get();
        $abb_id_array = $abbreviations->pluck('id');
        session()->forget('abb_id_array');
        session()->put('abb_id_array', $abb_id_array);
        $categories = Category::where('category_type',"main")->get();
        return view('abbreviations', compact('abbreviations', 'categories'));
    }

    public function live_search($query){
        $abbreviations = Abbreviation::where('abbreviation','LIKE','%'.$query.'%')->get()->toJson();
        return response()->json($abbreviations, 200);
    }

    public function view_category($id){
        $sub_categories = Category::where('sub_parent_id',$id)->get();
        $main_category = Category::find($id);
        return view('sub_categories', compact('sub_categories', 'main_category'));
    }

    public function view_sub_category($id){
        $abbreviations = Abbreviation::where('sub_category_id',$id)->get();
        $abb_id_array = $abbreviations->pluck('id');
        session()->forget('abb_id_array');
        session()->put('abb_id_array', $abb_id_array);
        $categories = Category::where('category_type',"main")->get();
       return view('abbreviations', compact('abbreviations', 'categories'));
    }

    public function view_abbreviation($id){
        $abbreviation = Abbreviation::find($id);
        return view('view_abbreviation', compact('abbreviation'));
    }

    public function filter_by_category(Request $request){
        $abb_ids = session()->get('abb_id_array');
        $category_id = $request->input('category_id');
        if($category_id == 0){
            $abbreviations = Abbreviation::whereIn('id', $abb_ids)->get();
        }else{
            $abbreviations = Abbreviation::whereIn('id', $abb_ids)->where('category_id', $category_id)->get();
        }
        
        $categories = Category::where('category_type',"main")->get();
        return view('abbreviations', compact('abbreviations', 'categories'));
    }
}
