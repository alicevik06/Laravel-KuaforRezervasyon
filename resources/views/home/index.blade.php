<!-- resources/views/child.blade.php -->

@extends('layouts.home')

@section('title', 'Sub Page Title')

@section('sidebar')
    @parent

    <p>Sub page data </p>
@endsection

@section('content')
    <p>This is my body content.</p>
    aaaaaaaa<br>
    bbbbbbbbbbbb<br>
@endsection
