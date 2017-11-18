<?php
//$estudiantesRep=Estudiantes::all();
$estudiantesRep=Personas::query()->where('gestion','!=','')->get();
$psicologosRep=Personas::query()->where('gestion','=','')->get();


$pruebaOV=Pruebas::query()->where('id_estudiante','=',$id)->get();
$pruebaAp=PruebasAptitud::query()->where('id_estudiante','=',$id)->get();
$est=Personas::query()->where('ci','=',$id)->get();
$a=$est[0]["nombres"].' '.$est[0]["apellidos"];
$b=$est[0]["genero"];
$pregOV=($pruebaOV->count());
$pregAp=($pruebaAp->count());

$fuzzyShow=Fuzzy::query()->where('id_estudiante','=', $id)->get();
$resInteres=Resultados::query()->where('id_estudiante','=', $id)->where('test','=','INTERESES')->get();
$resAptitudes=Resultados::query()->where('id_estudiante','=', $id)->where('test','=','APTITUDES')->get();
if(($resAptitudes[0]['porcentaje']*100/30)>=0 && ($resAptitudes[0]['porcentaje']*100/30)<=25) {
    $txtAptitud="falta de práctica; en este rubro se encuentran todas las actividades de ";
    $ttAptitud="que no ha experimentado, y por lo tanto desconoce si tiene la habilidad.";
}
elseif (($resAptitudes[0]['porcentaje']*100/30)>25 && ($resAptitudes[0]['porcentaje']*100/30)<=50){
    $txtAptitud="aptitud común; es decir que las capacidades de ";
    $ttAptitud="según su apreciación, no tiene desarrollada esa habilidad, por lo tanto es necesario practicar más para dominarla.";
}
elseif (($resAptitudes[0]['porcentaje']*100/30)>50 && ($resAptitudes[0]['porcentaje']*100/30)<=75){
    $txtAptitud="aptitud normal lo cual significa que las habilidades de "; 
    $ttAptitud="lo tiene desarrollada esa pero no lo suficiente para dominarla.";
}
elseif (($resAptitudes[0]['porcentaje']*100/30)>75 && ($resAptitudes[0]['porcentaje']*100/30)<=100){
    $txtAptitud="aptitud desarrollada, indicando su habilidad para ";
    $ttAptitud=" las cuales domina, según su apreciación.";
}

