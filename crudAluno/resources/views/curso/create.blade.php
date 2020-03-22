@extends('home')

@section('content')
    <div class="container p-5 shadow-sm mt-5 rounded">
        <h4 class="text-center">Criar curso</h4>
        <form method="post" action="/curso/criar">
            @csrf
            <div class="form-group">
                <label for="nomeInput">Nome</label>
                <input type="text" class="form-control" name="nome_curso" id="nomeInput" >
            </div>
            <div class="form-group">
                <label for="cargaInput">Carga horaria</label>
                <input type="number" class="form-control" name="carga_horaria" id="cargaInput" >
            </div>
            <div class="form-group">
                <label for="ementaInput">Ementa</label>
                <input type="text" class="form-control" name="ementa_curso" id="ementaInput" >
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
