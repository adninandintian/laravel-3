@extends('layout')
@section('content')

<style>
.uper{
    margin-top: 100px;
}
</style>

<div class="card uper">
  <div class="card-header">
    Edit Post Buku
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('post.update', $post->id) }}">
        @method("PATCH")
          <div class="form-group">
              @csrf
              <label for="name">Judul</label>
              <input type="text" class="form-control" name="judul" value="{{$post->judul}}"/>
          </div>
          <div class="form-group">
              <label for="price">Pengarang</label>
              <input type="text" class="form-control" name="pengarang" value="{{$post->pengarang}}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Kategory</label>
              <input type="text" class="form-control" name="kategory" value="{{$post->kategory}}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Tahun Terbit</label>
              <input type="number" class="form-control" name="tahun_terbit" value="{{$post->tahun_terbit}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection