@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-error" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Your account is temporally disabled. Please contact us for more information.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
