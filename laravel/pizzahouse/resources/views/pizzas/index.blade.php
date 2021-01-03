@extends('layouts.layout')

@section('content')
@foreach($pizzas as $pizza)
          <div>
            <a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a>
          </div>
        @endforeach

<a href="/pizzas" class="back"><- Back to all pizzas</a>
@endsection