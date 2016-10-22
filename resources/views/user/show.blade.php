@extends('layouts.master')

@section('title')
  Generate Users
@stop

@section('head')

@stop

@section('content')
  <!--User Settings -->
  <h1>Dummy User Filters</h1>
  <div class="flex-container">
    <div class="flex-item one">
      <form method="post" action="/users">
        {{ csrf_field() }}
        <fieldset>
          <legend>Custom Settings</legend>
          <input type="text" name="num_users" label="num_users" placeholder="How many users? (Max: 99)" value="{{ $num_users }}" required="required" />
          <input name="address" type="checkbox" value="yes" {{$address_status}}>		<label for="address">Address</label>		<br>
          <input name="birthday" type="checkbox" value="yes" {{$birthday_status}}>		<label for="birthday">Birthdate</label>		<br>
          <input type="submit" name="submit" class="btn btn-primary btn-block btn-space" value="Generate Fake Users" />
        </fieldset>
      </form>
    </div>

    <div class="flex-item two">
      <fieldset>
        <legend>Dummy Users</legend>
        <p>
          <div class="text">
            <!--Print Names -->
            @if ($users != null)
              <p>
              @foreach($users as $user)
                  @for ($x = 0; $x < $num_elements; $x++)
                    {{ $user[$x] }} <br >
                  @endfor
                <br>
              @endforeach
              </p>
            @endif
          </div>
        </p>
      </fieldset>
    </div>
  </div>
@endsection
