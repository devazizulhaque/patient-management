<?php
   include( "header.php" );
?>


		<div class="page-content profile-settings">

			<!-- Profile settings -->
			<div class="container">
				<div class="tab-col">
				 	<ul class="nav nav-tabs">
					    <li><a href="#basic-info" data-toggle="tab" class="active">Basic Info</a></li>  
					    <li><a href="#contact-details" data-toggle="tab">Contact Details</a></li>
				  	</ul>
			  	</div>

			 	<div class="tab-content">

			 		<div class="tab-pane active" id="basic-info">
				    	<div class="panel panel-default">
				    		<div id="collapseOne" class="panel-collapse collapse in">
				          		<div class="panel-body">
				          			<div class="setting-widget">
										<div class="list no-hairlines-md">
											<div class="widget-title">
												<h5>Basic Information</h5>
											</div>
											<div class="file-upload">
												<a href="patient-profile.php" class="file-upload-img">
													 <input type="file" name="fileToUpload" id="fileToUpload"><img src="assets/images/patient-thumb-02.jpg" class="img-fluid img-circle" width="85" alt="User Image">
													<span class="cam-icon"><img src="assets/images/placeholder-small.svg" alt=""></span>
												</a>
											</div>
											<form>
											  	<ul>
												    <li class="item-content item-input">
												      	<div class="item-col">
												        	<div class="item-title item-label">E-Mail <span>*</span></div>
												        	<div class="item-input-wrap">
												          		<input type="text">
												          		<span class="input-clear-button"></span>
												        	</div>
												      	</div>
												    </li>
												    <li class="item-content item-input">
												      	<div class="item-col">
												        	<div class="item-title item-label">Name and Surname<span>*</span></div>
												        	<div class="item-input-wrap">
												          		<input type="email">
												          		<span class="input-clear-button"></span>
												        	</div>
												      	</div>
												    </li>
												    <li class="item-content item-input">
												      	<div class="item-col">
												        	<div class="item-title item-label">Mobile Number <span>*</span></div>
												        	<div class="item-input-wrap">
												          		<input type="text">
												          		<span class="input-clear-button"></span>
												        	</div>
												      	</div>
												    </li>
												  <li class="item-content item-input gender">
												      	<div class="item-col">
												        	<div class="item-title item-label">Gender</div>
												        	<div class="item-input-wrap input-dropdown-wrap">
												          		<select>
												            		<option value="Male">Male</option>
												            		<option value="Female">Female</option>
												          		</select>
												        	</div>
												      	</div>
												    </li>

												    <li class="bottom-button">
												    	<button class="btn">Save</button>
												    </li>
											  	</ul>
										  	</form>
										</div>
								    </div>
				          		</div>
				          	</div>
				    	</div>
					</div>
				    <div class="tab-pane" id="contact-details">
					  	<div class="panel panel-default">
					    	<div id="collapseFour" class="panel-collapse collapse">
					      		<div class="panel-body">
					      			<div class="setting-widget">
							      		<div class="widget-title">
											<h5>Contact Details</h5>
										</div>
										<form>
											<ul>
												<li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">Address Line 1</div>
											        	<div class="item-input-wrap">
											          		<input type="text">
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">Address Line 2</div>
											        	<div class="item-input-wrap">
											          		<input type="text">
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">City</div>
											        	<div class="item-input-wrap">
											          		<input type="text">
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">State / Province</div>
											        	<div class="item-input-wrap">
											          		<input type="text">
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">Country</div>
											        	<div class="item-input-wrap">
											          		<input type="text">
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>
											    <li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-title item-label">Postal Code</div>
											        	<div class="item-input-wrap">
											          		<input type="text">
											          		<span class="input-clear-button"></span>
											        	</div>
											      	</div>
											    </li>
											    <li class="bottom-button">
											    	<button class="btn">Save</button>
											    </li>
											</ul>
										</form>
							      	</div>
					      		</div>
					      	</div>
					    </div>
					</div>

				

					

				

				
					</div>

			 	</div>

			</div>
			<!-- Profile settings -->

		</div>

	</div>
    <!-- /Main wrapper -->
	<?php
   include( "footer.php" );
?>