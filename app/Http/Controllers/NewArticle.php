<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\File;

//use App\Model;

class NewArticle extends Controller
{
    public function post(Request $request){
        if($request->has('submit')){

            //validation rules
           $rules = array(
                'image' => 'required | mimes:jpeg,jpg,png | max:1000000',
                'title' => 'required',
                'contents' => 'required'
           );
           //validate
            $validator = Validator::make($request->all(), $rules);

            //if validation fails, return to admin-post page with error 
            if($validator->fails()){

                $err =  "Error";
                return view('admin-post')->with('error', $err);
                //return Redirect::back()->withErrors($validator)->withInput();
            }
            //get files
            else{
                //id
                $image = $request->file('image')->getClientOriginalName();
                $title = $request->input('title');
                $contents = $request->input('contents');

                //check if data exist :)
                $count = DB::table('blog')
                        ->where('blogpic', $image)
                        ->orwhere('blogtitle', $title)
                        ->orwhere('blogdesc', $contents)
                        ->count();
                
                if($count > 0){ //if there is an existing input
                    echo "There is an existing data";
                }
                else{
                    //store file in:
                    $request->file('image')->storeAs('public/upload', $image);

                    //store info in database
                    DB::table('blog')->insert(
                        ['blogtitle' => $title, 'blogdesc' => $contents, 'blogpic' => $image]
                    );

                    //return 
                    return redirect()->action('LoginController@adminlist');
                }
                
                
            }
            
        }
    }
    public function update(Request $request){
        $id = $request->input('blogid');
        $oldimg = $request->input('oldimg'); //old image file name
        $title = $request->input('title');
        $contents = $request->input('contents');

        //check if there is a new image uploaded
        if($request->file('image') !== NULL){
            $image = $request->file('image')->getClientOriginalName();
        }

        $rules = array(
            'image' => 'mimes:jpg,jpeg,png | max:1000000'
        );
        //validate
        $validator = Validator::make($request->all(), $rules);

        //if validation fails, return to admin-post page with error 
        if($validator->fails()){
            $blog = DB::table('blog')->where('blogid', $id)->get();

            foreach($blog as $post){
                $arr = array(
                    'blogid' => $post->blogid,
                    'blogtitle' => $post->blogtitle,
                    'blogdesc' => $post->blogdesc,
                    'blogpic' => $post->blogpic
                );
            }

            $err =  "Error";
            return view('admin-post')->with('error', $err)->with('blog', $arr);
            //return Redirect::back()->withErrors($validator)->withInput();
        }
        else{
            if($request->file('image') !== NULL){ //check if there is a new file
                //update database
               
               //store file in:
               $request->file('image')->storeAs('public/upload', $image);
               //Storage::delete('public/upload', $oldimg);

                DB::table('blog')
                    ->where('blogid', $id)
                    ->update(['blogpic' => $image,
                              'blogtitle' => $title,
                              'blogdesc' => $contents
                    ]);
                //return 
                return redirect()->action('LoginController@adminlist');

            }
            else{
                //update database
               
                DB::table('blog')
                    ->where('blogid', $id)
                    ->update(['blogtitle' => $title,
                              'blogdesc' => $contents
                    ]);
                //return 
                return redirect()->action('LoginController@adminlist');
                
            }
        }

    }
}
