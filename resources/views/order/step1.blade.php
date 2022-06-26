@extends('layouts.app')

@section('content')
    @guest
        <div>To create an order you need to be <a href="/login">logged in</a></div>
    @endguest

    @auth
        <div>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/order/step1">Step 1 | Form</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Step 2 | Summary</a>
                </li>
            </ul>
        </div>

        <div class="progress">
            <div class="progress-bar w-0" role="progressbar" aria-valuenow=0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="container">
            <form action="/order/step2" method="post">
                @csrf
                <label for="select" >Choose product: </label><br>
                <select class="form-select" name="select" id="select">
                    <option value="0" selected disabled>Select option</option>
                    <option value="100">Product 1</option>
                    <option value="200">Product 2</option>
                    <option value="300">Product 3</option>
                </select>
                <br>
                <label for="date">Choose date : </label><br>
                <input class="form-control" type="datetime-local" name="date" id="date">
                <input type="hidden" name="price" id="price">
                <input type="hidden" name="product" id="product">
                <br>
                <div class="row">
                    <div class="col">
                        <input type="submit" class="btn btn-success" value="Continue">
                    </div>
                    <div class="col col-sm-10">
                        <a href="/" class="btn btn-danger">Cancel order</a>
                    </div>
                </div>

            </form>
        </div>

    @endauth

    <footer>
        @include('layouts.footer')
    </footer>
@endsection
