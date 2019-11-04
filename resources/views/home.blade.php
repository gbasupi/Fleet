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

                    Here are cars that you have Hired!

                    <table class="table table-bordered">
                            <thead>
                            <tr >
                                <th>CarID</th>
                                <th>Price/Day</th>
                                <th>Model & Make</th>
                                <th>Fuel</th>
                                <th>Hired</th>
                            </tr>
                            </thead>
                            <tbody>
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
