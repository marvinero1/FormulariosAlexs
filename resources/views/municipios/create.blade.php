@extends('layouts.main')

@section('content')
<div class="content-wrapper pt-3">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">Registro Municipio</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('municipios.store')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nombre">Elegir Ciudad</label>
                                            <select class="form-control" name="ciudad" required>
                                              <option value="LaPaz">La Paz</option>
                                              <option value="Oruro">Oruro</option>
                                              <option value="Potosi">Potosi</option>
                                              <option value="Cochabamba">Cochabamba</option>
                                              <option value="Sucre">Sucre</option>
                                              <option value="Tarija">Tarija</option>
                                              <option value="SantaCruz">Santa Cruz</option>
                                              <option value="Beni">Beni</option>
                                              <option value="Pando">Pando</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nombre">Nombre Municipio</label>
                                            <input type="text" class="form-control" name="nombre"
                                                placeholder="Nombre Municipio" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a type="button" class="btn btn-secondary float-right" href="{{url('/municipios')}}">Cerrar</a>
                                <button type="submit" class="btn btn-primary float-right mr-2"><i class="fa fas fa-save"></i> Guardar</button>
                            </div>
                        </form>
                    </div>
        </section>
</div>
@endsection