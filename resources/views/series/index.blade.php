@extends('layout')

@section('content')
    <div class="px-4 pt-5 my-5 border-bottom">
        <h1 class="display-4 fw-bold text-center">Minhas Séries</h1>
        <div class="container my-auto col-xxl-8 px-4 py-5">
            @if(!empty($message))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif
            <a href="series/create" class="btn btn-primary mb-2">Adicionar</a>

            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Série</th>
                        <th scope="col">Nota</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($series as $key => $name)
                    <tr>
                        <td><?= $key+1; ?></td>
                        <td><?= $name->series; ?></td>
                        <td>
                            <?php
                            echo(
                                str_repeat('<i class="fas fa-star"></i>',  intval($name->ranks))
                            ); 
                            ?>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection