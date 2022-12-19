<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ProjectController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function login(){
        return view('regist.login');
    }

    public function about(){
        return view('about');
    }
}
