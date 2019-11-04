@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
    
            <div class="card">
                <div class="card-header">{{ __('Register A Car') }}</div>

                <div class="card-body">

                    <form method="post" action="{{route('cars.store')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="model" class="col-md-4 col-form-label text-md-right">{{ __('Make & Model') }}</label>

                            <div class="col-md-6">
                                <input id="model" type="text" class="form-control @error('name') is-invalid @enderror" name="model" >

                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="fuel" class="col-md-4 col-form-label text-md-right">{{ __('Fuel Type') }}</label>

                            <div class="col-md-6">
                                <input id="fuel" type="text" class="form-control @error('name') is-invalid @enderror" name="fuel" >

                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price per Day') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control @error('name') is-invalid @enderror" name="price" >

                            </div>
                        </div>

                      

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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