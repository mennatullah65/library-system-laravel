<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;
class searchController extends Controller
{
    public function get_item_search(Request $req){
        $word=$req->input('word');
        $data=book::where('Name','like','%'.$word.'%')
        ->orwhere('category',$word)
        ->get();
        return view('show_items')->with('all_data',$data);
    }
}
