@extends('layouts.app')

@section('content')
    <header>
        @include('layouts.header')
    </header>
    <div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/product.png') }}" class="card-img-top" alt="product">
                    <div class="card-body">
                        <h6 class="card-title">Product 1</h6>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque habitant morbi tristique senectus. Et netus et malesuada fames ac turpis egestas sed. Arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc. Condimentum mattis pellentesque id nibh tortor id aliquet lectus.                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/product.png') }}" class="card-img-top" alt="product">
                    <div class="card-body">
                        <h6 class="card-title">Product 2</h6>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque habitant morbi tristique senectus. Et netus et malesuada fames ac turpis egestas sed. Arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc. Condimentum mattis pellentesque id nibh tortor id aliquet lectus.                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        @include('layouts.footer')
    </footer>
@endsection
