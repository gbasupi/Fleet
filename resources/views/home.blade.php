@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Here are cars that are in the System

                    <table class="table table-bordered">
                            <thead>
                            <tr >
                               
                                <th>Model &amp; Make</th>
                                <th>Model & Make</th>
                                <th>Fuel</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($vehicles as $vehicle)
                            <tr>
                                <td>{{$vehicle->make_model}}</td>
                                <td>{{$vehicle->fuel_type}}</td>
                                <td>{{$vehicle->price_day}}</td>
                                <td>@if(Auth::user()->id == 1)<a href="/vehicle/{{$vehicle->id}}/edit" class="btn btn-success">Edit</a> @else<a href="#" class="btn btn-warning">Reserve</a> @endif</td>
                                
                            </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
