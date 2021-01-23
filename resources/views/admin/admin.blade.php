@extends('layouts.index')
@section('content')
  <head>
    <title>Admin</title>
  </head>
  <div >
      <div class="row">
        <header id="header" class="col-md-1">
          <nav class="sidebar-sticky navbar-expand-md">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto flex-column">
			   <li class="nav-item active">
                  <a  href="/admin" class="nav-link text-light">Admin</a>
                </li>
                <li class="nav-item active">
                  <a href="{{route('users.index')}}" class="nav-link text-light">Users</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('categories.index')}}" class="nav-link text-light">Categories</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('dishes.index')}}" class="nav-link text-light">Dishes</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('dish_product.index')}}" class="nav-link text-light">dish_product</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('products.index')}}" class="nav-link text-light">Products</a>
                </li>
				 <li class="nav-item">
                  <a href="{{route('reviews.index')}}" class="nav-link text-light">Reviews</a>
                </li>
              </ul>
            </div>
          </nav>
        </header>
      

        <main class="col-md-11">
         @yield('view')
        </main>
       
      </div>
    </div>
 @endsection
