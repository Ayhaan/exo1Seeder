@extends('layouts.index')

@section('content')
    <h1>users</h1>
    <a href="{{route('admin')}}" class="btn btn-primary">Retour back</a>
    <a href="{{route('users.create')}}" class="btn btn-primary">Add users</a>
    <a href="{{route('users.deleteAll')}}" class="btn btn-danger">DROP db</a>
    <div class="row my-4">
        @foreach ($users as $user)
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">NOM: {{$user->nom}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">AGE : {{$user->age}}</h6>
                    <p>Tel : {{$user->email}}</p>
                    <p>Tel : {{$user->tel}}</p>
                    <a href="{{route('users.edit', $user->id)}}" class="btn btn-success">edit</a>
                    <a href="{{route('users.show', $user->id)}}" class="btn btn-primary">show</a>
                    <form action="{{route('users.delete', $user->id)}}" method="POST" class="my-1">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">delete</button>
                    </form>
                    </div>
                </div>
            </div>
            
        @endforeach
    </div>
@endsection