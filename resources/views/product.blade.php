@extends('layouts.index')
 @section('content')
  <div  id="product" class="container">
               <div style="background-color:white;">
			    <h1>{{$dishes->name}} </h1>
				<hr>
				<div class="image">
				 <img id="image" src="{{$dishes->link}}" height="300px" width="300px" alt="альтернативный текст">
				 </div>
				 <h1>Ингредиенты</h1>
				 <hr>
 @foreach($dishes->product as $product)
 <div>
 {{$product->name}} - {{$product->pivot->amount}}
 </div>
    @endforeach
	<hr>
  <p>
  <h1>Рецепт</h1>
  {{$dishes->recipe}}
  </p>
  <hr>
  <form action="/{{$dishes->category->code}}/{{$dishes->code}}/comment/" method="POST">
	  {{csrf_field()}}
  <div class="form-group">
    <h1 for="formGroupExampleInput">Комментарии</h1>
    <input type="text" name="comment" class="form-control"  placeholder="comment">
	<input type="text" name="dish_id" class="form-control d-none"  placeholder="dish_id" value="{{$dishes->id}}">
	<input type="text" name="user_id" class="form-control d-none"  placeholder="user_id" value="{{ Auth::user()->id }}" >
	<button type="submit" class="btn btn-primary">Отправить</button>
  </div>
</form>

 @foreach($reviewes as $review)
 <b>
 {{$review->user->name}}
 {{$review->comment}}
 {{$review->created_at}}
 </b><br>
  @endforeach
</div>
</div>
@endsection