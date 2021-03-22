<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Document</title>
</head>
<body>



    <div class="custom-container">
        <div class="container">
            <form action="{{route('beers.update', compact('beer'))}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" class="form-control {{$errors->has('brand') ? 'is-invalid' : ''}}" name="brand" placeholder="Enter beer's brand"
                    value="{{$beer->brand}}">
                    <div class="invalid-feedback">
                        {{$errors->first('brand')}}
                    </div>
                </div>

                <div class="form-group">
                    <label for="beer_typology">Beer's Typology</label>
                    <input type="text" class="form-control {{$errors->has('beer_typology') ? 'is-invalid' : ''}}" name="beer_typology" placeholder="Enter beer's typology"
                    value="{{$beer->beer_typology}}">
                    <div class="invalid-feedback">
                        {{$errors->first('beer_typology')}}
                    </div>
                </div>

                <div class="form-group">
                    <label for="nationality">Nationality</label>
                    <input type="text" class="form-control {{$errors->has('nationality') ? 'is-invalid' : ''}}" name="nationality" placeholder="Enter Beer's Nationality"
                    value="{{$beer->nationality}}">
                    <div class="invalid-feedback">
                        {{$errors->first('nationality')}}
                    </div>
                </div>

                  <div class="form-group">
                    <label for="liters">Liters</label>
                    <input type="text" class="form-control {{$errors->has('liters') ? 'is-invalid' : ''}}" name="liters" placeholder="Enter Liters"
                    value="{{$beer->liters}}">
                    <div class="invalid-feedback">
                        {{$errors->first('liters')}}
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control {{$errors->has('price') ? 'is-invalid' : ''}}" name="price" placeholder="Enter Price"
                    value="{{$beer->price}}">
                    <div class="invalid-feedback">
                        {{$errors->first('price')}}
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" class="form-control {{$errors->has('image') ? 'is-invalid' : ''}}" name="image" placeholder="Enter Image's Url"
                    value="{{$beer->image}}">
                    <div class="invalid-feedback">
                        {{$errors->first('image')}}
                    </div>
                  </div>

                <button type="submit" class="btn btn-primary">Crea Prodotto</button>
              </form>
            </div>
        </div>
    </body>
</html>
