@extends('layouts.master')

@section('content')
    <div class="starter-template">
        <h1>
            {{ $category->name }}
        </h1>
        <h1>
            {{ $category->description }}
        </h1>

        <div class="row">
            @foreach($category->products as $product)
                @include('card', compact('product'))
            @endforeach
        </div>
@endsection