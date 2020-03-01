@extends('frontend.layout.registerapp')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8" id="signup">
        <div class="card">
            <div class="card-header text-center"><img src="{{asset('/images/slogo1.png')}}" alt="school logo"/> CATHOLIC UNIVERSITY COLLEGE OF GHANA</div>

            <div class="card-body">
                <form method="post" action="{{route('pages.registerstore')}}">
                    @csrf
                    {{--INDEX NUMBER--}}
                    <div class="form-group row">
                        <label for="index_number" class="col-md-4 col-form-label text-md-right">Index Number</label>
                        <div class="col-md-6">
                            <input id="index_number" type="text" class="form-control @error('index_number') is-invalid @enderror" name="index_number" value="{{ old('index_number') }}" required autocomplete="index_number" autofocus placeholder="example: ugr0201610162" minlength="13" maxlength="13">

                            @error('index_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary button">
                                <span class="btn-text">Register</span>
                                <i class="loading-icon fa fa-spinner fa-pulse off"></i>
                                {{-- <i class="loading-icon fa fa-spinner fa-spin hide"></i> --}}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
