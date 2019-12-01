@extends('adminlte::page')

@section('title', 'List Contact')

@section('content_header')
    <h1>List Contact</h1>
@stop

@section('content')
    <div class="card-header text-center">
    </div>
    <div class="card-body">
        <a href="/contact/create" class="btn btn-primary">Create New Contact</a>
        <br/>
        <br/>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Avatar</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <!-- <th>City</th> -->
                    <!-- <th>Zip</th>
                    <th>Country</th> -->
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Group</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $c)
                <tr>
                    <td>@if(null !== $c->avatar_url)<img width="40" src="{{ url('/upload/'.$c->avatar_url.'') }}">
                    @else<img width="40" src="upload/no-image.png">
                    @endif
                    </td>
                    <td>{{ $c->first_name }}</td>
                    <td>{{ $c->last_name }}</td>
                    <td>{{ $c->address }}</td>
                    <!-- <td>{{ $c->city }}</td> -->
                    <!-- <td>{{ $c->zip }}</td>
                    <td>{{ $c->country }}</td> -->
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->phone }}</td>
                    <td>{{ $c->group['name'] }}</td>
                    <td>
                        <a href="/contact/edit/{{ $c->id }}" title="update"><span class="far fa-fw fa-edit"></a>
                        <a href="/contact/delete/{{ $c->id }}" title="delete" style="color: red;"><span class="far fa-fw fa-trash-alt"></a>
                        <a href="/contact/detail/{{ $c->id }}" title="detail" style="color: black;"><span class="far fa-fw fa-list-alt"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <br />
        <p><b>Page : {{ $contacts->currentPage() }}
        || Total Data : {{ $contacts->total() }}
        || Item per Page : {{ $contacts->perPage() }}
        </b>
        {{ $contacts->links() }}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop