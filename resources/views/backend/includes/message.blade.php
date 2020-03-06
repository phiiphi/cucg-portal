{{--ERROR ALERT--}}
{{-- @if (count($errors) > 0)

    <div class="alert alert-dismissible alert-danger">
        <ul>
            @foreach ($errors-all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

@endif --}}

{{--SUCCESS ALERT--}}
{{-- @if (\Session::has('success'))
    <div class="alert alert-dismissible alert-success">
        <p class="text-center">{{ \Session::get('success')}}</p>
    </div>

@endif --}}


{{-- @if(Session('errors'))
<div class="alert alert-dismissible alert-danger">
    <ul>
        @foreach ($errors as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

@if(session('success'))
<div class="alert alert-dismissible alert-success">
    <p class="text-center">{{ session('success')}}</p>
</div>
@endif --}}
