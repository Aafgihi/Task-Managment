<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserAdminController extends Controller
{

    //
    public function SighnIn()
    {
        return view('ProjectView.login');
    }

    public function CheakValid(Request $req)
    {
        $user = $req->input('name');
        $password = $req->input('password');

        $cheakValid = DB::table('user_admins')->where(['name' => $user, 'password' => $password])->get();

        if (count($cheakValid) == 1) {
            $req->session()->setName($user) ;
            return redirect('/index');
        } else {
            return redirect('/login');//changed to "/login" was "/"
        }
    }

}