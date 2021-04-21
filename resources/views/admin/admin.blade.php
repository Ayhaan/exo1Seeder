@extends('layouts.index')

@section('content')
    <h1>PAGE ADMIN</h1>
    <a href="{{route('users.index')}}" class="btn btn-secondary">Users go</a>
    <a href="{{route('home')}}" class="btn btn-secondary">Retour back to site</a>
    <h3 class="my-4">Page admin HOME</h3>
    <p>Ici se trouve la nav, les résumés, ect</p>
@endsection