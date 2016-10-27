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
       <legend>Generate Lorem Ipsum Text</legend>
       <div class='pure-u-8-24'>
         How many paragraphs?
       </div>
       <div class='pure-u-4-24'>
         <input name="paragraphNumber" type="text" placeholder="(1-20)">
       </div>
       <br>
       <div class='pure-u-8-24'>
         How many words per paragraph?
       </div>
       <div class='pure-u-4-24'>
         <input name="wordNumber" type="text" placeholder="(1-500)">
       </div>
       <br><br>
       <button type="submit" class="pure-button pure-button-primary">Generate</button>
    </fieldset>
   </form>
 </div>

 <div class="pure-u-2-5" id="formRight">

   <form class="pure-form" action="user" method ="POST">
     {{ csrf_field() }}
     <fieldset>
       <legend>Generate Random Users</legend>
       <div class='pure-u-6-24'>
         How many users?
       </div>
       <div class='pure-u-4-24'>
         <input name="userNumber" type="text" placeholder="(1-20)">
       </div>
       <br><br>
       <div class='pure-u-6-24'>
         Include birthdays?
       </div>
       <input name="birthday" type="checkbox">
       <br>
       <div class='pure-u-6-24'>
         Include ID numbers?
       </div>
       <input name="idnum" type="checkbox">
       <br>
       <div class='pure-u-6-24'>
         Include addresses?
       </div>
       <input name="address" type="checkbox">
       <br><br>
       <button type="submit" class="pure-button pure-button-primary">Generate</button>
     </fieldset>
  </form>
 </div>
  <div class="pure-u-1-5">
    @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
  </div>
</div>
@stop
