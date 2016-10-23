@extends('layouts.master')

@section('title')
  Generate Ipsum Text
@endsection

@section('content')
  <h1>Ipsum Generator</h1>
  <div class="flex-container">
    <div class="flex-item one">
      <fieldset>
        <legend>Ipsum Filters</legend>
          <form method="post" action="/ipsums">
            {{ csrf_field() }}
            <label for="number_of_paragraphs"><span># of Paragraphs</span></label>
            <input type="text" name="number_of_paragraphs" value = "{{old('number_of_paragraphs', $number_of_paragraphs)}}" placeholder="How many paragraphs? (Max: 99)" required="required" />
            @if($errors->get('number_of_paragraphs'))
              <ul class="errors">
              @foreach($errors->get('number_of_paragraphs') as $error)
                <li>{{ $error }}</li>
              @endforeach
              </ul>
            @endif
            <label for="sentences_per_paragraph"><span>Sentences per Paragraph</span></label>
            <input type="text" name="sentences_per_paragraph" value = "{{old('sentences_per_paragraph', $sentences_per_paragraph)}}" placeholder="How many sentences? (Max: 99)" required="required" />
            @if($errors->get('sentences_per_paragraph'))
              <ul class="errors">
              @foreach($errors->get('sentences_per_paragraph') as $error)
                <li>{{ $error }}</li>
              @endforeach
              </ul>
            @endif
            <button type="submit" class="btn btn-primary btn-block btn-large">Generate Text</button>
          </form>
        </fieldset>
    </div>
    <div class="flex-item two">
      <fieldset>
        <legend>Ipsum Text</legend>
        <div class="text">
          @if ($ipsums != null)
            @foreach($ipsums as $ipsum)
              <p>{{ $ipsum }}</p>
            @endforeach
          @endif
        </div>
      </fieldset>
    </div>
  </div>
@endsection
