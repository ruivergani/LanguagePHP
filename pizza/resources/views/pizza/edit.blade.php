@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Pizza</div>
                <form action="{{route('pizza.store')}}" method="post" enctype="multipart/form-data">@csrf
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="name" class="mb-1">Name of Pizza</label>
                            <input type="text" class="form-control" name="name" placeholder="Margherita" value="{{$pizza->name}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="description" class="mb-1">Description of Pizza</label>
                            <textarea name="description" class="form-control">{{$pizza->description}}</textarea>
                        </div>
                        <div class="form-inline col-md-4 mb-3">
                            <label class="mb-1">Pizza Price (£)</label>
                            <input type="text" step="0.01" class="form-control mb-2" placeholder="Small Size" name="small_pizza_price" value="{{$pizza->small_pizza_price}}">
                            <input type="text" step="0.01" class="form-control mb-2" placeholder="Medium Size" name="medium_pizza_price" value="{{$pizza->medium_pizza_price}}">
                            <input type="text" step="0.01" class="form-control mb-2" placeholder="Large Size" name="large_pizza_price" value="{{$pizza->large_pizza_price}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="description" class="mb-1">Category</label>
                            <select class="form-control" name="category">
                                <option value=""></option>
                                <option value="vegetarian">Vegetarian</option>
                                <option value="nonvegetarian">Non Vegetarian</option>
                                <option value="tradicional">Tradicional Pizza</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="image" class="mb-1">Image</label>
                            <input type="file" class="form-control" name="image">
                            <img src="{{Storage::url($pizza->image)}}" width="80" alt="">
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
