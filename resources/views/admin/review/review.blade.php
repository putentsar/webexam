@extends('admin.admin')
@section('view')
<a class="btn btn-danger" href="{{route('reviews.create')}}" role="button">Добавить</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Комментарий</th>
	  <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   @foreach($reviews as $review)
    <tr>
      <td>{{$review->id}}</td>
	  <td>{{$review->comment}}</td>
	<td class="table-buttons">
	 <form  class="d-inline p-2  text-white" method="POST" action="{{ route('reviews.destroy', $review) }}">
	 {{csrf_field()}}
	 {{method_field('delete')}}
	 <button id="button3" class="btn btn-danger" href="" role="button">delete</button>
	 </form>
	 	 <a id="button2" class="btn btn-warning" href="{{ route('reviews.edit', $review) }}" role="button">update</a>
	 <a id="button1" class="btn btn-success" href="{{ route('reviews.show', $review) }}" role="button">view</a>
	  </td>
    </tr>
	 @endforeach
  </tbody>
</table>

@endsection