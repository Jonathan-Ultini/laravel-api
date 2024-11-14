@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crea un Nuovo Progetto</h1>
    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome Progetto</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="link" class="form-label">Link</label>
            <input type="url" class="form-control" id="link" name="link" required>
        </div>
        <div class="mb-3">
            <label for="start_date" class="form-label">Data di Avvio</label>
            <input type="date" class="form-control" id="start_date" name="start_date" required>
        </div>
        <div class="mb-3">
            <label for="end_date" class="form-label">Data di Fine</label>
            <input type="date" class="form-control" id="end_date" name="end_date">
        </div>
        <div class="mb-3">
            <label for="type_id">Tipologia</label>
            <select name="type_id" id="type_id" class="form-control">
                <option value="">Seleziona una tipologia</option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : '' }}>
                        {{ $type->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <h3>Seleziona Tecnologie:</h3>
            @foreach($technologies as $technology)
                <div>
                    <input type="checkbox" name="technologies[]" value="{{ $technology->id }}"
                        @if(isset($project) && $project->technologies->contains($technology->id)) checked @endif>
                    <label>{{ $technology->name }}</label>
                </div>
            @endforeach
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Carica Immagine</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Salva Progetto</button>
    </form>
</div>
@endsection