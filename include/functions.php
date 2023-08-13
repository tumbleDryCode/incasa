<?php
// create a php function with switch case to handle a variable that will be passed to it
function getPropTypeStr($tmpDBstr) {
	$tmpContType = array();
	$tmpContType["en_us"]["sell"] = "For Sale";
	$tmpContType["en_us"]["rent"] = "For Rent";
	$tmpContType["en_us"]["lease"] = "For Lease";
	$tmpContType["en_us"]["auction"] = "Auction";
	$tmpContType["en_us"]["foreclosure"] = "Foreclosure";
	
	$tmpContType["pt_pt"]["sell"] = "Para venda";
	$tmpContType["pt_pt"]["rent"] = "Para alugar";
	$tmpContType["pt_pt"]["lease"] = "Para arrendar";
	$tmpContType["pt_pt"]["auction"] = "Leilão";
	$tmpContType["pt_pt"]["foreclosure"] = "Execução";
	
	$tmpContType["spa_spa"]["sell"] = "En venta";
	$tmpContType["spa_spa"]["rent"] = "Para alquilar";
	$tmpContType["spa_spa"]["lease"] = "Para arrendar";
	$tmpContType["spa_spa"]["auction"] = "Subasta";
	$tmpContType["spa_spa"]["foreclosure"] = "Ejecución hipotecaria";
	
	// check for usrlang cookie and set to default if not set
	if(isset($_COOKIE["usrlang"])) {
		$tmpLang = $_COOKIE["usrlang"];
	} else {
		$tmpLang = "en_us";
	}
	
		switch($tmpDBstr) {
			case "sell":
				return $tmpContType[$tmpLang]["sell"];
				break;
			case "rent":
				return $tmpContType[$tmpLang]["rent"];
				break;
			case "lease":
				return $tmpContType[$tmpLang]["lease"];
				break;
			case "auction":
				return $tmpContType[$tmpLang]["auction"];
				break;
			case "foreclosure":
				return $tmpContType[$tmpLang]["foreclosure"];
				break;
			default:
				return "Unknown";
				break;
		}
	}
?>
