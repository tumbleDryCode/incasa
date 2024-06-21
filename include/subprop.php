<?php
global $uid;
if(isset($_COOKIE['quid'])) {
	$uid = $_COOKIE['quid'];
} else {
	$uid = "5";
}
?>
<input type="hidden" name="uid" id="uid"   value="<?php echo $uid; ?>">
								<div class="accordion" id="accordionEPExample">
									<h5 class="text-secondary"><ti data-ison="stxt[947]" data-desc="btn_basic_information">Basic Information</ti></h5>
									<?php if(isset($error)) echo $error; ?>
									<?php if(isset($msg)) echo $msg; ?>
									
							 
											<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[956]" data-desc="btn_status">Status</ti></label>
													<div class="col-lg-9">
														<select class="form-control" name="status" id="selPropStat">
														 
														</select>
													</div>
												</div>
												
											<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[949]" data-desc="btn_selling_type">Selling Type</ti></label>
													<div class="col-lg-9">
														<select class="form-control" name="stype" id="stype">
	 
														</select>
													
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[927]" data-desc="btn_property_type">Property Typee</ti></label>
													<div class="col-lg-9">
														<select class="form-control" name="ptype" id="ptype">
															 
														</select>
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[18]" data-desc="btn_price_location">Price</ti></label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="price"  value="<?php echo $rprice; ?>">
													</div>
												</div>
												
												
												
												<div class="form-group row">
													<label class="col-lg-2 col-form-label"><ti data-ison="stxt[10]" data-desc="btn_title">Title</ti></label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="title" required  value="<?php echo $rtitle; ?>">
													</div>
												</div>
												<!-- test Accordian -->
												 
												<div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingSix">
        <button style="background-color: #eaf9f9;border: 1px solid #483c3c" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
        <div><i class="nav-material-icons coll-menu-item txtClrHdr" style="margin-right:4px;">&#xe873</i><span class="txtClrGrey txtSmall"><ti data-ison="stxt[983]" data-desc="btn_content">Description</ti>...</span>
			 </div>

        </button>
        </h2>
        <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
        <div class="accordion-body">
        <!-- tinymc -->
        									<div class="form-group row" id="dvFGRo">
													
													<div class="col-lg-9">
														<textarea class="tinymce form-control" name="content" rows="10" cols="30"><?php echo $rpcontent; ?></textarea>
													</div>
												</div>
        <!-- end tinymc -->
        </div>
        </div>
      	</div>
 

												<!-- end test Accordian -->												
												
												
								 
 										<hr><h5 class="text-secondary"><ti data-ison="stxt[981]" data-desc="btn_charachteritics">Charachteristics</ti></h5>
												
												<!-- test Accordian -->
												 
												<div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingEight">
        <button style="background-color: #eaf9f9;border: 1px solid #483c3c" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
        <div><i class="nav-material-icons coll-menu-item txtClrHdr" style="margin-right:4px;">&#xe242</i><span class="txtClrGrey txtSmall"><ti data-ison="stxt[982]" data-desc="btn_content">Property Details</ti></span>
			 </div>

        </button>
        </h2>
        <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEight">
        <div class="accordion-body">
        <!-- tinymc -->
        
        										<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[953]" data-desc="btn_area_size">Area Size</ti></label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="asize"  value="<?php echo $rsize; ?>">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[952]" data-desc="btn_total_floors">Total Floors</ti></label>
													<div class="col-lg-9">
														<input class="form-control" name="totalfl" id="totalfl" value="<?php echo $rtotalfloor; ?>">
													</div>
												</div>
												
												
						 						<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[923]" data-desc="btn_bathroom">Bathroom</ti></label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="bath"  value="<?php echo $rbathroom; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[926]" data-desc="btn_kitcheb">Kitchen</ti></label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="kitc"  value="<?php echo $rkitchen; ?>">
													</div>
												</div>
												
										  
										 
												<div class="form-group row" style="visibility:hidden;display:none">
													<label class="col-lg-3 col-form-label">BHK</label>
													<div class="col-lg-9">
														<input name="bhk" id="bhk" type="hidden" value="5">
															 
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[922]" data-desc="btn_bedroom">Bedroom</ti></label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="bed" value="<?php echo $rbedroom; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[924]" data-desc="btn_balcony">Balcony</ti></label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="balc"   value="<?php echo $rbalcony; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[925]" data-desc="btn_select_status">Hall</ti></label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="hall"  value="<?php echo $rhall; ?>">
													</div>
												</div>
        <!-- end tinymc -->
        </div>
        </div>
       </div>
   

												<!-- end test Accordian -->	
												
												
									 
										<hr><h5 class="text-secondary"><ti data-ison="stxt[203]" data-desc="btn_location">Location</ti></h5>
									 
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[928]" data-desc="btn_floor">Floor</ti></label>
													<div class="col-lg-9">
														<input class="form-control" name="floor"  value="<?php echo $rtotalfloor; ?>">
															 
													</div>
												</div>
												
												
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[209]" data-desc="btn_address">Address</ti></label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="loc" value="<?php echo $rlocation; ?>">
													</div>
												</div>
													
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[210]" data-desc="btn_city">City</ti></label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="city" value="<?php echo $rcity; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[211]" data-desc="btn_price_location">State</ti></label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="state" value="<?php echo $rstate; ?>">
													</div>
												</div>
									
									 
										
										<div class="form-group row" style="display:none; visibility: hidden">
											<label class="col-lg-2 col-form-label"><ti data-ison="stxt[930]" data-desc="btn_features">Features</ti></label>
											 
											<p class="alert alert-danger">* Important Please Do Not Remove Below Content Only Change <b>Yes</b> Or <b>No</b> or Details and Do Not Add More Details</p>
											
											<textarea class="tinymce form-control" name="feature" rows="10" cols="30">
												<!---feature area start--->
												<div class="col-md-4">
														<ul>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Property Age : </span>10 Years</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Swiming Pool : </span>Yes</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Parking : </span>Yes</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">GYM : </span>Yes</li>
														</ul>
													</div>
													<div class="col-md-4">
														<ul>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Type : </span>Apartment</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Security : </span>Yes</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Dining Capacity : </span>10 People</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Temple  : </span>Yes</li>
														
														</ul>
													</div>
													<div class="col-md-4">
														<ul>
														<li class="mb-3"><span class="text-secondary font-weight-bold">3rd Party : </span>No</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Alivator : </span>Yes</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">CCTV : </span>Yes</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Water Supply : </span>Ground Water / Tank</li>
														</ul>
													</div>
												<!---feature area end---->
											</textarea>
										 
										</div>
												
								 
								 <!-- upload button start  -->
