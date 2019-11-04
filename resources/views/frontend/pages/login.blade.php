@extends('frontend.layout.app')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8" id="login">
            <div class="card">
                <div class="card-header">LOGIN</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                        {{--INDEX NUMBER--}}
                        <div class="form-group row">
                            <label for="index_number" class="col-md-4 col-form-label text-md-right">Enter Index Number</label>

                            <div class="col-md-6">
                                <input id="index_number" type="text" class="form-control @error('index_number') is-invalid @enderror" name="index_number" value="{{ old('index_number') }}" required autocomplete="index_number" autofocus placeholder="example: ugr0201610162">

                                @error('index_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="please enter password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection