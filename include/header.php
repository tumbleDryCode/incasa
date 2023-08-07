<div id="lightbox" class="lightbox"   onclick="javascript:JSSHOP.ui.closePopMenus();">
</div> <div id="lightbox_content" class="rtable bkgdClrWhite" style="min-height:400px;min-width:350px;z-index: 2147483647;position:fixed;top:-700px;left:-700px;word-wrap: break-word;max-width:80%;margin: 0 auto">
      </div>



<header id="header" class="transparent-header-modern fixed-header-bg-white w-100" style="margin:0px;padding:0px;min-width:100%">
            <div class="top-header bg-secondary bigtable brdrClrHdr" style="margin:15px;visiility:hidden;display:none;">
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
								<a href="login.php">Loginz</a>&nbsp;&nbsp;
                                <a href="register.php"><ti data-ison="stxt[30]" data-desc="btn_register">Register</ti>
								<?php } ?>
								| </li>
 								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-nav secondary-nav hover-primary-nav py-6  bg-secondary"  style="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12" style="margin:0px;">
                            <nav class="navbar navbar-expand-lg navbar-light p-0">
                              <span style="float:left;text-align:left;white-space: nowrap;"><a class="breadcrumb-item active" href="index.php"><img class="slmtable" src="images/logo/logo-small.png" alt="in-casa.eu" style="max-height:40px;max-width:40px;"> <b>IN<span class="txtClrWhite">-</span>CASA<span class="txtClrWhite">.</span>eu</b></a></span>

  <!-- menu icons 

  <a href="javascript:void(0);" onclick="javascript:JSSHOP.ui.setNuCBBClickClr(this,'kcoll-menu-item','collection-item txtClrRed', function(){JSSHOP.ui.popAndFillLbox(doFavoritesRndr('y', 'y', 'y', 60).replace(/::/g, '<br>'))});" class="collection-item txtClrRed"><span><i class="menu-material-icons collection-item txtClrRed"></i></span><span style="vertical-align:super;padding-left:12px;" class="collection-item txtClrRed">Favorites</span></a>


			<div style="">
 
			<ul class="shop-menu" > 

 

 
<li id="ahAccountIcon"  style="float:right"><a href="javascript:JSSHOP.ui.doDefCBBCC('ahAccountIcon', null, doEditUser());"><i class="material-icons"  style="margin-top: 5px;font-size:32px;" alt="person" title="person">&#xe7fd;</i></a></li>   
 <li id="ahNotifyIcon"  style="float:right"><span id="spnAlrtNotify" class="icnbtn slmtable txtSmall txtClrWhite bkgdClrHdr" style="float:right"></span><a href="javascript:JSSHOP.ui.doDefCBBCC('ahNotifyIcon', null, doMLinkM('aa-show-notifications', 'pid=aa-show-notifications'));"><i class="material-icons"  style="margin-top: 5px;font-size:27px;margin-right:6px;" alt="Notify" title="notifications">&#xe7f4;</i></a></li>   

<li id="ahMsgsIcon"  style="float:right"><span id="spnMsgsNotify" class="icnbtn slmtable txtSmall txtClrWhite bkgdClrHdr" style="float:right"></span><a href="javascript:JSSHOP.ui.doDefCBBCC('ahMsgsIcon', null, doMLinkM('aa-show-messages','pid=aa-show-messages'));"><i class="material-icons"  style="margin-top: 5px;font-size:27px;margin-right:6px;" alt="Messages" title="Messages">&#xe0b7;</i></a></li>   
                                </ul>

			</div>
				  -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="padding: 2px;background-color: #fff;border:0px;"> <span class="navbar-toggler-icon"></span> </button>
                                <div class="collapse navbar-collapse txtClrWhite" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item"> <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Home</a></li>
										<li class="nav-item"> <a class="nav-link" href="property.php"><ti data-ison="stxt[940]" data-desc="btn_properties">Properties</ti></a> </li>					 
										<li class="nav-item"> <a class="nav-link" href="search.php"><ti data-ison="stxt[936]" data-desc="btn_searchprops">Search Properties</ti></a> </li>
										<!-- <li class="nav-item"> <a class="nav-link" href="agent.php"><ti data-ison="stxt[900]" data-desc="btn_agentes">Agentes</ti></a> </li> -->
                                        <li class="nav-item"> <a class="nav-link" href="contact.php"><ti data-ison="stxt[902]" data-desc="btn_contacts">Contacts</ti></a> </li>
										
										<?php  if(isset($_SESSION['uemail']))
										{ ?>
										<li class="dropdown onlyWideScreen" style="margin-top:10px;">
											 <a style="float:left;padding-left:15px;" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ti data-ison="stxt[56]" data-desc="btn_account">Account</ti></a>
											<ul class="dropdown-menu">
												<li class="nav-item"> <a class="nav-link" href="profile.php"><ti data-ison="stxt[903]" data-desc="btn_profile">Profile</ti></a> </li>
                                                <li class="nav-item"> <a class="nav-link" href="submitproperty.php"><ti data-ison="stxt[916]" data-desc="btn_addprop">Subit Property</ti></a> </li>
												 <li class="nav-item"> <a class="nav-link" href="feature.php"><ti data-ison="stxt[905]" data-desc="btn_yourprops">Your Properties</ti></a> </li>
												<li class="nav-item"> <a class="nav-link" href="logout.php">Logout</a> </li>	
											</ul>
                                        </li>
                                        <li class="onlySmallScreen" style="margin-top:10px;">
											 <span style="float:left;padding-left:15px;" class="txtBold txtClrDlg"><ti data-ison="stxt[56]" data-desc="btn_account">Account</ti></a>
											<ul class="">
												<li class="nav-item"> <a class="nav-link txtClrDlg txtBold" href="profile.php"><ti data-ison="stxt[903]" data-desc="btn_profile">Profile</ti></a> </li>
                                                <li class="nav-item"> <a class="nav-link" href="submitproperty.php"><ti data-ison="stxt[916]" data-desc="btn_addprop">Subit Property</ti></a> </li>
												 <li class="nav-item"> <a class="nav-link" href="feature.php"><ti data-ison="stxt[905]" data-desc="btn_yourprops">Your Properties</ti></a> </li>
												<li class="nav-item"> <a class="nav-link" href="logout.php">Logout</a> </li>	
											</ul>
                                        </li>
										<?php } else { ?>
										<li class="nav-item"> <a class="nav-link" href="login.php">Login</a> </li>
                                        <li class="nav-item"> <a class="nav-link"  href="register.php"><ti data-ison="stxt[961]" data-desc="btn_register">Register</ti></li>
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
<div class="txtSmall txtClrWhite">.</div>