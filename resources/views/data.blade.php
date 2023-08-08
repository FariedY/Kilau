@extends('layouts.main')

@section('title', 'Data Post')

@foreach ($posts as $post)


@section('container')
<ul>
    <li>{{ $post['name'] }}</li>
    <li>{{ $post['body'] }}</li>
</ul>
@endsection

@endforeach
