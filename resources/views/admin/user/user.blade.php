@extends('admin.admin')
@section('view')
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
	  <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   @foreach($users as $user)
    <tr>
      <td>{{$user->id}}</td>
	  <td>{{$user->name}}</td>
	 <td class="table-buttons">
	 <a class="btn btn-success" href="{{ route('users.show', $user->id) }}" role="button">view</a>
	 <form class="d-inline p-2  text-white" method="POST" action="{{ route('users.destroy', $user->id) }}">
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