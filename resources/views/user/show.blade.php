@extends('layouts.master')

@section('title')
  Generate Users
@stop

@section('head')

@stop

@section('content')
  <!--User Settings -->
  <h1>USER</h1>
  <div class="flex-container">
    <div class="flex-item one">
      <form method="post" action="/user">
        {{ csrf_field() }}
        <fieldset>
          <legend class="settings_legend">FILTER</legend>
          <!--Number of users -->
          <label for="number_of_users"><span class="labl"># of Users</span></label>
          <input type="text" name="number_of_users" placeholder="How many users? (Max: 99)" value="{{ $number_of_users }}" required="required" />
          @if($errors->get('number_of_users'))
            <ul class="errors">
            @foreach($errors->get('number_of_users') as $error)
              <li>{{ $error }}</li>
            @endforeach
            </ul>
          @endif
          <!--User Fields -->
          <!--Output Format-->
          <div class="format_toggle">
            <span class="labl"> Format Output</span>
            <br />
            <div class="toggle2 toggle--on-off">
              <input type="checkbox" name="format" class="toggle__input" value="yes" {{$format_status}}>
              <label data-on="JSON" data-off="TEXT" class="toggle__label2"></label>
            </div>
          </div>
          <!--Include Address | Checkbox-->
          <div id="usr_toggle">
            <div class="flex-item-toggle">
              <span class="labl"> Address </span>
              <br />
              <div class="toggle toggle--on-off">
                <input type="checkbox" name="address" class="toggle__input" value="yes" {{$address_status}}>
                <label data-on="ON" data-off="OFF" class="toggle__label"></label>
              </div>
            </div>
            <!--Include Birthday | Checkbox-->
            <div class="flex-item-toggle">
              <span class="labl"> Birthday </span>
              <br />
              <div class="toggle toggle--on-off">
                <input type="checkbox" name="birthday" class="toggle__input" value="yes" {{$birthday_status}}>
                <label data-on="ON" data-off="OFF" class="toggle__label"></label>
              </div>
              <br/>
            </div>
          </div>
          <!--Include Company | Checkbox-->
          <div id="usr_toggle">
            <div class="flex-item-toggle">
              <span class="labl"> Company </span>
              <br />
              <div class="toggle toggle--on-off">
                <input type="checkbox" name="company" class="toggle__input" value="yes" {{$company_status}}>
                <label data-on="ON" data-off="OFF" class="toggle__label"></label>
              </div>
              <br/>
            </div>
          <!--Include Email | Checkbox-->
            <div class="flex-item-toggle">
              <span class="labl"> Email </span>
              <br />
              <div class="toggle toggle--on-off">
                <input type="checkbox" name="email" class="toggle__input" value="yes" {{$email_status}}>
                <label data-on="ON" data-off="OFF" class="toggle__label"></label>
              </div>
              <br/>
            </div>
          </div>
          <!--Include Username | Checkbox-->
          <div id="usr_toggle">
            <div class="flex-item-toggle">
              <span class="labl"> Username </span>
              <br />
              <div class="toggle toggle--on-off">
                <input type="checkbox" name="username" class="toggle__input" value="yes" {{$username_status}}>
                <label data-on="ON" data-off="OFF" class="toggle__label"></label>
              </div>
              <br/>
            </div>
            <div id="usr_toggle">
              <div class="flex-item-toggle">
                <span class="labl"> Password </span>
                <br />
                <div class="toggle toggle--on-off">
                  <input type="checkbox" name="password" class="toggle__input" value="yes" {{$password_status}}>
                  <label data-on="ON" data-off="OFF" class="toggle__label"></label>
                </div>
                <br/>
              </div>
            </div>
          </div>
          <button type="submit" id="form_submit_button" class="btn btn-primary btn-block btn-large btn_margin btn_font">GET USERS</button>
        </fieldset>
      </form>
    </div>

    <div class="flex-item two">
      <fieldset>
        <legend>DUMMY</legend>
          <div class="text">
            <!--Print Names | Readable Format -->
            @if ($format != 'yes')
              @if ($users != null)
                @foreach($users as $user)
                  <p>
                    @for ($x = 0; $x < $num_elements; $x++)
                      <span id='{{ $user_class[$x]}}'>{{ $user[$x] }}</span><br />
                    @endfor
                  </p>
                @endforeach
              @endif
            @endif

            <!--Print Names | JSON -->
            @if ($format == 'yes')
              @if ($all_users_json != null)

                <pre><p><span>JSON</span><br><br>{{$all_users_json}}</p></pre>
              @endif
            @endif
          </div>
      </fieldset>
    </div>
  </div>
@endsection
