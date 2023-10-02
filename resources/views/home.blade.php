@extends('layouts.app')

@section('content')
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

                    {{ __('You are Admin and you are logged in!') }}

                    <div class=" mb-3" style="text-align: center;">

                        <a href="{{ route('admin.index') }}" target="_blank"class="btn btn-dark" style="padding: 40px">Admin_management </a>

                    </div>
                    <div class=" mb-3" style="text-align: center;">

                        <a href="{{ route('sit1.Home') }}" target="_blank"class="btn btn-dark" style="padding: 40px">MY Websit _page</a>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
