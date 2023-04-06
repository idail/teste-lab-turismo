<?php
//Questao 1:
//caso de teste 1:
$arr1 = array(3,1,2,2,4);
retorna_ordenacao($arr1);

//caso de teste 2:
$arr2 = array(8, 5, 5, 5, 5, 1, 1, 1, 4, 4);
//retorna_ordenacao($arr2);

//casp de teste 3:
$arr3 = array(1, 2, 3, 7, 1, 8, 2);
//retorna_ordenacao($arr3);


function retorna_ordenacao($valores)
{
    $add = array();
    sort($valores);
    $contagem = array_count_values($valores);
 
    asort($contagem);
    //$result = array_keys($contagem, true);
	$add = array();
    foreach($contagem as $valor => $qtde) {
        $current = $valor;
        if($qtde == 1) {
    	  $add[] = $valor;
        } else {
    	if ($valor === $current) {
		   for($i=0; $i < $qtde; $i++) {
		      $add[] = $valor;
		   }
    	}
    }
 }
 //var_dump($add);
}


//Questao 2
//caso teste 1:
//exibindo os primeiros 4 números da sequência de fibonacci, começando por 0
$fib = fibonacci(4, true);
// foreach($fib as $v){
// 	echo (end($fib) == $v) ? $v : $v.', ';	
// }

//caso teste 2:
//exibindo os primeiros 5 números da sequência de fibonacci, começando por 0
$fib = fibonacci(5, true);
// foreach($fib as $v){
// 	echo (end($fib) == $v) ? $v : $v.', ';	
// }

//caso teste 3:
//exibindo os primeiros 8 números da sequência de fibonacci, começando por 0
$fib = fibonacci(8, true);
// foreach($fib as $v){
// 	echo (end($fib) == $v) ? $v : $v.', ';	
// }

//caso teste 4:
//exibindo os primeiros 1 números da sequência de fibonacci, começando por 0
$fib = fibonacci(1, true);
// foreach($fib as $v){
// 	echo (end($fib) == $v) ? $v : $v.', ';	
// }

//caso teste 5:
//exibindo os primeiros 3 números da sequência de fibonacci, começando por 0
$fib = fibonacci(3, true);
// foreach($fib as $v){
// 	echo (end($fib) == $v) ? $v : $v.', ';	
// }

//caso teste 6:
//exibindo os primeiros 10 números da sequência de fibonacci, começando por 0
$fib = fibonacci(10, true);
// foreach($fib as $v){
// 	echo (end($fib) == $v) ? $v : $v.', ';	
// }




function fibonacci($q, $zero = false){
	if($q >= 2){ 
		$f = ($zero) ? [0,1] : [1,1]; 
		for($i = 2; $i < $q; $i++){
			$f[$i] = $f[$i-1] + $f[$i-2];		
		}
		return $f;
	}
	return ($q == 1) ? [1] : [];
}

//Questao 3:
//Caso de teste 1:
$s = array("a","e","i","a","a","i","o","o","o","a","a","u","u","a","e","i","o","u");
//$resultado = verifica_sequencia_vogais($s);
//echo "Quantidade:".$resultado;
//Caso de teste 2

$s = array("a","e","m","i","a","a","i","o","o","o","a","a");
//$resultado = verifica_sequencia_vogais($s);
//echo "Quantidade:".$resultado;

//Caso de teste 3
$s = array("u","i","o","i","e","e","e","a","o","u","i","i","u","a","e","e","u","u","i","u","u","a","u","u","a","u","a","e","a","e","u","a","u","a"
,"e","a","a","i","u","o","i","o","u","a","e","u","i","u","u","o","o","o","a","e","e","a","i","o","e","i","e","o","e","o","o","a","e","u","o","o");
//$resultado = verifica_sequencia_vogais($s);
//echo "Quantidade:".$resultado;

