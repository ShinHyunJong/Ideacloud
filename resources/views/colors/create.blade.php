@extends('layouts.app')
@section('content')
    <form action="/color" method="POST">
        {{csrf_field()}}
        <input type="text" name="name" placeholder="name"/>
        <input type="text" name="desc" placeholder="desc"/>
        <input type="submit">
    </form>
@endsection