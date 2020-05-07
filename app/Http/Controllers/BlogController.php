<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
 
	public function aboutus(){
		return view('aboutus');
    }
    
    public function disclaimer(){
		return view('disclaimer');
	}
 
	public function kontak(){
		return view('kontak');
    }
    
    public function privacy(){
		return view('privacy');
	}

	public function signup(){
		return view('signup');
	}

	public function signin(){
		return view('signin');
	}

	public function pph(){
		return view('pph');
	}

	public function pbb(){
		return view('pbb');
	}
 
} 
