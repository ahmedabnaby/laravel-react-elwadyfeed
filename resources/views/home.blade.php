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
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-primary" href="{{ route('masheyas.index') }}"> اعلاف الماشية</a>
                        </div>
                        <div class="col">
                            <a class="btn btn-success" href="{{ route('dawagens.index') }}"> اعلاف الدواجن</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
