@extends('layouts.master')

@section('title')
  Generate Users
@stop

@section('head')

@stop

@section('content')
  <!--User Settings -->
  <h1>Dummy Users</h1>
  <div class="flex-container">
    <div class="flex-item one">
      <form method="post" action="/users">
        {{ csrf_field() }}
        <fieldset>
          <legend>Custom Settings</legend>
          <!--Number of users -->
          <label for="num_users"><span># of Users</span></label>
          <input type="text" name="num_users" placeholder="How many users? (Max: 99)" value="{{ $num_users }}" required="required" />
          <!--User Fields -->
          <!--Output Format-->
          <div class="format_toggle">
            <span> Format Output</span>
            <br />
            <div class="toggle2 toggle--on-off">
              <input type="checkbox" name="format" class="toggle__input" value="yes" {{$format_status}}>
              <label data-on="JSON" data-off="TEXT" class="toggle__label2"></label>
            </div>
          </div>
          <!--Add Address | Checkbox-->
          <div id="usr_toggle">
            <div class="flex-item-toggle">
              <span> Address </span>
              <br />
              <div class="toggle toggle--on-off">
                <input type="checkbox" name="address" class="toggle__input" value="yes" {{$address_status}}>
                <label data-on="ON" data-off="OFF" class="toggle__label"></label>
              </div>
            </div>
            <!--Include Birthday | Checkbox-->
            <div class="flex-item-toggle">
              <span> Birthday </span>
              <br />
              <div class="toggle toggle--on-off">
                <input type="checkbox" name="birthday" class="toggle__input" value="yes" {{$birthday_status}}>
                <label data-on="ON" data-off="OFF" class="toggle__label"></label>
              </div>
              <br/>
            </div>
          </div>
          <!--Include Birthday | Checkbox-->
          <div class="flex-item-toggle">
            <span> Company </span>
            <br />
            <div class="toggle toggle--on-off">
              <input type="checkbox" name="company" class="toggle__input" value="yes" {{$company_status}}>
              <label data-on="ON" data-off="OFF" class="toggle__label"></label>
            </div>
            <br/>
          </div>
          <input type="submit" name="submit" class="btn btn-primary btn-block btn-space" value="Generate Fake Users" />
        </fieldset>
      </form>
    </div>

    <div class="flex-item two">
      <fieldset>
        <legend>Dummy Users</legend>
          <div class="text">
            <!--Print Names | Readable Format -->
            @if ($format != 'yes')
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
            @endif

            <!--Print Names | JSON -->
            @if ($format == 'yes')
              @if ($all_users_json != null)
                <pre><p>{{$all_users_json}}</p></pre>
              @endif
            @endif
          </div>
      </fieldset>
    </div>
  </div>
@endsection
