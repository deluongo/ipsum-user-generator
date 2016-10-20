<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;

use p3\Http\Requests;


class UserController extends Controller
{

    /**
      * Display the specified resource.
      *
      * @param  int  $title
      * @return \Illuminate\Http\Response
      */

   public function show() {




        $faker = \Faker\Factory::create();
        $users = [];
        for ($i=1; $i<4; $i++) {
          $name = $faker->name;
          $users[$i]= $name;
        }

        $usersErr = null;
        $data = ['users' => $users, 'usersErr' => $usersErr];


        return view('user.show')->with($data);

   }
}
