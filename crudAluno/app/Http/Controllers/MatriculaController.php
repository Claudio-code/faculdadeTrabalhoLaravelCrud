<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matricula;
use Illuminate\Routing\Controller;

class MatriculaController extends Controller
{
    public function index(Request $request)
    {
        $matriculas = Matricula::all();

        return view('matricula.list', compact('matriculas'));
    }

    public function create(\Illuminate\Http\Request $request): string
    {
        return view('matricula.create');
    }

    public function  store(Request $request)
    {
        $matricula = Matricula::create($request->all());

        $request->session()
            ->flash(
                'mensagem',
                "Curso {$matricula->id} criado com sucesso {$matricula->nome}"
            );

        return redirect('/matricula');
    }

    public function update(Request $request)
    {
        $matricula = Matricula::find($request->id);

        return view('matricula.update', compact('matricula'));
    }

    public function atualizar(Request $request)
    {
        $matricula = Matricula::find($request->id);
        $matricula->id_curso = $request->id_curso;
        $matricula->id_aluno = $request->id_aluno;
        $matricula->id_instrutor = $request->id_instrutor;
        $matricula->data_matricula = $request->data_matricula;
        $matricula->nota1 = $request->nota1;
        $matricula->nota2 = $request->nota2;
        $matricula->data_certificacao = $request->data_certificacao;
        $matricula->id_certificacao = $request->id_certificacao;

        $matricula->save();

        $matriculas = Matricula::all();

        return view('matricula.list', compact('matriculas'));
    }

    public function destroy(Request $request)
    {

        Matricula::destroy($request->id);
        $request->session()
            ->flash(
                'mensagem',
                "Matricula removida"
            );

        return redirect('/matricula');
    }
}
