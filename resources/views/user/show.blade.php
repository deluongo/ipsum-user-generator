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
      <form method="get" action="/users">
        {{ csrf_field() }}
        <fieldset>
          <legend>Custom Settings</legend>
          <input type="text" name="num_users" label="num_users" placeholder="How many users? (Max: 99)" required="required" />
          <input name="birthdate" type="checkbox">		<label for="birthdate">Birthdate</label>		<br>
	        <input name="profile" type="checkbox">		<label for="profile">Profile</label>		<br>
          <input type="submit" name="submit" class="btn btn-primary btn-block btn-space" value="Generate Fake Users" />
        </fieldset>
      </form>
    </div>

    <div class="flex-item two">
      <fieldset>
        <legend>Dummy Users</legend>
        <p>
          @if ($users != null)
            <h2>{{ $users[1] }}</h2>
          @endif
        </p>
      </fieldset>
    </div>
  </div>
@endsection
