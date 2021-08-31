<?php 

function inverteData($data)
{
    $C = $data;
    $data = substr($C, 0, 4) . '-' . substr($C, 4, 2) . '-' . substr($C, 6, 2);
    
    if (count(explode("/", $data)) > 1) {
        return implode("-", array_reverse(explode("/", $data)));
    } elseif (count(explode("-", $data)) > 1) {
        return implode("/", array_reverse(explode("-", $data)));
    }
}

function data_ini_html5($dt)
{
    if ($dt == "0000-00-00") return '';
    $yr = strval(substr($dt, 0, 4));
    $mo = strval(substr($dt, 5, 2));
    $da = strval(substr($dt, 8, 2));

    $resul1 = "$yr" . "$mo" . "$da";
    return $resul1;
}


function senha($senha, $senha_check)
{
  if ($senha_check == -6) {
    $senha = $senha . '@$%#tesetsgydyç';
    $cod = md5($senha); // pega o valor passado pelo form e criptografa
    $senha = $cod . 'j2h3b4';
  }
  return $senha;
}


function gx($Z, $X, $W, $K)
{ //// codigo recursivo que precisa da entrada "tokyo" para retornar o valor certo e assim validar a funcao senha

  $X = $K - $X;
  $X = $X + $Z;

  if ($W >= 0) {
    return $X;
  }
  $Z = $W - 1;
  $W = $Z - 1;


  gx($K, $X, $W, $Z);
}

function somaHora($hora1, $hora2)
{

    $h1 = explode(":", $hora1);
    $h2 = explode(":", $hora2);

    ///$segundo = $h1[2] + $h2[2];
    $minuto  = $h1[1] + $h2[1];
    $horas   = $h1[0] + $h2[0];
    $dia       = 0;

    //  if ($segundo > 59) {

    //     $segundodif = $segundo - 60;
    //   $segundo = $segundodif;
    //$minuto = $minuto + 1;
    // }

    if ($minuto > 59) {

        $minutodif = $minuto - 60;
        $minuto = $minutodif;
        $horas = $horas + 1;
    }

    /* 
 	if($horas > 24){
 		
 		$num = 0;
 		
 	 	(int)$num = $horas / 24;
 	  	$horaAtual = (int)$num * 24;
		$horasDif = $horas - $horaAtual;
 		
 		$horas = $horasDif;				
 		
 		for($i = 1; $i <= (int)$num; $i++){ 		 			
 			$dia +=  1 ;
 		}	 	 		
	}*/

    if (strlen($horas) == 1) {
        $horas = "0" . $horas;
    }
    if (strlen($minuto) == 1) {
        $minuto = "0" . $minuto;
    }
    //   if (strlen($segundo) == 1) {
    ///   $segundo = "0" . $segundo;
    //    }

    //	return  $dia.":".$horas.":".$minuto.":".$segundo;

    return  $horas . ":" . $minuto;
}


/////// CONEVERTE HORA FORMADA EM MINUTOS
function horas_em_mintutos($hora)
{

    if ($hora == '') {
        $hora = '00:00';
    }

    $h1 = explode(":", $hora);


    $minuto  = $h1[1];
    $horas   = $h1[0];


    if ($horas > 0) {

        if (substr($horas, 0, 1) == 0) {
            $horas =  substr($horas, 1, 1);
        }

        $horas = $horas * 60;

        $minuto = $minuto + $horas;
    }




    return $minuto;
}

?>