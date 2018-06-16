@extends('layouts.dashboard')

@section('content')
<div class="container">

    
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        You are logged in!
        <a 
        class="waves-effect white-text"
        href="{{ route('logout') }}"
        onclick=
        "event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
        </form>

</div>
@endsection
