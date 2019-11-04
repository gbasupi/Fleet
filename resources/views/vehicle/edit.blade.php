@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
    
            <div class="card">
                <div class="card-header">Edit Vehicle</div>

                <div class="card-body">

                    <form method="post" action="/vehicle/{{$vehicle->id}}">
                    {{method_field('PATCH')}}
                    @csrf

                        <div class="form-group row">
                            <label for="model"  class="col-md-4 col-form-label text-md-right">{{ __('Make & Model') }}</label>

                            <div class="col-md-6">
                                <input id="model" type="text" class="form-control @error('name') is-invalid @enderror" value="{{$vehicle->make_model}}" name="make_model" >

                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="fuel" class="col-md-4 col-form-label text-md-right">{{ __('Fuel Type') }}</label>

                            <div class="col-md-6">
                                <input id="fuel" type="text" class="form-control @error('name') is-invalid @enderror" value="{{$vehicle->fuel_type}}" name="fuel_type" >

                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price per Day') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control @error('name') is-invalid @enderror" value="{{$vehicle->price_day}}" name="price_day" >

                            </div>
                        </div>

                      

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Edit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection