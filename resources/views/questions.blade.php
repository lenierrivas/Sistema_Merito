@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{ route('sendPost') }}" method="POST">
                        @csrf
                        @method('post')

                        @foreach ( $send_data['questions'] as $element )
                            <label for="">{{$element['name']}}</label>
                            <select name="select_{{$element['questions_id']}}" class="form-control">
                                <option value="0" selected disabled>Selecciona una opción...</option>
                                @foreach ( $send_data['description'] as $element2 )
                                    @if ( $element['questions_id'] === $element2['questions_refer_id'] )
                                        <option value="{{ $element2['descriptions_id'] }}">{{ $element2['descriptions'] }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <hr>
                        @endforeach
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
