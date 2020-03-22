<?php


namespace App\Http\Controllers;

use App\Models\Instrutor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class InstrutorController extends Controller
{
    public function index(Request $request)
    {
        $instrutorres = Instrutor::all();

        return view('instrutor.list', compact('instrutorres'));
    }
    public function create(\Illuminate\Http\Request $request): string
    {
        return view('instrutor.create');
    }

    public function  store(Request $request)
    {
        $instrutor = Instrutor::create($request->all());

        $request->session()
            ->flash(
                'mensagem',
                "Curso {$instrutor->id} criado com sucesso {$instrutor->nome}"
            );

        return redirect('/instrutor');
    }


    public function update(Request $request)
    {
        $instrutor = Instrutor::find($request->id);

        return view('instrutor.update', compact('instrutor'));
    }

    public function atualizar(Request $request)
    {
        $instrutor = Instrutor::find($request->id);
        $instrutor->nome_instrutor = $request->nome_instrutor;
        $instrutor->data_nacimento = $request->data_nacimento;
        $instrutor->cpf = $request->cpf;
        $instrutor->rg = $request->rg;
        $instrutor->fone_celular = $request->fone_celular;
        $instrutor->email_aluno = $request->email_aluno;
        $instrutor->mini_curiculo = $request->mini_curiculo;
        $instrutor->save();

        $instrutorres = Instrutor::all();

        return view('instrutor.list', compact('instrutorres'));
    }

    public function destroy(Request $request)
    {

        Instrutor::destroy($request->id);
        $request->session()
            ->flash(
                'mensagem',
                "Curso removida"
            );

        return redirect('/instrutor');
    }

}
