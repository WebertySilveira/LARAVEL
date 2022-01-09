@extends('layout')

@section('content')
    <div class="px-4 pt-5 my-5 border-bottom">
        <h1 class="display-4 fw-bold text-center">Minhas Séries</h1>
        <div class="container my-auto col-xxl-8 px-4 py-5">
            @if(!empty($addMessage))
                <div class="alert alert-success" role="alert">
                    {{ $addMessage }}
                </div>
            @endif
            @if(!empty($destroyMessage))
                <div class="alert alert-danger" role="alert">
                    {{ $destroyMessage }}
                </div>
            @endif
            
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">Temporada</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($seasons as $key => $season)
                    <tr>
                        <td>{{ $season->number }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection