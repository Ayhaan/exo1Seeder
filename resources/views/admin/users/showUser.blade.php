@extends('layouts.index')

@section('content')
    <h1>users</h1>
    <a href="{{route('users.index')}}" class="btn btn-primary">Retour users</a>
    <div class="row my-4">
            <div class="col-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">NOM: {{$user->nom}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">AGE : {{$user->age}}</h6>
                    <p>Tel : {{$user->email}}</p>
                    <p>Tel : {{$user->tel}}</p>
                    <form action="{{route('users.delete', $user->id)}}" method="POST" class="my-1">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">delete</button>
                    </form>
                    </div>
                </div>
            </div>        
    </div>
@endsection