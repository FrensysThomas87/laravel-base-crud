    <!DOCTYPE html>
        <html lang="en" dir="ltr">
        <head>
        <meta charset="utf-8">
        <title>Laravel Base Crud</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{ asset('js/app.js') }}"></script>
        </head>
        <body>
            <div class="custom-container">
                <div class="container">
                    <div class="row">
                        <div class="card" style="width: 18rem;">
                            <img class="" src="{{$beer->image}}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">{{$beer->brand}}</h5>
                              <p class="card-text">{{$beer->price}}</p>
                              <a href="{{route('beers.index')}}" class="btn btn-primary">Go Back</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>

        </body>
    </html>



