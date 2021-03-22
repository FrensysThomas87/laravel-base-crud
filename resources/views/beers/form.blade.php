


@php

if(isset($edit) && !empty($edit) ){
    $method = 'PUT';
    $url = route('beers.update', compact('beer'));
}else{
    $method = 'POST';
    $url = route('beers.store');
}



@endphp


<form action="{{$url}}" method="post">
    @csrf
    @method($method)
    <div class="form-group">
        <label for="brand">Brand</label>
        <input type="text" class="form-control {{$errors->has('brand') ? 'is-invalid' : ''}}" name="brand" placeholder="Enter beer's brand"
        value="{{isset($beer) ? $beer->brand : ''}}">
        <div class="invalid-feedback">
            {{$errors->first('brand')}}
        </div>
    </div>

    <div class="form-group">
        <label for="beer_typology">Beer's Typology</label>
        <input type="text" class="form-control {{$errors->has('beer_typology') ? 'is-invalid' : ''}}" name="beer_typology" placeholder="Enter beer's typology"
        value="{{isset($beer) ? $beer->beer_typology : ''}}">
        <div class="invalid-feedback">
            {{$errors->first('beer_typology')}}
        </div>
    </div>

    <div class="form-group">
        <label for="nationality">Nationality</label>
        <input type="text" class="form-control {{$errors->has('nationality') ? 'is-invalid' : ''}}" name="nationality" placeholder="Enter Beer's Nationality"
        value="{{isset($beer) ? $beer->nationality : ''}}">
        <div class="invalid-feedback">
            {{$errors->first('nationality')}}
        </div>
    </div>

      <div class="form-group">
        <label for="liters">Liters</label>
        <input type="text" class="form-control {{$errors->has('liters') ? 'is-invalid' : ''}}" name="liters" placeholder="Enter Liters"
        value="{{isset($beer) ? $beer->liters : ''}}">
        <div class="invalid-feedback">
            {{$errors->first('liters')}}
        </div>
      </div>

      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control {{$errors->has('price') ? 'is-invalid' : ''}}" name="price" placeholder="Enter Price"
        value="{{isset($beer) ? $beer->price : ''}}">
        <div class="invalid-feedback">
            {{$errors->first('price')}}
        </div>
      </div>

      <div class="form-group">
        <label for="image">Image</label>
        <input type="text" class="form-control {{$errors->has('image') ? 'is-invalid' : ''}}" name="image" placeholder="Enter Image's Url"
        value="{{isset($beer) ? $beer->image : ''}}">
        <div class="invalid-feedback">
            {{$errors->first('image')}}
        </div>
      </div>

    <button type="submit" class="btn btn-primary">Invia</button>
  </form>
