@extends('layouts.includes')

@section('content')
<div class="container-fluid bg-dark h-100">
    <div class="row h-100 justify-content-center align-items-center bg-dark">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Greetings, {{Auth::user()->name}}</div>

                <div class="card-body">

                    <ul>
                        <li>Your name: <strong>{{Auth::user()->name}}</strong></li>
                        <li>Your email: <strong>{{Auth::user()->email}}</strong></li>
                    </ul>
                    <a  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
