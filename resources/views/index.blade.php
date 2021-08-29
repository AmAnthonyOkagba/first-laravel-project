@extends('layouts.layout')


@section('content')

        <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
            <div class="content">
                <img src="/img/pizza-house.png" alt="pizza house logo">
                <div class="title m-b-md">
                    The Nigerian Best Pizza
                </div><br>
                <p class="mssg"> {{ session('mssg') }} </p>
                <a href="{{ route('pizzas.create') }}">Order a Pizza</a>
            </div>
        </div>
    </body>
</html>

@endsection
