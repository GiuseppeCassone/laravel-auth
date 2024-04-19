@extends('layouts.admin')

@section('content')
<div class="dashboard p-5">
    <h1>Pagina Admin</h1>

    <a href="{{route('admin.projects.index')}}" class="btn btn-info">Visualizza i progetti</a>
</div>
@endsection

