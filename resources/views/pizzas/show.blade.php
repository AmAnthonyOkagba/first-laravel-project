@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-details">
    {{-- @foreach ($pizzas as $pizzas) --}}
        <h1>Order for - {{ $pizza->name }}</h1>
        <p class="type">Type - {{ $pizza->type }}</p>
        <p class="base">Base - {{ $pizza->base }}</p>
        <p>Extre Toppings: </p>
        <ul>
            {{-- @foreach ($pizza->$toppings as $topping )
                <li>{{ $topping }}</li>
            @endforeach --}}
        </ul>
        <form action="/pizzas/{{ $pizza->id}}" method="post">
            @csrf
            @method('DELETE')
            <button>Complete Order</button>
        </form>
    {{-- @endforeacsh --}}
</div>
<a href="/pizzas" class="back"><- Back to all Pizzas</a>

@endsection
