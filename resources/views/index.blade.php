@extends('layouts.master')

@section('title')
Lorem Ipsum and Random User Generator
@stop

@section('mainContent')
<div class="pure-g">
 <div class="pure-u-2-5" id="formLeft">
   <form class="pure-form" action="lorem" method="POST">
     {{ csrf_field() }}
     <fieldset>
       <legend><h4>Generate Lorem Ipsum Text</h4></legend>
       <div class='pure-u-8-24'>
         <lable for="parNum">How many paragraphs?</lable>
       </div>
       <div class='pure-u-4-24'>
         <input name="parNum" type="textbox" placeholder="(1-20)">
       </div>
       <br>
       <div class='pure-u-8-24'>
         <label for="wordNum">How many words per paragraph?</label>
       </div>
       <div class='pure-u-4-24'>
         <input name="wordNum" type="textbox" placeholder="(1-500)">
       </div>
       <br><br>
       <button type="submit" class="pure-button pure-button-primary">Generate</button>
    </fieldset>
   </form>
 </div>

 <div class="pure-u-2-5" id="formRight">

   <form class="pure-form" action="/user" method ="POST">
     {{ csrf_field() }}
     <fieldset>
       <legend><h4>Generate Random Users</h4></legend>
       <div class='pure-u-6-24'>
         <label name="userNum">How many users?</label>
       </div>
       <div class='pure-u-4-24'>
         <input name="userNum" type="textbox">
       </div>
       <br><br>
       <div class='pure-u-6-24'>
         <label name="birthday">Include birthdays?</label>
       </div>
       <input name="birthday" type="checkbox">
       <br>
       <div class='pure-u-6-24'>
         <label name="idnum">Include ID numbers?</label>
       </div>
       <input name="idnum" type="checkbox">
       <br>
       <div class='pure-u-6-24'>
         <label name="address">Include addresses?</label>
       </div>
       <input name="address" type="checkbox">
       <br><br>
       <button type="submit" class="pure-button pure-button-primary">Generate</button>
     </fieldset>
  </form>
 </div>
</div>
@stop