if($resAptitudes[0]['tipo']=="EP")
{
    $areaAptitud="EJECUTIVO PERSUASIVO";
    $textAptitud="Capacidad por organizar, planear, dirigir, supervisar y dar ordenes a otros; iniciativa, confianza en sí mismo, ambición de progreso, habilidad para dominar en situaciones sociales y en relaciones de persona a persona; habilidad para convencer y disuadir.";
    $adAptitud="organizar, planear, dirigir, supervisar y dar ordenes a otras personas. Persona con iniciativa, autoconfianza y gran nivel de persuasión";
}
elseif($resAptitudes[0]['tipo']=="MC")
{
    $areaAptitud="MECÁNICO CONSTRUCTIVO";
    $textAptitud="Habilidad para analizar formas en dos y tres dimensiones. Capacidad de percibir los elementos y partes que componen volumenes y estructuras. Comprension y habilidad en la manipulacion de los objetivos. Inclinacion por armar, ensamblar, empalmar, unir y combinar piezas para producir movimiento.";
    $adAptitud="analizar formas en dos y tres dimensiones, percibir elementos y partes que componen volúmenes y estructuras físicas de edificios";
}
elseif($resAptitudes[0]['tipo']=="VE")
{
    $areaAptitud="VISO-ESPACIAL";
    $textAptitud="habilidad de pensar y percibir imágenes externas e internas, recrearlas, transformarlas o modificarlas, decodificar información gráfica. También se encuentra relacionada con la sensibilidad que tiene el individuo frente a aspectos como color, líneas, forma, figúra, espacio y la relación que existe entre ellos.";
    $adAptitud="pensar y percibir imágenes externas e internas, recrearlas, transformarlas o modificarlas, decodificar informacion grafica";
}
elseif($resAptitudes[0]['tipo']=="DM")
{
    $areaAptitud="DESTREZA MANUAL";
    $textAptitud="Capacidad para realizar trabajos con las manos. Pericia con los dedos, habilidad para movimientos coordinados, delicados y precisos. Aptitud para realizar labores manuales, dibujar, tocar un instrumento. Pericia en el manejo de herramientas.";
    $adAptitud="realizar trabajos con las manos como dibujar, tocar un instrumento entre otros ";
}
elseif($resAptitudes[0]['tipo']=="V")
{
    $areaAptitud="VENTAS";
    $textAptitud="Capacidad de escucha, comunicación eficaz, interés por brindar empatía y confianza a los demás. Ser paciente e insistente en situaciones dificiles, mostrar independencia.";
    $adAptitud="escuchar, tener una comunicación eficaz, paciente e insistente en situaciones dificiles y mostrar independencia ";
}
elseif($resAptitudes[0]['tipo']=="CB")
{
    $areaAptitud="CIENCIAS BIOLÓGICAS";
    $textAptitud="Aptitud para detectar problemas biológicos en zoología, ecología etcetera plantearlos correctamente, y abordarlos en funcion del metodo cientifico. Analizar e interpretar resultados experimentales. Perfeccionar y desarrollar conceptos, teorias y metodos.";
    $adAptitud="detectar problemas biológicos en zoologia, ecologia y Analizar e interpretar resultados experimentales ";
}
elseif($resAptitudes[0]['tipo']=="CT")
{
    $areaAptitud="CIENTÍFICO";
    $textAptitud="Aptitud para captar, analizar y comprender; curiosidad innata, interes por conocer hechos, causas y los factores que intervienen. Actitud de observacion, pensamiento profundo y analitico, espíritu de investigador, experimentador, verificador. Gusto por usar aparatos y por trabajar en laboratorios.";
    $adAptitud="captar, analizar y comprender; curiosidad innata, interes por conocer hechos, gusto por usar aparatos y por trabajar en laboratorios";
}
elseif($resAptitudes[0]['tipo']=="CA")
{
    $areaAptitud="CIENCIAS AGRONÓMICAS";
    $textAptitud="Capacidad de mejorar la calidad de los procesos de la producción y la transformacion de productos agricolas y alimentarios. Fundamentada en principios cientificos y tecnológicos, estudia los factores fisicos, quimicos, biologicos, economicos y sociales que influyen o afectan al proceso productivo.";
    $adAptitud="mejorar la calidad de los procesos de la producción y la transformación de productos agricolas y alimentarios";
}
elseif($resAptitudes[0]['tipo']=="A")
{
    $areaAptitud="ADMINISTRATIVO";
    $textAptitud="Capacidad para administrar y distribuir; ordenar por jerarquia, por el lugar que les corresponde y por prioridad. Habilidad para crear sistemas, estructurar y armar programas. Pensamiento sistematico, claro y ordenado.";
    $adAptitud="administrar y distribuir; ordenar por jerarquia, por el lugar que les corresponde y por prioridad";
}
elseif($resAptitudes[0]['tipo']=="P")
{
    $areaAptitud="PRÁCTICA";
    $textAptitud="Aptitud para realizar tareas concretas orientadas principalmente hacia un fin utilitario o practico. Reconocimiento de la serie de operaciones a seguir para conseguir un resultado objetivo y concreto.";
    $adAptitud="realizar tareas concretas orientadas principalmente hacia un fin utilitario o practico";
}

if(($resInteres[0]['porcentaje']*100/30)>=0 && ($resInteres[0]['porcentaje']*100/30)<=25) {
    $txtInteres="falta de motivación; es decir, que no estás interesado en las actividades de "; 
    $ttInteres="Esto se asocia regularmente con actividades ya mencionadas las cuales no te motivan lo suficiente para llevarlas a cabo.";
}
elseif (($resInteres[0]['porcentaje']*100/30)>25 && ($resInteres[0]['porcentaje']*100/30)<=50){
    $txtInteres="interés común; el cual son todas las actividades de "; 
    $ttInteres="en las que probablemente aún no identificas el grado de preferencia, porque nunca las has experimentado, o si lo hiciste, no tuvieron la fuerza suficiente para llamar la atención; sin embargo, están presentes ni te gustan ni te disgustan.";
}
elseif (($resInteres[0]['porcentaje']*100/30)>50 && ($resInteres[0]['porcentaje']*100/30)<=75){
    $txtInteres="interés subprofesional; el cual incluye las actividades de ";
    $ttInteres="son las que te llaman la atención, que te gustan y pueden ser diversas; aquí podrían estar tus pasatiempos y todas las actividades que desearías realizar, probablemente como una profesión.";
}
elseif (($resInteres[0]['porcentaje']*100/30)>75 && ($resInteres[0]['porcentaje']*100/30)<=100){
    $txtInteres="interés profesional por las actividades de "; 
    $ttInteres="son de tu preferencia y podrías considerarlas como inclinación hacia determinadas carreras.";
}

