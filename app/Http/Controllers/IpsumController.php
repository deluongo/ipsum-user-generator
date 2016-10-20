<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;

use p3\Http\Requests;

class IpsumController extends Controller
{
  /**
    * Display the specified resource.
    *
    * @param  int  $title
    * @return \Illuminate\Http\Response
    */

   public function show()
   {
       return view('ipsum.show');

   }
}
