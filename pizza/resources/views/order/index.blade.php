@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">Orders</li>
                </ol>
              </nav>
            <div class="card">
                <div class="card-header">Order
                    <a style="float:right;" href="{{route('pizza.index')}}"><button class="btn btn-secondary btn-sm" style="margin-left: 5px;">View Pizza</button></a>
                    <a style="float:right;" href="{{route('pizza.create')}}"><button class="btn btn-secondary btn-sm" style="margin-left: 5px;">Create Pizza</button></a>
                </div>
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
                            <th scope="col">Accept</th>
                            <th scope="col">Reject</th>
                            <th scope="col">Completed</th>
                          </tr>
                        </thead>
                        <tbody>
                            <!-- Retrieve Data from Order Table (Database) -->
                            @foreach ($orders as $order)
                                <tr>
                                    <td class="text-center">{{$order->user->name}}</td> <!-- this is how you get data from the USER table which is not in the Order Table (the concept is the same as Foreign Key) -->
                                    <td class="text-center">{{$order->user->email}} / {{$order->phone}}</td>
                                    <td class="text-center">{{$order->date}} / {{$order->time}}</td>
                                    <td class="text-center">{{$order->pizza->name}}</td>
                                    <td class="text-center">{{$order->small_pizza}}</td>
                                    <td class="text-center">{{$order->medium_pizza}}</td>
                                    <td class="text-center">{{$order->large_pizza}}</td>
                                    <td class="text-center">{{$order->productRadios}}</td>
                                    <td class="text-center">{{$order->body}}</td>
                                    <td class="text-center">
                                        <!-- Calculations for total amount order -->
                                        ${{
                                            ($order->pizza->small_pizza_price * $order->small_pizza) +
                                            ($order->pizza->medium_pizza_price * $order->medium_pizza) +
                                            ($order->pizza->large_pizza_price * $order->large_pizza)
                                        }}

                                    </td>
                                    <td class="text-center">{{$order->status}}</td>

                                    <form action="{{route('order.status', $order->id)}}" method="post">@csrf
                                        <td>
                                            <input type="submit" name="status" value="Accepted" class="btn btn-primary btn-sm">
                                        </td>
                                        <td>
                                            <input type="submit" name="status" value="Rejected" class="btn btn-danger btn-sm">
                                        </td>
                                        <td>
                                            <input type="submit" name="status" value="Completed" class="btn btn-success btn-sm">
                                        </td>
                                    </form>

                                </tr>
                            @endforeach
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
