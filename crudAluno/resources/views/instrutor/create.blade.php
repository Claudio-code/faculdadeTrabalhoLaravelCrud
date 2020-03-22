@extends('home')

@section('content')
    <div class="container p-5 shadow-sm mt-5 rounded">
        <h4 class="text-center">Criar Instrutor</h4>
        <form method="post" action="/instrutor/criar">
            @csrf
            <div class="form-group">
                <label for="nomeInput">Nome</label>
                <input type="text" class="form-control" name="nome_instrutor" id="nomeInput" >
            </div>
            <div class="form-group">
                <label for="dataInput">data Nacimento</label>
                <input type="date" class="form-control" name="data_nacimento" id="dataInput" >
            </div>
            <div class="form-group">
                <label for="cpfInput">cpf</label>
                <input type="text" class="form-control" name="cpf" id="cpfInput" >
            </div>
            <div class="form-group">
                <label for="rgInput">rg</label>
                <input type="text" class="form-control" name="rg" id="rgInput" >
            </div>
            <div class="form-group">
                <label for="foneInput">celular</label>
                <input type="text" class="form-control" name="fone_celular" id="foneInput" >
            </div>
            <div class="form-group">
                <label for="emailInput">email</label>
                <input type="email" class="form-control" name="email_aluno" id="emailInput" >
            </div>
            <div class="form-group">
                <label for="curriculoInput">curriculo</label>
                <input type="text" class="form-control" name="mini_curiculo" id="curriculo" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
