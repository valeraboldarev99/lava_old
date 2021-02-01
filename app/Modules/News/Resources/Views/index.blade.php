@extends('layouts.app')

@section('page_content')
    <h1>Наш модуль:</h1>
    {{ trans('News::index.this_module')}}
    @if (count($items))
        @foreach($items as $entity)
            <h2>{{ $entity->title }}</h2>
            <p>{{ $entity->text }}</p>
        @endforeach
    @else
        <p>нет записей</p>
    @endif
@endsection