@extends('layouts.app')

@section('content')
<table id="dataTable">
    <thead>
        <tr class='top-table'>
            <th class="col-1">Check</th>
            <th class="col-2">Nome da Tarefa</th>
            <th class="col-3">Status</th>
            <th class="col-4">Urgência</th>
            <th class="col-5">Categoria</th>
            <th class="col-6">Desenvolvedor</th>
            <th class="col-7">Data de Entrega</th>        
        </tr>
    </thead>
    <tbody>
        @foreach ($agendas as $agenda)
        <tr data-status="{{$agenda->status}}">
            <td><input type="checkbox" id="checkbox{{$agenda->id}}" onclick="handleCheckbox(this)"></td>
            <td class="col-2">{{ $agenda->tarefa }}</td>
            <td class="col-3">{{ $agenda->status }}</td>
            <td class="col-4">{{ $agenda->urgencia }}</td>
            <td class="col-5">{{ $agenda->categoria }}</td>
            <td class="col-6">{{ $agenda->desenvolvedor }}</td>
            <td class="col-7">{{ $agenda->entrega }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="{{ asset('js/main.js') }}"></script>
@endsection