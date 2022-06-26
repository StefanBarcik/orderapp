@extends('layouts.app')

@section('content')
    <header>
        @include('layouts.header')
    </header>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">User info</h5>
                        <p class="card-text">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Username : {{ $user->username }}</li>
                                <li class="list-group-item">Email : {{ $user->email }}</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Account delete</h5>
                        <div>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                Delete
                            </button>

                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Confirm your password</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="/delete/{{$user->id}}" method="get">
                                            <div class="modal-body">
                                                <p>Do you want to permanently delete your acc?</p>
                                                <input type="password" name="password" placeholder="Enter password">
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" value="Delete" class="btn btn-danger">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-danger">
                            @isset($message)
                                {{$message}}
                            @endisset
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">User active orders</h5>
                        <p class="card-text">
                            <ul class="list-group list-group-flush">
                                @foreach($orders as $order)
                                    <li class="list-group-item list-group-item-action d-flex justify-content-between">
                                        <strong>#{{ $order->id }}</strong> {{ $order->date }}
                                        <form action="/order/delete" >
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" value="{{$order->id}}" name="orderID">
                                            <input type="submit" value="Cancel order" class="btn btn-danger">
                                        </form>
                                    </li>
                                @endforeach
                            </ul>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
            </div>
        </div>
    </div>


    <footer>
        @include('layouts.footer')
    </footer>

@endsection
