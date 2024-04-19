@extends('layouts.admin')

@section('content')
<div class="container p-5">
    <h1>Pagina project</h1>

    <a href="{{route('admin.projects.create')}}" class="btn btn-info">Crea nuovo progetto</a>
</div>
@endsection