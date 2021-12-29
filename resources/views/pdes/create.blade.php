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
                                            <select class="form-control" name="eje"id="comboA" onchange="getComboA(this)"
                                             required>
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

                            <div class="row" id="pilar_1" style="display:none;">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nombre">Pilar</label>
                                        <select class="form-control" name="pilar" required>
                                            <option value="Erradicación de la pobreza.">Erradicación de la pobreza.</option>
                                            <option value="Universalización de servicios básicos.">Universalización de servicios básicos.</option>
                                            <option value="Soberania comunitaria financiera.">Soberania comunitaria financiera.</option>
                                        </select>
                                    </div><br>

                                    <div class="form-group">
                                        <label for="nombre">Meta</label>
                                        <select class="form-control" name="meta" required>
                                            <option value="Reconstruir la economia reinstaurando el modelo económino social comunitario productivo con estabilidad macroeconómica.">Reconstruir la economia reinstaurando el modelo económino social comunitario productivo con estabilidad macroeconómica.</option>
                                            <option value="Retoma el rol protagonico del estado a través de la inversión pública y promoviendo la inversión privada y extranjera.">Retoma el rol protagonico del estado a través de la inversión pública y promoviendo la inversión privada y extranjera.</option>
                                            <option value="Devolver a la politica social el carácter prioritario para el estado, reduciendo la desigualdad económica, social y de género en el marco de la pluralidad.">Devolver a la politica social el carácter prioritario para el estado, reduciendo la desigualdad económica, social y de género en el marco de la pluralidad.</option>
                                            <option value="Implementar programas de empleoy diseñar mecanismos que promuevan el empleo formal y reduzcan las brechas de género en el empleo.">Implementar programas de empleo y diseñar mecanismos que promuevan el empleo formal y reduzcan las brechas de género en el empleo.</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row" id="pilar_2" style="display:none;">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nombre">Pilar</label>
                                        <select class="form-control" name="pilar" required>
                                            <option value="Soberania productiva con diversificación.">Soberania productiva con diversificación.</option>
                                            <option value="Soberania sobre nuestros recursos naturales.">Soberania sobre nuestros recursos naturales.</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nombre">Meta</label>
                                        <select class="form-control" name="meta" required>
                                            <option value="Reconstruir la economia reinstaurando el modelo económino social comunitario productivo con estabilidad macroeconómica.">Reconstruir la economia reinstaurando el modelo económino social comunitario productivo con estabilidad macroeconómica.</option>
                                            <option value="Retoma el rol protagonico del estado a través de la inversión pública y promoviendo la inversión privada y extranjera.">Retoma el rol protagonico del estado a través de la inversión pública y promoviendo la inversión privada y extranjera.</option>
                                            <option value="Devolver a la politica social el carácter prioritario para el estado, reduciendo la desigualdad económica, social y de género en el marco de la pluralidad.">Devolver a la politica social el carácter prioritario para el estado, reduciendo la desigualdad económica, social y de género en el marco de la pluralidad.</option>
                                            <option value="Implementar programas de empleoy diseñar mecanismos que promuevan el empleo formal y reduzcan las brechas de género en el empleo.">Implementar programas de empleoy diseñar mecanismos que promuevan el empleo formal y reduzcan las brechas de género en el empleo.</option>
                                        </select>
                                    </div>
                                </div>
                            </div>




                            <div class="row" id="pilar_3" style="display:none;">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nombre">Pilar</label>
                                        <select class="form-control" name="pilar" required>
                                            <option value="Soberania productiva con diversificación.">Soberania productiva con diversificación.</option>
                                            <option value="Soberania alimentaria.">Soberania alimentaria.</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                            <label for="nombre">Meta</label>
                                            <select class="form-control" name="meta" required>
                                                <option value="Fomentar polos de desarrollo productivo de acuerdo a las capacidades y potencialidades de cada región con miras a la industralixación con sustitución de importaciones en base al ordenamiento territorial y uso de  suelos, garantizando la seguridad alimentaria con soberania.">Fomentar polos de desarrollo productivo de acuerdo a las capacidades y potencialidades de cada región con miras a la industralixación con sustitución de importaciones en base al ordenamiento territorial y uso de  suelos, garantizando la seguridad alimentaria con soberania.</option>
                                                <option value="Diversificar e incrementar la productividad agropecuaria para el abastecimiento del mercado interno y la industrialización con sustitución de importaciones, con miras a la exportación con valor agregado.">Diversificar e incrementar la productividad agropecuaria para el abastecimiento del mercado interno y la industrialización con sustitución de importaciones, con miras a la exportación con valor agregado.</option>
                                                <option value="Impulsar la integración nacional e internacional para fortalecer los centros productivos con sistemas de transporte carretero, aéreo, férreo, fluvial y urbano.">Impulsar la integración nacional e internacional para fortalecer los centros productivos con sistemas de transporte carretero, aéreo, férreo, fluvial y urbano.</option>
                                                <option value="Promover el desarrollo turistico del país en base a nuestra diversidad natural y cultural, promoviendo los emprendimientos, la iniciativa privada y las alianzas estratégicas.">Promover el desarrollo turistico del país en base a nuestra diversidad natural y cultural, promoviendo los emprendimientos, la iniciativa privada y las alianzas estratégicas.</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="row" id="pilar_4" style="display:none;">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                                <label for="nombre">Pilar</label>
                                                <select class="form-control" name="pilar" required>
                                                    <option value="Soberania sobre nuestros recursos naturales.">Soberania sobre nuestros recursos naturales.</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Meta</label>
                                            <select class="form-control" name="meta" required>
                                                <option value="Impulsar la prospección, exploración y explotación sustentable de los recursos naturales con cuidado del medio ambiente en armonia con la Madre Tierra.">Impulsar la prospección, exploración y explotación sustentable de los recursos naturales con cuidado del medio ambiente en armonia con la Madre Tierra.</option>
                                                <option value="Fortalecer, Diversificar y ampliar la industrialización con valor agregado de recursos naturales, maximizando los excedentes aconómicos generados.">Fortalecer, Diversificar y ampliar la industrialización con valor agregado de recursos naturales, maximizando los excedentes aconómicos generados.</option>
                                                <option value="Diversificar la matriz energética hacia la consolidación de fuentes de energía renovables y sustentables, generando excedentes para las exportaciones.">Diversificar la matriz energética hacia la consolidación de fuentes de energía renovables y sustentables, generando excedentes para las exportaciones.</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="row" id="pilar_5" style="display:none;">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar</label>
                                            <select class="form-control" name="pilar" required>
                                                <option value="Salud, educación y deportes.">Salud, educación y deportes.</option>
                                                <option value="Soberania cientifica y tecnologica.">Soberania cientifica y tecnologica.</option>
                                                <option value="Soberania productiva con diversificación.">Soberania productiva con diversificación.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Meta</label>
                                            <select class="form-control" name="meta" required>
                                                <option value="Garantizar el ejercicio del derecho a una educación integral, intercultural y plurilingüe con calidad y sin discriminación de raza, origen, género, creencia y discapacidad, en todo el Sistema Educativo Plurinacional.">Garantizar el ejercicio del derecho a una educación integral, intercultural y plurilingüe con calidad y sin discriminación de raza, origen, género, creencia y discapacidad, en todo el Sistema Educativo Plurinacional.</option>
                                                <option value="Articular y promover la educación especializada, la investigación y la innovación tecnológica, orientada a fortalecer las capacidades y potencialidades productivas, con enfoque de identidad y promoción del consumo de la producción nacional.">Articular y promover la educación especializada, la investigación y la innovación tecnológica, orientada a fortalecer las capacidades y potencialidades productivas, con enfoque de identidad y promoción del consumo de la producción nacional.</option>
                                                <option value="Investigación, ciencia y tecnologia, al servicio de la produccion nacional para optimizar los procesos y productos e incrementar la productividad con miras a la industrialización con Sustitución de importaciones.">Investigación, ciencia y tecnologia, al servicio de la produccion nacional para optimizar los procesos y productos e incrementar la productividad con miras a la industrialización con Sustitución de importaciones.</option>
                                                <option value="Impulsar la explotación de la inteligencia artificial aplicada desde el gobierno electrónico para la implementación de políticas públicas a través del uso intensivo de las TIC.">Impulsar la explotación de la inteligencia artificial aplicada desde el gobierno electrónico para la implementación de políticas públicas a través del uso intensivo de las TIC.</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" id="pilar_6" style="display:none;">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar</label>
                                            <select class="form-control" name="pilar" required>
                                                <option value="Salud, educación y deportes.">Salud, educación y deportes.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                            <label for="nombre">Meta</label>
                                            <select class="form-control" name="meta" required>
                                                <option value="Prevenir la propagación y el impacto negativo de la COVID-19 con un  enfoque preventivo que amplie la cobertura de la inmunización hacia su universalización.">Prevenir la propagación y el impacto negativo de la COVID-19 con un  enfoque preventivo que amplie la cobertura de la inmunización hacia su universalización.</option>
                                                <option value="Fortalecer y universalizar la Política Nacional de Salud Familiar Comunitaria Intercultural (SAFCI) que prioriza la promoción de la salud y la prevención de enfermedades  en los tres niveles de atención, recuperando la medicina tradicional ancestral.">Fortalecer y universalizar la Política Nacional de Salud Familiar Comunitaria Intercultural (SAFCI) que prioriza la promoción de la salud y la prevención de enfermedades  en los tres niveles de atención, recuperando la medicina tradicional ancestral.</option>
                                                <option value="Fortalecer el Sistema Único de Salud Universal y Gratuito a través de servicios de salud públicos, respetando su cosmovisión y prácticas tradicionales sin exclusión ni discriminación en el marco de la Política Nacional de Salud Familiar Comunitaria Intercultural vigente SAFCI.">Fortalecer el Sistema Único de Salud Universal y Gratuito a través de servicios de salud públicos, respetando su cosmovisión y prácticas tradicionales sin exclusión ni discriminación en el marco de la Política Nacional de Salud Familiar Comunitaria Intercultural vigente SAFCI.</option>
                                                <option value="Promover la especialización de profesionales médicos destinados a cubrir las necesidades de servicios hospitalarios para los centros de salud de segundo, tercer y cuarto nivel a ser construidos y equipados.">Promover la especialización de profesionales médicos destinados a cubrir las necesidades de servicios hospitalarios para los centros de salud de segundo, tercer y cuarto nivel a ser construidos y equipados.</option>
                                                <option value="Incentivar la práctica deportiva en sus ámbitos preventivo, recreativo, formativo y competitivo de viversas desciplinas, priorizando el acceso al deporte a temprana edad.">Incentivar la práctica deportiva en sus ámbitos preventivo, recreativo, formativo y competitivo de viversas desciplinas, priorizando el acceso al deporte a temprana edad.</option>
                                                <option value="Mejorar la infraestructura y equipamiento de los establecimientos de salud.">Mejorar la infraestructura y equipamiento de los establecimientos de salud.</option>
                                            </select>
                                        </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row" id="pilar_7" style="display:none;">
                                    <div class="col-md-12">
                                         <div class="form-group">
                                            <label for="nombre">Pilar</label>
                                            <select class="form-control" name="pilar" required>
                                                <option value="Soberania y transpariencia en la gestión pública.">Soberania y transpariencia en la gestión pública.</option>
                                                <option value="Disfrute y felicidad.">Disfrute y Felicidad.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        
                                         <div class="form-group">
                                            <label for="nombre">Meta</label>
                                            <select class="form-control" name="meta" required>
                                                <option value="Impulsar el acceso a la justicia social y reparadora para todas y todos sobre la base de la reforma del Sistema Judicial y de una gestión pública transparente que lucha frontalmente contra la corrupción.">Impulsar el acceso a la justicia social y reparadora para todas y todos sobre la base de la reforma del Sistema Judicial y de una gestión pública transparente que lucha frontalmente contra la corrupción.</option>
                                                <option value="Fortalecer programas de inclusión y equidad social para las pesonas más vulnerables con énfasis en niños, niñas y adolescentes, adultos mayores y personas con discapacidad, considerando la diversidad sociocultural.">Fortalecer programas de inclusión y equidad social para las pesonas más vulnerables con énfasis en niños, niñas y adolescentes, adultos mayores y personas con discapacidad, considerando la diversidad sociocultural.</option>
                                                <option value="Reducir significativamente toda forma de violencia por razones económicas, sociales y culturales, con énfasis en la violencia en razón de genero en sus distintas manifestaciones y la lucha contra la trata y tráfico de personas.">Reducir significativamente toda forma de violencia por razones económicas, sociales y culturales, con énfasis en la violencia en razón de genero en sus distintas manifestaciones y la lucha contra la trata y tráfico de personas.</option>
                                                <option value="Garantizar la defensa de la sociedad y la sociedad y la conservación del orden público a través de la Politica Boliviana, luchar contra el tráfico ilicito de sustancias controladas, controlar cultivos excedentarios de coca y prevenir el consumo de drogas.">Garantizar la defensa de la sociedad y la sociedad y la conservación del orden público a través de la Politica Boliviana, luchar contra el tráfico ilicito de sustancias controladas, controlar cultivos excedentarios de coca y prevenir el consumo de drogas.</option>
                                                <option value="Garantizar la dependencia, seguridad y estabilidad del Estado y del Gobierno legítimamente constituido con Fuerzas Armadas descolonizadas y despatriarcadas que defiendad la soberanía nacional y la contrucción del desarrollo integral del país.">Garantizar la dependencia, seguridad y estabilidad del Estado y del Gobierno legítimamente constituido con Fuerzas Armadas descolonizadas y despatriarcadas que defiendad la soberanía nacional y la contrucción del desarrollo integral del país.</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                 <div class="row" id="pilar_8" style="display:none;">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar</label>
                                            <select class="form-control" name="pilar" required>
                                                <option value="Soberania ambiental con desarrollo integral.">Soberania ambiental con desarrollo integral.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Meta</label>
                                            <select class="form-control" name="meta" required>
                                                <option value="Fortalecer el manejo integral y sustentable de los bosques como un recurso de carácter estratégico, promoviendo la protección de las áreas con vocación forestal.">Fortalecer el manejo integral y sustentable de los bosques como un recurso de carácter estratégico, promoviendo la protección de las áreas con vocación forestal.</option>
                                                <option value="Impulsar acciones de mitigación, adaptación y monitoreo para el cambio climatico, con medidas de respuesta efectiva a sus impactos en armonía y equilibrio con la madre tierra.">Impulsar acciones de mitigación, adaptación y monitoreo para el cambio climatico, con medidas de respuesta efectiva a sus impactos en armonía y equilibrio con la madre tierra.</option>
                                                <option value="Promover sistemas de vida con un medio ambiente saludable, protegido y equilibrado  en armonia con la Madre Tierra.">Promover sistemas de vida con un medio ambiente saludable, protegido y equilibrado  en armonia con la Madre Tierra.</option>
                                                <option value="Promover el sistema de áreas protegidas, humedales, bofedales, como parte del patrimonio natural del país.">Promover el sistema de áreas protegidas, humedales, bofedales, como parte del patrimonio natural del país.</option>
                                                <option value="Fortalecer la gestión integrada de los recursos hídricos superficiales y subterraneos para alcanzar la seguridad hídrica.">Fortalecer la gestión integrada de los recursos hídricos superficiales y subterraneos para alcanzar la seguridad hídrica.</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" id="pilar_8" style="display:none;">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar</label>
                                            <select class="form-control" name="pilar" required>
                                                <option value="Soberania ambiental con desarrollo integral.">Soberania ambiental con desarrollo integral.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Meta</label>
                                            <select class="form-control" name="meta" required>
                                                <option value="Fortalecer el manejo integral y sustentable de los bosques como un recurso de carácter estratégico, promoviendo la protección de las áreas con vocación forestal.">Fortalecer el manejo integral y sustentable de los bosques como un recurso de carácter estratégico, promoviendo la protección de las áreas con vocación forestal.</option>
                                                <option value="Impulsar acciones de mitigación, adaptación y monitoreo para el cambio climatico, con medidas de respuesta efectiva a sus impactos en armonía y equilibrio con la madre tierra.">Impulsar acciones de mitigación, adaptación y monitoreo para el cambio climatico, con medidas de respuesta efectiva a sus impactos en armonía y equilibrio con la madre tierra.</option>
                                                <option value="Promover sistemas de vida con un medio ambiente saludable, protegido y equilibrado  en armonia con la Madre Tierra.">Promover sistemas de vida con un medio ambiente saludable, protegido y equilibrado  en armonia con la Madre Tierra.</option>
                                                <option value="Promover el sistema de áreas protegidas, humedales, bofedales, como parte del patrimonio natural del país.">Promover el sistema de áreas protegidas, humedales, bofedales, como parte del patrimonio natural del país.</option>
                                                <option value="Fortalecer la gestión integrada de los recursos hídricos superficiales y subterraneos para alcanzar la seguridad hídrica.">Fortalecer la gestión integrada de los recursos hídricos superficiales y subterraneos para alcanzar la seguridad hídrica.</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="row" id="pilar_9" style="display:none;">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                            <label for="nombre">Pilar</label>
                                            <select class="form-control" name="pilar" required>
                                                <option value="Integracion Complementaria.">Integracion Complementaria.</option>
                                                <option value="Reencuentro con nuestro mar.">Reencuentro con nuestro mar.</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Meta</label>
                                            <select class="form-control" name="meta" required>
                                                <option value="Liderar a nivel global la constitución del horizonte civilizatorio del Vivir Bien y del Modelo Económico Social Comunitario Productivo, manteniendo su identidad anticolonialista, anticapitalista y antiimperialista.">Liderar a nivel global la constitución del horizonte civilizatorio del Vivir Bien y del Modelo Económico Social Comunitario Productivo, manteniendo su identidad anticolonialista, anticapitalista y antiimperialista.</option>
                                                <option value="Liderar a nivel mundial la diplomacia por la vida para  el fortalecimiento de los países y pueblos.">Liderar a nivel mundial la diplomacia por la vida para  el fortalecimiento de los países y pueblos.</option>
                                                <option value="Implementar el decenio internacional de las lenguas indígenas 2022-2032 con el propósito de llamar la atención sobre la grave pérdida de las lenguas indígenas en ámbitos.">Implementar el decenio internacional de las lenguas indígenas 2022-2032 con el propósito de llamar la atención sobre la grave pérdida de las lenguas indígenas en ámbitos.</option>
                                                <option value="Consolidar a Bolivia como país clave en la articulación e integración regiional y subregional, con decisiones favorables de las entidades regionales para su mejor posicionamiento en el ámbito económico, social, limitrofe y geopolítico.">Consolidar a Bolivia como país clave en la articulación e integración regiional y subregional, con decisiones favorables de las entidades regionales para su mejor posicionamiento en el ámbito económico, social, limitrofe y geopolítico.</option>
                                                <option value="Avanzar  hacia el retorno al mar y a puertos soberanos en el Pacífico y defender las aguas del Silala y los recursos hídricos compartidos.">Avanzar  hacia el retorno al mar y a puertos soberanos en el Pacífico y defender las aguas del Silala y los recursos hídricos compartidos.</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                  <div class="row" id="pilar_10" style="display:none;">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar</label>
                                            <select class="form-control" name="pilar" required>
                                                <option value="Erradicación de la pobreza.">Erradicación de la pobreza.</option>
                                                <option value="Disfrute y Felicidad.">Disfrute y Felicidad.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Meta</label>
                                            <select class="form-control" name="meta" required>
                                                <option value="Implementar Politicas de Prevención y Protección contra el Racismo y Toda Forma de Discriminación.">Implementar Politicas de Prevención y Protección contra el Racismo y Toda Forma de Discriminación.</option>
                                                <option value="Promover la industrialización cultural, el arte individual y colectivo de las bolivianas y bolivianos.">Promover la industrialización cultural, el arte individual y colectivo de las bolivianas y bolivianos.</option>
                                                <option value="Impulsar la decolonización y despatriarcalización hacia la consolidación del Estado Plurinacional y el paradigma del Vivir Bien.">Impulsar la decolonización y despatriarcalización hacia la consolidación del Estado Plurinacional y el paradigma del Vivir Bien.</option>
                                                <option value="Implementar acciones de revalorización, protección y promoción de los saberes y conocimientos ancestrales de las Naciones Pueblos Indígenas Originarios Campesinos y Afro.">Implementar acciones de revalorización, protección y promoción de los saberes y conocimientos ancestrales de las Naciones Pueblos Indígenas Originarios Campesinos y Afro.</option>
                                            </select>
                                        </div>
                                    </div>
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

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nombre">PET</label>
                                    <input type="text" class="form-control" name="pet" placeholder="PET">
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
<script>
    function getComboA(selectObject) {
        let estado = true;
        var pilar = selectObject.value;  
        console.log(pilar);

        if (pilar == "Reconstruyendo la economia, retornando la estabilidad macroeconomica y social.") {
            console.log("hola");
            let estado_pilar1 = true;
            estado = estado_pilar1;
            document.getElementById('pilar_1').style.display = 'inline'; 
            document.getElementById('pilar_2').style.display = 'none'; 
            document.getElementById('pilar_3').style.display = 'none'; 
            document.getElementById('pilar_4').style.display = 'none';
            document.getElementById('pilar_5').style.display = 'none'; 
            document.getElementById('pilar_6').style.display = 'none'; 
            document.getElementById('pilar_7').style.display = 'none'; 
            document.getElementById('pilar_8').style.display = 'none'; 
            document.getElementById('pilar_9').style.display = 'none'; 
            document.getElementById('pilar_10').style.display = 'none'; 


        } if(pilar == "Industrializacion con sustitución de importaciones.") {
            console.log("nada");
            let estado_pilar2 = true;
            estado = estado_pilar2;
            document.getElementById('pilar_1').style.display = 'none'; 
            document.getElementById('pilar_2').style.display = 'inline';
            document.getElementById('pilar_3').style.display = 'none'; 
            document.getElementById('pilar_4').style.display = 'none';
            document.getElementById('pilar_5').style.display = 'none'; 
            document.getElementById('pilar_6').style.display = 'none'; 
            document.getElementById('pilar_7').style.display = 'none'; 
            document.getElementById('pilar_8').style.display = 'none'; 
            document.getElementById('pilar_9').style.display = 'none'; 
            document.getElementById('pilar_10').style.display = 'none'; 


        }if(pilar == "Seguridad alimentaria con soberania, promocion de exportaciones con valor agregado y desarrollo turistico.") {
            console.log("nada");
            let estado_pilar3 = true;
            estado = estado_pilar3;
            document.getElementById('pilar_1').style.display = 'none'; 
            document.getElementById('pilar_2').style.display = 'none'; 
            document.getElementById('pilar_3').style.display = 'inline'; 
            document.getElementById('pilar_4').style.display = 'none'; 
            document.getElementById('pilar_5').style.display = 'none'; 
            document.getElementById('pilar_6').style.display = 'none'; 
            document.getElementById('pilar_7').style.display = 'none'; 
            document.getElementById('pilar_8').style.display = 'none'; 
            document.getElementById('pilar_9').style.display = 'none'; 
            document.getElementById('pilar_10').style.display = 'none'; 


        }if(pilar == "Profundizacion del proceso de industrializacion de los recursos naturales.") {
            console.log("nada");
            let estado_pilar4 = true;
            estado = estado_pilar4;
            document.getElementById('pilar_1').style.display = 'none'; 
            document.getElementById('pilar_2').style.display = 'none'; 
            document.getElementById('pilar_3').style.display = 'none'; 
            document.getElementById('pilar_4').style.display = 'inline'; 
            document.getElementById('pilar_5').style.display = 'none'; 
            document.getElementById('pilar_6').style.display = 'none'; 
            document.getElementById('pilar_7').style.display = 'none'; 
            document.getElementById('pilar_8').style.display = 'none'; 
            document.getElementById('pilar_9').style.display = 'none'; 
            document.getElementById('pilar_10').style.display = 'none'; 


        }if(pilar == "Salud y deportes para proteger la vida con cuidado integral en tiempos de pandemia.") {
            console.log("nada");
            let estado_pilar6 = true;
            estado = estado_pilar6;
            document.getElementById('pilar_1').style.display = 'none'; 
            document.getElementById('pilar_2').style.display = 'none'; 
            document.getElementById('pilar_3').style.display = 'none'; 
            document.getElementById('pilar_4').style.display = 'none'; 
            document.getElementById('pilar_5').style.display = 'none'; 
            document.getElementById('pilar_6').style.display = 'inline'; 
            document.getElementById('pilar_7').style.display = 'none'; 
            document.getElementById('pilar_8').style.display = 'none'; 
            document.getElementById('pilar_9').style.display = 'none'; 
            document.getElementById('pilar_10').style.display = 'none'; 


        }if(pilar == "Reforma judicial, gestión publica digitalizada y transparente; seguridad y defensa integral con soberania nacional.") {
            console.log("nada");
            let estado_pilar7 = true;
            estado = estado_pilar7;
            document.getElementById('pilar_1').style.display = 'none'; 
            document.getElementById('pilar_2').style.display = 'none'; 
            document.getElementById('pilar_3').style.display = 'none'; 
            document.getElementById('pilar_4').style.display = 'none'; 
            document.getElementById('pilar_5').style.display = 'none'; 
            document.getElementById('pilar_6').style.display = 'none'; 
            document.getElementById('pilar_7').style.display = 'inline'; 
            document.getElementById('pilar_8').style.display = 'none'; 
            document.getElementById('pilar_9').style.display = 'none'; 
            document.getElementById('pilar_10').style.display = 'none'; 


        }if(pilar == "Medio ambiente sustentable y equilibrado en armonía con la madre tierra.") {
            console.log("nada");
            let estado_pilar8 = true;
            estado = estado_pilar8;
            document.getElementById('pilar_1').style.display = 'none'; 
            document.getElementById('pilar_2').style.display = 'none'; 
            document.getElementById('pilar_3').style.display = 'none'; 
            document.getElementById('pilar_4').style.display = 'none'; 
            document.getElementById('pilar_5').style.display = 'none'; 
            document.getElementById('pilar_6').style.display = 'none'; 
            document.getElementById('pilar_7').style.display = 'none'; 
            document.getElementById('pilar_8').style.display = 'inline'; 
            document.getElementById('pilar_9').style.display = 'none'; 
            document.getElementById('pilar_10').style.display = 'none'; 

        }if(pilar == "Integracion y relaciones internacionales con soberania.") {
            console.log("nada");
            let estado_pilar9 = true;
            estado = estado_pilar9;
            document.getElementById('pilar_1').style.display = 'none'; 
            document.getElementById('pilar_2').style.display = 'none'; 
            document.getElementById('pilar_3').style.display = 'none'; 
            document.getElementById('pilar_4').style.display = 'none'; 
            document.getElementById('pilar_5').style.display = 'none'; 
            document.getElementById('pilar_6').style.display = 'none'; 
            document.getElementById('pilar_7').style.display = 'none'; 
            document.getElementById('pilar_8').style.display = 'none'; 
            document.getElementById('pilar_9').style.display = 'inline'; 
            document.getElementById('pilar_10').style.display = 'none'; 

        }if(pilar == "Culturas Descolonizacion y despatriarcalizacion, para la revolucion democratica cultural.") {
            console.log("nada");
            let estado_pilar10 = true;
            estado = estado_pilar10;
            document.getElementById('pilar_1').style.display = 'none'; 
            document.getElementById('pilar_2').style.display = 'none'; 
            document.getElementById('pilar_3').style.display = 'none'; 
            document.getElementById('pilar_4').style.display = 'none'; 
            document.getElementById('pilar_5').style.display = 'none'; 
            document.getElementById('pilar_6').style.display = 'none'; 
            document.getElementById('pilar_7').style.display = 'none'; 
            document.getElementById('pilar_8').style.display = 'none'; 
            document.getElementById('pilar_9').style.display = 'none'; 
            document.getElementById('pilar_10').style.display = 'inline'; 
        }
    }
</script>
@endsection
