
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="/css/home.css" rel="stylesheet">
    <title>Home page</title>
  </head>
   <style>
   body{
    background-color: #f8f9fa; 
   } 
    #product{
    background-color: #ffffff; 
	width:100%;
	margin-top: 50;
   } 
   #nav{
    background-color: #ffffff; 
	color : #000000;
   } 
    #image{
     display:block;
  margin: auto;
   } 
    .image{
	margin-top: 20;
		margin-bottom: 20;
   } 
    .divide{
    border-bottom: 1px solid black;
   } 
   .ingr { display: inline; }
   
   .cd { display: inline; }
     #button3{
	 float: right;
	 margin-right:3;
   }
   #button2{
	 float: right;
	 margin-right:3;
   }
   #button1{
	 float: right;
	 margin-right:3;
   }
   #header{
	background-color: #2e312f; 
   }
  h2{ text-align: center; }
  
   
  </style>
  <body>
  <nav id="nav" class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="http://hardproj.std-1049.ist.mospolytech.ru">Кулинария</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="http://hardproj.std-1049.ist.mospolytech.ru">Все блюда</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://hardproj.std-1049.ist.mospolytech.ru/categories">Категории блюд</a>
      </li>
    </ul>
	 <ul class="navbar-nav ml-auto">
	<ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a class="nav-link" href="{{ url('/login') }}">Панель администратора</a></li>       
                        @else
						<li><a class="nav-link" href="/admin">Панель администратора</a></li>   
                           <li>
                               <a class="nav-link" >  {{ Auth::user()->name }}</a>
                                   
                                
</li>
                              <li>
                                        <a  class="nav-link" href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Выйти
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                         
                        @endif
                    </ul>
	 
    </ul>
	 
  </div>
</nav>
@yield('content')
  </body>
</html>