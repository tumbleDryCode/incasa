<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");							
?>
<html>
<head>
        <!--	HYML Header start  -->
		<?php include("include/html_header.php");?>
        <!--	HYML Header end  -->
        <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
        <style>
            h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6 {
    font-family: auto;
    font-weight: 700;
}
</style>
</head>

<body>

<!--	Page Loader  -->
<!--<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>  -->
<!--	Page Loader  -->

<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
		 
        <!--	Text Block One
		======================================================-->
		<!-----  Our Services  ---->
		
        <!--	Recent Properties  -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                   <!--- <div class="col-md-12">
                        <h2 class="text-secondary double-down-line text-center mb-4">
						Recentes</h2>
                    </div>
                     <div class="col-md-6">
                        <ul class="nav property-btn float-right" id="pills-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link py-3 active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">New</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Featured</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Top Sale</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab3" data-toggle="pill" href="#pills-resturant" role="tab" aria-controls="pills-contact" aria-selected="false">Best Sale</a> </li>
                        </ul>
                    </div> --->
                    <div class="col-md-12">
                        <div class="tab-content mt-4" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                <div class="row">
								 <div id="dvMainCntnt" class="txtSmall txtBold" style="font-family: auto">
                                    Terms and Conditions
                                </div>
                            </div>
                            
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
		 


 


		<?php include("include/footer.php");?>
		<!--	Footer   start-->
		<script src="js/app/aa-terms_privacy.js"></script> 

        
        <!-- Scroll to top --> 
        <a href="#" class="bg-primary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 

<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/tmpl.js"></script>

<script src="js/wow.js"></script> 
<script src="js/YouTubePopUp.jquery.js"></script> 
<script src="js/validate.js"></script> 
<script src="js/jquery.cookie.js"></script> 
 </body>
</body>

</html>