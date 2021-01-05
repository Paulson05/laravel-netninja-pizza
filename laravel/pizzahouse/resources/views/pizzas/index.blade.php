@extends('layouts.app')

@section('content')
@foreach($pizzas as $pizza)
          <div>
            <a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a>
          </div>
        @endforeach


@endsection