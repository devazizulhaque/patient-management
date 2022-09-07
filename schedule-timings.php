<?php
   include( "header.php" );
?>
	    <div class="page-content pt-0">
	        <div class="container">

	        	<!-- Top title col -->
	        	<div class="search-tag">
                	<div class="top-title">
                		<div class="left">
                			<div class="icon-col">
                				<img src="assets/images/calender-icon.svg" alt="">
                			</div>
                			<div class="text-col">
                				<h5>Çalışma Saatleri</h5>
                				<span>Müsait Zaman Dilimleri</span>
                			</div>
                		</div>
                		<div class="right">
                			<div class="progress-col">
								 <div class="c100 p35 very-small">
				                    <div class="progress-text">
				                    	<div>
				                    		<b>30</b>
				                    		<sub>Dk</sub>
				                    	</div>
				                    </div>
				                    <div class="slice">
				                        <div class="bar"></div>
				                        <div class="fill"></div>
				                    </div>
				                </div>
							</div>
                		</div>
                	</div>
				</div>
	        	<!-- /Top title col -->

	        	<!-- Schedule -->
	        	<div class="schedule-timings">
	        		<div class="container">
	        			<div class="block-title">Gün Seçiniz</div>
	        			<div class="swiper-container schedule-timings-slider">
							<div class="swiper-wrapper">
							    <div class="swiper-slide">
							        <label class="item-content">
							        	<div>
								        	<input type="checkbox" name="checkbox" value="Sun"/>
									        <div class="item-title">Pazartesi</div>
							        		<i class="icon icon-checkbox"></i>
							        	</div>
							      	</label>
							    </div>
							    <div class="swiper-slide">
							    	<label class="item-content">
							        	<div>
								        	<input type="checkbox" name="checkbox" value="Mon"/>
									        <div class="item-title">Salı</div>
							        		<i class="icon icon-checkbox"></i>
							        	</div>
							      	</label>
							    </div>
							    <div class="swiper-slide">
							    	<label class="item-content">
							        	<div>
								        	<input type="checkbox" name="checkbox" value="Tue"/>
									        <div class="item-title">Çarşamba</div>
							        		<i class="icon icon-checkbox"></i>
							        	</div>
							      	</label>
							    </div>
							    <div class="swiper-slide">
							    	<label class="item-content">
							        	<div>
								        	<input type="checkbox" name="checkbox" value="Wed"/>
									        <div class="item-title">Perşembe</div>
							        		<i class="icon icon-checkbox"></i>
							        	</div>
							      	</label>
							    </div>
							    <div class="swiper-slide">
							    	<label class="item-content">
							        	<div>
								        	<input type="checkbox" name="checkbox" value="Thu"/>
									        <div class="item-title">Cuma</div>
							        		<i class="icon icon-checkbox"></i>
							        	</div>
							      	</label>
							    </div>
							    <div class="swiper-slide">
							    	<label class="item-content">
							        	<div>
								        	<input type="checkbox" name="checkbox" value="Fri"/>
									        <div class="item-title">Cumartesi</div>
							        		<i class="icon icon-checkbox"></i>
							        	</div>
							      	</label>
							    </div>
							    <div class="swiper-slide">
							    	<label class="item-content">
							        	<div>
								        	<input type="checkbox" name="checkbox" value="Sat"/>
									        <div class="item-title">Pazar</div>
							        		<i class="icon icon-checkbox"></i>
							        	</div>
							      	</label>
							    </div>
						  	</div>
						</div>

						<div class="schedule-list">
							<div class="title-block">
								<div class="block-title">Zaman Dilimleri - Pazar</div>
								<div class="edit-col">
									<a data-toggle="modal" href="#edit_time_slot">
										<i class="fas fa-pencil-alt"></i> Düzenle
									</a>
								</div>
							</div>
							<ul>
								<li>
									<div class="inner-list">
										8:30 - 9:30
										<span class="clear-icon"><i class="far fa-times-circle"></i></span>
									</div>
								</li>
								<li>
									<div class="inner-list">
										11:30 - 12:30
										<span class="clear-icon"><i class="far fa-times-circle"></i></span>
									</div>
								</li>
								<li>
									<div class="inner-list">
										3:30 - 5:30
										<span class="clear-icon"><i class="far fa-times-circle"></i></span>
									</div>
								</li>
							</ul>
						</div>

						<div class="schedule-list">
							<div class="title-block">
								<div class="block-title">Time Slots - Thursday</div>
								<div class="edit-col">
									<a data-toggle="modal" href="#edit_time_slot">
										<i class="fas fa-pencil-alt"></i> Düzenle
									</a>
								</div>
							</div>
							<ul>
								<li>
									<div class="inner-list">
										8:30 - 9:30
										<span class="clear-icon"><i class="far fa-times-circle"></i></span>
									</div>
								</li>
								<li>
									<div class="inner-list">
										11:30 - 12:30
										<span class="clear-icon"><i class="far fa-times-circle"></i></span>
									</div>
								</li>
							</ul>
						</div>

	        		</div>
	        	</div>
	        	<!-- /Schedule -->

	        </div>
	    </div>

     </div>
    <!-- /Main wrapper -->

    <!-- Edit Time Slot Modal -->
	<div class="modal fade custom-modal" id="edit_time_slot">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Edit Time Slots</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="hours-info">
							<div class="row form-row hours-cont">
								<div class="col-12 col-md-10">
									<div class="row form-row">
										<div class="col-12 col-md-6">
											<div class="form-group">
												<label>Start Time</label>
												<select class="form-control">
													<option>-</option>
													<option selected>12.00 </option>
													<option>12.30 </option>  
													<option>1.00 </option>
													<option>1.30 </option>
												</select>
											</div> 
										</div>
										<div class="col-12 col-md-6">
											<div class="form-group">
												<label>End Time</label>
												<select class="form-control">
													<option>-</option>
													<option>12.00 </option>
													<option selected>12.30 </option>  
													<option>1.00 </option>
													<option>1.30 </option>
												</select>
											</div> 
										</div>
									</div>
								</div>
							</div>
							
							<div class="row form-row hours-cont">
								<div class="col-12 col-md-10">
									<div class="row form-row">
										<div class="col-12 col-md-6">
											<div class="form-group">
												<label>Start Time</label>
												<select class="form-control">
													<option>-</option>
													<option>12.00 </option>
													<option selected>12.30 </option>
													<option>1.00 </option>
													<option>1.30 </option>
												</select>
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="form-group">
												<label>End Time</label>
												<select class="form-control">
													<option>-</option>
													<option>12.00 </option>
													<option>12.30 </option>
													<option selected>1.00 </option>
													<option>1.30 </option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-2"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash w-100"><i class="far fa-trash-alt"></i></a></div>
							</div>

						</div>
						
						<div class="add-more mb-3 pt-1 pb-1">
							<a href="javascript:void(0);" class="add-hours"><i class="fa fa-plus-circle"></i> Add More</a>
						</div>
						<div class="submit-section text-center">
							<button type="submit" class="btn btn-primary submit-btn" data-dismiss="modal" aria-label="Close">Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Edit Time Slot Modal -->
	<?php
   include( "footer.php" );
?>