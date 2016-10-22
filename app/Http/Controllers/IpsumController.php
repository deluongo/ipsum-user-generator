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
      $ipsums = null;
      $num_par = null;
      return view('ipsum.show')->with(['ipsums' => $ipsums, 'num_par' => $num_par]);

     }

   public function post(Request $request)
   {


       $this->validate($request, [
           'num_par' => 'required|min:1|max:99|alpha_num',
       ]);


      $num_par= $request->input('num_par');
      $faker = \Faker\Factory::create();


      $ipsums = $faker->paragraphs($nb = $num_par, $asText = false);

      return view('ipsum.show')->with(['ipsums' => $ipsums, 'num_par' => $num_par]);


    }
}
