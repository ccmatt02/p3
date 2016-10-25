@extends('layouts.master')

@section('title')
Random User Generator
@stop

@section('mainContent')
Users: {{ $userNum }} <br>
Birthday?: {{ $birthday }} <br>
ID #?: {{ $idnum }} <br>
Address?: {{ $address }}
@stop
