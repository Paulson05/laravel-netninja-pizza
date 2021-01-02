@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        

        @foreach($pizzas as $pizza)
    
          {{ $pizza->type }} - {{ $pizza->base}}-- {{ $pizza->name}}


        @endforeach

    </div>
</div>
@endsection