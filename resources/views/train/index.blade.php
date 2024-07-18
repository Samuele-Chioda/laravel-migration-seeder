@extends('layouts.app')

@section('page-title', 'train index')

@section('main-content')
    <h1>
        Homepage
    </h1>
    @dump($train)
@endsection
