@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">Customers</li>
                </ol>
              </nav>
            <div class="card">
                <div class="card-header">Customers
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr class="text-center">
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Member since</th>
                          </tr>
                        </thead>
                        <tbody>
                            <!-- For each loop to retrieve customer data from the database -->
                            @foreach ($customers as $customer)
                                <tr>
                                    <td class="text-center">{{$customer->name}}</td>
                                    <td class="text-center">{{$customer->email}}</td>
                                    <!-- Convert the data from the database to the correct format -->
                                    <td class="text-center">{{ \Carbon\Carbon::parse($customer->created_at)->format('M d Y')}}</td>
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
