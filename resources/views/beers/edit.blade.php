@extends('beers.base')



@section('edit-content')
        <div class="custom-container">
            <div class="container">
                @include('beers.form', ['edit' => true])
            </div>
        </div>
@endsection
