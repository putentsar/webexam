@extends('admin.admin')
@section('view')
<a class="btn btn-danger" href="{{route('categories.create')}}" role="button">Добавить</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
	  <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   @foreach($categories as $category)
    <tr>
      <td>{{$category->id}}</td>
	  <td>{{$category->name}}</td>
	 <td class="table-buttons">
	 <a class="btn btn-success" href="{{ route('categories.show', $category->id) }}" role="button">view</a>
	 <a class="btn btn-warning" href="{{ route('categories.edit', $category) }}" role="button">update</a>
	 <form class="d-inline p-2  text-white" method="POST" action="{{ route('categories.destroy', $category->id) }}">
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