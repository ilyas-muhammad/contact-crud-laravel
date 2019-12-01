@extends('adminlte::page')

@section('title', 'Edit Contact')

@section('content_header')
    <h1>Edit Contact</h1>
@stop

@section('content')
<a href="/" class="btn btn-primary">Back</a>
<br/>
<br/>

<form method="POST" action="/contact/update/{{ $contact->id }}" enctype="multipart/form-data">
 
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <div class="form-group">
        <label>First Name</label>
        <input type="text" name="firstName" class="form-control" value="{{ $contact->first_name }}">

        @if($errors->has('firstName'))
            <div class="text-danger">
                {{ $errors->first('firstName')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <label>Last Name</label>
        <input type="text" name="lastName" class="form-control" value="{{ $contact->last_name }}">

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
        <textarea name="address" class="form-control" placeholder="Address ..">{{ $contact->address }}</textarea>

        @if($errors->has('address'))
            <div class="text-danger">
                {{ $errors->first('address')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <label>City</label>
        <input type="text" name="city" class="form-control" value="{{ $contact->city }}">

        @if($errors->has('city'))
            <div class="text-danger">
                {{ $errors->first('city')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <label>ZIP Code</label>
        <input type="number" name="zip" class="form-control" value="{{ $contact->zip }}">

        @if($errors->has('zip'))
            <div class="text-danger">
                {{ $errors->first('zip')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <label>Country</label>
        <input type="text" name="country" class="form-control" value="{{ $contact->country }}">

        @if($errors->has('country'))
            <div class="text-danger">
                {{ $errors->first('country')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="{{ $contact->email }}">

        @if($errors->has('email'))
            <div class="text-danger">
                {{ $errors->first('email')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <label>Phone</label>
        <input type="number" name="phone" class="form-control" value="{{ $contact->phone }}">

        @if($errors->has('phone'))
            <div class="text-danger">
                {{ $errors->first('phone')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <label>Note</label>
        <textarea name="note" class="form-control" placeholder="note ..">{{ $contact->note }}</textarea>

        @if($errors->has('note'))
            <div class="text-danger">
                {{ $errors->first('note')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <label>Avatar</label>
        <input type="file" name="avatarUrl">

        @if(null !=='avatarUrl' && $errors->has('avatarUrl'))
            <div class="text-danger">
                {{ $errors->first('avatarUrl')}}
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