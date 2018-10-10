<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB; //database

use Session;

use App\LoginCredCheck;

class LoginController extends Controller
{
    public function getpost(Request $request){

        if($request->has('submit')){
            $login_model = new LoginCredCheck;
            $res = $login_model->checkauth($request);

            if($res == FALSE){
                //return error message
                $message = "Error";
                return view('admin-login')->with('error', $message);
            }
            else{
               //session data and list of articles
               $sess_userid = $request->input('user-id');
               $blog = DB::table('blog')->get(); //get all list of articles (array)

                Session::put('userid', $sess_userid);

                if ($request->session()->get('userid') !== NULL){
                    return view('admin-list')->with('blog', $blog)->with('userid', $sess_userid);
                }
                else{
                    return redirect('/');
                }
                
            }
        } 
    }

    public function adminlist(Request $request){
        $sess_userid = $request->session()->get('userid');
        $blog = DB::table('blog')->get(); //get all list of articles (array)

        Session::put('userid', $sess_userid);

                if ($request->session()->get('userid') !== NULL){
                    return view('admin-list')->with('blog', $blog)->with('userid', $sess_userid);
                }
                else{
                    return redirect('/');
                }
        
    }
}
