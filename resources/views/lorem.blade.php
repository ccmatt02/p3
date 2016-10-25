@extends('layouts.master')

@section('title')
Lorem Ipsum Text
@stop

@section('mainContent')
<h3>Displaying {{ $parNum }} paragraphs with {{ $wordNum }} words each.</h3>

<br><br>

<?php

  if($wordNum < 10)
  {
    $textHold = Lipsum::short()->text($parNum);
  }
  else
  {
    $textHold = Lipsum::short()->text( intval($parNum*($wordNum/10)) );
  }

  $wordBank = explode(' ', $textHold);

  $wordCount = 0;
  $toOut = '&nbsp;&nbsp;&nbsp;&nbsp;';

  for($i = 0; $i < $parNum; $i++)
  {
    for($j = 0; $j < $wordNum; $j++)
    {
        $toOut .= $wordBank[$wordCount];
        $toOut .= ' ';

        $wordCount++;
    }
    $toOut .= '<br><br>&nbsp;&nbsp;&nbsp;&nbsp;';
  }

  echo $toOut;

?>

@stop
