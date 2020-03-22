<?php


namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(Request $request): string
    {
        $cursos = Curso::all();
        $messages = $request->session()->get('mensagem');

        return view('curso.list', compact('cursos', 'messages'));
    }

    public function create(Request $request): string
    {
        return view('curso.create');
    }

    public function  store(Request $request)
    {
        $curso = Curso::create($request->all());

        $request->session()
            ->flash(
                'mensagem',
                "Curso {$curso->id} criado com sucesso {$curso->nome}"
            );

        return redirect('/');
    }

    public function destroy(Request $request)
    {

        Curso::destroy($request->id);
        $request->session()
            ->flash(
                'mensagem',
                "Curso removida"
            );

        return redirect('/');
    }

    public function update(Request $request)
    {
        $curso = Curso::find($request->id);

        return view('curso.update', compact('curso'));
    }

    public function atualizar(Request $request)
    {
        $curso = Curso::find($request->id);
        $curso->nome_curso = $request->nome_curso;
        $curso->carga_horaria = $request->carga_horaria;
        $curso->ementa_curso = $request->ementa_curso;
        $curso->save();

        $cursos = Curso::all();

        return view('curso.list', compact('cursos'));
    }
}
