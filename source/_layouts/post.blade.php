@extends('_layouts.main')

@section('body')
<h1>{{ $page->title }}</h1>

@yield('content')

@if ($page->getNext())
<p>Read my next post:
    <a href="{{ $page->getNext()->getPath() }}">{{ $page->getNext()->title }}</a>
</p>
@endif
@endsection
