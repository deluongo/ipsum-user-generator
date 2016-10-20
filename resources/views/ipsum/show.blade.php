@extends('layouts.master')

@section('title')
  Generate Ipsum Text
@stop

@section('head')

  <div class="flex-container">
    <div class="flex-item one">
        <h1>Ipsum Filters</h1>
          <form method="get" action="\ipsums">
            <input type="text" name="num_par" label="num_par" placeholder="How many paragraphs? (Max: 99)" required="required" />
            @if(count($errors) > 0)
              <ul>
                @foreach($errors->all() as $error)
                <li>
                  {{ $error }}
                </li>
              </ul>
            <button type="submit" class="btn btn-primary btn-block btn-large">Generate Text</button>
          </form>
    </div>
    <div class="flex-item two">
      <div class="text">
        @if ($ipsum != null)
          <p>{{ $ipsum }}</p>
        @endif
      </div>
    </div>
  </div>
@endsection

@section('content')
