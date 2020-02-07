@extends('frontend.layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6" id="login">
            <div class="card">
            <div class="card-header text-center"><img src="{{asset('/images/slogo1.png')}}" alt="school logo"/> CATHOLIC UNIVERSITY COLLEGE OF GHANA</div>

                <div class="card-body">
                    <form class="registration" id="registration" method="post" action="{{route('pages.loginstore')}}">
                        @csrf
                    
                        <label for="username">
                            <input type="text" class="form-control form-control-user" id="username" minlength="13" maxlength="13" placeholder="Enter Index Number..." required>
            
                            <ul class="input-requirements">
                                <li>At least 13 characters long</li>
                                <li>Must only contain letters and numbers (no special characters)</li>
                            </ul>
                        </label>
        
                        <label for="password">
                            <input type="password" class="form-control form-control-user" id="password" maxlength="100" minlength="8" placeholder="Password" required>
                            
                            <ul class="input-requirements">
                                <li>At least 8 characters long (and less than 100 characters)</li>
                                <li>Contains at least 1 number</li>
                                <li>Contains at least 1 lowercase letter</li>
                                <li>Contains at least 1 uppercase letter</li>
                                <li>Contains a special character (e.g. @ !)</li>
                            </ul>
                        </label>
                    
                        <label for="password_repeat">
                            <input type="password" class="form-control form-control-user" id="password_repeat" maxlength="100" minlength="8" placeholder="Repeat password" required>
                        </label>
                        <input type="submit" value="LOGIN">
                        <hr>
                        <div class="container text-center">
                            <a href="http://" class="text-decoration-none">forget password?</a> ||
                            <a href="{{route('pages.signup')}}" class="text-decoration-none"> create an account</a>
                        </div> 
            
                    </form>


@endsection
