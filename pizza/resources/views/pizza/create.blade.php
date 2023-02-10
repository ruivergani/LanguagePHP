<!-- Using the Blade layout you can import documents such as layouts or section of content -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                   <ul class="list-group">
                        <a href="{{route('pizza.index')}}" class="list-group-item list-group-item-action">View</a>
                        <a href="{{route('pizza.create')}}" class="list-group-item list-group-item-action">Create</a>
                   </ul>
                </div>
            </div>
            <!-- Validation Message Errors = use PHP to return the errors in the form -->
            @if (count($errors) > 0)
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p> {{$error}} </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Pizza</div>
                <!-- Route Name to Store File /pizza/store  -->
                <!-- Form below represents the creation of a Pizza -->
                <!-- When you make a POST request you have to encode the data that forms the body of the request using multipart/form-data -->
                <form action="{{route('pizza.store')}}" method="post" enctype="multipart/form-data">@csrf
                    <!-- use route(pizza.store) instead of /pizza/store in case the link path changes -->
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="name" class="mb-1">Name of Pizza</label>
                            <input type="text" class="form-control" name="name" placeholder="Margherita">
                        </div>
                        <div class="form-group mb-3">
                            <label for="description" class="mb-1">Description of Pizza</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-inline col-md-4 mb-3">
                            <label class="mb-1">Pizza Price (£)</label>
                            <input type="number" step="0.01" class="form-control mb-2" placeholder="Small Size" name="small_pizza_price">
                            <input type="number" step="0.01" class="form-control mb-2" placeholder="Medium Size" name="medium_pizza_price">
                            <input type="number" step="0.01" class="form-control mb-2" placeholder="Large Size" name="large_pizza_price">
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
