<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;

use p3\Http\Requests;

class PasswordController extends Controller
{

    /**
      * Display the specified resource.
      *
      * @param
      * @return \Illuminate\Http\Response
      */

      public function show()
      {
        $wordsErr = '';
        $num_words = 4;
        $link = '-';
        $symbol = 'no';
        $number = 'no';

        //Scrapes plain text from inside <li> tags
        //Modified from http://stackoverflow.com/questions/14329892/web-scrape-using-preg-match-all
        function get_words($url){
            $site = file_get_contents($url);
            $dom = new \DOMDocument();
            @$dom->loadHTML($site);
            $result = array();
            foreach($dom->getElementsByTagName('li') as $li) {
                $innerHTML= '';
                $children = $li->childNodes;
                foreach ($children as $child) {
                $innerHTML .= trim($child->ownerDocument->saveXML($child));
                }
                $fixed = array_map('strip_tags', array_map('trim', explode("<br/>",trim($innerHTML))));
                foreach($fixed as $val){
                    if(empty($val)){continue;}
                    $str = (string)$val;
                    $result[] = str_replace(array('! '),'',$str);
                }
            }
            return $result;
        }

        //Scrape words from a dictionary site
        //Site is saved so as not to leverage their resources
        $array_words = [];
        for ($x = 1; $x <= 10; $x++) {
            $z=$x*2;
            $y=$z-1;
            //Formats in accordance with URL pattern
            if ($y < 10)
                $y='0'.$y;
            if ($z < 10)
                $z='0'.$z;
            $url = 'dictionary/words-'.$y.'-'.$z.'-hundred.html';
            //Scrape the given URL's
            $new_words = get_words($url);
            //Create an array or words
            $array_words = array_merge($array_words, $new_words);
        }

        //Generate 5 passwords and store in an array
        $password_array = array();
        for ($a = 0; $a < 5; $a++) {
            $password = '';
            //Select a random words
            for ($i = 1; $i <= $num_words; $i++) {
                $word_index = rand(0, count($array_words));
                $word = (string)$array_words[$word_index];
                $password = $password.$word.$link;
            }
            //Add number
            if ($number == 'yes') {
                $rand_int = (string)rand(0, 9);
                $password = $password.$rand_int;
            }
            //Add symbol
            if ($symbol == 'yes') {
                $chars = array(
                    0 => '!',
                    1 => '@',
                    2 => '#',
                    3 => '$',
                    4 => '%',
                    5 => '^',
                    6 => '&',
                    7 => '*',
                    8 => '(',
                    9 => ')',
                    10 => '?'
                );
                $rand_int = rand(0, 10);
                $rand_char = $chars[$rand_int];
                $password = $password.$rand_char;
            }
            //Remove extra link if nor additional numbers or strings are added
            if ($symbol != 'yes' && $number != 'yes') {
                $password = substr($password, 0, -1);
            }
            //Remove spaces
            $password = preg_replace('/[\s]/','',$password);
            //Append password to password array
            array_push($password_array, $password);
        }

        $number_status = '';
        $link_status = '';

        $data = ['password_array' => $password_array, 'num_words' => $num_words, 'link' => $link, 'number' => $number, 'symbol' => $symbol, 'wordsErr' => $wordsErr, 'number_status' => $number_status, 'link_status' => $link_status];
        return view('password.show')->with($data);
       }

      public function post(Request $request)
      {
        $this->validate($request, [
            'num_words' => 'required|min:1|max:25|numeric',
            'symbol' =>  '',
            'number' => ''
        ]);

        //Set default password values
        $wordsErr = '';
        $num_words = $request->input('num_words');
        $link = $request->input('link');
        $symbol = $request->input('symbol');
        $number = $request->input('number');

        if ($symbol != 'yes') {
            $symbol = 'no';
        }
        if ($number != 'yes') {
            $number = 'no';
        }


        //Scrapes plain text from inside <li> tags
        //Modified from http://stackoverflow.com/questions/14329892/web-scrape-using-preg-match-all
        function get_words($url){
            $site = file_get_contents($url);
            $dom = new \DOMDocument();
            @$dom->loadHTML($site);
            $result = array();
            foreach($dom->getElementsByTagName('li') as $li) {
                $innerHTML= '';
                $children = $li->childNodes;
                foreach ($children as $child) {
                $innerHTML .= trim($child->ownerDocument->saveXML($child));
                }
                $fixed = array_map('strip_tags', array_map('trim', explode("<br/>",trim($innerHTML))));
                foreach($fixed as $val){
                    if(empty($val)){continue;}
                    $str = (string)$val;
                    $result[] = str_replace(array('! '),'',$str);
                }
            }
            return $result;
        }

        //Scrape words from a dictionary site
        //Site is saved so as not to leverage their resources
        $array_words = [];
        for ($x = 1; $x <= 10; $x++) {
            $z=$x*2;
            $y=$z-1;
            //Formats in accordance with URL pattern
            if ($y < 10)
                $y='0'.$y;
            if ($z < 10)
                $z='0'.$z;
            $url = 'dictionary/words-'.$y.'-'.$z.'-hundred.html';
            //Scrape the given URL's
            $new_words = get_words($url);
            //Create an array or words
            $array_words = array_merge($array_words, $new_words);
        }

        //Generate 5 passwords and store in an array
        $password_array = array();
        for ($a = 0; $a < 5; $a++) {
            $password = '';
            //Select a random words
            for ($i = 1; $i <= $num_words; $i++) {
                $word_index = rand(0, count($array_words));
                $word = (string)$array_words[$word_index];
                $password = $password.$word.$link;
            }
            //Add number
            if ($number == 'yes') {
                $rand_int = (string)rand(0, 9);
                $password = $password.$rand_int;
            }
            //Add symbol
            if ($symbol == 'yes') {
                $chars = array(
                    0 => '!',
                    1 => '@',
                    2 => '#',
                    3 => '$',
                    4 => '%',
                    5 => '^',
                    6 => '&',
                    7 => '*',
                    8 => '(',
                    9 => ')',
                    10 => '?'
                );
                $rand_int = rand(0, 10);
                $rand_char = $chars[$rand_int];
                $password = $password.$rand_char;
            }
            //Remove extra link if nor additional numbers or strings are added
            if ($symbol != 'yes' && $number != 'yes') {
                $password = substr($password, 0, -1);
            }
            //Remove spaces
            $password = preg_replace('/[\s]/','',$password);
            //Append password to password array
            array_push($password_array, $password);
        }

        if ($symbol== 'yes') {
          $link_status = 'checked';
        }
        else {
          $link_status = '';
        }

        if ($number == 'yes') {
          $number_status = 'checked';
        }
        else {
          $number_status = '';
        }


        $data = ['password_array' => $password_array, 'num_words' => $num_words, 'link' => $link, 'number' => $number, 'symbol' => $symbol, 'wordsErr' => $wordsErr, 'number_status' => $number_status, 'link_status' => $link_status];
        return view('password.show')->with($data);
    }
  }
