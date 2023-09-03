<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}						
/*
title
pcontent
type
bhk
stype
bedroom
bathroom
balcony
kitchen
hall
floor
size
price
location
city
state
feature
pimage
pimage1
pimage2
pimage3
pimage4
uid
status
mapimage
topmapimage
groundmapimage
totalfloor
date
*/
$ruid = "";
$rstatus = "";
$rtype = "";
$rstype = "";
$rtitle = "";
$rpcontent = "";


$rbhk = "0";

$rbedroom = "1";
$rbathroom = "1";
$rbalcony = "0";
$rkitchen = "1";
$rhall = "1";
$rfloor = "1";
$rsize = "";
$rprice = "0";
$rlocation = "";
$rcity = "";
$rstate = "";
$rfeature = "";
$rpimage = "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==";
$rpimage1 = "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==";
$rpimage2 = "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==";
$rpimage3 = "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==";
$rpimage4 = "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==";



$rmapimage = "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==";
$rtopmapimage = "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==";
$rgroundmapimage = "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==";
$rtotalfloor = "1";
$rdate = "";


		$pid=$_REQUEST['id'];
		$query=mysqli_query($con,"select * from property where pid='$pid'");
		while($row=mysqli_fetch_array($query))
		{
			$rtitle = $row["title"];
			$rpcontent = $row["pcontent"];
			$rtype = $row["type"];
			$rbhk = $row["bhk"];
			$rstype = $row["stype"];
			$rbedroom = $row["bedroom"];
			$rbathroom = $row["bathroom"];
			$rbalcony = $row["balcony"];
			$rkitchen = $row["kitchen"];
			$rhall = $row["hall"];
			$rfloor = $row["floor"];
			$rsize = $row["size"];
			$rprice = $row["price"];
			$rlocation = $row["location"];
			$rcity = $row["city"];
			$rstate = $row["state"];
			$rfeature = $row["feature"];
			$rpimage = "admin/property/" . $row["pimage"];
			$rpimage1 = "admin/property/" . $row["pimage1"];
			$rpimage2 = "admin/property/" . $row["pimage2"];
			$rpimage3 = "admin/property/" . $row["pimage3"];
			$rpimage4 = "admin/property/" . $row["pimage4"];
			$ruid = $row["uid"];
			$rstatus = $row["status"];
			$rmapimage = "admin/property/" . $row["mapimage"];
			$rtopmapimage = "admin/property/" . $row["topmapimage"];
			$rgroundmapimage = "admin/property/" . $row["groundmapimage"];
			$rtotalfloor = $row["totalfloor"];
			$rdate = $row["date"];		 
			} 
							 

