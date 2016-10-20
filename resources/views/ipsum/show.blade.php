@extends('layouts.master')

@section('title')
  Generate Users
@stop

@section('head')

  <div class="filter">
    <h1>Ipsum Filters</h1>
      <form method="get">
        <input type="text" name="u" label="# of Paragraphs" placeholder="How many paragraphs? (Max: 99)" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Generate Text</button>
      </form>
  </div>

@stop

@section('content')
