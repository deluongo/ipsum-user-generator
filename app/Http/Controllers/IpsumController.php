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

    /* ======================================================
    Display on load
    ====================================================== */
    public function show()
    {
        $ipsums = null;
        $number_of_paragraphs = null;
        $sentences_per_paragraph = null;

        $faker = \Faker\Factory::create();

        $ipsums = new \ArrayObject();
        for ($i=0; $i<1; $i++) {
            $paragraph = $faker->paragraph($nbSentences = 4, $variableNbSentences = true);
            $ipsums->append($paragraph);
        }

        return view('ipsum.show')->with(['ipsums' => $ipsums, 'number_of_paragraphs' => $number_of_paragraphs, 'sentences_per_paragraph' => $sentences_per_paragraph]);
    }

    /**
    * Process form submission
    *
    * @param  int  $title
    * @return \Illuminate\Http\Response
    */

    /* ======================================================
    Display on form submit
    ====================================================== */
    public function post(Request $request)
    {

        $this->validate($request, [
            'number_of_paragraphs' => 'required|min:1|max:99|numeric',
            'sentences_per_paragraph' => 'required|min:1|max:99|numeric'
        ]);

        $number_of_paragraphs = $request->input('number_of_paragraphs');
        $sentences_per_paragraph = $request->input('sentences_per_paragraph');
        $faker = \Faker\Factory::create();

        $ipsums = new \ArrayObject();
        for ($i=0; $i<$number_of_paragraphs; $i++) {
            $paragraph = $faker->paragraph($nbSentences = $sentences_per_paragraph, $variableNbSentences = false);
            $ipsums->append($paragraph);
        }

        return view('ipsum.show')->with(['ipsums' => $ipsums, 'number_of_paragraphs' => $number_of_paragraphs, 'sentences_per_paragraph' => $sentences_per_paragraph]);


    }
}
