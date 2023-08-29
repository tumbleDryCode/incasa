<?php
session_start();
require("config.php");
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}
?>
<html>
<head>
    	
		        <!--	HTML Header start  -->
				<?php include("includes/html_header.php");?>
			<!--	HTML Header end  -->
    </head>
    <body>
	
		<!-- Main Wrapper -->
		
		
			<!-- Header -->
				<?php include("header.php"); ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Admin</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active"><ti data-ison="stxt[1024]" data-desc="btn_adminlist">Admin List</ti></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title"><ti data-ison="stxt[1024]" data-desc="btn_adminlist">Admin List</ti></h4>
									<?php 
											if(isset($_GET['msg']))	
											echo $_GET['msg'];
											
										?>
								</div>
								<div class="card-body">

									<table id="basic-datatable" class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th><ti data-ison="stxt[97]" data-desc="btn_name">Name</ti></th>
                                                    <th><ti data-ison="stxt[26]" data-desc="btn_email">Email</ti></th>
                                                    <!-- <th>Date Of Birth</th> -->
                                                    <th><ti data-ison="stxt[24]" data-desc="btn_phone">Phone</ti></th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
											<?php
													
												$query=mysqli_query($con,"select * from admin");
												$cnt=1;
												while($row=mysqli_fetch_row($query))
													{
											?>
                                                <tr>
                                                    <td><?php echo $cnt; ?></td>
                                                    <td><?php echo $row['1']; ?></td>
                                                    <td><?php echo $row['2']; ?></td>
                                                    <!-- <td><?php echo $row['4']; ?></td> -->
                                                    <td><?php echo $row['5']; ?></td>
                                                    <td><a href="admindelete.php?id=<?php echo $row['0']; ?>">Delete</a></td>
                                                </tr>
                                                <?php
												$cnt=$cnt+1;
												} 
												?>
                                               
                                            </tbody>
                                        </table>
								</div>
							</div>
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Main Wrapper -->

		<!--	HYML footer start  -->																
		<?php include("includes/html_footer.php");?>
		<!--	HYML footer end  -->
    </body>
</html>
