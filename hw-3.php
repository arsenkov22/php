<?
/*первое задание
$i = 1;
while ($i < 100) {
	if ($i % 3 == 0) {
		echo $i++ .'<br>';
	}
	 $i++;
   
}
*/


/*второе задание
$i = 0;
do{
	if ($i == 0) {
		echo $i.'-это ноль'.'<br/>';
		$i++;
	}elseif ($i % 2 != 0) {
    	echo $i.'-не четное'.'<br/>';
    	$i++;
    }else{
    	echo $i.'-четное'.'<br/>';
    	$i++;
    }
   
} while ($i < 11)
*/
/*
function replaceSpace($string)
{
    if (!is_string($string)) {
        return "incorrect argument {$string}";
    }

    return preg_replace('/\s/', '_', $string);
}

echo replaceSpace('В этой строке пробелы должны заменятся чертой');
*/

/*задание 3
$arrayCountry = array (
	'Московская область' => array ('Москва', 'Зеленоград', 'Клин'),
	 'Ленинградская область' => array ('Санкт-Петербург', 'Всеволожск', 'Павловск',' Кронштадт'), 
	 'Волгоградская область' => array ('Волгоград', 'Волжский', 'Камышин',' Урюпинск','Иловля')
	);
foreach ($arrayCountry as $obl => $arrayCity)
{
	echo("<br/>" . $obl . ":" . "<br/>");
	
	foreach ($arrayCity as $city)
	{
		echo($city . " , ");
		
	}
   
}
*/



/* задание 4
function translit($str){
	$alphabet = [
		'а' => 'a', 
		'б' => 'b', 
		'в' => 'v', 
		'г' => 'g', 
		'д' => 'd', 
		'е' => 'e', 
		'ё' => 'yo',
		'ж' => 'zh', 
		'з' => 'z', 
		'и' => 'i', 
		'й' => 'y', 
		'к' => 'k', 
		'л' => 'l', 
		'м' => 'm',
		'н' => 'n', 
		'о' => 'o', 
		'п' => 'p', 
		'р' => 'r', 
		'с' => 's', 
		'т' => 't', 
		'у' => 'u',
		'ф' => 'f', 
		'х' => 'h', 
		'ц' => 'ts', 
		'ч' => 'ch', 
		'ш' => 'sh', 
		'щ' => 'sh', 
		'ъ' => '',
		'ы' => 'i', 
		'ь' => '', 
		'э' => 'e', 
		'ю' => 'yu', 
		'я' => 'ya', 
    ];
	$word = strtr($str, $alphabet);
	echo "$word";
    //var_dump($alphabet);
    //var_dump($word);
};
translit("расскажи о себе?");
*/

/*задание 5
function replace($str){
$replaceOne = [' ' => '_'];
$replaceTwo = strtr($str, $replaceOne);

echo "$replaceTwo";

}
replace('надо сделать так чтоб исчезли пробелы   паша привет');
*/
/*задание 5 вариант 2
    $text = "надо сделать так чтоб исчезли пробелы   паша привет";
    $text2 = str_replace(' ', '_', $text);
echo "$text2" ;
*/

//echo "<ul>";
//echo "</ul>";
//echo "<li>";
//echo "</li>";
/*задание 6
$menu = array (
	'Рыбалка' => array ('крючки', 'катушки', 'удилища'),
	'Спорт' => array ('футбол ', 'скейт', 'бильярд'), 
	'Работа' => array ('ремонт', 'такси', 'программирование')
	);
echo "<ul>";
foreach ($menu as $mainMenu => $arrayItems)
{
	echo "<li>";
	echo($mainMenu);
	echo "</li>";
	echo "<ul>";
	foreach ($arrayItems as $subMenuItems)
	{
		echo "<li>";
        echo($subMenuItems);
		echo "</li>";
	}
	echo "</ul>";
}
echo "</ul>";
*/
//задание 7
//for ($i = 0; $i < 10; print $i++) {}


/*задание 8
$arrayCountry = array (
	'Московская область' => array ('Москва', 'Зеленоград', 'Клин'),
	 'Ленинградская область' => array ('Санкт-Петербург', 'Всеволожск', 'Киров', 'Павловск'), 
	 'Волгоградская область' => array ('Волгоград', 'Волжский', 'Камышин','Урюпинск','Иловля')
	);
foreach ($arrayCountry as $obl => $arrayCity)
{
	foreach ($arrayCity as $city)
	{
		$farstLetter = mb_substr($city, 0, 1);
		if ($farstLetter == "К") {
            echo "$city<br/>";
		}
	}
}
*/

?>