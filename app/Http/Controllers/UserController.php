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

        $num_users= null;
        $users = new \ArrayObject();
        $faker = \Faker\Factory::create();

        $address_status = '';
        $birthday_status = '';

        $users = null;
        $usersErr = null;
        $num_elements = 1;

        $data = ['users' => $users, 'usersErr' => $usersErr, 'num_elements' => $num_elements, 'address_status' => $address_status, 'birthday_status' => $birthday_status, 'num_users' => $num_users];

        return view('user.show')->with($data);

   }

   public function post(Request $request) {

     $num_users = $request->input('num_users');
     $include_address = $request->input('address');
     $include_birthday = $request->input('birthday');

     $users = new \ArrayObject();
     $faker = \Faker\Factory::create();

     $address_status = '';
     $birthday_status = '';


     for ($i=0; $i<$num_users; $i++) {
       $contact_arr = new \ArrayObject();
       $name = $faker->name;
       $contact_arr->append($name);
       if ($include_address == 'yes') {
         $address = $faker->address;
         $contact_arr->append($address);
         $address_status = 'checked';
       }
       if ($include_birthday == 'yes') {
         $birthday = $faker->dateTimeThisCentury->format('m-d-Y');
         $contact_arr->append($birthday);
         $birthday_status = 'checked';
       }

       $num_elements = count($contact_arr);
       $users[$i] = $contact_arr;
     }

     $usersErr = null;
     $data = ['users' => $users, 'usersErr' => $usersErr, 'num_elements' => $num_elements, 'address_status' => $address_status, 'birthday_status' => $birthday_status, 'num_users' => $num_users];

     return view('user.show')->with($data);
   }
}
