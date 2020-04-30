<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Abbreviation;
use App\Category;
class AdminController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect('/admin');
        }else{
            return view('admin.login', ['error'=>'Invalid login.']);
        }
    }

    public function loginview(){
        return view('admin.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function abbreviations_view(){
        $abbreviations = Abbreviation::latest()->paginate(5);
        return view('admin.abbreviations', compact('abbreviations'))->with('i', (request()->input('page',1)-1)*5);
    }

    public function new_abbreviation(){
        $sub_categories =  Category::where('category_type',"sub")->get();
        return view('admin.new_abbreviation', compact('sub_categories'));
    }

    public function create_abbreviation(Request $request){
        $abb = new Abbreviation;

        $abb->abbreviation = $request->input('abbreviation');
        $abb->description = $request->input('description');

        $sub_cat = Category::find($request->input('sub_category_id'));
        $main_cat = Category::find($sub_cat->sub_parent_id);

        $abb->category_id = $main_cat->id;
        $abb->sub_category_id = $request->input('sub_category_id');
        $abb->definition = $request->input('definition');
        $abb->category_name = $main_cat->name;
        $abb->sub_category_name = $sub_cat->name;
        $abb->save();
        return redirect()->route('admin_abbreviations');
    }

    public function update_abbreviation(Request $request, $id){
        $abb = Abbreviation::find($id);

        $abb->abbreviation = $request->input('abbreviation');
        $abb->description = $request->input('description');

        $sub_cat = Category::find($request->input('sub_category_id'));
        $main_cat = Category::find($sub_cat->sub_parent_id);

        $abb->category_id = $main_cat->id;
        $abb->sub_category_id = $request->input('sub_category_id');
        $abb->definition = $request->input('definition');
        $abb->category_name = $main_cat->name;
        $abb->sub_category_name = $sub_cat->name;
        $abb->save();

        return redirect("/admin/view_abbreviation/$id")->with("message", "Successfully updated");
    }

    public function view_abbreviation($id){
        

        $abbreviation = Abbreviation::where('id', $id)->first();
        //$main_category = Category::where('id', $abbreviation->category_id)->first();
        $sub_category = Category::where('id', $abbreviation->sub_category_id)->first();
        $sub_categories = Category::where('category_type',"sub")->get();
        return view('admin.view_abbreviation',compact('abbreviation', 'sub_category', 'sub_categories'));
    }

    public function delete_abbreviation($id){
        Abbreviation::find($id)->delete();
        return redirect()->route('admin_abbreviations');
    }

    public function categories_view(){
        $categories = Category::where('category_type',"main")->get();
        return view('admin.categories', compact('categories'));
    }

    public function create_main_category(Request $request){
        $cat = new Category;
        $cat->name = $request->input('name');
        $cat->category_type = "main";
        $cat->save();
        return redirect('/admin/categories');
    }

    public function sub_categories_view($id){
        $main_category = Category::find($id);
        $sub_categories = Category::where('sub_parent_id',$id)->get();
        return view('admin.sub_categories', compact('sub_categories','main_category'));
    }

    public function create_sub_category(Request $request, $id){
        $cat = new Category;
        $cat->name = $request->input('name');
        $cat->category_type = "sub";
        $main_cat = Category::find($id);
        $cat->sub_parent_id = $main_cat->id;
        $cat->save();
        return redirect("/admin/sub_categories/$id");
    }

    public function getUser(){
        return auth()->user();
    }
}
