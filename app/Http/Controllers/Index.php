<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //database
use Illuminate\Support\Collection;

class Index extends Controller
{
    public function index(){ //user index homepage
        $blog = DB::table('blog')->limit(5)->get(); //get all list of articles (array)

        return view('index')->with('blog', $blog);
    }

    public function singlepost($blogid){ //user index single post
        $blog = DB::table('blog')->where('blogid', $blogid)->get(); //get all list of articles (array)

        return view('single')->with('blog', $blog);
    }

    public function archivepost(){
        $blog = DB::table('blog')->paginate(5);
        
        return view('archive')->with('blog', $blog);
    }
}
