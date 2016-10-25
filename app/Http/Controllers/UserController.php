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
        $num_elements = 1;
        $format = 'readable';

        //Remember filters on/off status
        $address_status = '';
        $birthday_status = '';
        $company_status = '';
        $format_status = '';
        $email_status = '';
        $username_status = '';
        $password_status = '';

        //Setup empty array objects to store data
        $contact_arr = new \ArrayObject();

        //Create and store user fields
        $name = $faker->unique()->name;
        $contact_arr->append($name);

        $address = $faker->address;
        $contact_arr->append('Address: '.$address);

        $birthday = $faker->dateTimeThisCentury->format('m-d-Y');
        $contact_arr->append('Birthday: '.$birthday);

        $company = $faker->company;
        $contact_arr->append('Company: '.$company);

        $email = $faker->email;
        $contact_arr->append('Email: '.$email);

        $username = $faker->username;
        $contact_arr->append('Username: '.$username);

        $password = $faker->password;
        $contact_arr->append('Password: '.$password);

        $num_elements = count($contact_arr);
        $users[0] = $contact_arr;

        $all_users_json = null;

        $user_class[0]='output_header';
        for ($z=1; $z<$num_elements; $z++) {
          $user_class[$z]='none';
        }

        //Pass variables to views
        $data = ['user_class' => $user_class, 'format_status' => $format_status, 'format' => $format, 'users' => $users, 'num_elements' => $num_elements,
        'address_status' => $address_status, 'birthday_status' => $birthday_status, 'company_status' => $company_status, 'email_status' => $email_status,
        'username_status' => $username_status, 'password_status' => $password_status, 'all_users_json' => $all_users_json, 'number_of_users' => $number_of_users];

        return view('user.show')->with($data);
   }

   //Display on form submit
   public function post(Request $request) {

     //Serverside validation
     $this->validate($request, [
         'number_of_users' => 'required|min:1|max:99|numeric',
     ]);


     //Assign form values to variables
     $number_of_users = $request->input('number_of_users');
     $include_address = $request->input('address');
     $include_birthday = $request->input('birthday');
     $include_email = $request->input('email');
     $include_username = $request->input('username');
     $include_password = $request->input('password');
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
     $email_status = '';
     $username_status = '';
     $password_status = '';
     if ($format == 'yes') {
       $format_status = 'checked';
     }

     $input_names = array('company');

     for ($i=0; $i<$number_of_users; $i++) {
       $contact_arr = new \ArrayObject();
       //Generate name
       $name = $faker->unique()->name;
       //Store name
       $contact_arr->append($name);
       $single_user["name"] = $name;

       if ($include_address == 'yes') {
         $address = $faker->address;
         $contact_arr->append('Address: '.$address);
         $single_user["address"] = $address;
         $address_status = 'checked';
       }

       if ($include_birthday == 'yes') {
         $birthday = $faker->dateTimeThisCentury->format('m-d-Y');
         $contact_arr->append('Birthday: '.$birthday);
         $single_user["birthday"] = $birthday;
         $birthday_status = 'checked';
       }

       if ($include_company == 'yes') {
         $company = $faker->company;
         $contact_arr->append('Company: '.$company);
         $single_user["company"] = $company;
         $company_status = 'checked';
       }

       if ($include_email == 'yes') {
         $email = $faker->email;
         $contact_arr->append('Email: '.$email);
         $single_user["email"] = $email;
         $email_status = 'checked';
       }

       if ($include_username == 'yes') {
         $username = $faker->username;
         $contact_arr->append('Username: '.$username);
         $single_user["username"] = $username;
         $username_status = 'checked';
       }

       if ($include_password == 'yes') {
         $password = $faker->password;
         $contact_arr->append('Password: '.$password);
         $single_user["password"] = $password;
         $password_status = 'checked';
       }
       //Store for adding extra html <br /> between users
       $num_elements = count($contact_arr);
       //Bold the users name

       //Add individual user to collective user group
       $users[$i] = $contact_arr;
       $all_users_arr[$i]=($single_user);
     }

     $user_class[0]='output_header';

     for ($z=1; $z<$num_elements; $z++) {
       $user_class[$z]='none';
     }

     $all_users_obj["user_list"] = $all_users_arr;
     $all_users_json = json_encode($all_users_obj, JSON_PRETTY_PRINT);

     $data = ['user_class' => $user_class, 'format_status' => $format_status, 'format' => $format, 'users' => $users, 'num_elements' => $num_elements,
     'address_status' => $address_status, 'birthday_status' => $birthday_status, 'company_status' => $company_status, 'email_status' => $email_status,
     'username_status' => $username_status, 'password_status' => $password_status, 'all_users_json' => $all_users_json, 'number_of_users' => $number_of_users];

     return view('user.show')->with($data);
   }
}
