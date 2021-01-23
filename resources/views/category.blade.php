@extends('layouts.index')
@section('content')
<div class='container' id="product">
<h1 class='row justify-content-center'>{{$category->name}}</h1>
               <div class="row justify-content-center">
 @foreach($category->dishes as $dish)
  @include('card', compact('dish'))
  @endforeach
</div>

@endsection