<?php 
include("config.php");
$error="";
$msg="";
if(isset($_REQUEST['reg']))
{
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];
	$pass=$_REQUEST['pass'];
	$utype=$_REQUEST['utype'];
	
	$uimage=$_FILES['uimage']['name'];
	$temp_name1 = $_FILES['uimage']['tmp_name'];
	
	$query = "SELECT * FROM user where uemail='$email'";
	$res=mysqli_query($con, $query);
	$num=mysqli_num_rows($res);
	
	if($num == 1)
	{
		$error = "<p class='alert alert-warning'>Email Id already Exist</p> ";
	}
	else
	{
	 if(!empty($email) && !empty($pass))

		// if(!empty($name) && !empty($email) && !empty($phone) && !empty($pass) && !empty($uimage))
		{
			
			$sql="INSERT INTO user (uname,uemail,uphone,upass,utype,uimage) VALUES ('$name','$email','$phone','$pass','$utype','$uimage')";
			$result=mysqli_query($con, $sql);
			move_uploaded_file($temp_name1,"admin/user/$uimage");
			   if($result){
				   $msg = "<p class='alert alert-success'><ti data-ison='stxt[1010]' data-desc='btn_regok'>Reg ok</ti></p> ";
			   }
			   else{
				   $error = "<p class='alert alert-warning'><ti data-ison='stxt[1009]' data-desc='btn_regerr'>Reg Error</ti></p> ";
			   }
		}else{
			$error = "<p class='alert alert-warning'><ti data-ison='stxt[1008]' data-desc='btn_fillall'>Fill all</ti></p>";
		}
	}
	
}
?>
<html>
<head>
<!--	HTML Header start  -->
<?php include("include/html_header.php");?>
<!--	HTML Header end  -->
<script>
window.onload = function() {
document.getElementsByName('name')[0].placeholder= stxt[97];
document.getElementsByName('phone')[0].placeholder= stxt[24];
document.getElementsByName('email')[0].placeholder= stxt[977];
document.getElementsByName('pass')[0].placeholder= stxt[978];
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
        

		<div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-black"><a href="./">Home</a></li>
                                <li class="breadcrumb-item active"><ti data-ison="stxt[36]" data-desc="btn_register">Register</ti></li>
                            </ol>
                        </nav>
                    </div>


        <!--	Banner  
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b><ti data-ison="stxt[36]" data-desc="btn_register">Register</ti></b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"><ti data-ison="stxt[36]" data-desc="btn_register">Register</ti></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
       Banner   --->
	   <div class="page-wrappers full-row" style="padding: 15px;">
            <div class="">
            	<div class="container">
				<div class="rtable bkgdClrWhite brdrClrHdr" style="max-width:600px;margin: 0 auto">
                        <div class="login-right">
							<div class="login-right-wrap">
 
								<p class="account-subtitle" style="margin:0px;padding:0px;"><ti data-ison="stxt[36]" data-desc="btn_register">Register</ti></p>
								<span class="txtSmall txtClrGrey"><ti data-ison="stxt[37]" data-desc="btn_login">Email Password</ti>:</span>
								
								<?php echo $error; ?><?php echo $msg; ?>
								<!-- Form -->
								<form method="post" enctype="multipart/form-data">
									<div class="form-group">
										<input type="text"  name="name" id="prpname"  class="form-control" placeholder="Your Name*">
									</div>
									<div class="form-group">
										<input type="text"  name="phone" id="prpphone" class="form-control" placeholder="Your Phone*" maxlength="10">
									</div>
									<div class="form-group">
										<input type="email"  name="email" id="prpemail" name="name" class="form-control" placeholder="Your Email*">
									</div>
									<div class="form-group">
										<input type="text" name="pass" id="prppass"  class="form-control" placeholder="Your Password*">
									</div>

									 <div class="form-check-inline">
									  <label class="form-check-label">
										<input type="radio" class="form-check-input" name="utype" value="user" checked><ti data-ison="stxt[75]" data-desc="btn_user">User</ti>
									  </label>
									</div>
									<div class="form-check-inline">
									  <label class="form-check-label">
										<input type="radio" class="form-check-input" name="utype" value="agent"><ti data-ison="stxt[943]" data-desc="btn_agent">Agent</ti>
									  </label>
									</div>
									<div class="form-check-inline disabled">
									  <label class="form-check-label">
										<input type="radio" class="form-check-input" name="utype" value="builder"><ti data-ison="stxt[944]" data-desc="btn_builder">Builder</ti>
									  </label>
									</div> 
									
									<div class="form-group">
										<label class="col-form-label"><b><ti data-ison="stxt[945]" data-desc="btn_user_image">User Image</ti></b></label>
										<input class="form-control" name="uimage" type="file">
									</div>
									
									<button class="btn btn-primary" name="reg" value="Register" type="submit"><ti data-ison="stxt[36]" data-desc="btn_register">Register</ti></button>
									
								</form>

								<!-- Social Login 
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div>
								
								
								<div class="social-login">
									<span>Register with</span>
									<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
									<a href="#" class="google"><i class="fab fa-google"></i></a>
									<a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
									<a href="#" class="google"><i class="fab fa-instagram"></i></a>
								</div>
								 Social Login -->
								
								<div class="text-center dont-have"><ti data-ison="stxt[946]" data-desc="btn_already_have_an_account">Already have an account?</ti> <a href="login.php">Login</a></div>
								
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<!--	login  -->
        
        
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
</body>
</html>