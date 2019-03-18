@extends('layouts.app')

@section('content')
        <h1><?php echo $title ?></h1>
        @if(count($products) > 0)
        <ul class="list-group">
                @foreach($products as $product)
                        <li class="list-group-item">{{$product}}</li> 
                @endforeach
        </ul>
        @endif
@endsection