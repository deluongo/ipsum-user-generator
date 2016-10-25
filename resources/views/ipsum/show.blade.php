@extends('layouts.master')

@section('title')
  Generate Ipsum Text
@endsection

@section('content')
  <h1>IPSUM</h1>
  <div class="flex-container">
    <div class="flex-item one">
      <fieldset>
        <legend class="settings_legend">FILTER</legend>
          <form method="post" action="/ipsum">
            {{ csrf_field() }}
            <label for="number_of_paragraphs"><span class="labl"># of Paragraphs</span></label>
            <input type="text" name="number_of_paragraphs" value = "{{old('number_of_paragraphs', $number_of_paragraphs)}}" placeholder="How many paragraphs? (Max: 99)" required="required" />
            @if($errors->get('number_of_paragraphs'))
              <ul class="errors">
              @foreach($errors->get('number_of_paragraphs') as $error)
                <li>{{ $error }}</li>
              @endforeach
              </ul>
            @endif
            <label for="sentences_per_paragraph"><span class="labl">Sentences per Paragraph</span></label>
            <input type="text" name="sentences_per_paragraph" value = "{{old('sentences_per_paragraph', $sentences_per_paragraph)}}" placeholder="How many sentences? (Max: 99)" required="required" />
            @if($errors->get('sentences_per_paragraph'))
              <ul class="errors">
              @foreach($errors->get('sentences_per_paragraph') as $error)
                <li>{{ $error }}</li>
              @endforeach
              </ul>
            @endif
            <button type="submit" id="form_submit_button" class="btn btn-primary btn-block btn-large btn_margin btn_font">GET TEXT</button>
          </form>
        </fieldset>
    </div>
    <div class="flex-item two">
      <fieldset>
        <legend>TEXT</legend>
        <div>
          @if ($ipsums != null)
            @foreach($ipsums as $ipsum)
              <p class="text">{{ $ipsum }}</p>
            @endforeach
          @endif
        </div>
      </fieldset>
    </div>
  </div>
@endsection
