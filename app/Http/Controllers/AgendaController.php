<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agenda;


class AgendaController extends Controller
{
    
    
    public function index() {
        $agendas = Agenda::get();
        return view('index')->with('agendas', $agendas);
    }



    public function create() {
        return view('formulario');
    }

    public function store(Request $req) {
        $agenda = new Agenda();
        $agenda->tarefa = $req->tarefa;
        $agenda->status = $req->status;
        $agenda->urgencia = $req->urgencia;
        $agenda->categoria = $req->categoria;
        $agenda->desenvolvedor = $req->desenvolvedor;
        $agenda->entrega = $req->entrega;
        $agenda->save();
    
        return redirect('/');

    }

    public function delete(Request $req) {
        $agenda = Agenda::find($req->id);
        $agenda->delete();
        
        return redirect('/');
    }

    public function edit($id) {
        $reg = Agenda::find($id);
        return view('formularioedit')->with('reg', $reg);
    }


    public function update(Request $req) {
        $agenda = Agenda::find($req->id);
        $agenda->tarefa = $req->tarefa;
        $agenda->status = $req->status;
        $agenda->urgencia = $req->urgencia;
        $agenda->categoria = $req->categoria;
        $agenda->desenvolvedor = $req->desenvolvedor;
        $agenda->entrega = $req->entrega;
        $agenda->save();

        return redirect('/');
    }

}
