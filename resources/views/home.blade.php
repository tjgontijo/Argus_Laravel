@extends('adminlte::page') 
@section('title', 'Home') 
@section('content_header')
<h1>{{ $date->formatLocalized('%d de %B de %Y, %Hh%M') }}</h1>
@stop 
@section('content')
<section class="content">
    @can('dec')  
    <iframe width="100%" height="800" src="https://app.powerbi.com/view?r=eyJrIjoiZTZjMWRkNjEtOTE4MS00MTY5LTkwYTQtY2Y5NWNjZjc5YTdhIiwidCI6ImFlYmNlOTgzLWMyOGQtNDkyNS1hN2JhLTk0NGQ4ZWFkZjkzYyJ9" frameborder="0" allowFullScreen="true"></iframe>    
    @endcan
</section>
@stop