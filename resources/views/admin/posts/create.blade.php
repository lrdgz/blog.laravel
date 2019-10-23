@extends('admin.layout')

@section('header')
    <h1>
        Crear Un nuevo Post
        <small>Posts</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="{{ route('admin.posts.index') }}"><i class="fa fa-list"></i> Posts</a></li>
        <li class="active">Crear</li>
    </ol>
@endsection

@section('content')

        <div class="row">
            <form action="{{ route('admin.posts.store') }}" method="POST">
                @csrf
                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Titulo de la publicacion</label>
                                <input type="text" name="title" placeholder="Ingresa el titulo de la publicaion" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Contenido de la publicacion</label>
                                <textarea name="body" class="form-control" id="editor" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Fecha de la publicion</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="published_at" class="form-control pull-right" id="datepicker">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Categorias</label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="">Selecciona una categoria</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tags</label>
                                <select class="form-control select2" multiple="multiple" name="tags[]" data-placeholder="Seleccione una o mas etiquetas" style="width: 100%;">
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Extracto de la publicacion</label>
                                <textarea name="excerpt" class="form-control" cols="30" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Guardar Publicacion</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
@endsection

@push('styles')
    <!-- daterange picker -->
    <link rel="stylesheet" href="/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="/adminlte/bower_components/select2/dist/css/select2.min.css">
@endpush



@push('scripts')
    <!-- Select2 -->
    <script src="/adminlte/bower_components/select2/dist/js/select2.full.min.js"></script>
    <!-- bootstrap datepicker -->
    <script src="/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- CK Editor -->
    <script src="/adminlte/bower_components/ckeditor/ckeditor.js"></script>

    <script>
        $(function () {
            //Date picker
            $('#datepicker').datepicker({
                autoclose: true
            });

            $('.select2').select2();

            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor');
        })
    </script>
@endpush


