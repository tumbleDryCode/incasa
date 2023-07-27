<?php
if(session_id() == '') {
    session_start();
}
require("config.php");
////code
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}
?>  
        <link rel="stylesheet" href="../css/x_dev.css">
                <link rel="stylesheet" href="../css/x_forms.css">


<script type="text/javascript">
		 function  toggleVisibility(rowname){
		try {
			theRow = document.getElementById(rowname);
			if(theRow.style.display == "none") {
				theRow.style.display = "block";
				theRow.style.visibility = "visible";
			} else {
				theRow.style.display = "none";
				theRow.style.visibility = "hidden";
			}
		} catch (e) {	 
 alert(e);
		}
	}
	</script>
  <div class="header">
			<div>
	
				 
								<a onclick="javascript:toggleVisibility('sidebara');" id="toggle_btn" style="float:right">
					<i class="fa fa-bars"></i>
				</a>


				
				<!-- Mobile Menu Toggle -->
	 
				
								<a class="mobile_btn" id="mobile_btna" onclick="javascript:toggleVisibility('sidebara');" style="float:right">
					<i class="fa fa-bars" ></i>
				</a>

				<!-- /Mobile Menu Toggle -->
			
			</div>
				<!-- Logo -->
                <div class="header-left">
                
                </div>
				<!-- /Logo -->
				
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">

					<h4 style="color:white;text-transform:capitalize;padding-top:10px;"><a href="dashboard.php" class="logo logo-small"><img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
					</a>  <span style="padding-right:10px; vertical-align: middle">  <a href="../index.php" class="txtClrWhite txtDecorNone txtBig txtBold">
						Home</a> &nbsp;&nbsp;&nbsp;</span></h4>
					<!-- User Menu -->
					<h4 style="color:white;margin-top:13px;text-transform:capitalize;"><a href="dashboard.php"  class="txtClrWhite txtDecorNone txtBig txtBold"><?php echo $_SESSION['auser'];?></a></h4>
					<li class="nav-item dropdown app-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.png" width="31" alt="Ryan Taylor"></span>
						</a>
						
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="assets/img/profiles/avatar-01.png" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6><?php echo $_SESSION['auser'];?></h6>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="profile.php">Profile</a>
							<a class="dropdown-item" href="logout.php">Logout</a>
						</div>
					</li>

					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			
			<!-- header --->
			
			
				
			
						<!-- Sidebar -->
            <div class="sidebara" id="sidebara"  style="max-width:250px; background-color:gray;z-index:1999999999;position:fixed;visibility:hidden;display:none;">
                <div class="sidebar-inner slimscroll" style="overflow:scroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li> 
								<a href="dashboard.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							
							<li class="menu-title"> 
								<span>Authentication</span>
							</li>
						
							<li class="submenu">
								<a href="#"><i class="fe fe-user"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="index.php"> Login </a></li>
									<li><a href="register.php"><ti data-ison="stxt[961]" data-desc="btn_register">Register</ti></a></li>
									
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Users</span>
							</li>
						
							<li class="submenu">
								<a href="#"><i class="fe fe-user"></i> <span><ti data-ison="stxt[617]" data-desc="btn_users">Users</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="adminlist.php"> Admin </a></li>
									<li><a href="userlist.php"><ti data-ison="stxt[96]" data-desc="btn_allusers"><ti data-ison="stxt[962]" data-desc="btn_all_users">All Users</ti></a></li>
									<li><a href="useragent.php"><ti data-ison="stxt[943]" data-desc="btn_agent">Agent</ti></a></li>
									<li><a href="userbuilder.php"><ti data-ison="stxt[944]" data-desc="btn_builder">Builder</ti></a></li>
								</ul>
							</li>
						
							<li class="menu-title"> 
								<span>Property</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-user"></i> <span><ti data-ison="stxt[963]" data-desc="btn_property">Property</ti></span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="propertyadd.php"><ti data-ison="stxt[964]" data-desc="btn_add_property">Add Property</ti></a></li>
									<li><a href="propertyview.php"><ti data-ison="stxt[965]" data-desc="btn_view_properties">View Properties</ti></a></li>
									
								</ul>
							</li>
							
							<li class="menu-title"> 
								<span>State & City</span>
							</li>
						
							<li class="submenu">
								<a href="#"><i class="fe fe-user"></i> <span><ti data-ison="stxt[966]" data-desc="btn_state_city">State - City</ti></span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="stateadd.php"><ti data-ison="stxt[211]" data-desc="btn_state">State</ti></a></li>
									<li><a href="cityadd.php"><ti data-ison="stxt[210]" data-desc="btn_city">City</ti></a></li>
								</ul>
							</li>
							
							<li class="menu-title"> 
								<span>Query</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-user"></i> <span> Query </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="contactview.php"><ti data-ison="stxt[912]" data-desc="btn_city">Contact Us</ti></a></li>
									<li><a href="feedbackview.php">Feedback</a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span><ti data-ison="stxt[30]" data-desc="btn_about">About</ti></span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-user"></i><span><ti data-ison="stxt[30]" data-desc="btn_about">About</ti></span><span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="aboutadd.php"> <ti data-ison="stxt[30]" data-desc="btn_about">About</ti> </a></li>
									<li><a href="aboutview.php"><ti data-ison="stxt[967]" data-desc="btn_view_about">View About</ti></a></li>
								</ul>
							</li>
							
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
<script src="../js/x_allinit.js"></script> 
<script>
function doDWD() {
 xae = document.getElementsByTagName("ti");
var iint = 0;
while(iint < xae.length) {
nuDW(xae[iint]);
iint++
}
}
function dosearch() {
strUp = "propertygrid.php?type=" + ptype.value + "&stype=" + pstype.value + "&city=" + pcity.value + "&q=" + ptype.value + " " + pstype.value + " " + pcity.value;
document.getElementById("q").value = ptype.value + " " + pstype.value + " " + pcity.value;
// document.location.href = strUp;
document.getElementById("psearch").action = strUp;

document.getElementById("psearch").submit();
}
</script>

<script src="../js/x_booter.js"></script> 
<script src="../js/x_all.js"></script> 
<script>
JSSHOP.loadScript("../js/" + jscssprefix + "aa-" + usrlang + ".js", donada,"js");

setTimeout("doDWD()", 800);
</script>
 

