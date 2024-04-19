@extends('layouts.admin')

@section('content')
<div class="container p-5">
    <h1>Pagina show</h1>

    <h3 class="mb-5">{{$project->name}}</h3>
    <div class="row">
        <div class="col-6">
            <img class="w-100" src="{{$project->image}}" alt="">
        
            <div class="py-5">
                    <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-warning">Modifica</a>     
            </div>
        </div>
        <div class="col-6">
            <h5>Info sul Progetto</h5>
            <hr>
            <p><strong>Descrizione: </strong>{{ $project->description }}</p>
            <hr>
            <p><strong>Tecnologie utilizzate: </strong>{{$project->technology}}</p>
            <hr>
            <p><strong>Link: </strong>{{$project->repo_links}}</p>
        </div>  
    </div>
</div>
@endsection