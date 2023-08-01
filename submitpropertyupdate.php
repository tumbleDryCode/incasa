<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}

//// code insert
//// add code

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
	
	$aimage=$_FILES['aimage']['name'];
	$aimage1=$_FILES['aimage1']['name'];
	$aimage2=$_FILES['aimage2']['name'];
	$aimage3=$_FILES['aimage3']['name'];
	$aimage4=$_FILES['aimage4']['name'];
	
	$fimage=$_FILES['fimage']['name'];
	$fimage1=$_FILES['fimage1']['name'];
	$fimage2=$_FILES['fimage2']['name'];
	
	$temp_name  =$_FILES['aimage']['tmp_name'];
	$temp_name1 =$_FILES['aimage1']['tmp_name'];
	$temp_name2 =$_FILES['aimage2']['tmp_name'];
	$temp_name3 =$_FILES['aimage3']['tmp_name'];
	$temp_name4 =$_FILES['aimage4']['tmp_name'];
	
	$temp_name5 =$_FILES['fimage']['tmp_name'];
	$temp_name6 =$_FILES['fimage1']['tmp_name'];
	$temp_name7 =$_FILES['fimage2']['tmp_name'];
	
	move_uploaded_file($temp_name,"admin/property/$aimage");
	move_uploaded_file($temp_name1,"admin/property/$aimage1");
	move_uploaded_file($temp_name2,"admin/property/$aimage2");
	move_uploaded_file($temp_name3,"admin/property/$aimage3");
	move_uploaded_file($temp_name4,"admin/property/$aimage4");
	
	move_uploaded_file($temp_name5,"admin/property/$fimage");
	move_uploaded_file($temp_name6,"admin/property/$fimage1");
	move_uploaded_file($temp_name7,"admin/property/$fimage2");
	
	
	$sql = "UPDATE property SET title= '{$title}', pcontent= '{$content}', type='{$ptype}', bhk='{$bhk}', stype='{$stype}',
	bedroom='{$bed}', bathroom='{$bath}', balcony='{$balc}', kitchen='{$kitc}', hall='{$hall}', floor='{$floor}', 
	size='{$asize}', price='{$price}', location='{$loc}', city='{$city}', state='{$state}', feature='{$feature}',
	pimage='{$aimage}', pimage1='{$aimage1}', pimage2='{$aimage2}', pimage3='{$aimage3}', pimage4='{$aimage4}',
	uid='{$uid}', status='{$status}', mapimage='{$fimage}', topmapimage='{$fimage1}', groundmapimage='{$fimage2}', 
	totalfloor='{$totalfloor}' WHERE pid = {$pid}";
	
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
<!DOCTYPE html>
<html lang="en">

<head>
        <!--	HYML Header start  -->
		<?php include("include/html_header.php");?>
        <!--	HYML Header end  -->
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
        <div class="full-row">
            <div class="container">
                    <div class="row">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">Submit Property</h2>
                        </div>
					</div>
                    <div class="row p-5 bg-white">
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
										
							 
								 include "include/subprop.php";
								} 
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
JSSHOP.shared.addCurrSlctObj(svftObj["contract"], stype, "<?php echo $rstype; ?>", "noQvalue", "noQvalue");
JSSHOP.shared.addCurrSlctObj(svftObj["propstat"], selPropStat, "<?php echo $rstatus; ?>", "noQvalue", "noQvalue");
JSSHOP.shared.addCurrSlctObj(svftObj["proptype"], ptype, "<?php echo $rtype; ?>", "noQvalue", "noQvalue");

</script>
</body>
</html>