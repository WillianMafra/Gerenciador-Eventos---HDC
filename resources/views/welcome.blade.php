@extends('layouts.main')

@section('title', 'Estudos')

@section('content')
<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" name="search" id="search" class="form-control" placeholder="Pesquisar">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{$event->image}}" alt="{{$event->title}}">
            <div class="card-body">
                <p class="card-date">10/10/22</p>
                <h5 class="card-title">{{$event->title}}</h5>
                <p class="card-participants">x Participantes</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
    </div>
    @endforeach
</div>


@endsection