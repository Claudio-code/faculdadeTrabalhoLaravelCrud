@extends('home')

@section('content')
    <div class="container p-5 shadow-sm mt-5 rounded">
        <h4 class="text-center">Criar Matricula</h4>
        <form method="post" action="/matricula/atualizar/{{ $matricula->id }}">
            @csrf
            <input type="number" name="id" hidden value="{{ $matricula->id }}">
            <div class="form-group">
                <label for="alunoInput">num aluno</label>
                <input type="text" class="form-control" name="id_aluno" id="alunoInput" value="{{ $matricula->id_aluno }}">
            </div>
            <div class="form-group">
                <label for="cursoInput">num curso</label>
                <input type="text" class="form-control" name="id_curso" id="cursoInput" value="{{ $matricula->id_curso }}">
            </div>
            <div class="form-group">
                <label for="instrutorInput">num instrutor</label>
                <input type="text" class="form-control" name="id_instrutor" id="instrutorInput" value="{{ $matricula->id_instrutor }}">
            </div>
            <div class="form-group">
                <label for="dataInput">data matricula</label>
                <input type="date" class="form-control" name="data_matricula" id="dataInput" value="{{ $matricula->data_matricula }}">
            </div>
            <div class="form-group">
                <label for="notaInput">nota 1</label>
                <input type="text" class="form-control" name="nota1" id="notaInput" value="{{ $matricula->nota1 }}">
            </div>
            <div class="form-group">
                <label for="notaInput">nota 2</label>
                <input type="text" class="form-control" name="nota2" id="notaInput" value="{{ $matricula->nota2 }}">
            </div>
            <div class="form-group">
                <label for="data2Input">data certificação</label>
                <input type="date" class="form-control" name="data_certificacao" id="data2Input" value="{{ $matricula->data_certificacao }}">
            </div>
            <div class="form-group">
                <label for="certificacaoInput">num certificação</label>
                <input type="text" class="form-control" name="id_certificacao" id="certificacaoInput" value="{{ $matricula->id_certificacao }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
