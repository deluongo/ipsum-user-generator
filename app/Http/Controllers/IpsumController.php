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
      $ipsum = null;
       return view('ipsum.show')->with(['ipsum' => $ipsum]);

     }

   public function post(Request $request)
   {


       $this->validate($request, [
           'num_par' => 'required|min:1|max:99|alpha_num',
       ]);


      $num_par= $request->input('num_par');
      $faker = \Faker\Factory::create();


      $ipsum = $faker->paragraphs($nb = $num_par, $asText = true);

      return view('ipsum.show')->with(['ipsum' => $ipsum]);


    }
}
