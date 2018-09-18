<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    //
    public function user(){

    	return view('authentication.login');
    }

    public function userlogin(Request $request){

    

    	//Sentinel::authenticate($request->all());


    	if(Sentinel::check() == false){
            echo "incorrent username or password";

        }else{
        return redirect('/');
    	}

    	return Sentinel::check();
    }

}
