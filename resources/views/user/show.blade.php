@extends('layouts.master')

@section('title')
  Generate Users
@stop

@section('head')

@stop

@section('content')
  <!--User Settings -->
  <form method="get" action="{{$_SERVER["PHP_SELF"]}}">
      <div class="filter">
        <h1>Dummy User Filters</h1>
          <form method="get">
            <input type="text" name="num_users" label="num_users" placeholder="How many users? (Max: 99)" required="required" />
            <input name="birthdate" type="checkbox">		<label for="birthdate">Birthdate</label>		<br>
		        <input name="profile" type="checkbox">		<label for="profile">Profile</label>		<br>
            <input type="submit" name="submit" class="btn btn-primary btn-block btn-large" value="Generate Fake Users" />
            </form>
      </div>


  </form>
