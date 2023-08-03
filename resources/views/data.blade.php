@extends('layouts.navbar')

@section('title', 'data halo')

@foreach ($posts as $post)


@section('content')
    <li>{{ $post['name'] }}</li>
    <li>{{ $post['body'] }}</li>
@endsection

@endforeach
