<?php

if(!function_exists("ChangeSpanishdateToEnglish")){


  function ChangeSpanishdateToEnglish($spanish_date){

    
  $months =  array(
    'enero' => 'january',
    'febrero' => 'february',
    'marzo' => 'march',
    'abril' => 'april',
    'mayo' => 'may',
    'junio' => 'jun',
    'julio' => 'july',
    'agosto' => 'august',
    'septiembre' => 'september',
    'octubre' => 'october',
    'noviembre' => 'november',
    'diciembre' => 'december');


    $months_small =  array(
      'ene' => 'jan',
      'feb' => 'feb',
      'mar' => 'mar',
      'abr' => 'apr',
      'may' => 'may',
      'jun' => 'jun',
      'jul' => 'jul',
      'ago' => 'aug',
      'sep' => 'sep',
      'oct' => 'oct',
      'nov' => 'nov',
      'dic' => 'dec');



    $fecha = $spanish_date;

    $arr_fecha = explode("-", strtolower($fecha));
    if(strlen($arr_fecha[1]) > 3){
      $mont_eng = $months[$arr_fecha[1]];
    }else{
      $mont_eng = $months_small[$arr_fecha[1]];
    }
    

    $fecha =  $arr_fecha[2] . "-" . $mont_eng . "-" . $arr_fecha[0];
    $fecha_date = strtotime($fecha);
    return date("Y-m-d",$fecha_date);

  }
}

?>
