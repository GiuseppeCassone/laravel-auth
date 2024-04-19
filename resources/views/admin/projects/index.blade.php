@extends('layouts.admin')

@section('content')
<div class="container p-5">
    <h1>Pagina index</h1>

    <a href="{{route('admin.projects.create')}}" class="btn btn-info">Crea nuovo progetto</a>

    @foreach($projects as $project)
    <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-info">Visualizza progetto</a>
    @endforeach
</div>
@endsection