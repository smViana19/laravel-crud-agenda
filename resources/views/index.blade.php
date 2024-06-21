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
            <td><input type="checkbox" id="{{$agenda->id}}" onclick="handleCheckbox(this)"></td>
            <td class="col-2">{{ $agenda->tarefa }}</td>
            <td class="col-3">
                <form id="status-form-{{$agenda->id}}" action="{{ route('updateStatus', ['id' => $agenda->id]) }}" method="POST">
                    @csrf
                    <select name="status" onchange="updateStatus({{$agenda->id}})">
                        <option value="To Do" {{ $agenda->status == 'To Do' ? 'selected' : '' }}>To Do</option>
                        <option value="Doing" {{ $agenda->status == 'Doing' ? 'selected' : '' }}>Doing</option>
                        <option value="Done" {{ $agenda->status == 'Done' ? 'selected' : '' }}>Done</option>
                    </select>
                </form>
            </td>
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
