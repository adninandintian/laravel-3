@extends('layout')
@section('content')
<div>
    <p>{{$post->id}}</p>
    <p>{{$post->judul}}</p>
    <p>{{$post->pengarang}}</p>
    <p>{{$post->kategory}}</p>
    <p>{{$post->tahun_terbit}}</p>
    <a href="{{route('post.index')}}"><button class="btn btn-success">Back</button></a>
</div>
@endsection