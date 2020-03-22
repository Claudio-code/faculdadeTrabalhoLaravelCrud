@extends('home')

@section('content')
    <div class="container p-3 shadow-sm mt-5 rounded">
        <h4 class="text-center">Matriculas</h4>
        @if(!empty($messages))
            <div class="alert alert-success" role="alert">
                {{ $messages }}
            </div>
        @endif

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">num curso</th>
                <th scope="col">num aluno</th>
                <th scope="col">num instrutor</th>
                <th scope="col">data matricula</th>
                <th scope="col">nota1</th>
                <th scope="col">nota2</th>
                <th scope="col">data_certificação</th>
                <th scope="col">num certificação</th>
                <th scope="col">opções</th>
            </tr>
            </thead>
            <tbody>
                @foreach($matriculas as $matricula)
                <tr>
                    <th scope="row">{{ $matricula->id }}</th>
                    <td>{{ $matricula->id_curso  }}</td>
                    <td>{{ $matricula->id_aluno }} hrs</td>
                    <td>{{ $matricula->id_instrutor }}</td>
                    <td>{{ $matricula->data_matricula }}</td>
                    <td>{{ $matricula->nota1 }}</td>
                    <td>{{ $matricula->nota2 }}</td>
                    <td>{{ $matricula->data_certificacao }}</td>
                    <td>{{ $matricula->id_certificacao }}</td>
                    <td class="d-flex flex-row justify-content-around">
                        <form method="post" action="/matricula/remover/{{$matricula->id}}">
                            @csrf
                            <button class="btn btn-danger">
                                Remover
                            </button>
                        </form>
                        <form method="get" action="/matricula/update/{{$matricula->id}}">
                            @csrf
                            <button class="btn btn-primary" >Alterar</button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-success" href="/matricula/criar" role="button">Criar matricula</a>
    </div>
@endsection
