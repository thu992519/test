@extends('layouts.article')

@section('main')
@if(session()->has('notice'))
<div>
    {{session()->get('notice')}}
</div>


@endif

<h1 >文章列表</h1>
<a href="{{ route('articles.create') }}">新增文章</a> 

@foreach($articles as $article)

<div>
        <h2> {{ $article->title }} </h2>
        <p>
            {{ $article->content }}
        </p>
        <p>
            {{ $article->created_at }} 
        </p>
</div>

@endforeach

@endsection