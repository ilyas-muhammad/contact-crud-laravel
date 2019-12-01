@extends('adminlte::page')

@section('title', $contact->first_name)

@section('content_header')
    <h1>{{ $contact->first_name.' '.$contact->last_name }}</h1>
@stop

@section('content')
<a href="/" class="btn btn-primary">Back</a>
<br/>
<br/>
@if(null !== $contact->avatar_url)<img width="100" src="{{ url('/upload/'.$contact->avatar_url.'') }}">
@else<img width="100" src="{{ url('/upload/no-image.png') }}">
@endif
<br>
<b>First Name : </b> {{ $contact->first_name }} <br />
<b>Last Name : </b>  {{ $contact->last_name }} <br />
<b>Address : </b>  {{ $contact->address }} <br />
<b>City : </b>  {{ $contact->city }} <br />
<b>Zip Code : </b>  {{ $contact->zip }} <br />
<b>Country : </b>  {{ $contact->country }} <br />
<b>Email : </b>  {{ $contact->email }} <br />
<b>Phone Number : </b> {{ $contact->phone }} <br />
<b>Note : </b> {{ $contact->note }} <br />
<b>Created At:</b> {{ $contact->created_at }} <br />
<b>Updated At:</b>  {{ $contact->updated_at }} <br />

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop