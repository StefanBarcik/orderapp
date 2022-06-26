@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
                <form action="/register/confirm" method="post">
                    @csrf

                    <label for="username" class="form-label"></label>
                    <input type="text" placeholder="Enter Username" name="username" class="form-control">
                    @if($errors->has('username'))
                        <span class="text-danger">{{ $errors->first('username') }}</span>
                    @endif

                    <label for="email" class="form-label"></label>
                    <input type="text" placeholder="Enter email" name="email" class="form-control" >
                    @if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif

                    <label class="form-label" for="password"></label>
                    <input type="password" id="password" class="form-control" name="password" placeholder="Enter password"/>
                    @if($errors->has('password'))
                       <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif

                    <label class="form-label" for="password_confirmation"></label>
                    <input type="password" id="password" class="form-control" name="password_confirmation" placeholder="Repeat password"/>
                    @if($errors->has('password_confirmation'))
                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                    @endif

                    <label class="form-label" ></label>
                    <div class="row mb-2">
                        <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer>
        @include('layouts.footer')
    </footer>
@endsection
