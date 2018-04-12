@extends('layouts.app')

@section('title','Home')

@section('content')
<div class="container">
    <h1>Bienvenido {{ Auth::user()->name }}</h1>
</div>
@endsection
 