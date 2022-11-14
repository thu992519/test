@extends('layouts.article')

@section('main')

<h1 > 文章>新增文章</h1>
@if($errors->any())
    <div class="errors ">
        <ul>
            @foreach($errors->all() as $error )
            <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>

@endif

<form action=" {{ route('articles.store') }} " method="post">
    @csrf
    <div class="field">
        <label for="">標題</label>
        <input type="text" value=" {{ old('title') }} " name="title">

    </div>

    <div class="field">
        <label for="">內文</label>
        <textarea name="content" value=" {{ old('content') }} " id="content" cols="30" rows="10"></textarea>
        

    </div>

    <div class="actions">
        <button type="submit">新增文章</button>
    </div>



</form>


@endsection