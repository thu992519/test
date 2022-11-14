@extends('order.neworderlayout')

@section('main')
<h1>點餐系統</h1>

<a href="{{ route('orderact.create') }}">我要點餐</a>

@if(session()->has('notice'))
<div>
    {{session()->get('notice')}}
</div>


@endif

@endsection