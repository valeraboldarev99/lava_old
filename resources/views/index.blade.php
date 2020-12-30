@extends('layouts.app')

@section('page_content')
    <h2>Главная</h2>
    @include('Test::main')
    @include('News::main')
@endsection