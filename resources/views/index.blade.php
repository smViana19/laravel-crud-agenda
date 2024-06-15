@extends('layouts.app')


@section('content')
<table>
        <tr class='top-table'>
            <th class="col-1"><input type="checkbox"></th>
            <th class="col-2">Nome da Tarefa</th>
            <th class="col-3">Status</th>
            <th class="col-4">Urgência</th>
            <th class="col-5">Categoria</th>
            <th class="col-6">Desenvolvedor</th>
            <th class="col-7">Data de Entrega</th>
          
        </tr>
        <tr data-status="To Do">
            <td><input type="checkbox"></td>
            <td class="col-2">Conteúdo 2</td>
            <td class="col-3">
                <select name="" id="">
                    <option selected disabled value="">Status</option>
                    <option value="To Do">To Do</option>
                    <option value="Doing">Doing</option>
                    <option value="Done">Done</option>
                </select>
            </td>
            <td class="col-4">dfasdf</td>
            <td class="col-5">Conteúdo 2</td>
            <td class="col-6">Conteúdo 3</td>
            <td class="col-7"><input type="date"></td>
            
        </tr>
        <tr data-status="To Do">
            <td><input type="checkbox"></td>
            <td class="col-2">Mais Conteúdo 2</td>
            <td class="col-3">To Do</td>
            <td class="col-4">dfasdf</td>
            <td class="col-5">Doing</td>
            <td class="col-6">Conteúdo 3</td>
            <td class="col-7"><input type="date"></td>
           
        </tr>
        <tr data-status="Doing">
            <td><input type="checkbox"></td>
            <td class="col-2">Mais Conteúdo 2</td>
            <td class="col-3">Doing</td>
            <td class="col-4">dfasdf</td>
            <td class="col-5">Conteúdo 2</td>
            <td class="col-6">Conteúdo 3</td>
            <td class="col-7"><input type="date"></td>
           
        </tr>
        <tr data-status="Done">
            <td><input type="checkbox"></td>
            <td class="col-2">Mais Conteúdo 2</td>
            <td class="col-3">Done</td>
            <td class="col-4">dfasdf</td>
            <td class="col-5">Conteúdo 2</td>
            <td class="col-6">Conteúdo 3</td>
            <td class="col-7"><input type="date"></td>
            
        </tr>
    </table>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/main.js') }}"></script>
@endsection
