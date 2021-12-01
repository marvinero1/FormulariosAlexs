<?php

namespace App\Http\Controllers;

use App\Pdes;
use Session;
use Illuminate\Http\Request;

class PdesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        $anio = $request->get('buscarpor');
        
        $pdes = Pdes::where('anio','like',"%$anio%")->latest()->paginate(10);
        
        return view('pdes.index', compact('pdes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pdes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $data = $request->all();
        $eje = $request->eje;
        $anio = $request->anio;
        $resultado = $request->resultado;
        $accion = $request->accion;

        if ($eje == '1') {
            $ejeL = "Reconstruyendo la economia, retomando la estabilidad macroeconomica y social.";
            $data = [["eje"=>$ejeL,"anio"=> $anio,"resultado"=>$resultado,"accion"=>$accion,"pilar1"=>"Erradicación de la pobreza","pilar2"=>"Universalización de servicios básicos","pilar5"=>"Soberania comunitaria financiera","meta1"=>"Reconstruir la economia reinstaurando el modelo económino social comunitario productivo con estabilidad macroeconómica","meta2"=>"Retoma el rol protagonico del estado a través de la inversión pública y promoviendo la inversión privada y extranjera","meta3"=>"Devolver a la politica social el carácter prioritario para el estado, reduciendo la desigualdad económica, social y de género en el marco de la pluralidad", "meta4"=>"Implementar programas de empleoy diseñar mecanismos que promuevan el empleo formal y reduzcan las brechas de género en el empleo"]];

            Pdes::insert($data);

        } elseif($eje == '2') {
            $ejeL = "Industrializacion con sustitucion de importaciones.";
             $data = [["anio"=> $anio,"eje"=>$ejeL,"resultado"=>$resultado,"accion"=>$accion,"pilar6"=>"Soberania productiva con diversificación","pilar7"=>"Soberania sobre nuestros recursos naturales","meta1"=>"Impulsar nuevas industrias de productos estratégicos orientadas a la sustitución de importaciones que permitan reducir nuestra dependencia de la produccion externa","meta2"=>"Incrementar volúmenes de producción de bienes de consumo importados y de insumos, bienes y servicios sustitutos de importación","meta3"=>"Promover politicas de transformación de materias primas e insumos para generar cadenas productivas de valor que permitan aumentar los valúmenes de producción naciional."]];

             Pdes::insert($data);

        }if($eje == '3'){
            $ejeL = "Seguridad alimentaria con soberania, promocion de exportaciones con valor agregado y desarrollo turistico.";

             $data = [["anio"=> $anio,"eje"=>$ejeL,"resultado"=>$resultado,"accion"=>$accion,"pilar6"=>"Soberania productiva con diversificación",
            "pilar8"=>"Soberania alimentaria","meta1"=>"Fomentar polos de desarrollo productivo de acuerdo a las capacidades y potencialidades de cada región con miras a la industralixación con sustitución de importaciones en base al ordenamiento territorial y uso de  suelos, garantizando la seguridad alimentaria con soberania","meta2"=>"Diversificar e incrementar la productividad agropecuaria para el abastecimiento del mercado interno y la industrialización con sustitución de importaciones, con miras a la exportación con valor agregado","meta3"=>"Impulsar la integración nacional e internacional para fortalecer los centros productivos con sistemas de transporte carretero, aéreo, férreo, fluvial y urbano.","meta4"=>"Promover el desarrollo turistico del país en base a nuestra diversidad natural y cultural, promoviendo los emprendimientos, la iniciativa privada y las alianzas estratégicas."]];

             Pdes::insert($data);

        }if($eje == '4'){
            $ejeL = "Profundizacion del proceso de industrializacion de los recursos naturales.";

             $data = [["anio"=> $anio,"eje"=>$ejeL,"resultado"=>$resultado,"accion"=>$accion,"pilar7"=>"Soberania sobre nuestros recursos naturales","meta1"=>"Impulsar la prospección, exploración y explotación sustentable de los recursos naturales con cuidado del medio ambiente en armonia con la Madre Tierra","meta2"=>"Fortalecer, viversificar y ampliar la industrialización con valor agregado de recursos naturales, maximizando los excedentes aconómicos generados","meta3"=>"Diversificar la matriz energética hacia la consolidación de fuentes de energía renovables y sustentables, generando excedentes para las exportaciones"]];

             Pdes::insert($data);

        }if($eje == '5') {
            $ejeL = "Educacion, investigacion,ciencia y tecnologia para el fortalecimiento y desarrollo de capacidades y potencialidades productivas";

            $data = [["anio"=> $anio,"eje"=>$ejeL,"resultado"=>$resultado,"accion"=>$accion,"pilar3"=>"Salud, educación y deportes","pilar4"=>"Soberania cientifica y tecnologica",
            "pilar6"=>"Soberania productiva con diversificación","meta1"=>"Garantizar el ejercicio del derecho a una educación integral, intercultural y plurilingüe con calidad y sin discriminación de raza, origen, género, creencia y discapacidad, en todo el Sistema Educativo Plurinacional","meta2"=>"Articular y promover la educación especializada, la investigación y la innovación tecnológica, orientada a fortalecer las capacidades y potencialidades productivas, con enfoque de identidad y promoción del consumo de la producción nacional.","meta3"=>"Investigación, ciencia y tecnologia, al servicio de la produccion nacional para optimizar los procesos y productos e incrementar la productividad con miras a la industrialización con Sustitución de importaciones.","meta4"=>"Impulsar la explotación de la inteligencia artificial aplicada desde el gobierno electrónico para la implementación de políticas públicas a través del uso intensivo de las TIC"]];

            Pdes::insert($data);

        }if($eje == '6'){
            $ejeL = "Salus y deportes para proteger la vida con cuidado integral en tiempos de pandemia";

             $data = [["anio"=> $anio,"eje"=>$ejeL,"resultado"=>$resultado,"accion"=>$accion,"pilar3"=>"Salud, educación y deportes","meta1"=>"Prevenir la propagación y el impacto negativo de la COVID-19 con un  enfoque preventivo que amplie la cobertura de la inmunización hacia su universalización","meta2"=>"Fortalecer y universalizar la Política Nacional de Salud Familiar Comunitaria Intercultural (SAFCI) que prioriza la promoción de la salud y la prevención de enfermedades  en los tres niveles de atención, recuperando la medicina tradicional ancestral","meta3"=>"Fortalecer el Sistema Único de Salud Universal y Gratuito a través de servicios de salud públicos, respetando su cosmovisión y prácticas tradicionales sin exclusión ni discriminación en el marco de la Política Nacional de Salud Familiar Comunitaria Intercultural vigente SAFCI","meta4"=>"Promover la especialización de profesionales médicos destinados a cubrir las necesidades de servicios hospitalarios para los centros de salud de segundo, tercer y cuarto nivel a ser construidos y equipados","meta5"=>"Incentivar la práctica deportiva en sus ámbitos preventivo, recreativo, formativo y competitivo de viversas desciplinas, priorizando el acceso al deporte a temprana edad.","meta6"=>"Mejorar la infraestructura y equipamiento de los establecimientos de salud"]];

             Pdes::insert($data);

        }if($eje == '7'){
            $ejeL = "Reforma judicial, gestion publica digitalizada y transparente; seguridad y defensa integral con soberania nacional";

             $data = [["anio"=> $anio,"eje"=>$ejeL,"resultado"=>$resultado,"accion"=>$accion,"pilar11"=>"Soberania y transpariencia en la gestión pública","eje"=>$eje,"pilar12"=>"Disfrute y felicidad","meta1"=>"Impulsar el acceso a la justicia social y reparadora para todas y todos sobre la base de la reforma del Sistema Judicial y de una gestión pública transparente que lucha frontalmente contra la corrupción","meta2"=>"Fortalecer programas de inclusión y equidad social para las pesonas más vulnerables con énfasis en niños, niñas y adolescentes, adultos mayores y personas con discapacidad, considerando la diversidad sociocultural","meta3"=>"Reducir significativamente toda forma de violencia por razones económicas, sociales y culturales, con énfasis en la violencia en razón de genero en sus distintas manifestaciones y la lucha contra la trata y tráfico de personas.","meta4"=>"Garantizar la defensa de la sociedad y la sociedad y la conservación del orden público a través de la Politica Boliviana, luchar contra el tráfico ilicito de sustancias controladas, controlar cultivos excedentarios de coca y prevenir el consumo de drogas","meta5"=>"Garantizar la dependencia, seguridad y estabilidad del Estado y del Gobierno legítimamente constituido con Fuerzas Armadas descolonizadas y despatriarcadas que defiendad la soberanía nacional y la contrucción del desarrollo integral del país."]];

             Pdes::insert($data);

        }if($eje == '8'){
            $ejeL = "Medio ambiente sustentable y equilibrado en armonia con la madre tierra";

             $data = [["anio"=> $anio,"eje"=>$ejeL,"resultado"=>$resultado,"accion"=>$accion,"pilar9"=>"Soberania ambiental con desarrollo integral","meta1"=>"Fortalecer el manejo integral y sustentable de los bosques como un recurso de carácter estratégico, promoviendo la protección de las áreas con vocación forestal","meta2"=>"Impulsar acciones de mitigación, adaptación y monitoreo para el cambio climatico, con medidas de respuesta efectiva a sus impactos en armonía y equilibrio con la madre tierra","meta3"=>"Promover sistemas de vida con un medio ambiente saludable, protegido y equilibrado  en armonia con la Madre Tierra","meta4"=>"Promover el sistema de áreas protegidas, humedales, bofedales, como parte del patrimonio natural del país","meta5"=>"Fortalecer la gestión integrada de los recursos hídricos superficiales y subterraneos para alcanzar la seguridad hídrica"]];

             Pdes::insert($data);

        }if($eje == '9'){
            $ejeL = "Integracion y relaciones internacionales con soberania";

             $data = [["anio"=> $anio,"eje"=>$ejeL,"resultado"=>$resultado,"accion"=>$accion,"pilar10"=>"Soberania ambiental con desarrollo integral","pilar13"=>"Reencuentro soberano con nuestro mar","meta1"=>"Liderar a nivel global la constitución del horizonte civilizatorio del Vivir Bien y del Modelo Económico Social Comunitario Productivo, manteniendo su identidad anticolonialista, anticapitalista y antiimperialista.","meta2"=>"Liderar a nivel mundial la diplomacia por la vida para  el fortalecimiento de los países y pueblos.","meta3"=>"Implementar el decenio internacional de las lenguas indígenas 2022-2032 con el propósito de llamar la atención sobre la grave pérdida de las lenguas indígenas en ámbitos subregionales, regionales o multilaterales.","meta4"=>"Consolidar a Bolivia como país clave en la articulación e integración regiional y subregional, con decisiones favorables de las entidades regionales para su mejor posicionamiento en el ámbito económico, social, limitrofe y geopolítico.","meta5"=>"Avanzar  hacia el retorno al mar y a puertos soberanos en el Pacífico y defender las aguas del Silala y los recursos hídricos compartidos."]];

             Pdes::insert($data);
        }if($eje == '10'){
            $ejeL = "Culturas, descolonizacion y despatriarcalizacion, para la revolucion democratica cultural";

             $data = [["anio"=> $anio,"eje"=>$ejeL,"resultado"=>$resultado,"accion"=>$accion,"pilar1"=>"Erradicación de la pobreza","pilar12"=>"Disfrute y felicidad","meta1"=>"Implementar Politicas de Prevención y Protección contra el Racismo y Toda Forma de Discriminación.",
             "meta2"=>"Promover la industrialización cultural, el arte individual y colectivo de las bolivianas y bolivianos.","meta3"=>"Proteger, restaurar, recuperar, revitalizar, promover y difundir el patrimonio material e inmaterial del Estado Plurinacional de Bolivia.","meta4"=>"Impulsar la decolonización y despatriarcalización hacia la consolidación del Estado Plurinacional y el paradigma del Vivir Bien.","meta5"=>"Implementar acciones de revalorización, protección y promoción de los saberes y conocimientos ancestrales de las Naciones Pueblos Indígenas Originarios Campesinos y Afro bolivianos para la convivencia armónica con la Madre Tierra."]];

             Pdes::insert($data);
        }
        
        Session::flash('message','Pdes creado exisitosamente!');
        return redirect()->route('pdes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pdes  $pdes
     * @return \Illuminate\Http\Response
     */
    public function show(Pdes $pdes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pdes  $pdes
     * @return \Illuminate\Http\Response
     */
    public function edit(Pdes $pdes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pdes  $pdes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $requestData = $request->all();

        $pdes = Pdes::find($id);

        $pdes->accion = $request->get('accion');
        $pdes->resultado = $request->get('resultado');


        $pdes->update();

        Session::flash('message','PEDES Editado a Accion o Resultado Exisitosamente!');
        return redirect()->route('pdes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pdes  $pdes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pdes $pdes)
    {
        //
    }
}
