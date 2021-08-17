<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){

        // $pizza = Pizza::all();
        // $pizza = Pizza::orderby('name')->get();
        // $pizza = Pizza::where('type', 'food')->get();
        $pizza = Pizza::latest()->get();

        return view('pizzas.index', ['pizzas' => $pizza]);
    }

    public function show($id){

        $pizza = Pizza::findorfail($id);

        // return view('pizzas.show', ['id' => $id]);

        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){

        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza->save();

        return redirect('/')->with('mssg', 'Thanks for you order');
    }

    public function destroy($id){

        $pizza = Pizza::findorfail($id);
        $pizza->delete($id);

        return view('pizzas');
    }
}