$msg="";
if(isset($_POST['add']))
{
	$pid=$_REQUEST['id'];
	
	$title=$_POST['title'];
	$content=$_POST['content'];
	$ptype=$_POST['ptype'];
	$bhk=$_POST['bhk'];
	$bed=$_POST['bed'];
	$balc=$_POST['balc'];
	$hall=$_POST['hall'];
	$stype=$_POST['stype'];
	$bath=$_POST['bath'];
	$kitc=$_POST['kitc'];
	$floor=$_POST['floor'];
	$price=$_POST['price'];
	$city=$_POST['city'];
	$asize=$_POST['asize'];
	$loc=$_POST['loc'];
	$state=$_POST['state'];
	$status=$_POST['status'];
	
	$uid=$_SESSION['uid'];
	$feature=$_POST['feature'];
	
	$totalfloor=$_POST['totalfl'];
	if(isset($_FILES['aimage']['name'])) {
		$aimage = $_FILES['aimage']['name'];
		$temp_name = $_FILES['aimage']['tmp_name'];
		move_uploaded_file($temp_name,"admin/property/$aimage");
	} else {
		$aimage=$rpimage;
	}
	if(isset($_FILES['aimage1']['name'])) {
		$aimage1 = $_FILES['aimage1']['name'];
		$temp_name1 = $_FILES['aimage1']['tmp_name'];
		move_uploaded_file($temp_name1,"admin/property/$aimage1");
	} else {
		$aimage1=$rpimage1;
	}
	if(isset($_FILES['aimage2']['name'])) {
		$aimage2 = $_FILES['aimage2']['name'];
		$temp_name2 = $_FILES['aimage2']['tmp_name'];
		move_uploaded_file($temp_name2,"admin/property/$aimage2");
	} else {
		$aimage2=$rpimage2;
	}
	if(isset($_FILES['aimage3']['name'])) {
		$aimage3 = $_FILES['aimage3']['name'];
		$temp_name3 = $_FILES['aimage3']['tmp_name'];
		move_uploaded_file($temp_name3,"admin/property/$aimage3");
	} else {
		$aimage3=$rpimage3;
	}
	if(isset($_FILES['aimage4']['name'])) {
		$aimage4 = $_FILES['aimage4']['name'];
		$temp_name4 = $_FILES['aimage4']['tmp_name'];
		move_uploaded_file($temp_name4,"admin/property/$aimage4");
	} else {
		$aimage4=$rpimage4;
	}


	if(isset($_FILES['fimage']['name'])) {
		$fimage = $_FILES['fimage']['name'];
		$rmapimage = $_FILES['fimage']['name'];
		$temp_name5 = $_FILES['fimage']['tmp_name'];
		move_uploaded_file($temp_name5,"admin/property/$fimage");
	} else {
		$fimage=$rmapimage;
	}
	if(isset($_FILES['fimage1']['name'])) {
		$fimage1 = $_FILES['fimage1']['name'];
		$rtopmapimage = $_FILES['fimage1']['name'];
		$temp_name6 = $_FILES['fimage1']['tmp_name'];
		move_uploaded_file($temp_name6,"admin/property/$fimage1");
	} else {
		$fimage1=$rtopmapimage;
	}
	if(isset($_FILES['fimage2']['name'])) {
		$fimage2 = $_FILES['fimage2']['name'];
		$rgroundmapimage = $_FILES['fimage2']['name'];
		$temp_name7 = $_FILES['fimage2']['tmp_name'];
		move_uploaded_file($temp_name7,"admin/property/$fimage2");
	} else {
		$fimage2=$rgroundmapimage;
	}

	 	 
	$sql = "UPDATE property SET title= '{$title}', pcontent= '{$content}', type='{$ptype}', bhk='{$bhk}', stype='{$stype}',
	bedroom='{$bed}', bathroom='{$bath}', balcony='{$balc}', kitchen='{$kitc}', hall='{$hall}', floor='{$floor}', 
	size='{$asize}', price='{$price}', location='{$loc}', city='{$city}', state='{$state}', feature='{$feature}',
	pimage2='{$aimage2}', pimage3='{$aimage3}', pimage4='{$aimage4}',
	uid='{$uid}', status='{$status}', mapimage='{$fimage}', topmapimage='{$fimage1}', groundmapimage='{$fimage2}', 
	totalfloor='{$totalfloor}' WHERE pid = {$pid}";
	 
	/*
	$sql = "UPDATE property SET title= '{$title}', pcontent= '{$content}', type='{$ptype}', bhk='{$bhk}', stype='{$stype}',
	bedroom='{$bed}', bathroom='{$bath}', balcony='{$balc}', kitchen='{$kitc}', hall='{$hall}', floor='{$floor}', 
	size='{$asize}', price='{$price}', location='{$loc}', city='{$city}', state='{$state}', feature='{$feature}',
	pimage='{$aimage}', pimage1='{$rpimage}', pimage2='{$aimage2}', pimage3='{$aimage3}', pimage4='{$aimage4}',
	uid='{$uid}', status='{$status}', mapimage='{$fimage}', topmapimage='{$fimage1}', groundmapimage='{$fimage2}', 
	totalfloor='{$totalfloor}' WHERE pid = {$pid}";
	*/
	$result=mysqli_query($con,$sql);
	if($result == true)
	{
		$msg="<p class='alert alert-success'>Property Updated</p>";
		header("Location:feature.php?msg=$msg");
	}
	else{
		$msg="<p class='alert alert-warning'>Property Not Updated</p>";
		header("Location:feature.php?msg=$msg");
	}
}						
?>
<html>
<head>
        <!--	HTML Header start  -->
		<?php include("include/html_header.php");?>
        <!--	HTML Header end  -->
		<script>


