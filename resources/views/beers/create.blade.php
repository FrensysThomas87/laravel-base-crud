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

    @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div>
    @endif

    <div class="container">
        <form action="{{route('beers.store')}}" method="post" >
            @csrf
            @method('POST')
            <div class="form-group">
              <label for="brand">Brand</label>
              <input type="text" class="form-control" name="brand" placeholder="Enter beer's brand" required>

            </div>
            <div class="form-group">
              <label for="beer_typology">Beer's Typology</label>
              <input type="text" class="form-control" name="beer_typology" placeholder="Enter beer's typology">
            </div>
            <div class="form-group">
                <label for="nationality">Nationality</label>
                <input type="text" class="form-control" name="nationality" placeholder="Enter Beer's Nationality">
              </div>
              <div class="form-group">
                <label for="liters">Liters</label>
                <input type="text" class="form-control" name="liters" placeholder="Enter Liters">
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" placeholder="Enter Price">
              </div>
              <div class="form-group">
                <label for="image">Image</label>
                <input type="text" class="form-control" name="image" placeholder="Enter Image's Url">
              </div>

            <button type="submit" class="btn btn-primary">Crea Prodotto</button>
          </form>
        </div>
    </body>
</html>
