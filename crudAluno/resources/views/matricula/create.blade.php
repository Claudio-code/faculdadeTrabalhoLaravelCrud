@extends('home')

@section('content')
    <div class="container p-5 shadow-sm mt-5 rounded">
        <h4 class="text-center">Criar Matricula</h4>
        <form method="post" action="/matricula/criar">
            @csrf
            <div class="form-group">
                <label for="alunoInput">num aluno</label>
                <input type="text" class="form-control" name="id_aluno" id="alunoInput" >
            </div>
            <div class="form-group">
                <label for="cursoInput">num curso</label>
                <input type="text" class="form-control" name="id_curso" id="cursoInput" >
            </div>
            <div class="form-group">
                <label for="instrutorInput">num instrutor</label>
                <input type="text" class="form-control" name="id_instrutor" id="instrutorInput" >
            </div>
            <div class="form-group">
                <label for="dataInput">data matricula</label>
                <input type="date" class="form-control" name="data_matricula" id="dataInput" >
            </div>
            <div class="form-group">
                <label for="notaInput">nota 1</label>
                <input type="text" class="form-control" name="nota1" id="notaInput" >
            </div>
            <div class="form-group">
                <label for="notaInput">nota 2</label>
                <input type="text" class="form-control" name="nota2" id="notaInput" >
            </div>
            <div class="form-group">
                <label for="data2Input">data certificação</label>
                <input type="date" class="form-control" name="data_certificacao" id="data2Input" >
            </div>
            <div class="form-group">
                <label for="certificacaoInput">num certificação</label>
                <input type="text" class="form-control" name="id_certificacao" id="certificacaoInput" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