<?php
if(isset($_REQUEST['id']))
{
?>
										<hr><h5 class="text-secondary"><ti data-ison="stxt[980]" data-desc="btn_images_media">Images - Media</ti></h5>

 
								 <table style="max-width:95%;min-width:90%;margin:0 auto">
							 <tr>
								<td valign="top"><table style="width: 100%" cellspacing="0" cellpadding="0">
				 <tr>
					 <td style="height: 6px"><div id="progressOuter"></div><div id="msgBox"></div></td>
				 </tr>
				 <tr>
					 <td><table><tr>
						 <td style="height: 50px"><img alt="Product Image" src="images/misc/transparent.gif"  class="slmtable icnsmlbtn brdrClrDlg" style="text-align:center;max-height:3px; margin-right:3px" align="absmiddle" id="imgIedit"></td>
						 <td class="crsrPointer" style="text-align:center; height: 50px;" align="absmiddle">
					
					</td><td style="height: 50px">

					<div id="dvUploadBtn"  style="display:block;visibility:visible;margin-right:10px"><button id="uploadBtn" class="cls_button cls_button-small form-control"><i class="nav-material-icons coll-menu-item txtClrHdr" style="margin-right:4px;">&#xe439;</i><ti data-ison="stxt[986]" data-desc="btn_upload">Upload</ti></button></div>
					
				 
             </td><td style="text-align: center; vertical-align:top; height: 50px;"><div id="dvPrdMedia"></div></td></tr></table></td>
				 </tr>
				 <tr>
					 <td id="tdAppBCodeBtn"><div id="dvAppBCodeBtn"><div><a href="javascript:doBarCodeScan('add');" class="txtDecorNone">
					 <!-- <i class="material-icons" style="font-size:42px;" alt="barcode" title="barcode">&#xe329;</i> -->
					 	</a></div></div><div id="dvProdImgs">dvProdImgs</div></td>
				 </tr>
			 </table></td>
							 </tr>
						 </table>
						 
<?php
}
?>

<!-- upload button end  -->
										 		<div>
										 
											<div style="margin: 0 auto;padding: 10px;"><button type="submit" value="Submit" class="btn btn-primary" name="add"><ti data-ison="stxt[21]" data-desc="btn_save">Save</ti></button></div>
										
											
								</div>

<?php
if(isset($_REQUEST['id']))
{
$pid = $_REQUEST['id'];
 echo "<scr" . "ipt>";
 echo "uid.value=quid;";
 echo "currMediaID= '" . $pid. "';";
 // if url has admin/ then we are in admin mode
 if(strpos($_SERVER['REQUEST_URI'], "admin/")) {
 	echo "doMediaBtnSetup('uploadBtn', '', 'finishMMupload', 'admin/property');";
 } else {
 	echo "doMediaBtnSetup('uploadBtn', '', 'finishMMupload', 'property');";
 }
echo "</script>";
 }
?>