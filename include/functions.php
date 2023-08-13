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
	
	$tmpContType["es_es"]["sell"] = "En venta";
	$tmpContType["es_es"]["rent"] = "Para alquilar";
	$tmpContType["es_es"]["lease"] = "Para arrendar";
	$tmpContType["es_es"]["auction"] = "Subasta";
	$tmpContType["es_es"]["foreclosure"] = "Ejecución hipotecaria";
	
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
