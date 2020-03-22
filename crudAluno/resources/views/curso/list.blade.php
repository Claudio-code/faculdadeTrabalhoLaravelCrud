@extends('home')

@section('content')
    <div class="container p-3 shadow-sm mt-5 rounded">
        <h4 class="text-center">Cursos</h4>
        @if(!empty($messages))
            <div class="alert alert-success" role="alert">
                {{ $messages }}
            </div>
        @endif

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">nome</th>
                <th scope="col">carga horaria</th>
                <th scope="col">Ementa</th>
                <th scope="col">Opções</th>
            </tr>
            </thead>
            <tbody>
                @foreach($cursos as $curso)
                <tr>
                    <th scope="row">{{ $curso->id }}</th>
                    <td>{{ $curso->nome_curso  }}</td>
                    <td>{{ $curso->carga_horaria }} hrs</td>
                    <td>{{ $curso->ementa_curso }}</td>
                    <td class="d-flex flex-row justify-content-around">
                        <form method="post" action="/curso/remover/{{$curso->id}}">
                            @csrf
                            <button class="btn btn-danger">
                                Remover
                            </button>
                        </form>
                        <form method="get" action="/curso/update/{{$curso->id}}">
                            @csrf
                            <button class="btn btn-primary" >Alterar</button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-success" href="/curso/criar" role="button">Criar curso</a>
    </div>
@endsection
