<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
     public function index(){

        // return "ok";
     	return View('layouts.Admin');
     }



}
