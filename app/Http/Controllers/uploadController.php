<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
   public function index()
   {

   	return view('upload.upload');
   }


public function store(request $request)
{

	 return $request->file('image');
}
}