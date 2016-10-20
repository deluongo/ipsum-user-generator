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

   public function show(Request $request) {

        $num_users= $request->input('num_users');

        $faker = \Faker\Factory::create();
        $users = [];
        for ($i=1; $i<$num_users; $i++) {
          $name = $faker->name;
          $address = $faker->address;
          $birthday = $faker->dateTimeThisCentury->format('Y-m-d');

          $user = ''.$name.''.$address.' '.$birthday.'';

          $users[$i]= $user;
          $names = $names[$i];
          $addresses = $address[$i];
          $birthdays = $birthday[$i];

        }

        $usersErr = null;
        $data = ['users' => $users, 'usersErr' => $usersErr];


        return view('user.show')->with($data);

   }
}