//Caso de teste 4
$s = array("i","a","a","i","e","e","e","o","a","u","e","u","a","a","a","a","i","e","a","o","o","i","i","u","i","a","u","e","e","o","a","u",
"i","u","e","u","a","e","i","a","o","u","i","u","e","o","o","u","a","e","e","i","o","e","i","e","o","e","e","i","i","i","o","u","i","a","i",
"o","i","a","e","e","a","a","a","e","a","o","u","i","i","o","i","u","e","u","o","i","e","e","o","e","o","i","u","u","u","o","u","i","a","o","e","a",
"a","e","e","e","i","u","e","u","i","u","e","i","a","i","e","u","o","u","e","o","e","o","o","i","u","o","o","o","i","o","o","o","u","u","u","o","i",
"u","o","e","i","u","a","o","u","o","e","a","a","a","i","a","e","u","e","a","i","a","e","o","u","u","a","e","i","o","e","o","a","e","e","u","u","a","e","o",
"u","i","a","u","a","i","a","o","i","o","u","e","e","i","a","u","u","i","e","o","u","o","e","u","o","i","i","o","o","a","u","o","e","a","o","i","e",
"u","i","e","i","a","o","o","a","a","i","e","u","o","a","u","u","e","o","e","u","e","e","a","u","u","a","a","u","e","e","e","e","e","o","o","o","o",
"u","u","e","o","i","a","a","u","o","o","i","o","i","o","a","e","i","i","u","a","i","u","e","e","o","a","e","i","u","i","a","o","u","i","e","i","u","e","u","a","e");
//$resultado = verifica_sequencia_vogais($s);
//echo "Quantidade:".$resultado;

//Caso de teste 5
$s = array(
"i","o","e","u","e","o","o","e","u","i","e","o","a","i","o","e","o","o","o","i","i","o","i","e","u","e","o","a","i","i","e","a","e","a","o","e","i","o","i","i",
"a","u","e","u","e","i","o","u","o","u","e","i","u","e","e","a","a","u","e","e","u","e","a","e","o","a","a","a","o","u","o","e","o","i","e","o","u","a","a","u","o",
"o","e","u","u","o","e","a","u","u","a","a","u","a","e","o","e","e","u","i","u","e","e","e","u","i","i","e","o","o","e","u","a","o","o","e","i","a","e","u","e","a",
"a","a","a","i","o","o","e","a","o","i","i","i","a","a","a","o","o","e","i","i","o","a","i","i","i","e","i","e","a","u","a","o","e","u","i","i","u","e","u","i","o",
"o","u","u","a","o","a","i","o","e","i","a","i","a","a","a","a","o","e","e","a","i","u","i","a","e","o","i","i","u","a","u","i","i","a","e","i","u","u","a","o","a",
"e","a","a","a","a","e","o","e","u","e","i","e","o","a","a","a","o","o","u","e","i","o","a","a","u","i","e","i","e","o","u","o","e","o","u","i","e","a","u","e","u",
"u","a","i","i","u","e","o","o","u","i","o","u","e","u","a","a","a","u","a","o","e","u","e","u","o","o","u","i","e","u","u","o","u","u","o","u","e","o","a","a","e",
"u","u","o","u","u","e","i","e","u","o","u","i","o","o","a","i","u","a","o","e","u","a","e","i","a","u","e","u","u","i","e","e","i","u","a","a","e","u","i","u","u",
"i","u","o","i","a","i","a","e","a","u","u","u","a","e","e","u","u","u","u","o","i","e","o","i","e","u","a","o","i","i","u","o","e","i","a","e","a","e","e","a","u","o",
"u","e","a","i","u","o","o","i","a","o","a","i","u","o","o","u","o","e","e","u","e","e","u","a","o","e","u","e","i","a","i","i","o","i","o","u","u","e","e","a","a","o",
"e","o","e","a","u","o","u","u","i","e","e","o","a","o","i","o","a","u","i","e","e","e","i","e","e","a","a","i","u","i","a","a","e","i","a","e","u","e","u","o","u","u",
"a","o","a","o","i","i","a","o","e","o","a","o","e","u","i","e","e","o","u","i","i","i","i","a","u","a","u","u","e","a","e","o","u","a","e","e","e","a","o","e","a","a",
"a","e","o","u","u","u","e","o","e","o","i","u","e","e","o","e","i","o","u","a","o","e","a","a","e","e","o","a","e","a","i","i","u","o","u","o","a","a","e","i","u","a",
"i","a","e","u","e","u","a","u","a","o","a","u","u","e","u","o","e","u","e","u","e","a","u","u","u","u","e","e","e","e","u","a","o","u","a","a","u","e","a","i","o","u",
"o","e","u","o","o","e","i","o","u","o","i","i","i","u","e","a","u","a","u","a","e","u","a","a","u","u","o","e","u","o","a","e","e","o","u","o","o","u","o","e","e","e",
"o","i","e","o","a","o","u","i","a","a","i","o","i","u","o","e","u","a","a","o","u","u","i","i","o","i","e","o","i","i","a","u","e","u","e","u","i","e","o","u","a","i",
"i","o","e","u","a","e","o","e","i","e","a","o","e","i","u","o","o","u","e","e","o","e","u","u","e","u","e","i","o","a","o","a","a","u","o","o","o","i","i","u","e","u",
"e","o","o","e","u","o","u","a","u","u","a","i","u","i","a","o","i","e","e","e","e","o","o","u","o","e","i","a","a","a","e","i","e","i","o","o","e","o","u","i","o","e",
"u","o","o","e","e","i","a","u","o","u","u","e","i","u","i","e","a","e","a","i","e","e","o","o","a","o","e","i","u","u"
  );
  //$resultado = verifica_sequencia_vogais($s);
  //echo "Quantidade:".$resultado;

