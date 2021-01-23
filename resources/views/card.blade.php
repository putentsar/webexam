
  <div id="product">
  <div class="card">
  <div class="card-body">
  <div class="row">
    <div class="col-4">
	 <img src="{{$dish->link}}" height="180px" width="180px" alt="альтернативный текст">
    </div>
    <div class="col">
     <h3>{{$dish->name}}</h3>
    </div>
  </div>
  <div class="row">
    <div class="col">
	 <p>{{$dish->weight}} грамм</p>
    </div>
    <div class="col">
	<p>{{$dish->colories}} ккал<p>
    </div>
    <div class="col float-right">
      @if (Auth::guest())
         <a href="/login" class="btn btn-success" role="button">Подробнее</a>     
                        @else
    <a href="/{{$dish->category->code}}/{{$dish->code}}" class="btn btn-success" role="button">Подробнее</a>
	@endif
    </div>
  </div>
</div>
</div>
  </div>
	 


  



         