var fnshProdMDel = function(aa,bb,cc) { 
	getPropImgs();
JSSHOP.ui.closeLbox();
};

var doPrdMDelete = function() { 
    if(confirm(stxt[42] + " " + stxt[19] + "?")) {
    procNuUIitem("qmedia","m_rtype",JSSHOP.shared.getFrmFieldVal("qmedia", "_id", 0),"0","fnshProdMDel");
    }
};



var fnshProdMMain = function(aa,bb,cc) { 
// alert(bb);
getPropImgs();
JSSHOP.ui.closeLbox();

};


var doPrdMMain = function() { 
if(confirm("Set as main product picture?" + JSSHOP.shared.getFrmFieldVal("qmedia", "m_file", 0))) {
procNurUIitem("property","pimage","pid",cid,JSSHOP.shared.getFrmFieldVal("qmedia", "m_file", "1.jpg"),"fnshProdMMain");
    }
};
 

var getPrdImgEditDv = function(tpIncrNPI, tpFImg) {
tpPIEDv = document.createElement('div');
JSSHOP.shared.setFrmFieldVal("qmedia", "_id", tpIncrNPI);
JSSHOP.shared.setFrmFieldVal("qmedia", "m_file", tpFImg);
 
tmpRetStr = "<img src=\"admin/property/" + tpFImg +  "\" style=\"width: 100%\"  class=\"\" onclick=\"alert('" + JSSHOP.shared.getFrmFieldVal("qmedia", "_id", "0") + "');\">"
 try {
tmpRetStr += "<div class=\"dvTxtBtns\"><input type=\"button\" class=\"btnTxtLabel\" value=\"Set as Main\" onclick=\"javascript:doPrdMMain();\">   |   <input type=\"button\" class=\"btnTxtLabel\" value=\"Delete\" onclick=\"javascript:doPrdMDelete();\"></div>";
tmpRetStr += "<br><br>";
 
return tmpRetStr;
} catch(e) {
alert("getPrdImgEditDv " + e);
tmpRetStr = "oops. something wrong..";
return tmpRetStr;
}
};

var setPropImgs = function(theAIa, theAIb, theAIc) {
    console.log("setPropImgs: " + theAIa + " " + theAIb + " " + theAIc);
    console.log("setPropImgs: " + theAIa + " " + theAIb + " " + theAIc);
    console.log("setPropImgs: " + theAIa + " " + theAIb + " " + theAIc);
	if(theAIb.indexOf("_id") != -1) {
		tAiretArr = JSON.parse(theAIb);
		var len = tAiretArr.length;
        tstr = "";
        iint = 0;
        while (iint < len) {
 
			tstr += "<div style=\"float:left\">";
 			tstr += "<img src=\"admin/property/" + tAiretArr[iint]["m_file_thumb"] + "\" class=\"icnmedbtn rtable\" onclick=\"javascript:JSSHOP.ui.popAndFillLbox(getPrdImgEditDv('" + tAiretArr[iint]["_id"] + "','" + tAiretArr[iint]["m_file"] + "'));\">";
			tstr += "</div>";
 
			iint++;
		}
		document.getElementById("dvProdImgs").innerHTML = tstr;
	}
};

var getPropImgs = function() {
    tmpFobj = null;
    tmpFobj = {};
    tmpFobj["ws"] = "where m_uid=? and m_pid=? and m_rtype=?";
    tmpFobj["wa"] = [quid, cid, 5];
	tmpFobj["o"] = "m_vala desc";
    oi = getNuDBFnvp("qmedia", 5, null, tmpFobj);
    doQComm(oi["rq"], null, "setPropImgs");
};


window.onload = function() {
JSSHOP.shared.addCurrSlctObj(svftObj["contract"], stype, "<?php echo $rstype; ?>", "noQvalue", "noQvalue");
JSSHOP.shared.addCurrSlctObj(svftObj["propstat"], selPropStat, "<?php echo $rstatus; ?>", "noQvalue", "noQvalue");
JSSHOP.shared.addCurrSlctObj(svftObj["proptype"], ptype, "<?php echo $rtype; ?>", "noQvalue", "noQvalue");
getPropImgs();
doWinLoad();
};
</script>
</head>
<body>

