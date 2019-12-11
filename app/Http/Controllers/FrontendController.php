<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $data = User::paginate(8);
        return view('pagination', compact('data'));
    }

    public function fetch_data(Request $request){
        if($request->ajax()){
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);

            $data = User::where('id','like','%'.$query.'%')
                   ->orWhere('name', 'like', '%'.$query.'%')
                   ->orWhere('email', 'like', '%'.$query.'%')   
                   ->orderBy($sort_by,$sort_type)->paginate(8);
            return view('pagination_data',compact('data'))->render();
        }
    }
}
