@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                    <ul class="list-group">
                        <form action="{{route('frontpage')}}" method="get">
                            <p class="mb-3"><a href="/">All Pizzas</a></p>
                            <input type="submit" value="Vegetarian" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Nonvegetarian" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Tradicional" name="category" class="list-group-item list-group-item-action">
                        </form>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>
                <div class="card-body">
                    <div class="row g-3">
                        <!-- For else to get empty block as well -->
                        @forelse ($pizzas as $pizza)
                            <div class="col-sm-12 col-md-4 p-2 text-center" style="border: 1px solid #ccc;border-radius: 5px;">
                                <img src="{{Storage::url($pizza->image)}}" class="img-thumbnail" alt="" style="width: 100%;">
                                <p class="pt-2">{{$pizza->name}}</p>
                                <p>{{$pizza->description}}</p>
                                <a href="{{route('pizza.show', $pizza->id)}}">
                                    <button class="btn btn-danger mb-1">Add to Order</button>
                                </a>
                            </div>
                        @empty
                            <p>No pizzas to show.</p>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    a.list-group-item{
        font-size: 18px;
        transition: all 0.3s;
    }
    a.list-group-item:hover{
        background-color: #dc3545;
        color: white;
    }
    .card-header{
        background-color: #dc3545;
        color: white;
        font-size: 20px;
    }
</style>
@endsection
