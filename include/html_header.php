<!-- Required meta tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="initial-scale=1, user-scalable=no, maximum-scale=1">

<!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 Meta Tags -->
<link rel="shortcut icon" href="images/favicon.ico">

<link href="js/bootstrap5.2/bootstrap-multiselect.css" rel="stylesheet">  

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!-- Try without these

<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
-->


<link rel="stylesheet" type="text/css" href="css/x_dev.css">
<link rel="stylesheet" type="text/css" href="css/x_forms.css">
<link rel="stylesheet" type="text/css" href="css/x_nav.css">
<link rel="stylesheet" type="text/css" href="css/x_cc.css">
<link href="js/bootstrap5.2/bootstrap.min.css" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<link href="fonts/bootstrap/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" type="text/css" href="css/x_bs-fixes.css">
<!--	Title
	=========================================================-->
	<script src="js/bootstrap5.2/bootstrap.js"  language="javascript" type="text/javascript"></script>
<script src="js/app/x_allinit.js"></script> 
<script src="js/app/x_last.js"></script> 
<script src="js/app/x_all.js"></script> 
<script src="js/app/x_booter.js"></script>
<script src="js/app/x_admin.js"></script>
<script>
// JSSHOP.loadScript("js/app/aa-" + usrlang + ".js", donada,"js");
</script>
<?php
// check for cookie userlan
if(isset($_COOKIE['usrlang'])) {
	$usrlang = $_COOKIE['usrlang'];
} else {
	$usrlang = "pt_pt";
}
echo "<scr" . "ipt src=\"js/app/aa-" .  $usrlang . ".js\"></script>";
?>

<title>IN-CASA.eu</title>