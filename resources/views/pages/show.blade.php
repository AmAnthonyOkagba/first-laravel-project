@extends('layouts.layout')


@section('content')

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            @foreach ($pizzas as $pizza)
                <div>
                    <h1>Order for - {{ $pizza->name }}</h1>
                    <p>Type - {{ $pizza->type }}</p>
                    <p>Base - {{ $pizza->base }}</p>
                    <p>Extre Toppings: </p>
                    <ul>
                        @foreach ($pizza->$toppings as $topping )
                            <li>{{ $topping }}</li>
                        @endforeach
                    </ul>
                </div> <br>
            @endforeach


        </div>

@endsection
