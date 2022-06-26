@extends('layouts.app')

@section('content')
    <header>
        @include('layouts.header')
    </header>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
                <form action="/login/confirm" method="post">
                    @csrf
                    <input type="text" id="username" class="form-control" name="username" placeholder="Email or username"/>
                    <label class="form-label" for="username"></label>
                    @if($errors->has('username'))
                        <span class="text-danger">{{ $errors->first('username') }}</span>
                    @endif

                    <input type="password" id="password" class="form-control" name="password" placeholder="Password"/>
                    <label class="form-label" for="password"></label>
                    @if($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif

                    <div class="row mb-2">
                        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                    </div>

                    <div class="text-center">
                        <p>Not a member? <a href="/register">Register now!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer>
        @include('layouts.footer')
    </footer>
@endsection
