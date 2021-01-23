@extends('layouts.index')

@section('content')
<div id="product" class="container">
@foreach($categories as $category)

                                    <div class="panel">
            <a href="{{$category->code}}">
                <h2>{{$category->name}}</h2>
            </a>
            
        </div>
<hr>
@endforeach
</div>
@endsection
