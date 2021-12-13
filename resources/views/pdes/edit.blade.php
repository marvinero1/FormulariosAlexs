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
                                        @if ($pdes->eje == "Reconstruyendo la economia, retomando la estabilidad macroeconomica y social.")
                                        <div class="form-group">
                                            <label for="nombre">Pilar</label>
                                            <select class="form-control" name="eje" required>
                                                <option value="1">Erradicación de la pobreza.</option>
                                                <option value="2">Universalización de servicios básicos.</option>
                                                <option value="3">Soberania comunitaria financiera.</option>
                                            </select>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Industrializacion con sustitucion de importaciones.")
                                        <div class="form-group">
                                            <label for="nombre">Pilar</label>
                                            <select class="form-control" name="eje" required>
                                                <option value="2">Soberania productiva con diversificación.</option>
                                                <option value="3">Soberania sobre nuestros recursos naturales.</option>
                                            </select>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Seguridad alimentaria con soberania, promocion de exportaciones con valor agregado y desarrollo turistico.")
                                        <div class="form-group">
                                            <label for="nombre">Pilar</label>
                                            <select class="form-control" name="eje" required>
                                                <option value="2">Soberania productiva con diversificación.</option>
                                                <option value="3">Soberania alimentaria.</option>
                                            </select>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Profundizacion del proceso de industrializacion de los recursos naturales.")
                                        <div class="form-group">
                                            <label for="nombre">Pilar</label>
                                            <select class="form-control" name="eje" required>
                                                <option value="2">Soberania sobre nuestros recursos naturales.</option>

                                            </select>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Educación, investigación, ciencia y tecnología para fortalecimiento y desarrollo de capacidades y potencialidades productivas.")
                                        <div class="form-group">
                                            <label for="nombre">Pilar</label>
                                            <select class="form-control" name="eje" required>
                                                <option value="1">Salud, educación y deportes.</option>
                                                <option value="2">Soberania cientifica y tecnologica.</option>
                                                <option value="3">Soberania productiva con diversificación.</option>
                                            </select>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Salud y deportes para proteger la vida con cuidado integral en tiempos de pandemia.")
                                        <div class="form-group">
                                            <label for="nombre">Pilar</label>
                                            <select class="form-control" name="eje" required>
                                                <option value="1">Salud, educación y deportes.</option>
                                            </select>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Reforma judicial, gestion publica digitalizada y transparente; seguridad y defensa integral con soberania nacional.")
                                        <div class="form-group">
                                            <label for="nombre">Pilar</label>
                                            <select class="form-control" name="eje" required>
                                                <option value="1">Soberania y transpariencia en la gestión pública.</option>
                                                <option value="2">Disfrute y felicidad.</option>
                                                <option value="3">Impulsar el acceso a la justicia social y reparadora para todas y todos sobre la base de la reforma del Sistema Judicial y de una gestión pública transparente que lucha frontalmente contra la corrupción","meta2"=>"Fortalecer programas de inclusión y equidad social para las pesonas más vulnerables con énfasis en niños, niñas y adolescentes, adultos mayores y personas con discapacidad, considerando la diversidad sociocultural","meta3"=>"Reducir significativamente toda forma de violencia por razones económicas, sociales y culturales, con énfasis en la violencia en razón de genero en sus distintas manifestaciones y la lucha contra la trata y tráfico de personas.","meta4"=>"Garantizar la defensa de la sociedad y la sociedad y la conservación del orden público a través de la Politica Boliviana, luchar contra el tráfico ilicito de sustancias controladas, controlar cultivos excedentarios de coca y prevenir el consumo de drogas","meta5"=>"Garantizar la dependencia, seguridad y estabilidad del Estado y del Gobierno legítimamente constituido con Fuerzas Armadas descolonizadas y despatriarcadas que defiendad la soberanía nacional y la contrucción del desarrollo integral del país.</option>
                                            </select>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Medio ambiente sustentable y equilibrado en armonia con la madre tierra.")
                                        <div class="form-group">
                                            <label for="nombre">Pilar</label>
                                            <select class="form-control" name="eje" required>
                                                <option value="1">Soberania ambiental con desarrollo integral.</option>

                                            </select>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Integracion y relaciones internacionales con soberania.")
                                        <div class="form-group">
                                            <label for="nombre">Pilar</label>
                                            <select class="form-control" name="eje" required>
                                                <option value="1">Integracion Complementaria.</option>
                                                <option value="1">Reencuentro con nuestro mar.</option>

                                            </select>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Culturas, descolonizacion y despatriarcalizacion, para la revolucion democratica cultural.")
                                        <div class="form-group">
                                            <label for="nombre">Pilar</label>
                                            <select class="form-control" name="eje" required>
                                                <option value="1">Erradicación de la pobreza.</option>
                                                <option value="1">Disfrute y felicidad.</option>
                                            </select>
                                        </div>
                                        @endif
                                    </div>


                                    {{-- METAS --}}
                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Reconstruyendo la economia, retomando la estabilidad macroeconomica y social.")
                                        <div class="form-group">
                                            <label for="nombre">Meta</label>
                                            <select class="form-control" name="eje" required>
                                                <option value="1">Reconstruir la economia reinstaurando el modelo económino social comunitario productivo con estabilidad macroeconómica.</option>
                                                <option value="2">Retoma el rol protagonico del estado a través de la inversión pública y promoviendo la inversión privada y extranjera.</option>
                                                <option value="3">Devolver a la politica social el carácter prioritario para el estado, reduciendo la desigualdad económica, social y de género en el marco de la pluralidad.</option>
                                                <option value="3">Implementar programas de empleoy diseñar mecanismos que promuevan el empleo formal y reduzcan las brechas de género en el empleo.</option>
                                            </select>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Industrializacion con sustitucion de importaciones.")
                                        <div class="form-group">
                                            <label for="nombre">Meta</label>
                                            <select class="form-control" name="eje" required>
                                                <option value="1">Impulsar nuevas industrias de productos estratégicos orientadas a la sustitución de importaciones que permitan reducir nuestra dependencia de la produccion externa.</option>
                                                <option value="2">Incrementar volúmenes de producción de bienes de consumo importados y de insumos, bienes y servicios sustitutos de importación.</option>
                                                <option value="3">Promover politicas de transformación de materias primas e insumos para generar cadenas productivas de valor que permitan aumentar los valúmenes de producción naciional.</option>
                                            </select>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Seguridad alimentaria con soberania, promocion de exportaciones con valor agregado y desarrollo turistico.")
                                        <div class="form-group">
                                            <label for="nombre">Meta</label>
                                            <select class="form-control" name="eje" required>
                                                <option value="2">Fomentar polos de desarrollo productivo de acuerdo a las capacidades y potencialidades de cada región con miras a la industralixación con sustitución de importaciones en base al ordenamiento territorial y uso de  suelos, garantizando la seguridad alimentaria con soberania.</option>
                                                <option value="3">Diversificar e incrementar la productividad agropecuaria para el abastecimiento del mercado interno y la industrialización con sustitución de importaciones, con miras a la exportación con valor agregado.</option>
                                                <option value="3">Impulsar la integración nacional e internacional para fortalecer los centros productivos con sistemas de transporte carretero, aéreo, férreo, fluvial y urbano..</option>
                                                <option value="3">Promover el desarrollo turistico del país en base a nuestra diversidad natural y cultural, promoviendo los emprendimientos, la iniciativa privada y las alianzas estratégicas.</option>
                                            </select>
                                        </div>
                                        @endif
                                    </div>


                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Profundizacion del proceso de industrializacion de los recursos naturales.")
                                        <div class="form-group">
                                            <label for="nombre">Meta</label>
                                            <select class="form-control" name="eje" required>
                                                <option value="2">Impulsar la prospección, exploración y explotación sustentable de los recursos naturales con cuidado del medio ambiente en armonia con la Madre Tierra.</option>
                                                <option value="2">Fortalecer, viversificar y ampliar la industrialización con valor agregado de recursos naturales, maximizando los excedentes aconómicos generados.</option>
                                                <option value="2">Diversificar la matriz energética hacia la consolidación de fuentes de energía renovables y sustentables, generando excedentes para las exportaciones.</option>
                                            </select>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Educación, investigación, ciencia y tecnología para fortalecimiento y desarrollo de capacidades y potencialidades productivas.")
                                        <div class="form-group">
                                            <label for="nombre">Meta</label>
                                            <select class="form-control" name="eje" required>
                                                <option value="1">Garantizar el ejercicio del derecho a una educación integral, intercultural y plurilingüe con calidad y sin discriminación de raza, origen, género, creencia y discapacidad, en todo el Sistema Educativo Plurinacional.</option>
                                                <option value="2">Articular y promover la educación especializada, la investigación y la innovación tecnológica, orientada a fortalecer las capacidades y potencialidades productivas, con enfoque de identidad y promoción del consumo de la producción nacional.</option>
                                                <option value="3">Investigación, ciencia y tecnologia, al servicio de la produccion nacional para optimizar los procesos y productos e incrementar la productividad con miras a la industrialización con Sustitución de importaciones.</option>
                                                <option value="3">Impulsar la explotación de la inteligencia artificial aplicada desde el gobierno electrónico para la implementación de políticas públicas a través del uso intensivo de las TIC.</option>
                                            </select>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Salud y deportes para proteger la vida con cuidado integral en tiempos de pandemia.")
                                        <div class="form-group">
                                            <label for="nombre">Meta</label>
                                            <select class="form-control" name="eje" required>
                                                <option value="1">Prevenir la propagación y el impacto negativo de la COVID-19 con un  enfoque preventivo que amplie la cobertura de la inmunización hacia su universalización.</option>
                                                <option value="1">Fortalecer y universalizar la Política Nacional de Salud Familiar Comunitaria Intercultural (SAFCI) que prioriza la promoción de la salud y la prevención de enfermedades  en los tres niveles de atención, recuperando la medicina tradicional ancestral.</option>
                                                <option value="1">Fortalecer el Sistema Único de Salud Universal y Gratuito a través de servicios de salud públicos, respetando su cosmovisión y prácticas tradicionales sin exclusión ni discriminación en el marco de la Política Nacional de Salud Familiar Comunitaria Intercultural vigente SAFCI.</option>
                                                <option value="1">Promover la especialización de profesionales médicos destinados a cubrir las necesidades de servicios hospitalarios para los centros de salud de segundo, tercer y cuarto nivel a ser construidos y equipados.</option>
                                                <option value="1">Incentivar la práctica deportiva en sus ámbitos preventivo, recreativo, formativo y competitivo de viversas desciplinas, priorizando el acceso al deporte a temprana edad..</option>
                                                <option value="1">Mejorar la infraestructura y equipamiento de los establecimientos de salud.</option>
                                            </select>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Reforma judicial, gestion publica digitalizada y transparente; seguridad y defensa integral con soberania nacional.")
                                        <div class="form-group">
                                            <label for="nombre">Meta</label>
                                            <select class="form-control" name="eje" required>
                                                <option value="1">Impulsar el acceso a la justicia social y reparadora para todas y todos sobre la base de la reforma del Sistema Judicial y de una gestión pública transparente que lucha frontalmente contra la corrupción.</option>
                                                <option value="2">Fortalecer programas de inclusión y equidad social para las pesonas más vulnerables con énfasis en niños, niñas y adolescentes, adultos mayores y personas con discapacidad, considerando la diversidad sociocultural.</option>
                                                <option value="3">Reducir significativamente toda forma de violencia por razones económicas, sociales y culturales, con énfasis en la violencia en razón de genero en sus distintas manifestaciones y la lucha contra la trata y tráfico de personas.</option>
                                                <option value="3">Garantizar la defensa de la sociedad y la sociedad y la conservación del orden público a través de la Politica Boliviana, luchar contra el tráfico ilicito de sustancias controladas, controlar cultivos excedentarios de coca y prevenir el consumo de drogas.</option>
                                                <option value="3">Garantizar la dependencia, seguridad y estabilidad del Estado y del Gobierno legítimamente constituido con Fuerzas Armadas descolonizadas y despatriarcadas que defiendad la soberanía nacional y la contrucción del desarrollo integral del país.</option>
                                            </select>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Medio ambiente sustentable y equilibrado en armonia con la madre tierra.")
                                        <div class="form-group">
                                            <label for="nombre">Meta</label>
                                            <select class="form-control" name="eje" required>
                                                <option value="1">Fortalecer el manejo integral y sustentable de los bosques como un recurso de carácter estratégico, promoviendo la protección de las áreas con vocación forestal.</option>
                                                <option value="1">Impulsar acciones de mitigación, adaptación y monitoreo para el cambio climatico, con medidas de respuesta efectiva a sus impactos en armonía y equilibrio con la madre tierra.</option>
                                                <option value="1">Promover sistemas de vida con un medio ambiente saludable, protegido y equilibrado  en armonia con la Madre Tierra.</option>
                                                <option value="1">Promover el sistema de áreas protegidas, humedales, bofedales, como parte del patrimonio natural del país.</option>
                                                <option value="1">Fortalecer la gestión integrada de los recursos hídricos superficiales y subterraneos para alcanzar la seguridad hídrica.</option>
                                            </select>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Integracion y relaciones internacionales con soberania.")
                                        <div class="form-group">
                                            <label for="nombre">Meta</label>
                                            <select class="form-control" name="eje" required>
                                                <option value="1">Liderar a nivel global la constitución del horizonte civilizatorio del Vivir Bien y del Modelo Económico Social Comunitario Productivo, manteniendo su identidad anticolonialista, anticapitalista y antiimperialista.</option>
                                                <option value="1">Liderar a nivel mundial la diplomacia por la vida para  el fortalecimiento de los países y pueblos.</option>
                                                <option value="1">Implementar el decenio internacional de las lenguas indígenas 2022-2032 con el propósito de llamar la atención sobre la grave pérdida de las lenguas indígenas en ámbitos.</option>
                                                <option value="1">Consolidar a Bolivia como país clave en la articulación e integración regiional y subregional, con decisiones favorables de las entidades regionales para su mejor posicionamiento en el ámbito económico, social, limitrofe y geopolítico.</option>
                                                <option value="1">Avanzar  hacia el retorno al mar y a puertos soberanos en el Pacífico y defender las aguas del Silala y los recursos hídricos compartidos.</option>
                                            </select>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        @if ($pdes->eje == "Culturas, descolonizacion y despatriarcalizacion, para la revolucion democratica cultural.")
                                        <div class="form-group">
                                            <label for="nombre">Meta</label>
                                            <select class="form-control" name="eje" required>
                                                <option value="1">Implementar Politicas de Prevención y Protección contra el Racismo y Toda Forma de Discriminación.</option>
                                                <option value="1">Promover la industrialización cultural, el arte individual y colectivo de las bolivianas y bolivianos.</option>
                                                <option value="1">Impulsar la decolonización y despatriarcalización hacia la consolidación del Estado Plurinacional y el paradigma del Vivir Bien.</option>
                                                <option value="1">Implementar acciones de revalorización, protección y promoción de los saberes y conocimientos ancestrales de las Naciones Pueblos Indígenas Originarios Campesinos y Afro.</option>
                                            </select>
                                        </div>
                                        @endif
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
