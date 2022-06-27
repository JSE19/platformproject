@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Welcome User {{ $driver->name }} </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="card-body">
                    <form method="POST" action="{{ url('updateperson/'.$driver->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('FullName') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" value="{{ $driver->name  }}" name="name" required autocomplete="name" autofocus>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <input id="gender" type="text" class="form-control " value="{{ $driver->gender }}" name="gender" required autofocus>

                               
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="dateofbirth" class="col-md-4 col-form-label text-md-end">{{ __('DOB') }}</label>

                            <div class="col-md-6">
                                <input id="dateofbirth" type="datetime-local" class="form-control" value="{{ $driver->dateofbirth }}" name="dateofbirth" required autofocus>

                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control " value="{{ $driver->phone }}" name="phone" required  autofocus>

                                
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ $driver->email }}" name="email" required >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" value="{{ $driver->address }}" name="address" required autofocus>

                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nextofkin" class="col-md-4 col-form-label text-md-end">{{ __('Next of Kin') }}</label>

                            <div class="col-md-6">
                                <input id="nextofkin" type="text" class="form-control" value="{{ $driver->nextofkin }}" name="nextofkin" required autofocus>

                        
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nextofkinphone" class="col-md-4 col-form-label text-md-end">{{ __('Next of Kin Phone') }}</label>

                            <div class="col-md-6">
                                <input id="nextofkinphone" type="number" class="form-control" value="{{ $driver->nextofkinphone }}" name="nextofkinphone" required autofocus>

                               
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
</div>
@endsection
