@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <ul class="nav flex-column mb-4">
                    <li class="nav-item">
                        <a class="nav-item" href="{{ route('account') }}">Account</a>
                    </li>
                </ul>
                <ul class="nav flex-column mb-4">
                    <li class="nav-item">
                        <a class="nav-item" href="{{ route('account.subscriptions') }}">Subscription</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                @yield('account')
            </div>
        </div>
    </div>
@endsection
