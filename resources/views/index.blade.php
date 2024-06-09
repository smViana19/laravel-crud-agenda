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
            <th class="col-8">
                <button class='btnMore'>Mais</button>
            </th>


        </tr>
        <tr>
            <td><input type="checkbox"></td>
            <td class="col-2">Conteúdo 2</td>
            <td class="col-3">
                <select name="" id="">
                    <option selected disabled value="">Status</option>
                    <option value="">To Do</option>
                    <option value="">Doing</option>
                    <option value="">Done</option>


                </select>
            </td>
            <td class="col-4">dfasdf</td>
            <td class="col-5">Conteúdo 2</td>
            <td class="col-6">Conteúdo 3</td>
            <td class="col-7"><input type="date"></td>
            <td class="col-8">
                <button class='btnMore'>Mais</button>
            </td>

        </tr>
        <tr>
            <td><input type="checkbox"></td>
            <td class="col-2">Mais Conteúdo 2</td>
            <td class="col-3">Mais Conteúdo 3</td>
            <td class="col-4">dfasdf</td>
            <td class="col-5">Conteúdo 2</td>
            <td class="col-6">Conteúdo 3</td>
            <td class="col-7"><input type="date"></td>
            <td class="col-8">
                <button class='btnMore'>Mais</button>
            </td>
        </tr>
    </table>
@endsection
