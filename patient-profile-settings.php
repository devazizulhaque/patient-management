<?php
   include( "header.php" );
?>

		<div class="page-content profile-settings pt-0">

			<!-- Profile settings -->
			<div class="container">

			 	<div class="tabs-animated-wrap">
				    <div class="tabs">

					    <div id="Basic-info" class="page-content tab tab-active pt-0 pb-15">
					    	<div class="setting-widget">
								<div class="list no-hairlines-md">
									<div class="widget-title">
										<h5>Basic Information</h5>
									</div>
									<div class="file-upload">
										<a href="doctor-profile.php" class="file-upload-img">
											<img src="assets/images/doctors/doctor-thumb-02.jpg" class="img-fluid img-circle" width="85" alt="User Image">
											<span class="cam-icon"><img src="assets/images/placeholder-small.svg" alt=""></span>
										</a>
									</div>
									<form>
									  	<ul>
										    <li class="item-content item-input">
										      	<div class="item-col">
										        	<div class="item-title item-label">Username <span>*</span></div>
										        	<div class="item-input-wrap">
										          		<input type="text">
										          		<span class="input-clear-button"></span>
										        	</div>
										      	</div>
										    </li>
										    <li class="item-content item-input">
										      	<div class="item-col">
										        	<div class="item-title item-label">E-mail <span>*</span></div>
										        	<div class="item-input-wrap">
										          		<input type="email">
										          		<span class="input-clear-button"></span>
										        	</div>
										      	</div>
										    </li>
										    <li class="item-content item-input">
										      	<div class="item-col">
										        	<div class="item-title item-label">First Name <span>*</span></div>
										        	<div class="item-input-wrap">
										          		<input type="text">
										          		<span class="input-clear-button"></span>
										        	</div>
										      	</div>
										    </li>
										    <li class="item-content item-input">
										      	<div class="item-col">
										        	<div class="item-title item-label">Last Name <span>*</span></div>
										        	<div class="item-input-wrap">
										          		<input type="text">
										          		<span class="input-clear-button"></span>
										        	</div>
										      	</div>
										    </li>
										    <li class="item-content item-input">
										      	<div class="item-col">
										        	<div class="item-title item-label">Phone Number</div>
										        	<div class="item-input-wrap">
										          		<input type="tel">
										          		<span class="input-clear-button"></span>
										        	</div>
										      	</div>
										    </li>
										    <li class="item-content item-input col-50 gender">
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
										    <li class="item-content item-input col-50 dob">
										      	<div class="item-col">
										        	<div class="item-title item-label">From</div>
										        	<div class="item-input-wrap date-picker-col">
										          		<input type="text" name="date" id="date" data-select="datepicker">
								            			<span class="calendar-icon"><img src="assets/images/icon-metro-calendar-big.svg" alt=""></span>
										        	</div>
										      	</div>
										    </li>
										    <li class="bottom-button">
										    	<button class="btn">Done</button>
										    </li>
									  	</ul>
								  	</form>
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