
@extends('beers.base')

    @section('show-content')
            <div class="custom-container">
                <div class="container">
                    <div class="row">
                        <div class="card" style="width: 18rem;">
                            <img class="" src="{{$beer->image}}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">{{$beer->brand}}</h5>
                              <p class="card-text">{{$beer->price}}</p>
                              <a href="{{route('beers.index')}}" class="btn btn-primary">See al beers</a>
                              <a href="{{route('beers.edit', compact('beer'))}}" class="btn btn-primary">Edit</a>
                              <a href="{{route('beers.create')}}" class="btn btn-primary">Aggiungi una nuova birra</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>

    @endsection


