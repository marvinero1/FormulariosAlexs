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
                            <h3 class="card-title">Registro Agregar Accion, Resultado</h3>
                        </div>
                        <form action="{{route('pdes.update', $pdes->id )}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Año</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdes->anio }}">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Eje</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdes->eje }}">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Reconstruyendo la economia, retornando la estabilidad macroeconomica y social.")
                                       
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Industrializacion con sustitución de importaciones.")
                                       
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Seguridad alimentaria con soberania, promocion de exportaciones con valor agregado y desarrollo turistico.")
                                        
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Profundizacion del proceso de industrializacion de los recursos naturales.")
                                       
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Educacion, investigacion, ciencia y tecnologia para fortalecimiento y desarrollo de capacidades y potencialidades productivas.")
                                        
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Salud y deportes para proteger la vida con cuidado integral en tiempos de pandemia.")
                                       
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Reforma judicial, gestión publica digitalizada y transparente; seguridad y defensa integral con soberania nacional.")
                                       
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Medio ambiente sustentable y equilibrado en armonía con la madre tierra.")
                                      
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Integracion y relaciones internacionales con soberania.")
                                        
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Culturas Descolonizacion y despatriarcalizacion, para la revolucion democratica cultural.")
                                        
                                        @endif
                                    </div>














                                    {{-- METAS --}}
                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Reconstruyendo la economia, retornando la estabilidad macroeconomica y social.")
                               
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Industrializacion con sustitución de importaciones.")
                                       
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Seguridad alimentaria con soberania, promocion de exportaciones con valor agregado y desarrollo turistico.")
                                       
                                        @endif
                                    </div>


                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Profundizacion del proceso de industrializacion de los recursos naturales.")
                                
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Educacion, investigacion, ciencia y tecnologia para fortalecimiento y desarrollo de capacidades y potencialidades productivas.")
                                        <div class="form-group">
                                            <label for="nombre">Meta</label>
                                            <select class="form-control" name="meta" required>
                                                <option value="Garantizar el ejercicio del derecho a una educación integral, intercultural y plurilingüe con calidad y sin discriminación de raza, origen, género, creencia y discapacidad, en todo el Sistema Educativo Plurinacional.">Garantizar el ejercicio del derecho a una educación integral, intercultural y plurilingüe con calidad y sin discriminación de raza, origen, género, creencia y discapacidad, en todo el Sistema Educativo Plurinacional.</option>
                                                <option value="Articular y promover la educación especializada, la investigación y la innovación tecnológica, orientada a fortalecer las capacidades y potencialidades productivas, con enfoque de identidad y promoción del consumo de la producción nacional.">Articular y promover la educación especializada, la investigación y la innovación tecnológica, orientada a fortalecer las capacidades y potencialidades productivas, con enfoque de identidad y promoción del consumo de la producción nacional.</option>
                                                <option value="Investigación, ciencia y tecnologia, al servicio de la produccion nacional para optimizar los procesos y productos e incrementar la productividad con miras a la industrialización con Sustitución de importaciones.">Investigación, ciencia y tecnologia, al servicio de la produccion nacional para optimizar los procesos y productos e incrementar la productividad con miras a la industrialización con Sustitución de importaciones.</option>
                                                <option value="Impulsar la explotación de la inteligencia artificial aplicada desde el gobierno electrónico para la implementación de políticas públicas a través del uso intensivo de las TIC.">Impulsar la explotación de la inteligencia artificial aplicada desde el gobierno electrónico para la implementación de políticas públicas a través del uso intensivo de las TIC.</option>
                                            </select>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Salud y deportes para proteger la vida con cuidado integral en tiempos de pandemia.")
                                       
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Reforma judicial, gestión publica digitalizada y transparente; seguridad y defensa integral con soberania nacional.")
                                       
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Medio ambiente sustentable y equilibrado en armonía con la madre tierra.")
                                        
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Integracion y relaciones internacionales con soberania.")
                                        
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Culturas Descolonizacion y despatriarcalizacion, para la revolucion democratica cultural.")
                                       
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Resultado</label>
                                            <input type="text" class="form-control" name="resultado" placeholder="Resultado">
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
