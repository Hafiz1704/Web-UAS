@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h5>Dashboard</h5>
                </div>

                <div class="card-body">
                <br>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Kamu Telah Login!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
