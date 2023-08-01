 
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
														<input type="text" class="form-control" name="price" placeholder="Enter Price" value="<?php echo $rprice; ?>">
													</div>
												</div>
												
												
												
												<div class="form-group row">
													<label class="col-lg-2 col-form-label"><ti data-ison="stxt[979]" data-desc="btn_title">Title and Description</ti></label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="title" required placeholder="Enter Title" value="<?php echo $rtitle; ?>">
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
														<input type="text" class="form-control" name="asize" placeholder="Enter Area Size (in sqrt)" value="<?php echo $rsize; ?>">
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
														<input type="text" class="form-control" name="bath" placeholder="Enter Bathroom (only no 1 to 10)" value="<?php echo $rbathroom; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[926]" data-desc="btn_kitcheb">Kitchen</ti></label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="kitc" placeholder="Enter Kitchen (only no 1 to 10)"  value="<?php echo $rkitchen; ?>">
													</div>
												</div>
												
										  
										 
												<div class="form-group row" style="visibility:hidden;display:none">
													<label class="col-lg-3 col-form-label">BHK</label>
													<div class="col-lg-9">
														<select class="form-control" name="bhk">
															<option value="">Select BHK</option>
															<option value="1 BHK">1 BHK</option>
															<option value="2 BHK">2 BHK</option>
															<option value="3 BHK">3 BHK</option>
															<option value="4 BHK">4 BHK</option>
															<option value="5 BHK">5 BHK</option>
															<option value="1,2 BHK">1,2 BHK</option>
															<option value="2,3 BHK">2,3 BHK</option>
															<option value="2,3,4 BHK">2,3,4 BHK</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[922]" data-desc="btn_bedroom">Bedroom</ti></label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="bed" placeholder="Enter Bedroom  (only no 1 to 10)"  value="<?php echo $rbedroom; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[924]" data-desc="btn_balcony">Balcony</ti></label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="balc" placeholder="Enter Balcony  (only no 1 to 10)"  value="<?php echo $rbalcony; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[925]" data-desc="btn_select_status">Hall</ti></label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="hall" placeholder="Enter Hall  (only no 1 to 10)"  value="<?php echo $rhall; ?>">
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
														<input type="text" class="form-control" name="loc" placeholder="Enter Address" value="<?php echo $rlocation; ?>">
													</div>
												</div>
													
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[210]" data-desc="btn_city">City</ti></label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="city" placeholder="Enter City" value="<?php echo $rcity; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[211]" data-desc="btn_price_location">State</ti></label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="state" placeholder="Enter State" value="<?php echo $rstate; ?>">
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
												
										<hr><h5 class="text-secondary"><ti data-ison="stxt[980]" data-desc="btn_images_media">Images - Media</ti></h5>
								 
										 
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[955]" data-desc="btn_image">Image</ti></label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage" type="file" onchange="previewFile('tFimgA', 'fldImgA')" id="fldImgA">
														<img src="<?php echo $rpimage; ?>" style="float:left;" alt="Image preview..." id="tFimgA" class="icnxsmlbtn" onload="tImgClass(this);">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[955]" data-desc="btn_image">Image</ti></label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage2" type="file" onchange="previewFile('tFimgB', 'fldImgB')" id="fldImgB">
														<img src="<?php echo $rpimage1; ?>" style="float:left;" alt="Image preview..." id="tFimgB" class="icnxsmlbtn"  onload="tImgClass(this);">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[955]" data-desc="btn_image">Image</ti></label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage4" type="file" onchange="previewFile('tFimgC', 'fldImgC')" id="fldImgC">
														<img src="<?php echo $rpimage2; ?>" style="float:left;" alt="Image preview..." id="tFimgC" class="icnxsmlbtn"  onload="tImgClass(this);">
													</div>
												</div>
												<!-- more images accordian  -->
												
												
												<div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
        <button style="background-color: #eaf9f9;border: 1px solid #483c3c" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
        <div><i class="nav-material-icons coll-menu-item txtClrHdr" style="margin-right:4px;">&#xe39d</i><span class="txtClrGrey txtSmall"><ti data-ison="stxt[984]" data-desc="btn_more media">add more...</ti></span><br>
			 </div>

        </button>
        </h2>
        <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
        <div class="accordion-body">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[955]" data-desc="btn_image">Image</ti></label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage1" type="file" onchange="previewFile('tFimgD', 'fldImgD')" id="fldImgD">
														<img src="<?php echo $rpimage3; ?>" style="float:left;" alt="Image preview..." id="tFimgD" class="icnxsmlbtn"  onload="tImgClass(this);">
													</div>
												</div>
									 
								 
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[955]" data-desc="btn_image">Image</ti></label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage1" type="file" onchange="previewFile('tFimgE', 'fldImgE')" id="fldImgE">
														<img src="<?php echo $rpimage4; ?>" style="float:left;" alt="Image preview..." id="tFimgE" class="icnxsmlbtn" onload="tImgClass(this);">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[955]" data-desc="btn_image">Image</ti></label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage3" type="file" onchange="previewFile('tFimgF', 'fldImgF')" id="fldImgF">
														<img src="<?php echo $rmapimage; ?>" style="float:left;" alt="Image preview..." id="tFimgF" class="icnxsmlbtn" onload="tImgClass(this);">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[955]" data-desc="btn_image">Image</ti></label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage" type="file" onchange="previewFile('tFimgG', 'fldImgG')" id="fldImgG">
														<img src="<?php echo $rgroundmapimage; ?>" style="float:left;" alt="Image preview..." id="tFimgG" class="icnxsmlbtn"  onload="tImgClass(this);">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><ti data-ison="stxt[955]" data-desc="btn_image">Image</ti></label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage2" type="file" onchange="previewFile('tFimgH', 'fldImgH')" id="fldImgH">
														<img src="<?php echo $rtopmapimage; ?>" style="float:left;" alt="Image preview..." id="tFimgH" class="icnxsmlbtn" onload="tImgClass(this);">
													</div>
												</div>
												
												
	</div>
        </div>
    </div>
    						 
    
    
											<!--	end more images accordian -->

										
											<div style="margin: 0 auto;padding: 10px;"><input type="submit" value="Submit" class="btn btn-primary"name="add"></div>
										
								</div>
 