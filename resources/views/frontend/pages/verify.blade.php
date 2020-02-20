@extends('frontend.layout.app')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8" id="signup">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Phone Number') }}</div>

                <div class="card-body">
                    @if (Session::has('message'))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('message')}}
                    </div>
                    @endif
                    Please enter the code sent to your number: {{ $phone_number->p ?? ''}}
                    <form action="{{route('pages.verified')}}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
                            <div class="col-md-8">
                                <input type="hidden" name="phone" value="{{session('phone')}}">
                                <input id="code" type="text"
                                    class="form-control @error('code') is-invalid @enderror"
                                    name="code" value="{{ old('code') }}" required>

                                @error('code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Verify') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer"><a href="http://">Resend Code</a></div>
            </div>
        </div>
    </div>
@endsection
