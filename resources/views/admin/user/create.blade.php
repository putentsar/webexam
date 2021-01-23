
@extends('admin.admin')
@section('view')
 <form method="POST" action="{{ route('users.store') }}">
	 {{csrf_field()}}
  <div class="form-group">
    <label for="post-name">Имя</label>
    <input name="name" type="name" class="form-control" id="post-name" required>
  </div>
  <div class="form-group">
    <label for="post-name">Email</label>
    <input name="email" type="name" class="form-control" id="post-name" required>
  </div>
  <div class="form-group">
    <label for="post-name">password</label>
    <input name="password" type="name" class="form-control" id="post-name" required>
  </div>
  <div class="form-group">
    <label for="post-name">type</label>
    <input name="type" type="name" class="form-control" id="post-name" required>
  </div>
<button type="submit" class="btn btn-success">Добавить</button>
</form>
@endsection