@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
      ???????? <a href="https://laravel-china.org/courses/laravel-essential-training-5.1">Laravel ????</a> ????????
    </p>
    <p>
      ??,???????
    </p>
     <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">????</a>
    </p>
  </div>
@stop