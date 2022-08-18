<?php



//felhasznalok beolvassa fajlbol
function beolvasas($adatok) {
	$fiokok = [];

	$file = fopen($adatok, "r");
	if($file === FALSE){
		die("Nem sikerült a megnyitás");
	}

	while(($sor = fgets($file)) !== FALSE) {
		$fiok = unserialize($sor);
		$fiokok[] = $fiok;
	}

	fclose($file);
	return $fiokok;
}

//felhasznalok kiirasa fajlba

function kiiras($adatok, $fiokok) {
	$file = fopen($adatok, "w");
	if($file === FALSE){
		die("Nem sikerült a megnyitás");
	}

	foreach($fiokok as $fiok) {
		$serialized_fiok = serialize($fiok);
		fwrite($file, $serialized_fiok . "\n");
	}

	fclose($file);
}
function kommentMentes($hova, $adat){
	$file = fopen($hova, "a");
	if($file === FALSE){
		die("Nem sikerült a megnyitás");
	}
	$serialized_adat = serialize($adat);
	fwrite($file, $serialized_adat . "\n");
	fclose($file);
}
function szinek(){
	$alapszin = "";
	$szegelyszin = "";
	$darabok = explode("/", $_SERVER["PHP_SELF"]);
	$oldalnev = end($darabok);
	switch($oldalnev){
		case "chatszoba.php":
		case "index.php":
			$alapszin = "#fccdc1";
			$szegelyszin = "red";
			break;
		case "KS.php":
			$alapszin = "#eee1ff";
			$szegelyszin = "#9800ac";
			break;
		case "NS.php":
			$alapszin = "#ffaf53";
			$szegelyszin = "orangered";
			break;
		case "PN.php":
			$alapszin = "#e3fcff";
			$szegelyszin = "aqua";
			break;
		case "DP.php":
			$alapszin = "#c4adff";
			$szegelyszin = "indigo";
			break;
				 
   
	}
	return [$alapszin, $szegelyszin];
	}
	function oldalNev(){
		$darabok = explode("/", $_SERVER["PHP_SELF"]);
		$oldalnev = end($darabok);
		return $oldalnev;
	}

?>