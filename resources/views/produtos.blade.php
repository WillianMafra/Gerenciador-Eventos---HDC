@extends('layouts.main')
@section('title', 'Testando o search')
@section('content')
<!-- Aqui estamos resgatando infos do GET -->
@if($busca != '')
<p>O usuário está procurando por {{$busca}}</p>
@endif

@endsection