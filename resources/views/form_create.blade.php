@extends('layout')

@section('title', 'Créer un scan')

@section('content')
    <h1>Formulaire de création de scan</h1>

    <form method="POST" action="{{ route('scans.store') }}">
        @csrf

        <div>
            <label for="titre">Titre :</label>
            <input type="text" id="titre" name="titre">
        </div>

        <div>
            <label for="description">Description :</label>
            <textarea id="description" name="description"></textarea>
        </div>

        <div>
            <label for="date_ajout">Date d'ajout :</label>
            <input type="date" id="date_ajout" name="date_ajout">
        </div>

        <button type="submit">Créer Scan</button>
    </form>
@endsection