function verifica_sequencia_vogais($s) {
    $vowels = 'aeiou';
    $n = count($s);
    $i = 0;
    $j = 0; 
    $count = 0; 
    $max_count = 0; 
	
    while ($i < $n) {
        if ($s[$i] == $vowels[$j]) {
			$count++;
            $j++;
            if ($j == 5) {
                $max_count = max($max_count, $count);
                $j = 0;
                $count = 0;
            }
        } else {
			echo $s[$i];
            $count++;
        }
        $i++;
    }
    return $max_count;
}





//Questao 4
//Caso de teste 1:
$n = 3;
$arr = array_fill(1, 5, 0);


$op1 = array(1, 2, 100);
$op2 = array(2, 5, 100);
$op3 = array(3, 4, 100);

$ops = array($op1, $op2, $op3);

foreach ($ops as $op) {
  
  list($a, $b, $v) = $op;

  
  for ($j = $a; $j <= $b; $j++) {
    $arr[$j] += $v;
  }
}


foreach ($arr as $value) {
  //echo $value . " ";
}

//Caso de teste 2:

$n = 3;
$arr = array_fill(1, 5, 0);


$op1 = array(2, 3, 603);
$op2 = array(1, 1, 286);
$op3 = array(4, 4, 882);

$ops = array($op1, $op2, $op3);

foreach ($ops as $op) {
  
  list($a, $b, $v) = $op;

  
  for ($j = $a; $j <= $b; $j++) {
    $arr[$j] += $v;
  }
}


foreach ($arr as $value) {
  //echo $value . " ";
}

//Caso de teste 3:
$lista = array_fill(1, 40, 0);


$operacoes = array(
    array(29, 40, 787),
    array(9, 26, 219),
    array(21, 31, 214),
    array(8, 22, 719),
    array(15, 23, 102),
    array(11, 24, 83),
    array(14, 22, 321),
    array(5, 22, 300),
    array(11, 30, 832),
    array(5, 25, 29),
    array(16, 24, 577),
    array(3, 10, 905),
    array(15, 22, 335),
    array(29, 35, 254),
    array(9, 20, 20),
    array(33, 34, 351),
    array(30, 38, 564),
    array(11, 31, 969),
    array(3, 32, 11),
    array(29, 35, 267),
    array(4, 24, 531),
    array(1, 38, 892),
    array(12, 18, 825),
    array(25, 32, 99),
    array(3, 39, 107),
    array(12, 37, 131),
    array(3, 26, 640),
    array(8, 39, 483),
    array(8, 11, 194),
    array(12, 37, 502),
);

foreach ($operacoes as $op) {
    for ($i = $op[0]; $i <= $op[1]; $i++) {
        $lista[$i] += $op[2];
    }
}


$soma = array_sum($lista);

//echo $soma;




//Caso de teste 4:

// inicializa a matriz com zeros
$lista = array_fill(1, 40, 0);

// define as operações
$operacoes = array(
    array(19, 28, 419),
    array(4, 23, 680),
    array(5, 6, 907),
    array(19, 33, 582),
    array(5, 9, 880),
    array(10, 13, 438),
    array(21, 39, 294),
    array(13, 18, 678),
    array(12, 26, 528),
    array(15, 30, 261),
    array(8, 9, 48),
    array(21, 23, 131),
    array(20, 21, 7),
    array(13, 40, 65),
    array(13, 23, 901),
    array(15, 15, 914),
    array(14, 35, 704),
    array(20, 39, 522),
    array(10, 18, 379),
    array(16, 27, 8),
    array(25, 40, 536),
    array(5, 9, 190),
    array(17, 20, 809),
    array(8, 20, 453),
    array(22, 37, 298),
    array(19, 37, 112),
    array(2, 5, 186),
    array(21, 29, 184),
    array(23, 30, 625),
    array(2, 8, 960),
);

// percorre as operações e adiciona o valor às posições correspondentes na matriz
foreach ($operacoes as $operacao) {
    list($a, $b, $v) = $operacao;
    for ($i = $a; $i <= $b; $i++) {
        $lista[$i] += $v;
    }
}

// soma todos os elementos da matriz para obter o resultado
$resultado = array_sum($lista);

echo $resultado;

?>