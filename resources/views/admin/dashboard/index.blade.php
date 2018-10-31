@extends('adminlte::page') 
@section('title', 'Home') 
@section('content_header')
<h1>{{ $date->formatLocalized('%d de %B de %Y, %Hh%M') }}</h1>
@stop 
@section('content')
<section class="content">
    @can('dec')
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">DEC</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <iframe width="100%" height="800" src="https://app.powerbi.com/view?r=eyJrIjoiYzczYWQ2NzEtNGJjYS00YzAzLWEzNzItODdiODkyNTc0MGRjIiwidCI6ImFlYmNlOTgzLWMyOGQtNDkyNS1hN2JhLTk0NGQ4ZWFkZjkzYyJ9" frameborder="0" allowFullScreen="true"></iframe>
        </div>
        <div class="box-footer"></div>
    </div>
    @endcan
    @can('apmb')
    <div class="box box-info collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">APMB</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">
                <iframe width="100%" height="1000" src="https://app.powerbi.com/view?r=eyJrIjoiZjVjY2EwMzMtMWM4Zi00MWNhLWFmOGQtNzQyMmFiYWIwYWMyIiwidCI6ImFlYmNlOTgzLWMyOGQtNDkyNS1hN2JhLTk0NGQ4ZWFkZjkzYyJ9"
                    frameborder="0" allowFullScreen="true"></iframe>
            </div>
            <div class="box-footer"></div>
        </div>
        @endcan
        @can('caeap')   
    <div class="box  box-warning collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">CAEAp</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <iframe width="100%" height="1000" src="https://app.powerbi.com/view?r=eyJrIjoiNmZlMjkxYjMtOTVhOC00NDg5LTg0OTQtOTUyMjAxMDEyYmY4IiwidCI6ImFlYmNlOTgzLWMyOGQtNDkyNS1hN2JhLTk0NGQ4ZWFkZjkzYyJ9"
                frameborder="0" allowFullScreen="true"></iframe>
        </div>
        <div class="box-footer"></div>
    </div>
    @endcan
    @can('deec')
    <div class="box  box-success collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">DEEC</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <iframe width="100%" height="1000" src="https://app.powerbi.com/view?r=eyJrIjoiZjRhYTIzNWQtOTgyNS00NWNiLWI3OTUtMDVlYjYyMjQyMWI4IiwidCI6ImFlYmNlOTgzLWMyOGQtNDkyNS1hN2JhLTk0NGQ4ZWFkZjkzYyJ9"
                frameborder="0" allowFullScreen="true"></iframe>
        </div>
        <div class="box-footer"></div>
    </div>
    @endcan    
</section>
@stop