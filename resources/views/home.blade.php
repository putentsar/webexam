<link href="/public/css/home.css" rel="stylesheet">
@extends('layouts.index')
@section('content')
<div id="product" class='container'>
<h1 class='row justify-content-center'>Все блюда</h1>
               <div class="justify-content-center">
  @foreach($dishes as $dish)
  @include('card', compact('dish',))
  @endforeach
</div>
</div>

@endsection