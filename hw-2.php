<?php
/*
$int = 1;
$float = 1.22;
$strt ="string";
$bool = FALSE ;
define('con', '123');

echo "$int";
echo '<br>';
echo "$float";
echo '<br>';
echo "string";
echo '<br>';
var_dump($bool);
echo '<br>';
echo con;
*/
/*
echo "«Славная осень! Здоровый, ядреный<br>
Воздух усталые силы бодрит;<br>
Лед неокрепший на речке студеной<br>
Словно как тающий сахар лежит.»<br>
<u>Н. А. Некрасов</u>";
*/
/*
$a = "Славная осень! Здоровый, ядреный<br>";
$b = "Воздух усталые силы бодрит;<br>";
$c = "Лед неокрепший на речке студеной<br>";
$d = "Словно как тающий сахар лежит.<br>" ;
$g = "<u>Н. А. Некрасов</u>";
$h = $a.$b.$c.$d.$g;
echo ($h);
*/
/*
$i = 2;
$j = "2";
$b = i + j;
echo ($b);
*/
/*
$x = 10;
$y = 15;
echo $x . " / " . $y .'<br>';
$x = $x + $y;
$y = $x - $y;
$x = $x - $y;
echo $x . " / " . $y .'<br>';
*/
/*
function maxN($a,$b){
	return $a > $b ? $a : $b ;
}
echo maxN(1 ,  2);              *конец первого задания
*/


/*
$a = 2;
$b = 6;
if( $a > 0 && $b > 0 ) {
 $c = $a - $b ;
}

echo abs($c);
*/

/*
$a = -2;
$b = -6;
if ($a < 0 && $b < 0) {
$c = $a * $b ;
}
 echo ($c);
 */

 /*
$a = 2;
$b = -6; 
if ($a < 0 && $b > 0 || $a > 0 && $b < 0) {
$c = $a + $b;
}
echo ($c);
*/

/*
$i = 12;
switch ($i) {
    case 0:
        echo "0<br>";
    
    case 1:
        echo "1<br>";
        
    case 2:
        echo "2<br>";
        
    case 3:
        echo "3<br>";
        
    case 4:
        echo "4<br>";
        
    case 5:
        echo "5<br>";
        
    case 6:
        echo "6<br>";
        
    case 7:
        echo "7<br>";
        
    case 8:
        echo "8<br>";
        
    case 9:
        echo "9<br>";
        
    case 10:
        echo "10<br>";
        
    case 11:
        echo "11<br>";
        
    case 12:
        echo "12<br>";
        
    case 13:
        echo "13<br>";
        
    case 14:
        echo "14<br>";
        
    case 15:
        echo "15<br>";
       
}
*/
 
 /*
$a = 2;
echo $a, " = a<br>";
$b = 5;
echo $b, " = b<br>";
function summa($a, $b)
{
return $a + $b;
}
echo summa($a, $b), "  сумма двух парметров<br>" ;   

function minus($a, $b)
{
return $a - $b;
}
echo minus($a, $b), "  разность двух парметров<br>"  ;   
 
function umnojenie($a, $b)
{
return $a * $b;
}
echo umnojenie($a, $b), "  произведение двух парметров<br>"  ;  
 
function dilenie($a, $b)
{
return $a / $b;
}
echo dilenie($a, $b), "  частное двух парметров<br>"  ;   
*/

/*
echo "a = ", $a = 10, "<br>";
echo "b = ", $b = 5, "<br>";
echo "Выбранная операция ", $operation = "*", "<br>";
		function mathOperation($a, $b, $operation) {
			switch ($operation){
 
				case "+":
				return $a + $b;
				break;
 
				case "-":
				return $a - $b;
				break;
 
				case "*":
				return $a * $b;
				break;
 
				case "/":
				return $a / $b;
				break;
				}
 
					}
echo $a, $operation, $b, " = ", mathOperation($a, $b, $operation) ;
*/

/*
echo date(' Y ');
*/

/*
function power($val, $pow){
	if ($pow == 1) {
	 	return  $val ;
	}
	return $val * power($val , $pow - 1);
}
echo power(2,1);
echo "<br>";
echo power(2,2);		
echo "<br>";
echo power(2,3);
echo "<br>";
echo power(2,4);
echo "<br>";
echo power(2,5);
echo "<br>";
echo power(2,16);
*/




$hour = date('H');
echo $hour;
if ($hour >= 10 && $hour <=19) {
    echo "часов";
} else {
	$lastNumHour = mb_substr($hour, -1);
	switch ($lastNumHour) {
		case '1':
			echo "час";
			break;
		case '2':
		case '3':
		case '4':
			echo "часа";
	 		break;
	 	case '0':
		case '5':
		case '6':
		case '7':
		case '8':
		case '9':
			echo "часов";
	 		break;
	}
}
$min = date('i');
echo $min;
if ($min >= 10 && $min <=19) {
    echo "минут";
} else {
	$lastNumMin = mb_substr($min, -1);
	switch ($lastNumMin) {
		case '1':
			echo "минута";
			break;
		case '2':
		case '3':
		case '4':
			echo "минуты";
	 		break;
	 	case '0':
		case '5':
		case '6':
		case '7':
		case '8':
		case '9':
			echo "минут";
	 		break;
	}
}
?>