@extends('adminlte::page') 
@section('title', 'Cursos Publicados')
 @php use Carbon\Carbon; 
 setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8','pt_BR.utf-8', 'portuguese'); 
date_default_timezone_set('America/Sao_Paulo'); 
@endphp 

@section('content_header')
<section class="content-header">
    <h1>Anexos</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('course_release.index')}}">Cursos Publicados</a></li>
        <li class="active">Anexos</li>
    </ol>
</section>
@stop 
@section('content')
    @include('flash::message')
<section class="content">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    @can('course_release_attachment-create')
                    <span class="btn btn-primary fileinput-button pull-right">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Selecionar arquivo</span>
                    <input id="fileupload" type="file" name="documento" data-token="{!! csrf_token() !!}" data-course-release-id="{{ $course_release->id }}" data-user-id="{{ Auth::user()->id }}">
                    </span>
                    @endcan
                    <br>
                    <br>
                    <!-- The global progress bar -->
                    <div id="progress" class="progress">
                        <div class="progress-bar progress-bar-primary"></div>
                    </div>
                    <table class="table table-hover table-striped table-responsive table-bordered">				
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>                                                             
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($course_release_attachments as $course_release_attachment)
                            <tr>
                                <td>{{ $course_release_attachment->id }}</td>
                                <td>{{ $course_release_attachment->name }}</td>                                                             
                                <td class="text-right">
                                    @can('course_release_attachment-show')               
                                    <a href="{{ route('course_release_attachment.show',  ['id' => $course_release_attachment->id])}}"  title="Download" class="btn"><i class="fa fa-download"  aria-hidden="true"></i></a>                      
                                    @endcan
                                    @can('course_release_attachment-delete')
                                    {!! Form::open(['method' => 'DELETE','route' => ['course_release_attachment.destroy', $course_release_attachment->id], 'style'=>'display:inline;color:red', 'name' => 'form_del', 'id' => 'form_del']) !!}
                                    <a href="#" onclick="document.getElementById('form_del').submit();"  title="Excluir"><i class="fa fa-trash" style='color:red;' aria-hidden="true"></i></a>
                                    {!! Form::close() !!}                 
                                    @endcan                                                     
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>                
                <div class="box-footer">
                    <a href="{{route('course_release.index')}}" class="btn btn-warning">Voltar</a>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
 
@section('scripts') @parent
<!-- File Upload Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.21.0/js/vendor/jquery.ui.widget.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.21.0/js/jquery.fileupload.js"></script>
<script>
    ;(function($)
        {
          'use strict';
          $(document).ready(function()
          {
              var $fileupload     = $('#fileupload'),
                  $upload_success = $('#upload-success');
            $fileupload.fileupload({
                url: '/upload_file',
                formData: {_token: $fileupload.data('token'),
                            courseReleaseId: $fileupload.data('courseReleaseId'),
                            userId: $fileupload.data('userId'),
                          },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                },
                done: function (e, data) {
                    $upload_success.removeClass('hide').hide().slideDown('fast');
                    setTimeout(function(){
                        location.reload();
                    }, 2000);
                }
            });
          });
        })(window.jQuery);

</script>






@stop