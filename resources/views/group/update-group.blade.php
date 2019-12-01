@extends('adminlte::page')

@section('title', 'Create Group')

@section('content_header')
    <h1>Edit Group</h1>
@stop

@section('content')
<a href="/group" class="btn btn-primary">Back</a>
<br/>
<br/>

<form method="POST" action="/group/update/{{ $group->id }}" enctype="multipart/form-data">

    {{ csrf_field() }}
    {{ method_field('PUT') }}


    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{ $group->name }}">

        @if($errors->has('name'))
            <div class="text-danger">
                {{ $errors->first('name')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Save">
    </div>

</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop