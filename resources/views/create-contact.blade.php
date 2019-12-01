@extends('adminlte::page')

@section('title', 'Create Contact')

@section('content_header')
    <h1>Create New Contact</h1>
@stop

@section('content')
<a href="/" class="btn btn-primary">Back</a>
<br/>
<br/>

<form method="POST" action="/contact/store" enctype="multipart/form-data">

    {{ csrf_field() }}

    <div class="form-group">
        <label>First Name</label>
        <input type="text" name="firstName" class="form-control" placeholder="first name ..">

        @if($errors->has('firstName'))
            <div class="text-danger">
                {{ $errors->first('firstName')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <label>Last Name</label>
        <input type="text" name="lastName" class="form-control" placeholder="last name ..">

        @if($errors->has('lastName'))
            <div class="text-danger">
                {{ $errors->first('lastName')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <label>Group</label>
        <select name="groupId" class="form-control">
            @foreach($group as $g)
            <option value="{{ $g->id }}">{{ $g->name }}</option>
            @endforeach
        </select>

        @if($errors->has('groupId'))
            <div class="text-danger">
                {{ $errors->first('groupId')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <label>Address</label>
        <textarea name="address" class="form-control" placeholder="Address .."></textarea>

        @if($errors->has('address'))
            <div class="text-danger">
                {{ $errors->first('address')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <label>City</label>
        <input type="text" name="city" class="form-control" placeholder="city ..">

        @if($errors->has('city'))
            <div class="text-danger">
                {{ $errors->first('city')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <label>ZIP Code</label>
        <input type="number" name="zip" class="form-control" placeholder="zip code ..">

        @if($errors->has('zip'))
            <div class="text-danger">
                {{ $errors->first('zip')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <label>Country</label>
        <input type="text" name="country" class="form-control" placeholder="country ..">

        @if($errors->has('country'))
            <div class="text-danger">
                {{ $errors->first('country')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" placeholder="email ..">

        @if($errors->has('email'))
            <div class="text-danger">
                {{ $errors->first('email')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <label>Phone</label>
        <input type="number" name="phone" class="form-control" placeholder="phone number ..">

        @if($errors->has('phone'))
            <div class="text-danger">
                {{ $errors->first('phone')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <label>Note</label>
        <textarea name="note" class="form-control" placeholder="note .."></textarea>

        @if($errors->has('note'))
            <div class="text-danger">
                {{ $errors->first('note')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <label>Avatar</label>
        <input type="file" name="file">

        @if($errors->has('file'))
            <div class="text-danger">
                {{ $errors->first('file')}}
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