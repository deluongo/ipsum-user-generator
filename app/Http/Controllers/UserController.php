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

      //Display on load
      public function show() {

        //Set default values for user inputs
        $number_of_users = null;
        $users = new \ArrayObject();
        $faker = \Faker\Factory::create();

        $users = null;
        $usersErr = null;
        $num_elements = 1;
        $format = 'readable';

        //Remember filters on/off status
        $address_status = '';
        $birthday_status = '';
        $company_status = '';
        $format_status = '';

        //Setup empty array objects to store data
        $contact_arr = new \ArrayObject();

        //Create and store user fields
        $name = $faker->name;
        $contact_arr->append($name);

        $address = $faker->address;
        $contact_arr->append($address);

        $birthday = $faker->dateTimeThisCentury->format('m-d-Y');
        $contact_arr->append($birthday);

        $num_elements = count($contact_arr);
        $users[0] = $contact_arr;

        $all_users_json = null;

        //Pass variables to views
        $data = ['format_status' => $format_status, 'format' => $format, 'users' => $users, 'usersErr' => $usersErr, 'num_elements' => $num_elements, 'address_status' => $address_status, 'birthday_status' => $birthday_status, 'company_status' => $company_status, 'all_users_json' => $all_users_json, 'number_of_users' => $number_of_users];

        return view('user.show')->with($data);
   }

   //Display on form submit
   public function post(Request $request) {

     //Assign form values to variables
     $number_of_users = $request->input('number_of_users');
     $include_address = $request->input('address');
     $include_birthday = $request->input('birthday');
     $format = 'readable';
     $format = $request->input('format');

     //New info
     $include_company = $request->input('company');
     //$phone = $request->input('phone');
     //$blurb = $request->input('blurb');
     //$username = $request->input('username');
     //$password =  $request->input('password');
     //$email =  $request->input('email');

     $users = new \ArrayObject();


     $all_user_obj = new \stdClass();
     $faker = \Faker\Factory::create();

     $address_status = '';
     $birthday_status = '';
     $company_status = '';
     $format_status = '';
     if ($format == 'yes') {
       $format_status = 'checked';
     }

     $input_names = array('company');

     for ($i=0; $i<$number_of_users; $i++) {
       $contact_arr = new \ArrayObject();
       //Generate name
       $name = $faker->name;
       //Store name
       $contact_arr->append($name);
       $single_user["name"] = $name;

       if ($include_address == 'yes') {
         $address = $faker->address;
         $contact_arr->append($address);
         $single_user["address"] = $address;
         $address_status = 'checked';
       }

       if ($include_birthday == 'yes') {
         $birthday = $faker->dateTimeThisCentury->format('m-d-Y');
         $contact_arr->append($birthday);
         $single_user["birthday"] = $birthday;
         $birthday_status = 'checked';
       }

       if ($include_company == 'yes') {
         $company = $faker->company;
         $contact_arr->append($company);
         $single_user["company"] = $company;
         $company_status = 'checked';
       }
       //Store for adding extra html <br /> between users
       $num_elements = count($contact_arr);
       //Add individual user to collective user group
       $users[$i] = $contact_arr;
       $all_users_arr[$i]=($single_user);
     }

     $all_users_obj["user_list"] = $all_users_arr;
     $all_users_json = json_encode($all_users_obj, JSON_PRETTY_PRINT);
     $usersErr = null;
     $data = ['format_status' => $format_status, 'format' => $format, 'users' => $users, 'usersErr' => $usersErr, 'num_elements' => $num_elements, 'address_status' => $address_status, 'birthday_status' => $birthday_status, 'company_status' => $company_status, 'all_users_json' => $all_users_json, 'number_of_users' => $number_of_users];

     return view('user.show')->with($data);
   }
}
