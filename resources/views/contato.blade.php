<!-- Usamos o extends para puxar o layout html para a página -->
@extends('layouts.main')
<!-- Aqui é para mudar o título da página -->
@section('title', 'Aula de Laravel')
<!-- Aqui estou demarcando qual será o conteúdo da página -->
@section('content')
<h1>Para criar uma view, é necessário utilizar o nome que irá após a / seguido de blade.php</h1>
<h1>Aqui é a página de contato</h1>
@if(10>5)
    <h3>10 é maior que 5</h3>
@endif
<p>{{$nome}}</p>
@if($nome == "Joaquim")
<p>O nome é Joaquim!</p>
@else
<p>O nome não é Joaquim! O nome é {{$nome}}!</p>
@endif
@for($i = 0; $i < count($array); $i++)
    <p>{{ $array[$i]}}</p>
@endfor

{{-- Para utilizarmos comandos php, devemos utilizar a tag @php e @endphp --}}
<a href="/">Voltar para a home</a>
@endsection