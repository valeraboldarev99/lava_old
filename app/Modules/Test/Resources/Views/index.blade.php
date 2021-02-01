@extends('layouts.app')

@section('page_content')

    <h1>Наш модуль:</h1>
    {{ trans('Test::test.this_module')}}
    @if (count($items))
        @foreach($items as $entity)
            <h5>{{ $entity->title }}</h5>
        @endforeach
    @else
        <p>no</p>
    @endif
@endsection