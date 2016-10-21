@extends('layouts.master')

@section('title')
  Generate Users
@stop

@section('head')

@stop

@section('content')
  <!--Custom Password Settings -->
  <h1>xkcd Password Generator</h1>
  <div class="flex-container">
    <div class="flex-item one">
      <form method="post" action="/passwords">
        {{ csrf_field() }}
          <div>
              <fieldset>
                  <legend>Custom Settings</legend>
                  <!--Number of Words | Text Box-->
                  <label for="num_words"><span># of Words &nbsp &nbsp</span></label>
                  <input type="text" name="num_words" id="num_words" value="{{ $num_words }}" size=1 placeholder="4" autofocus>
                  <span class="error">{{$wordsErr}}</span>
                  <br/>
                  <!--Separator | Text Box-->
                  <label for="link"><span>Separator &nbsp &nbsp</span></label>
                  <input type="text" name="link" id="link" value="{{ $link }}" size=3 placeholder="-">
                  <br/>
                  <!--Add a Number | Checkbox-->
                  <label for="number"> Add a Number</label>
                  <input type="checkbox" name="number" id="number" value="yes" {{ $number_status }} >
                  <br/>
                  <!--Add a Symbol | Checkbox-->
                  <label for="symbol"> Add a Symbol&nbsp </label>
                  <input type="checkbox" name="symbol" id="symbol" value="yes" {{ $link_status }}>
                  <br/>
                  <!--Capitalize | Check Box-->
              </fieldset>
          </div>
          <br>
          <input class="btn btn-primary btn-block btn-large" type="submit" name="submit" value="Generate New Password" />
      </form>
    </div>
    <div class="flex-item two">
      <!--Displays Generated Passwords -->
      <!--Display 5 Randomly Generated Passwords -->
      <div>
          <fieldset>
              <legend>Choose Your Password</legend>
              <h2>{{$password_array[0]}}</h2>
              <h2>{{$password_array[1]}}</h2>
              <h2>{{$password_array[2]}}</h2>
              <h2>{{$password_array[3]}}</h2>
              <h2>{{$password_array[4]}}</h2>
          </fieldset>
      </div>
      <br>
    </div>
  </div>

@endsection
