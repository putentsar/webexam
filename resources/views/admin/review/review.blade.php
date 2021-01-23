@extends('admin.admin')
@section('view')
<a class="btn btn-danger" href="{{route('reviews.create')}}" role="button">Добавить</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Comment</th>
	  <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   @foreach($reviews as $review)
   <tr>
      <td>{{$review->id}}</td>
	  <td>{{$review->comment}}</td>
	 <td class="table-buttons">
	 <a class="btn btn-success" href="{{ route('reviews.show', $review->id) }}" role="button">view</a>
	 <a class="btn btn-warning" href="{{ route('reviews.edit', $review) }}" role="button">update</a>
	 <form class="d-inline p-2  text-white" method="POST" action="{{ route('reviews.destroy', $review->id) }}">
	 {{csrf_field()}}
	 {{method_field('delete')}}
	 <button class="btn btn-danger" href="" role="button">delete</button>
	 </form>
	  </td>
    </tr>
	 @endforeach
  </tbody>
</table>

@endsection