@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="post">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">
        <label for="name">Choose Pizza type:</label>
        <select class="form-control" name="type" id="type">
            <option value="margarite">Margarite</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
        </select>
        <label for="country">Choose base type:</label>
        <select class="form-control" name="base" id="base">
          <option value="cheesy crust">Cheesy Crust</option>
          <option value="garlic crust">Garlic Crust</option>
          <option value="thick">Thick</option>
        </select>
        <fieldset>
            <label>Extra toppings:</label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms
            <input type="checkbox" name="toppings[]" value="peppers">Peppers
            <input type="checkbox" name="toppings[]" value="galic">Galic
            <input type="checkbox" name="toppings[]" value="olives">Olives
        </fieldset>
        <button type="submit" value="Order Pizza"></button>
        <input type="submit" value="Order Pizza">
    </form>
</div>
{{-- <a href="/pizzas" class="back"><- Back to all Pizzas</a> --}}
@endsection
