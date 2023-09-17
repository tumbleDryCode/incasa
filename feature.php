<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}								
?>

<html>

<head>
        <!--	HYML Header start  -->
		<?php  include("include/html_header.php");?>
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
        
        <!--	Banner   --->
        <div class="rtable brdrClrHdr" style="background-image: url('images/banner/04.jpg'); min-width: 95%; max-width: 95%;min-height: 105%;margin:0 auto;margin-top:2px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b><ti data-ison="stxt[905]" data-desc="btn_yourprops">Your Properties</ti></b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"><ti data-ison="stxt[905]" data-desc="btn_yourprops">Your Properties</ti></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->
		 
		 
		<!--	Submit property   -->
        <div class="full-row bg-gray" style="overflow-y:scroll">
            <div class="container">
                    <div class="row mb-5">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center"><ti data-ison="stxt[905]" data-desc="btn_yourprops">Your Properties</ti></h2>
							<?php 
								if(isset($_GET['msg']))	
								echo $_GET['msg'];	
							?>
                        </div>
					</div>
					<table class="items-list col-lg-12" style="border-collapse:inherit;">
                        <thead>
                             <tr  class="bg-primary">
                                <th class="text-white font-weight-bolder">ID</th>
                                <th class="text-white font-weight-bolder"><ti data-ison="stxt[963]" data-desc="btn_getintouch">Property</ti></th>
                                <!-- <th class="text-white font-weight-bolder">BHK</th> -->
                                <th class="text-white font-weight-bolder"><ti data-ison="stxt[949]" data-desc="btn_selltype">Type</ti></th>
                                <th class="text-white font-weight-bolder"><ti data-ison="stxt[74]" data-desc="btn_date">Date</ti></th>
								<th class="text-white font-weight-bolder"><ti data-ison="stxt[77]" data-desc="btn_getintouch">Status</ti></th>
                                <th class="text-white font-weight-bolder"><ti data-ison="stxt[31]" data-desc="btn_edit">Edit</ti></th>
								<th class="text-white font-weight-bolder"><ti data-ison="stxt[42]" data-desc="btn_delete">Delete</ti></th>
                             </tr>
                        </thead>
                        <tbody>
						
							<?php 
							$uid=$_SESSION['uid'];
                            // $query=mysqli_query($con,"SELECT property.*, qmedia.*  FROM `property`, qmedia WHERE property.uid='$uid' and qmedia.m_uid=property.uid  and qmedia.m_file like '%.%'  order by qmedia.m_vala desc limit 5");
                            $query=mysqli_query($con,"SELECT * FROM `property` WHERE property.uid='$uid'"); //  and property.bhk='5'

								while($row=mysqli_fetch_array($query))
								{
                                            // echo $row as string
                                        
                             



							?>
                            <tr>
                                <td><a class="txtBold txtDecorNone" href="submitpropertyupdate.php?id=<?php echo $row['0'];?>"><?php echo $row['0'];?></a></td>
                                <td>

                                    <?php //  echo implode(" ",$row) . '<br>' . $row["m_file"]; 
                                    ?>
									<img src="admin/property/<?php echo $row["pimage"];?>" alt="pimage" class="icnmedbtn rtable">
                                    <div class="property-info d-table">
                                        <h5 class="text-secondary text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h5>
                                        <span class="font-14 text-capitalize"><i class="fas fa-map-marker-alt text-primary font-13"></i>&nbsp; <?php echo $row['14'];?></span>
                                        <div class="price mt-3">
											<span class="text-primary">$&nbsp;<?php echo $row['13'];?></span>
										</div>
                                    </div>
								</td>
                                <!-- <td class="text-primary"><?php echo $row['4'];?></td> -->
                                <td class="text-capitalize">For <?php echo $row['5'];?></td>
                                <td class="text-capitalize"><?php echo $row['29'];?></td>
								<td class="text-capitalize"><?php echo $row['24'];?></td>
                                <td class="text-capitalize"><a class="btn btn-primary" href="submitpropertyupdate.php?id=<?php echo $row['0'];?>"><ti data-ison="stxt[31]" data-desc="btn_edit">Edit</ti></a></td>
								<td class="text-capitalize"><a class="btn btn-primary" href="submitpropertydelete.php?id=<?php echo $row['0'];?>"><ti data-ison="stxt[42]" data-desc="btn_delete">Delete</ti></a></td>
                            </tr>
							<?php } ?>
							
                        </tbody>
                    </table>            
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
         <!--	HTML footer start  -->
         <?php include("include/html_footer.php");?>
        <!--	HTML footer end  -->
</body>
</html>