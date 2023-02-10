@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Your orders</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr class="text-center">
                            <th scope="col">User</th>
                            <th scope="col">Phone/Email</th>
                            <th scope="col">Date/Time</th>
                            <th scope="col">Pizza</th>
                            <th scope="col">S. Pizza</th>
                            <th scope="col">M. Pizza</th>
                            <th scope="col">L. Pizza</th>
                            <th scope="col">Delivery/Collection</th>
                            <th scope="col">Message</th>
                            <th scope="col">Total(£)</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            <!-- Loop to retrieve data from Order Database Table -->
                            @foreach ($orders as $order)
                                <tr>
                                    <td class="text-center">{{$order->user->name}}</td>
                                    <!-- this is how you get data from the USER table which is not in the Order Table (the concept is the same as Foreign Key) -->
                                    <td class="text-center">{{$order->user->email}} / {{$order->phone}}</td>
                                    <td class="text-center">{{$order->date}} / {{$order->time}}</td>
                                    <td class="text-center">{{$order->pizza->name}}</td>
                                    <td class="text-center">{{$order->small_pizza}}</td>
                                    <td class="text-center">{{$order->medium_pizza}}</td>
                                    <td class="text-center">{{$order->large_pizza}}</td>
                                    <td class="text-center">{{$order->productRadios}}</td>
                                    <td class="text-center">{{$order->body}}</td>
                                    <td class="text-center">
                                        <!-- Sum all the prices from the input selected (small, medium and large pizza) -->
                                        ${{
                                            ($order->pizza->small_pizza_price * $order->small_pizza) +
                                            ($order->pizza->medium_pizza_price * $order->medium_pizza) +
                                            ($order->pizza->large_pizza_price * $order->large_pizza)
                                        }}
                                    </td>
                                    <td class="text-center">{{$order->status}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>

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
