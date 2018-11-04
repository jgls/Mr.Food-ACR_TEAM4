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

                    Welcome </a>{{Auth::user()->name}} !<br/>
                    <a href="/"> Mr.Food </a> is ready to satisfy you in the best way.

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
