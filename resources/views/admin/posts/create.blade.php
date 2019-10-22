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
            <form action="">
                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Titulo de la publicacion</label>
                                <input type="text" name="title" placeholder="Ingresa el titulo de la publicaion" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Extracto de la publicacion</label>
                                <textarea name="excerpt" class="form-control" cols="30" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Contenido de la publicacion</label>
                                <textarea name="body" class="form-control" cols="30" rows="10"></textarea>
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
                        </div>
                    </div>
                </div>
            </form>
        </div>
@endsection

@push('styles')
    <!-- daterange picker -->
    <link rel="stylesheet" href="/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css">
@endpush



@push('scripts')
    <!-- bootstrap datepicker -->
    <script src="/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>


    <script>
        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })
    </script>
@endpush


