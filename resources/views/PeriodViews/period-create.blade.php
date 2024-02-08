@extends('masters.master')
@section('title')
Perios Creation
@endsection()
@section('content')
    <form method="POST">
        @csrf
    </form>
@endsection()