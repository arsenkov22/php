<?php
$imgName = $_GET['fileName'];

if ($imgName && file_exists('img/' . $imgName)) {
     echo '<img " src="img/' . $imgName . '">';
} else {
    $wimage = "";
    $fimg = "";
    $path = "img/"; // задаем путь до сканируемой папки с изображениями
    $images = scandir($path); // сканируем папку
    if ($images !== false) { // если нет ошибок при сканировании
        $images = preg_grep("/\.(?:png|gif|jpe?g)$/i", $images); // через регулярку создаем массив только изображений
        if (is_array($images)) { // если изображения найдены
            foreach($images as $image) { // делаем проход по массиву
                $fimg .= "<a href = 'fileName'><img width=200px img target='_blank' src=' "
                . $path . htmlspecialchars(urlencode($image)) . "' alt='" . $image . "' />" . "</a>";
            }
            $wimage .= $fimg;
        } else { // иначе, если нет изображений
            $wimage .= "нет изображений";
        }
    } else { // иначе, если директория пуста или произошла ошибка
        $wimage .= "произошла ошибка";
    }
    echo $wimage; // выводим полученный результат
}
?>