if($resInteres[0]['tipo']=="ITI")
{
    $areaInteres="TECNOLOGÍA DE INFORMACIÓN";
    $textInteres="Interes en el desempeno como profesional de tecnologias de la informacion en el cual se involucran el diseno, construccion y uso de los artefactos y sistemas digitales.";
    $adInteres="diseno, construccion y uso de los artefactos y sistemas digitales";
}
elseif($resInteres[0]['tipo']=="IMP")
{
    $areaInteres="MECÁNICA Y PROCESOS";
    $textInteres="Motivacion por la utilizacion de calculo, la fisica, la mecanica. Las actividades que mejor lo caracterizan son la manipulacion de instrumentos, manejo de maquinas; y el diseño, armado y desarmado de piezas.";
    $adInteres="utilizacion de calculo, la fisica, la mecanica. Las actividades que mejor lo caracterizan son la manipulacion de instrumentos, manejo de maquinas; y el diseño, armado y desarmado de piezas";
}
elseif($resInteres[0]['tipo']=="IDC")
{
    $areaInteres="DISEÑO Y CONSTRUCCIÓN";
    $textInteres="Interes por el diseno y construccion de espacios habitables por el hombre, haciendo de ellos lugares seguros, agradables, adaptados a las necesidades de un grupo o cultura. Esta area incluye tambien el diseno y construccion de artículos necesarios en la vida cotidiana, tales como puentes, carreteras.";
    $adInteres="diseno y construccion de espacios habitables por el hombre, haciendo de ellos lugares seguros, agradables, adaptados a las necesidades de un grupo o cultura";
}
elseif($resInteres[0]['tipo']=="ICQI")
{
    $areaInteres="CIENCIAS QUÍMICAS E INDUSTRIA";
    $textInteres="Interes en el desarrollo experimental, trabajando en laboratorio, industria, en la invencion de materias primas mas resistentes, biodegradables, reciclables, etc.";
    $adInteres="desarrollo experimental, trabajando en laboratorio, industria, en la invencion de materias primas mas resistentes, biodegradables, reciclables";
}
elseif($resInteres[0]['tipo']=="ICOM")
{
    $areaInteres="COMERCIAL";
    $textInteres="Interes por el mercado, las transacciones comerciales y las ventas. Realiza el contacto con clientes y proveedores para conocer sus necesidades y tomarlas como base para realizar las transacciones dentro del mercado, las politicas y las leyes para el intercambio comercial entre paises, conociendo aspectos sobre la psicologia del consumidor.";
    $adInteres="contacto con clientes y proveedores conociendo sus necesidades y tomandolas como base dentro del mercado.";
}
elseif($resInteres[0]['tipo']=="IMA")
{
    $areaInteres="MEDIO AMBIENTAL";
    $textInteres="Interes ambiental el cual aplica a algun recurso natural o a un espacio territorial, pero se pueden establecer algunas situaciones a partir de las cuales se obtendría un resultado en el tema: el enfoque, los sujetos relacionados y las estrategias para aplicar acciones.";
    $adInteres="diseno, construccion y uso de los artefactos y sistemas digitales";
}
elseif($resInteres[0]['tipo']=="ICP")
{
    $areaInteres="CIENTÍFICO PRACTICO";
    $textInteres="Interes en el deseo de comprender y analizar los origenes y formas de los procesos y fenomenos biologicos, quimicos y fisicos. El enfasis esta puesto en el conocimiento y comprension teorico, mas que en la aplicacion practica de los principios.";
    $adInteres="comprender y analizar los origenes y formas de los procesos y fenomenos biologicos, quimicos y fisicos";
}
elseif($resInteres[0]['tipo']=="ICA")
{
    $areaInteres="CIENCIAS AGRONÓMICAS";
    $textInteres="Interes sobre la sensacion y el olor de la buena tierra escurriendose entre sus dedos; capaz de pasarse horas y horas en medio de un potrero, de una cementera, de un bosque, sin mas compania que las plantas arboles, animales, el cielo y trabajar al aire libre.";
    $adInteres="diseno, construccion y uso de los artefactos y sistemas digitales";
}
elseif($resInteres[0]['tipo']=="IAR")
{
    $areaInteres="ADMINISTRACIÓN DE RECURSOS";
    $textInteres="Interes en comprender criticamente el sistema economico y desarrollar actividades que le permitan crear, desarrollar y administrar empresas.";
    $adInteres="comprender criticamente el sistema economico y desarrollar actividades que le permitan crear, desarrollar y administrar empresas";
}
elseif($resInteres[0]['tipo']=="ICT")
{
    $areaInteres="CIENCIA Y TECNOLOGÍA";
    $textInteres="Motivacion sobre los efectos culturales, eticos y politicos del conocimiento cientifico y la innovacion tecnologica. Colocan el enfasis en la interpretacion sobre las utilidades, apropiaciones e impactos en la vida cotidiana de las personas, con el objetivo de romper las antiguas barreras de investigacion cientifico-tecnica.";
    $adInteres="diseno, construccion y uso de los artefactos y sistemas digitales";
}

?>