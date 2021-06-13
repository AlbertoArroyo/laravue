@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @guest

                    @else
                    Bienvenido: {{ Auth::user()->name }}
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <a class="btn btn-info" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
                    @endguest
                </div>

                
            </div>
        </div>
    </div>
</div>
@endsection
