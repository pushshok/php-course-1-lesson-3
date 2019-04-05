<?php

function bez_probela($stroka) {
	$stroka = str_replace(" ", "_", $stroka);
	return $stroka;
}

$stroka = "убираем все пробелы в строке";
echo bez_probela($stroka);

?>