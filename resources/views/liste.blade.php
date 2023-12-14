@extends('layout')

@section('title', 'Liste des Scans')

@section('content')
    <h1>Liste des Scans</h1>

    @if($scans->isEmpty())
        <p>Aucun scan trouvé.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th> ID </th>
                    <th> Titre </th> 
                    <th> Description </th> 
                    <th> Date d'ajout </th> 
                    <th> Suppression </th> 
                    <th> Modification </th> 
                </tr>
            </thead>
            <tbody>
                @foreach($scans as $scan)
                    <tr>
                        <td>{{ $scan->id_scan }}</td> 
                        <td>{{ $scan->titre }}</td> 
                        <td>{{ $scan->description }}</td> 
                        <td>{{ $scan->date_ajout }}</td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="{{ route('scans.create')}}" class="btn btn-primary">Créer un nouveau scan</a>
@endsection
