@extends('layouts.app')
@section('content')
<body>
    <div class="basket">
        <p>Корзина</p>
    </div>
        <div class="cards-item">
            @foreach ($p as $j)
                <div class="card-item">
                        <img src="{{ $j->products}}" class="card-img-top" alt="#">
                        <div class="card-body">
                            <h5 class="card-title">{{ $j->products->name }}</h5>
                            <h5 class="card-title">{{ $j->products->price }}</h5>
                            <p class="card-text">{{ $j->products->model }}</p>
                            <a href="/public/catalog/{{ $j->products->id }}" class="btn btn-dark">Подробнее</a>
                            <a href="/public/basket/{{ $j->id }}/delete" class="btn btn-dark">Удалить</a>
                        </div>
                    </div>
                    @endforeach
                </div>
</body>
</html>
@endsection