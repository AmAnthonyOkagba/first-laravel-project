@extends('layouts.layout')

@section('content')

    <div class="container col-4 pt-5">
        <form method="POST" class=" pt-5" action="/pizzas">
            @csrf
            <div class="card-body p-4 border">
                <div class="form-group row">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group row">
                  <label for="transport">Choose Pizza type</label>
                  <select class="form-control" name="type" id="type">
                    <option value="margarite">Margarite</option>
                    <option value="hawaiian">Hawaiian</option>
                    <option value="veg supreme">Veg Supreme</option>
                  </select>
                </div>
                <div class="form-group row">
                  <label for="country">Choose base type</label>
                  <select class="form-control" name="base" id="base">
                    <option value="cheesy crust">Cheesy Crust</option>
                    <option value="garlic crust">Garlic Crust</option>
                    <option value="thick">Thick</option>
                  </select>
                </div>
                <div class="form-group row">
                    <fieldset class="form-control">
                        <label>Extra toppings:</label>
                        <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms
                        <input type="checkbox" name="toppings[]" value="peppers">Peppers
                        <input type="checkbox" name="toppings[]" value="galic">Galic
                        <input type="checkbox" name="toppings[]" value="olives">Olives
                    </fieldset>
                </div>

                <button type="submit" name="submit" class="btn btn-warning">Order Pizza</button>

            </div>
        </form>
    </div>
@endsection
