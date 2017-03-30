@extends('layouts.app')
@section('content')
    <form action="/color/{{$color->id}}" method="POST">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <input type="text" name="name" placeholder="name" value="{{$color->name}}"/>
        <input type="text" name="desc" placeholder="desc" value="{{$color->desc}}"/>
        <input type="submit">
    </form>
@endsection