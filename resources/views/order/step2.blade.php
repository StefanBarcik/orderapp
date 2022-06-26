@extends('layouts.app')

@section('content')
    <div>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="/order/step1">Step 1 | Form</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Step 2 | Summary</a>
            </li>
        </ul>
    </div>

    <div class="progress">
        <div class="progress-bar w-100" role="progressbar" aria-valuenow=100" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <div class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Summary</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><span>Price is: </span> <span id="value">{{$order['price']}}</span></li>
                    <li class="list-group-item"> <span>Product is: {{$order['product']}}</span></li>
                    <li class="list-group-item"> <span>Date is: {{$order['date']}}</span></li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <form action="/order/step2/confirm" method="post">
                    @csrf
                    <input type="submit" class="btn btn-success" value="Place order">
                </form>
            </div>
            <div class="col col-sm-10">
                <a href="/" class="btn btn-danger">Cancel order</a>
            </div>
        </div>


    </div>

    <footer>
        @include('layouts.footer')
    </footer>
@endsection
