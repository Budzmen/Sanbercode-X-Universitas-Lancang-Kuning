@extends('layout.master')

@section('judul')
Edit Cast
@endsection

@section('judul2')
Edit Cast
@endsection

@section('content')
<form method="POST" action="/cast/{{$cast->id}}">
    {{-- Validation --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- form input --}}
    @csrf
    @method("put")
    <div class="form-group">
      <label>Nama Cast</label>
      <input type="text" value="{{$cast->nama}}" class="form-control" name="nama">
    </div>
    <div class="form-group">
      <label>Umur Cast</label>
      <input type="number" value="{{$cast->umur}}" class="form-control" name="umur">
    </div>
    <div class="form-group">
        <label>Bio</label>
        <textarea name="bio" class="form-control" cols="30" rows="10">{{$cast->bio}}</textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection