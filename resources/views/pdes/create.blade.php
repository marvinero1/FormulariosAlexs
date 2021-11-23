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
                        <form action="{{route('pdes.store')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nombre">Elegir Año</label>
                                            <select class="form-control" name="anio" required>
                                             <?php 
                                               for($i = 1950 ; $i <= date('Y'); $i++){
                                                  echo "<option value='$i'>$i</option>";
                                               }
                                            ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nombre">Pilar</label>
                                            <input type="text" class="form-control" name="pilar"
                                                placeholder="Pilar" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nombre">Meta</label>
                                            <input type="text" class="form-control" name="meta"
                                                placeholder="Meta" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nombre">Accion</label>
                                            <input type="text" class="form-control" name="accion"
                                                placeholder="Accion" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a type="button" class="btn btn-secondary float-right" href="{{url('/pdes')}}">Cerrar</a>
                                <button type="submit" class="btn btn-primary float-right mr-2"><i class="fa fas fa-save"></i> Guardar</button>
                            </div>
                        </form>
                    </div>
        </section>
</div>
@endsection