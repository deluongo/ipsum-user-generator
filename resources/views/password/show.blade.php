@extends('layouts.master')

@section('title')
  Generate Users
@stop

@section('head')

@stop

@section('content')
  <!--Custom Password Settings -->
  <h1>PASSWORD</h1>
  <div class="flex-container">
    <div class="flex-item one">
      <form method="post" action="/password">
        {{ csrf_field() }}
            <fieldset>
                <legend class="settings_legend">FILTER</legend>
                <!--Number of Words | Text Box-->
                <label for="number_of_words"><span class="labl"># of Words</span></label>
                <input type="text" name="number_of_words" id="num_words" value="{{old('number_of_words', $number_of_words)}}" size=1 placeholder="How many words? (Max: 25)" autofocus>
                @if($errors->get('number_of_words'))
                  <ul class="errors">
                  @foreach($errors->get('number_of_words') as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                  </ul>
                @endif
                <!--Separator | Text Box-->
                <label for="link"><span class="labl">Separator</span></label>
                <input type="text" name="link" id="link" value="{{old('link', $link)}}" size=3 placeholder="Which separator?">
                @if($errors->get('link'))
                  <ul class="errors">
                  @foreach($errors->get('link') as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                  </ul>
                @endif
                <br/>
                <!--Add a Number | Checkbox-->
                <div id="password_toggle">
                  <div>
                    <span class="labl"> Add a Number </span>
                    <br />
                    <div class="toggle toggle--on-off">
                      <input type="checkbox" name="number" class="toggle__input" value="yes" {{ $number_status }} >
                      <label data-on="ON" data-off="OFF" class="toggle__label"></label>
                    </div>
                    <br/>
                  </div>
                  <!--Add a Symbol | Checkbox-->
                  <div>
                    <span class="labl"> Add a Symbol </span>
                    <br />
                    <div class="toggle toggle--on-off">
                      <input type="checkbox" name="symbol" class="toggle__input" value="yes" {{ $symbol_status }} >
                      <label data-on="ON" data-off="OFF" class="toggle__label"></label>
                    </div>
                    <br/>
                  </div>
                </div>
                <!--Submmit Button-->
                <button type="submit" id="form_submit_button" class="btn btn-primary btn-block btn-large btn_margin btn_font">GET PASSWORD</button>

            </fieldset>
      </form>
    </div>
    <div class="flex-item two">
      <!--Displays Generated Passwords -->
      <!--Display 5 Randomly Generated Passwords -->
      <div>
          <fieldset>
              <legend>XKCD</legend>
              <p class="typed_output">{{$password_array[0]}}</p>
              <p class="typed_output">{{$password_array[1]}}</p>
              <p class="typed_output">{{$password_array[2]}}</p>
              <p class="typed_output">{{$password_array[3]}}</p>
              <p class="typed_output">{{$password_array[4]}}</p>
          </fieldset>
      </div>
      <br>
    </div>
  </div>

@endsection
