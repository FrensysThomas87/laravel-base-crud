
@extends('beers.base')

    @section('index-content')
                <div class="container">
                    <div class="row">
                      <table class="table">
                          <thead class="thead-dark">
                             <tr>
                              <th scope="col">#</th>
                              <th scope="col">Brand</th>
                              <th scope="col">Beer Typology</th>
                              <th scope="col">Nationality</th>
                              <th scope="col">Price</th>
                              <th scope="col">Liters</th>
                              <th scope="col">Image</th>
                              <th scope="col">Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($beers as $beer)
                              <tr>
                                  <th scope="row">{{$beer->id}}</th>
                                  <td>{{$beer->brand}}</td>
                                  <td>{{$beer->beer_typology}}</td>
                                  <td>{{$beer->nationality}}</td>
                                  <td>{{$beer->price}}</td>
                                  <td>{{$beer->liters}}</td>
                                  <td><img src="{{$beer->image}}"/></td>
                                  <td>
                                      <a href="{{route('beers.show', compact('beer'))}}">
                                        <i>
                                            <i class="fas fa-eye"></i>
                                        </i>
                                    </a>

                                    <a href="{{route('beers.edit', compact('beer'))}}">
                                        <i>
                                            <i class="fas fa-edit"></i>
                                        </i>
                                    </a>

                                   <form action="{{route('beers.destroy', compact('beer'))}}" method="post">
                                         @csrf
                                         @method('DELETE')

                                         <button type="submit"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                              </tr>
                          </tbody>
                              @endforeach
                      </table>
                      <a href="{{route('beers.create')}}"><button class="btn btn-primary">Aggiungi una birra</button></a>
                  </div>
            @endsection


