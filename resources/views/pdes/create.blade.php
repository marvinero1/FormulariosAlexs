@extends('layouts.main')

@section('content')
<div class="content-wrapper pt-3">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">Registro Municipio</h3>
                        </div>
                        <form action="{{route('pdes.store')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Elegir Año</label>
                                            <select class="form-control" name="anio" required>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option> 
                                                <option value="2025">2025</option>    
                                           <!--   <?php 
                                               for($i = 2021 ; $i <= date('Y'); $i++){
                                                  echo "<option value='$i'>$i</option>";
                                               }
                                            ?> -->
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Eje</label>
                                            <select class="form-control" name="eje" required>
                                                <option value="1">Reconstruyendo la economía, retornando la estabilidad macroeconómica y social.</option>
                                                <option value="2">Industrialización con sustitución de importaciones.</option>
                                                <option value="3">Seguridad alimentaria con soberania, promoción de exportaciones con valor agregado y desarrollo turístico.</option>
                                                <option value="4">Profundización del proceso de industrialización de los recursos naturales.</option> 
                                                <option value="5">Educación, investigación, ciencia y tecnología para fortalecimiento y desarrollo de capacidades y potencialidades. </option> 
                                                <option value="6">Salud y deportes para proteger la vida con cuidado integral en tiempos de pandemia.</option>    
                                                <option value="7">Reforma judicial, gestión pública digitalizada y transparente; seguridad y defensa integral con soberania nacional.</option>    
                                                <option value="8">Medio ambiente sustentable y equilibrado en armonía con la madre tierra.</option>    
                                                <option value="9">Integración y relaciones internacionales con soberania.</option>    
                                                <option value="10">Culturas Descolonización y despatriarcalización, para la revolución democrática cultural.</option>    

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Resultado</label>
                                            <input type="text" class="form-control" name="resultado"placeholder="Resultado">
                                        </div>
                                    </div>

                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Acción</label>
                                            <input type="text" class="form-control" name="accion" placeholder="Acción">
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