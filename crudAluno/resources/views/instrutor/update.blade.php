@extends('home')

@section('content')
<div class="container p-5 shadow-sm mt-5 rounded">
    <h4 class="text-center">alterar Instrutor</h4>
    <form method="post" action="/instrutor/atualizar/{{ $instrutor->id }}">
        @csrf

        <input type="number" name="id" hidden value="{{ $instrutor->id }}">
        <div class="form-group">
            <label for="nomeInput">Nome</label>
            <input type="text" class="form-control" name="nome_instrutor" id="nomeInput" value="{{ $instrutor->nome_instrutor }}">
        </div>
        <div class="form-group">
            <label for="dataInput">data Nacimento</label>
            <input type="date" class="form-control" name="data_nacimento" id="dataInput" value="{{ $instrutor->data_nacimento }}">
        </div>
        <div class="form-group">
            <label for="cpfInput">cpf</label>
            <input type="text" class="form-control" name="cpf" id="cpfInput" value="{{ $instrutor->cpf }}">
        </div>
        <div class="form-group">
            <label for="rgInput">rg</label>
            <input type="text" class="form-control" name="rg" id="rgInput" value="{{ $instrutor->rg }}">
        </div>
        <div class="form-group">
            <label for="foneInput">celular</label>
            <input type="text" class="form-control" name="fone_celular" id="foneInput" value="{{ $instrutor->fone_celular }}">
        </div>
        <div class="form-group">
            <label for="emailInput">email</label>
            <input type="email" class="form-control" name="email_aluno" id="emailInput" value="{{ $instrutor->email_aluno }}">
        </div>
        <div class="form-group">
            <label for="curriculoInput">curriculo</label>
            <input type="text" class="form-control" name="mini_curiculo" id="curriculo" value="{{ $instrutor->mini_curiculo }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
