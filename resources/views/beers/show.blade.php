    <!DOCTYPE html>
        <html lang="en" dir="ltr">
        <head>
        <meta charset="utf-8">
        <title>Laravel Base Crud</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
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
                            </tr>
                        </thead>
                        <tbody>
                        
                            <tr>
                                <th scope="row">{{$beer->id}}</th>
                                <td>{{$beer->brand}}</td>
                                <td>{{$beer->beer_typology}}</td>
                                <td>{{$beer->nationality}}</td>
                                <td>{{$beer->price}}</td>
                                <td>{{$beer->liters}}</td>
                                <div class="img-container">
                                    <td><img src="{{$beer->image}}"/></td>
                                </div>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </body>
    </html>



