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

                    {{ __('You are logged in!') }}
                </div>
                <div>
                    <P>
                        <a href="{{ url('/frontpage') }}">--Show the Front Page/a
                         <br>
                        <a href="{{ url('/selectevent') }}">--Show Events</a>
                        <br>
                        <br>
                        <a href="{{ url('/selectfamily') }}">--Show Families</a>
                        <br>
                    </P>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
