@extends('layouts.master')

@section('title')
  Generate Users
@stop

@section('head')

@stop

@section('content')
  <!--User Settings -->
  <form method="get" action="/users">
      {{ csrf_field() }}
      <div class="filter">
        <h1>Dummy User Filters</h1>
          <form method="get">
            <input id='shade' type="text" name="num_users" label="num_users" placeholder="How many users? (Max: 99)" required="required" />
            <input name="birthdate" type="checkbox">		<label for="birthdate">Birthdate</label>		<br>
		        <input name="profile" type="checkbox">		<label for="profile">Profile</label>		<br>
            <input id='shade' type="submit" name="submit" class="btn btn-primary btn-block btn-large" value="Generate Fake Users" />
            </form>
      </div>

      <div class="output">
        <p>
          @if ($users != null)
            <h2>{{ $users[1] }}</h2>
          @endif
        </p>
      </div>



  </form>
