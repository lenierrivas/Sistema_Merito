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

                    <div class="card-footer ml-auto mr-auto">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('questions') }}" class="btn btn-primary btn-block">{{ __('Formulario') }}</a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('exportExcel') }}" class="btn btn-primary btn-block">{{ __('Excel') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
