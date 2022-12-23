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
                <div class="card-header">Order</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">User</th>
                            <th scope="col">Phone/Email</th>
                            <th scope="col">Date/Time</th>
                            <th scope="col">Pizza</th>
                            <th scope="col">Small Pizza</th>
                            <th scope="col">Medium Pizza</th>
                            <th scope="col">Large Pizza</th>
                            <th scope="col">Message</th>
                            <th scope="col">Status</th>
                            <th scope="col">Accept</th>
                            <th scope="col">Reject</th>
                            <th scope="col">Completed</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button class="btn btn-primary">Accept</button></td>
                                <td><button class="btn btn-primary">Reject</button></td>
                                <td><button class="btn btn-primary">Completed</button></td>
                            </tr>
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
