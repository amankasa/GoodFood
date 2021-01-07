<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function signup(){
        return view('pages.signup');
    }

    public function Companies(){
        return view('pages.Companies');
    }

    public function Company(){
        return view('pages.Company');
    }

    function loginSubmit(Request $req)
    {
        // return User::all();
        print_r($req->input());
    }

    function signStore(Request $req) {
        print_r($req->input());
    }
}