<link rel="stylesheet" type="text/css" href="css/x_cc.css">
<link rel="stylesheet" type="text/css" href="css/x_dev.css">

<link rel="stylesheet" type="text/css" href="css/x_forms.css">

<script src="js/x_allinit.js"></script> 
<script src="js/x_last.js"></script> 

<script src="js/x_booter.js"></script> 
<script src="js/x_all.js"></script> 
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
strUp = "propertygrid.php?type=" + ptype.value + "&stype=" + pstype.value + "&city=" + pcity.value + "&q=" + ptype.options[ptype.selectedIndex].text + " " + pstype.options[pstype.selectedIndex].text + " " + pcity.value;
document.getElementById("q").value = ptype.options[ptype.selectedIndex].text + " " + pstype.options[pstype.selectedIndex].text + " " + pcity.value;
// document.location.href = strUp;
document.getElementById("psearch").action = strUp;

document.getElementById("psearch").submit();
}

// just keeping out of view for now
if(JSSHOP.cookies.getCookie("beta")) {
} else {
let person = prompt("beta please", "...?");

if (person != null) {
  if(person == "in") {
  JSSHOP.cookies.setCookie("beta","in","30","","","");
  } else {
  document.location.href = "https://github.com";
  }
}
}
</script>

<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
            <div class="top-header bg-secondary bigtable brdrClrHdr" style="margin:15px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="top-contact list-text-white  d-table">
                                <li><a href="#"><i class="fas fa-phone-alt text-primary mr-1"></i>961159145</a></li>
                                <li><a href="#"><i class="fas fa-envelope text-primary mr-1"></i>in.casa22@sapo.pt</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="top-contact float-right">
                                <ul class="list-text-white d-table">
								<li><i class="fas fa-user text-primary mr-1"></i>
								<?php  if(isset($_SESSION['uemail']))
								{ ?>
								<a href="logout.php">Logout</a>&nbsp;&nbsp;<?php } else { ?>
								<a href="login.php">Login</a>&nbsp;&nbsp;
								<?php } ?>
								| </li>
								<li><i class="fas fa-user text-primary mr-1"></i><a href="register.php"><ti data-ison="stxt[30]" data-desc="btn_register">Register</ti></li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-nav secondary-nav hover-primary-nav py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 bigtable brdrClrHdr" style="margin:15px;">
                            <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative" href="index.php"><b>eu...</b><img class="nav-logo" src="images/logo/logo-small.png" alt="" style="max-height:100px"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item dropdown"> <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Home</a></li>
										
										<li class="nav-item"> <a class="nav-link" href="about.php"><ti data-ison="stxt[30]" data-desc="btn_about">About</ti></a> </li>
										
										<li class="nav-item"> <a class="nav-link" href="agent.php"><ti data-ison="stxt[900]" data-desc="btn_agentes">Agentes</ti></a> </li>
										
										<li class="nav-item"> <a class="nav-link" href="property.php"><ti data-ison="stxt[901]" data-desc="btn_properties">Properties</ti></a> </li>
                                        <li class="nav-item"> <a class="nav-link" href="contact.php"><ti data-ison="stxt[902]" data-desc="btn_contacts">Contacts</ti></a> </li>
										
										<?php  if(isset($_SESSION['uemail']))
										{ ?>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ti data-ison="stxt[56]" data-desc="btn_account">Account</ti></a>
											<ul class="dropdown-menu">
												<li class="nav-item"> <a class="nav-link" href="profile.php"><ti data-ison="stxt[903]" data-desc="btn_profile">Profile</ti></a> </li>
                                                <li class="nav-item"> <a class="nav-link" href="submitproperty.php"><ti data-ison="stxt[916]" data-desc="btn_addprop">Subit Property</ti></a> </li>
												 <li class="nav-item"> <a class="nav-link" href="feature.php"><ti data-ison="stxt[905]" data-desc="btn_yourprops">Your Properties</ti></a> </li>
												<li class="nav-item"> <a class="nav-link" href="logout.php">Logout</a> </li>	
											</ul>
                                        </li>
										<?php } else { ?>
										<li class="nav-item"> <a class="nav-link" href="login.php">Login</a> </li>
										<?php } ?>
										
                                    </ul>
                                    
									
									<a class="btn btn-primary d-none d-xl-block" href="submitproperty.php"><ti data-ison="stxt[90]" data-desc="btn_about">About</ti></a> 
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<p>&nbsp;</p>
