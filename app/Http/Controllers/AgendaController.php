<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


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
        // Decodifica o array de IDs da requisição JSON
        $ids = json_decode($req->ids);
    
        // Verifica se o array de IDs está presente e não está vazio
        if (!empty($ids) && is_array($ids)) {
            // Log dos IDs que serão deletados
            Log::info('Deleting agenda items with IDs: ', ['ids' => $ids]);
    
            // Encontra todos os registros cujos IDs estão no array
            $agendas = Agenda::whereIn('id', $ids)->get();
    
            // Itera sobre cada registro encontrado e deleta
            foreach ($agendas as $agenda) {
                $agenda->delete();
            }
    
            // Redireciona com uma mensagem de sucesso
            return redirect('/')->with('success', 'Agenda items deleted successfully.');
        } else {
            // Redireciona com uma mensagem de erro caso o array de IDs não seja válido
            return redirect('/')->with('error', 'Invalid or empty IDs array.');
        }
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

    public function updateStatus(Request $request, $id)
{
    $agenda = Agenda::findOrFail($id);
    $agenda->status = $request->input('status');
    $agenda->save();

    return redirect()->back()->with('success', 'Status atualizado com sucesso!');
}


}


