    <!DOCTYPE html>
        <html lang="en" dir="ltr">
        <head>
        <meta charset="utf-8">
        <title>Laravel Base Crud</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{ asset('js/app.js') }}"></script>
        </head>

        <body>

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
                                </td>
                              </tr>
                          </tbody>
                              @endforeach
                      </table>
                  </div>



        </body>
    </html>



