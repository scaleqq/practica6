@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row row-cols-4">
            @foreach ($a as $b)
                <div class="col my-2">
                    <div class="card h-100 mx-1" style="width: 18rem;">
                        <img class="card-img-top h-100" src="{{ $b->img }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $b->name }}</h5>
                            <p class="card-text">{{ $b->description }}</p>
                            <a href="#" class="btn btn-dark">{{ $b->price }}</a>
                            <a href="#" class="btn btn-dark">Подробнее</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
