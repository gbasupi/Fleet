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
                                <th>Name</th>
                                <th>ID</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GOntse</td>
                                <td>G</td>
                                <td>df</td>
                            </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