<!--	Page Loader
=============================================================
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>
--> 
<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner  
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Submit Property</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Submit Property</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
          Banner   --->
		 
		 
		<!--	Submit property   -->
        <div class="full-row py-2">
            <div class="container" style="margin: 0 auto; max-width: 600px;">
                    <div class="row">						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center"><ti data-ison="stxt[985]" data-desc="btn_editprop">Edit Property</ti></h2>
                        </div>
					</div>
                    <div class="row bg-white">
                        <form method="post" enctype="multipart/form-data">
								
								
						<?php
								/*
title
pcontent
type
bhk
stype
bedroom
bathroom
balcony
kitchen
hall
floor
size
price
location
city
state
feature
pimage
pimage1
pimage2
pimage3
pimage4
uid
status
mapimage
topmapimage
groundmapimage
totalfloor
date

$ruid = "";
$rstatus = "";
$rtype = "";
$rstype = "";
$rtitle = "";
$rpcontent = "";


$rbhk = "0";

$rbedroom = "1";
$rbathroom = "1";
$rbalcony = "0";
$rkitchen = "1";
$rhall = "1";
$rfloor = "1";
$rsize = "";
$rprice = "0";
$rlocation = "";
$rcity = "";
$rstate = "";
$rfeature = "";
$rpimage = "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==";
$rpimage1 = "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==";
$rpimage2 = "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==";
$rpimage3 = "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==";
$rpimage4 = "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==";



$rmapimage = "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==";
$rtopmapimage = "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==";
$rgroundmapimage = "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==";
$rtotalfloor = "1";
$rdate = "";


		$pid=$_REQUEST['id'];
		$query=mysqli_query($con,"select * from property where pid='$pid'");
		while($row=mysqli_fetch_array($query))
		{
			$rtitle = $row["title"];
			$rpcontent = $row["pcontent"];
			$rtype = $row["type"];
			$rbhk = $row["bhk"];
			$rstype = $row["stype"];
			$rbedroom = $row["bedroom"];
			$rbathroom = $row["bathroom"];
			$rbalcony = $row["balcony"];
			$rkitchen = $row["kitchen"];
			$rhall = $row["hall"];
			$rfloor = $row["floor"];
			$rsize = $row["size"];
			$rprice = $row["price"];
			$rlocation = $row["location"];
			$rcity = $row["city"];
			$rstate = $row["state"];
			$rfeature = $row["feature"];
			$rpimage = "admin/property/" . $row["pimage"];
			$rpimage1 = "admin/property/" . $row["pimage1"];
			$rpimage2 = "admin/property/" . $row["pimage2"];
			$rpimage3 = "admin/property/" . $row["pimage3"];
			$rpimage4 = "admin/property/" . $row["pimage4"];
			$ruid = $row["uid"];
			$rstatus = $row["status"];
			$rmapimage = "admin/property/" . $row["mapimage"];
			$rtopmapimage = "admin/property/" . $row["topmapimage"];
			$rgroundmapimage = "admin/property/" . $row["groundmapimage"];
			$rtotalfloor = $row["totalfloor"];
			$rdate = $row["date"];		 
		
			} */
					include "include/subprop.php";	
								?>	 
								</form>
								
							
                    </div>            
            </div>
        </div>
	<!--	Submit property   -->
        
        
        <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        <!-- Scroll to top   
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
          End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

        <!--	HYML footer start  -->
		<?php include("include/html_footer.php");?>
        <!--	HYML footer end  -->

<script src="js/tinymce/tinymce.min.js"></script>
<script src="js/tinymce/init-tinymce.min.js"></script>
<script laguage="javascript" type="text/javascript">
// JSSHOP.shared.addCurrSlctObj(svftObj["u_jtype"], totalfl, "noQvalue", "noQvalue", "Select");
teramid = "tearmid";
</script>
</body>
</html>