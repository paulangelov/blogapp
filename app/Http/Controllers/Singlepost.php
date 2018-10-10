<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //database

class Singlepost extends Controller
{
    public function single($blogid){
        //base on the instruction
        // Each of posts is clickable and it has the link to the admin-post page. - DONE
        $blog = DB::table('blog')->where('blogid', $blogid)->get();

        foreach($blog as $post){
            $arr = array(
                'blogid' => $post->blogid,
                'blogtitle' => $post->blogtitle,
                'blogdesc' => $post->blogdesc,
                'blogpic' => $post->blogpic
            );
        }
       
        return view('admin-post')->with('blog', $arr);
    }
}
