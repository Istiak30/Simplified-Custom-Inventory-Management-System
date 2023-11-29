@extends('layouts.app')

@section('content')
<style>
    .container {
            max-width: 1600px;
            margin: 0 auto;
            text-align: center;
        }

        .auth-buttons a {
            display: inline-block;
            margin-left: 10px;
            padding: 10px 20px;
            font-size: 18px;
            text-decoration: none;
            border: 2px solid #031c1f;
            border-radius: 5px;
            color: #031c1f;
        }

        .auth-buttons a.btn-primary {
            background-color: #031c1f;
            color: #fff;
        }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Welcome to the Custom Inventory Management System, {{ Auth::user()->name }}!</h3>

                </div>
                <div style="text-align: center; margin-top: -10px;">
                    <a href="{{ url('/products') }}" class="btn btn-secondary btn-info btn-lg btn-outline-dark">Manage Products</a>
                </div>
                <h1></h1><br>
                <ul class="list-group">
                    <li class="list-group-item active"><b>Build Requirement</b></li>
                    <li class="list-group-item">PHP = 8.2.4</li>
                    <li class="list-group-item">Laravel Framework = 10.34.2</li>
                    <li class="list-group-item">MySQL Database</li>
                    <li class="list-group-item">Composer Package Manager</li>
                </ul>
                <div style="text-align: center; margin-top: 20px;">
                <a href="{{ url('/') }}" class="btn btn-secondary">Back to Front Page</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
