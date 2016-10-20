@extends('layouts.master')

@section('title')
  Generate Users
@stop

@section('head')

@stop

@section('content')
  <!--Displays Generated Passwords -->
  <h1>xkcd Password Generator</h1>
  <!--Display 5 Randomly Generated Passwords -->
  <div>
      <fieldset>
          <legend>Choose Your Password</legend>
          <h2><?php echo $password_array[0]?></h2>
          <h2><?php echo $password_array[1]?></h2>
          <h2><?php echo $password_array[2]?></h2>
          <h2><?php echo $password_array[3]?></h2>
          <h2><?php echo $password_array[4]?></h2>
      </fieldset>
  </div>
  <br>
  <!--Custom Password Settings -->
  <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div>
          <fieldset>
              <legend>Custom Settings</legend>
              <!--Number of Words | Text Box-->
              <label for="words"><span># of Words &nbsp &nbsp</span></label>
              <input type="text" name="words" id="words" value="<?php echo htmlspecialchars($num_words);?>" size=1 placeholder="4" autofocus>
              <span class="error"><?php echo $wordsErr;?></span>
              <br/>
              <!--Separator | Text Box-->
              <label for="link"><span>Separator &nbsp &nbsp</span></label>
              <input type="text" name="link" id="link" value="<?php echo htmlspecialchars($link);?>" size=3 placeholder="-">
              <br/>
              <!--Add a Number | Checkbox-->
              <label for="number"> Add a Number</label>
              <input type="checkbox" name="number" id="number" value="yes" <?php if ($number == 'yes') echo "checked"; ?>>
              <br/>
              <!--Add a Symbol | Checkbox-->
              <label for="symbol"> Add a Symbol&nbsp </label>
              <input type="checkbox" name="symbol" id="symbol" value="yes" <?php if ($symbol == 'yes') echo "checked"; ?>>
              <br/>
              <!--Capitalize | Check Box-->
          </fieldset>
      </div>
      <br>
      <input type="submit" name="submit" value="Generate New Password" />
  </form>
