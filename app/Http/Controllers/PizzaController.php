<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function home(){
        return view(('welcome'));
    }
    public function main(){
        return view(('pages.index'));
    }
    public function index(){
        return view(('index'));
    }

    public function about(){
        return view('pages.about');
    }

    public function create(){
        return view('pages.create');
    }

    public function show($id){

        // $pizza = Pizza::all();
        // $pizza = Pizza::orderby('name')->get();
        // $pizza = Pizza::where('type', 'food')->get();
        // $pizza = Pizza::latest()->get();

        $pizza = Pizza::findorfail($id);

        // return view('pages.show', ['id' => $id]);
        return view('pages.show', ['pizzas' => $pizza]);
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

}
