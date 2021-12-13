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
                                                <option value="Reconstruyendo la economia, retornando la estabilidad macroeconomica y social.">Reconstruyendo la economía, retornando la estabilidad macroeconómica y social.</option>
                                                <option value="Industrializacion con sustitución de importaciones.">Industrialización con sustitución de importaciones.</option>
                                                <option value="Seguridad alimentaria con soberania, promocion de exportaciones con valor agregado y desarrollo turistico.">Seguridad alimentaria con soberania, promoción de exportaciones con valor agregado y desarrollo turístico.</option>
                                                <option value="Profundizacion del proceso de industrializacion de los recursos naturales.">Profundización del proceso de industrialización de los recursos naturales.</option>
                                                <option value="Educacion, investigacion, ciencia y tecnologia para fortalecimiento y desarrollo de capacidades y potencialidades productivas.">Educación, investigación, ciencia y tecnología para fortalecimiento y desarrollo de capacidades y potencialidades.</option>
                                                <option value="Salud y deportes para proteger la vida con cuidado integral en tiempos de pandemia.">Salud y deportes para proteger la vida con cuidado integral en tiempos de pandemia.</option>
                                                <option value="Reforma judicial, gestión publica digitalizada y transparente; seguridad y defensa integral con soberania nacional.">Reforma judicial, gestión pública digitalizada y transparente; seguridad y defensa integral con soberania nacional.</option>
                                                <option value="Medio ambiente sustentable y equilibrado en armonía con la madre tierra.">Medio ambiente sustentable y equilibrado en armonía con la madre tierra.</option>
                                                <option value="Integracion y relaciones internacionales con soberania.">Integración y relaciones internacionales con soberania.</option>
                                                <option value="Culturas Descolonizacion y despatriarcalizacion, para la revolucion democratica cultural.">Culturas Descolonización y despatriarcalización, para la revolución democrática cultural.</option>
                                            </select>
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
