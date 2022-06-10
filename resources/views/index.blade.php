@extends('layouts.master')

@section('title', 'All category')

@section('content')
   <div class="starter-template">
       <h1>All Category</h1>

        <div class="row">
            @foreach($products as $product)
                @include('card', compact('product'))
            @endforeach
        </div>
   </div>
@endsection