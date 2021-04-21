@extends('layouts.index')

@section('content')
    <h1>users</h1>
    <a href="{{route('users.index')}}" class="btn btn-primary">Retour users</a>

<form action="{{route('users.update', $user->id)}}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="nom">Email address</label>
      <input type="text" class="form-control" id="nom" name="nom" value="{{$user->nom}}" placeholder="Enter nom">
    </div>
    <div class="form-group">
      <label for="age">Password</label>
      <input type="number" class="form-control" id="age" name="age" value="{{$user->age}}" placeholder="Age">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" name="email"  value="{{$user->email}}"placeholder="email">
    </div>
    <div class="form-group">
      <label for="tel">tel</label>
      <input type="number" class="form-control" id="tel" name="tel" value="{{$user->tel}}" placeholder="tel">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection