<?php

function transliteraciya($stroka) {
	
	$translit = ["А" => "A", "Б" => "B", "В" => "V", "Г" => "G", "Д" => "D", "Е" => "Ye", "Ё" => "Yo", "Ж" => "Zh", "З" => "Z", "И" => "I", "Й" => "Y", "К" => "K", "Л" => "L", "М" => "M", "Н" => "N", "О" => "O", "П" => "P", "Р" => "R", "С" => "S", "Т" => "T", "У" => "U", "Ф" => "F", "Х" => "Kh", "Ц" => "C", "Ч" => "Ch", "Ш" => "Sh", "Щ" => "Sch", "Ъ" => "", "Ы" => "Y", "Ь" => "", "Э" => "E", "Ю" => "Yu", "Я" => "Ya", "а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "ye", "ё" => "yo", "ж" => "zh", "з" => "z", "и" => "i", "й" => "y", "к" => "k", "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r", "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "kh", "ц" => "c", "ч" => "ch", "ш" => "sh", "щ" => "sch", "ъ" => "", "ы" => "y", "ь" => "", "э" => "e", "ю" => "yu", "я" => "ya"];
	
	foreach ($translit as $bukva => $latin) {
		$stroka = str_replace($bukva, $latin, $stroka);
	}
	
	return $stroka;
}

$stroka = "Переводим слова из русского в английскую транслитерацию. Ура!";

echo transliteraciya($stroka);

?>