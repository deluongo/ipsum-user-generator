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
          <form method="post" action="\ipsums">
            {{ csrf_field() }}
            <input type="text" name="num_par" label="num_par" value = "{{$num_par}}" placeholder="How many paragraphs? (Max: 99)" required="required" />
            @if(count($errors) > 0)
              <ul>
                @foreach($errors->all() as $error)
                <li>
                  {{ $error }}
                </li>
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
