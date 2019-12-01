@extends('adminlte::page')

@section('title', 'List Group')

@section('content_header')
    <h1>List Group</h1>
@stop

@section('content')
    <div class="card-header text-center">
    </div>
    <div class="card-body">
        <a href="/group/create" class="btn btn-primary">Create New Group</a>
        <br/>
        <br/>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($groups as $g)
                <tr>
                    <td>{{ $g->id }}</td>
                    <td>{{ $g->name }}</td>
                    <td>
                        <a href="/group/edit/{{ $g->id }}" title="update"><span class="far fa-fw fa-edit"></a>
                        <a href="/group/delete/{{ $g->id }}" title="delete" style="color: red;"><span class="far fa-fw fa-trash-alt"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <br />
        <p><b>Page : {{ $groups->currentPage() }}
        || Total Data : {{ $groups->total() }}
        || Item per Page : {{ $groups->perPage() }}
        </b>
        {{ $groups->links() }}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop