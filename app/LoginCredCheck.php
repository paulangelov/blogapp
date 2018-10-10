<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LoginCredCheck extends Model
{
    public function checkauth($request){
        $id = $request->input('user-id');
        $password = $request->input('password');

        $account = DB::table('user-account')->where('user-id', '=', $id)->where('user-password', '=', $password)->get();

        if($account->count() > 0){
            return TRUE;
        }
        else{
            return FALSE; //else if not
        }
    }
}
