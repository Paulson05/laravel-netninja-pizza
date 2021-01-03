<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pizza;

class Pizza2Controller extends Controller
{

  public function index() {
    // get data from a database
    $pizzas = Pizza::all();

    return view('pizzas.index', [
      'pizzas' => $pizzas,
    ]);
  }
   
  public function show($id) {
    // use the $id variable to query the db for a record
    return view('details', ['id' => $id]);
  }
  public function create() {
    
    return view('pizzas.create',);
  }

  public function store() {
       
    $pizza = new Pizza();

    $pizza->name = request('name');
    $pizza->type = request('type');
    $pizza->base = request('base');

    $pizza->save();

    return redirect('/')->with('mssg', 'Thanks for your order!');
  }

}