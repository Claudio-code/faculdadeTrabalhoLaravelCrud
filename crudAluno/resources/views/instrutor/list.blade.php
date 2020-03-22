@extends('home')

@section('content')
    <div class="container p-3 shadow-sm mt-5 rounded">
        <h4 class="text-center">Instrutores</h4>
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
                <th scope="col">data nacimento</th>
                <th scope="col">cpf</th>
                <th scope="col">rg</th>
                <th scope="col">celular</th>
                <th scope="col">email</th>
                <th scope="col">curriculo</th>
                <th scope="col">opções</th>
            </tr>
            </thead>
            <tbody>
                @foreach($instrutorres as $instrutor)
                <tr>
                    <th scope="row">{{ $instrutor->id }}</th>
                    <td>{{ $instrutor->nome_instrutor  }}</td>
                    <td>{{ $instrutor->data_nacimento }} hrs</td>
                    <td>{{ $instrutor->cpf }}</td>
                    <td>{{ $instrutor->rg }}</td>
                    <td>{{ $instrutor->fone_celular }}</td>
                    <td>{{ $instrutor->email_aluno }}</td>
                    <td>{{ $instrutor->mini_curiculo }}</td>
                    <td class="d-flex flex-row justify-content-around">
                        <form method="post" action="/instrutor/remover/{{$instrutor->id}}">
                            @csrf
                            <button class="btn btn-danger">
                                Remover
                            </button>
                        </form>
                        <form method="get" action="/instrutor/update/{{$instrutor->id}}">
                            @csrf
                            <button class="btn btn-primary" >Alterar</button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-success" href="/instrutor/criar" role="button">Criar curso</a>
    </div>
@endsection
