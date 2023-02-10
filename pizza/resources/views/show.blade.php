@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Order Item</div>
                <div class="card-body">
                    <!-- Form Order (only logged users) -->
                    @if(Auth::check())
                        <form method="post" action="{{route('order.store')}}">@csrf
                            <div class="form-group">
                                @if (session('message'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                @if (session('errormessage'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('errormessage') }}
                                    </div>
                                @endif
                                <p>Current Order: £ </p>
                                <p>Name: {{auth()->user()->name}}</p>
                                <p>E-mail: {{auth()->user()->email}}</p>
                                <p>Phone number: <input type="number" class="form-control" name="phone" required></p>
                                <p>Quantity Small Pizza: <input type="number" class="form-control" name="small_pizza" value="0"></p>
                                <p>Quantity Medium Pizza: <input type="number" class="form-control" name="medium_pizza" value="0"></p>
                                <p>Quantity Large Pizza: <input type="number" class="form-control" name="large_pizza" value="0"></p>
                                <p><input type="hidden" name="pizza_id" value="{{$pizza->id}}"></p>
                                <p>Date: <input type="date" class="form-control" name="date" required></p>
                                <p>Time: <input type="time" class="form-control" name="time" required></p>
                                <p>Message: <textarea name="body" class="form-control" required></textarea></p>

                                <!-- Radio Button -->
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="productRadios" id="gridRadios1" value="collection" required>
                                    <label class="form-check-label" for="gridRadios1">
                                        Collection
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="productRadios" id="gridRadios2" value="delivery">
                                    <label class="form-check-label" for="gridRadios2">
                                    Delivery
                                    </label>
                                </div>
                                <!-- Submit Button -->
                                <p class="text-center">
                                    <button class="btn btn-danger" type="submit">
                                        Make Order
                                    </button>
                                </p>

                            </div>
                        </form>
                    @else
                        <p>
                            <a href="/login">Please login to make an order!</a>
                        </p>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <!-- Script to display total value current order -->
                <div class="card-header">Pizza </div>
                <div class="card-body">
                    <div class="row align-content-center text-center">
                        <img src="{{Storage::url($pizza->image)}}" class="img-thumbnail mx-auto d-block" alt="" style="width: 60%;">
                        <h3 class="pt-4">{{$pizza->name}}</h3>
                        <h4 class="pt-3">{{$pizza->description}}</h4>
                        <h5 class="pt-3">Small Price: ...................... £{{$pizza->small_pizza_price}}</span></h5>
                        <h5 >Medium Price: ..................  £{{$pizza->medium_pizza_price}}</h5>
                        <h5>Large Price: ....................... £{{$pizza->large_pizza_price}}</h5>
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
