<?php
   include( "header.php" );
?>
<style>
	/* Popup Open button */	
.open-button{
    color:#FFF;
    padding:10px;
    text-decoration:none;
    border:1px solid #0157ad;
    border-radius:3px;
}

.open-button:hover{
    background:#01478e;
}

.popup {
    position:fixed;
    top:0px;
    left:0px;
    background:rgba(0,0,0,0.75);
    width:100%;
    height:100%;
    display:none;
}

/* Popup inner div */
.popup-content-footer {
    width:90%;
    height:85%;
	font-size:13px;
    margin: 0 auto;
    box-sizing: border-box;
    padding: 40px;
    margin-top: 50px;
    box-shadow: 0px 2px 6px rgba(0,0,0,1);
    border-radius: 3px;
    background: #fff;
    position: relative;
	overflow-x: hidden;
	overflow-y: visible;

}

/* Popup close button */
.close-button {
    width: 35px;
    height: 35px;
    position: absolute;
    top: 10px;
    right: 10px;
    border-radius: 20px;
    background: rgba(0,0,0,0.8);
    font-size: 20px;
    text-align: center;
    color: #fff;
    text-decoration:none;
}

.close-button:hover {
    background: rgba(0,0,0,1);
}

@media screen and (max-width: 720px) {
.popup-content-footer {
    width:90%;
    }	
}
</style>

		<div class="page-content profile-settings">

			<!-- Profile settings -->
			<div class="container">
			 	<div class="tab-col">
				 	<ul class="nav nav-tabs">
					    <li><a href="#time-date" data-toggle="tab" class="active">Date and Time</a></li>  
					    <li><a href="#checkout" data-toggle="tab">Summary</a></li>
					    <li><a href="#reason" data-toggle="tab">Reason for visit</a></li>
					    <li><a href="#registration" data-toggle="tab">Registration</a></li>
					    <li><a href="#payment" data-toggle="tab">Checkout</a></li>
				  	</ul>
		  		</div>

		  		<div class="tab-content">
				    <div class="tab-pane active" id="time-date">
					    <div class="panel panel-default">
					        <div id="collapseOne" class="panel-collapse collapse in">
					          	<div class="panel-body">

					          		<div class="date-time-col">

							    		<div class="date-col-day">
							    			<div>
							    				<span  class="active">10</span>
							    				<sup>Mon</sup>
							    			</div>
							    			<div>
							    				<span>11</span>
							    				<sup>Tue</sup>
							    			</div>
							    			<div>
							    				<span>12</span>
							    				<sup>Wed</sup>
							    			</div>
							    			<div>
							    				<span>13</span>
							    				<sup>Thu</sup>
							    			</div>
							    			<div>
							    				<span>14</span>
							    				<sup>Fri</sup>
							    			</div>
							    			<div>
							    				<span>15</span>
							    				<sup>Sat</sup>
							    			</div>
							    			<div>
							    				<span>16</span>
							    				<sup>Sun</sup>
							    			</div>
							    		</div>
							    		<div class="timing-col">
							    			<div class="timing-box">
							    				<div class="inner-timing-box">

							    					<div class="from-to-col">
							    						<div>
							    							<span>Select Time</span>
							    							<input type="text" value="Now" style="background-color:green;color:white;" readonly>
							    						</div>

							    					</div>
							    					<div class="title-col">
							    						<span>Book Now</span>
							    						<span class="time-icon"><i class="far fa-clock"></i></span>
							    					</div>
							    				</div>
							    			</div>
							    			<div class="timing-box">
							    				<div class="inner-timing-box">

							    					<div class="from-to-col">
							    						<div>
							    							<span>Select Time</span>
							    							<input type="text" value="15 Min" readonly>
							    						</div>

							    					</div>
							    					<div class="title-col">
							    						<span>Book Now</span>
							    						<span class="time-icon"><i class="far fa-clock"></i></span>
							    					</div>
							    				</div>
							    			</div>
							    			<div class="timing-box">
							    				<div class="inner-timing-box">

							    					<div class="from-to-col">
							    						<div>
							    							<span>Select Time</span>
							    							<input type="text" value="30 Min" readonly>
							    						</div>

							    					</div>
							    					<div class="title-col">
							    						<span>Book Now</span>
							    						<span class="time-icon"><i class="far fa-clock"></i></span>
							    					</div>
							    				</div>
							    			</div>
							    			<div class="timing-box">
							    				<div class="inner-timing-box">

							    					<div class="from-to-col">
							    						<div>
							    							<span>Select Time</span>
							    							<input type="text" value="45 Min" readonly>
							    						</div>

							    					</div>
							    					<div class="title-col">
							    						<span>Book Now</span>
							    						<span class="time-icon"><i class="far fa-clock"></i></span>
							    					</div>
							    				</div>
							    			</div>
							    			<div class="timing-box">
							    				<div class="inner-timing-box">

							    					<div class="from-to-col">
							    						<div>
							    							<span>Select Time</span>
							    							<input type="text" value="60 Min" readonly>
							    						</div>

							    					</div>
							    					<div class="title-col">
							    						<span>Book Now</span>
							    						<span class="time-icon"><i class="far fa-clock"></i></span>
							    					</div>
							    				</div>
							    			</div>
							    			<div class="timing-box">
							    				<div class="inner-timing-box">

							    					<div class="from-to-col">
							    						<div>
							    							<span>Select Different Time</span><br>
															<select>
															<option value="-12:00">(GMT -12:00)</option>
															<option value="-11:00">(GMT -11:00)</option>
															<option value="-10:00">(GMT -10:00)</option>
															<option value="-09:50">(GMT -9:30)</option>
															<option value="-09:00">(GMT -9:00)</option>
															<option value="-08:00">(GMT -8:00)</option>
															<option value="-07:00">(GMT -7:00)</option>
															<option value="-06:00">(GMT -6:00)</option>
															<option value="-05:00">(GMT -5:00)</option>
															<option value="-04:50">(GMT -4:30)</option>
															<option value="-04:00">(GMT -4:00)</option>
															<option value="-03:50">(GMT -3:30)</option>
															<option value="-03:00">(GMT -3:00)</option>
															<option value="-02:00">(GMT -2:00)</option>
															<option value="-01:00">(GMT -1:00)</option>
															<option value="+00:00">(GMT)</option>
															<option value="+01:00">(GMT +1:00)</option>
															<option value="+02:00">(GMT +2:00)</option>
															<option value="+03:00">(GMT +3:00)</option>
															<option value="+03:50">(GMT +3:30)</option>
															<option value="+04:00">(GMT +4:00)</option>
															<option value="+04:50">(GMT +4:30)</option>
															<option value="+05:00">(GMT +5:00)</option>
															<option value="+05:50">(GMT +5:30)</option>
															<option value="+05:75">(GMT +5:45)</option>
															<option value="+06:00">(GMT +6:00)</option>
															<option value="+06:50">(GMT +6:30)</option>
															<option value="+07:00">(GMT +7:00)</option>
															<option value="+08:00">(GMT +8:00)</option>
															<option value="+08:75">(GMT +8:45)</option>
															<option value="+09:00">(GMT +9:00)</option>
															<option value="+09:50">(GMT +9:30)</option>
															<option value="+10:00">(GMT +10:00)</option>
															<option value="+10:50">(GMT +10:30)</option>
															<option value="+11:00">(GMT +11:00)</option>
															<option value="+11:50">(GMT +11:30)</option>
															<option value="+12:00">(GMT +12:00)</option>
															<option value="+12:75">(GMT +12:45)</option>
															<option value="+13:00">(GMT +13:00)</option>
															<option value="+14:00">(GMT +14:00)</option>
														</select>
														<select>
												        <option value="00">00</option>
														<option value="01">01</option>
														<option value="02">02</option>
														<option value="03">03</option>
														<option value="04">04</option>
														<option value="05">05</option>
														<option value="06">06</option>
														<option value="07">07</option>
														<option value="08">08</option>
														<option value="09">09</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="13">13</option>
														<option value="14">14</option>
														<option value="15">15</option>
														<option value="16">16</option>
														<option value="17">17</option>
														<option value="18">18</option>
														<option value="19">19</option>
														<option value="20">20</option>
														<option value="21">21</option>
														<option value="22">22</option>
														<option value="23">23</option>
												        </select>
														<select>
														<option value="00">00</option>
														<option value="15">15</option>
														<option value="30">30</option>
														<option value="45">45</option>
												        </select>
														  
													</div>
							    					</div>
							    					<div class="title-col">
							    						<span>Book Now</span>
							    						<span class="time-icon"><i class="far fa-clock"></i></span>
							    					</div>
							    				</div>
							    			</div>

							    		</div>
							    		<ul>
							    			<li class="bottom-button">
									    		<a href="#checkout" data-toggle="tab"><button class="btn">NEXT STEP</button></a>
									    	</li>
							    		</ul>
										<div class="invoice-info" style="padding-top:25px">
										<h6>In an emergency, do not book, please call 911</h6>
										</div>
							    	</div>
					          	</div>
					        </div>
					    </div>
					</div>

			        <div class="tab-pane" id="checkout">
				      	<div class="panel panel-default">
				        	<div id="collapseTwo" class="panel-collapse collapse">
				          		<div class="panel-body">

				          			<div class="doctor-widget doctor-dashboard">
										<div class="doc-info-left">
											<div class="doctor-img">
												<a class="doctor-img-profile" href="doctor-profile.php">
													<img src="assets/images/doctors/doctor-thumb-02.jpg" class="img-fluid img-circle" alt="User Image">
												</a>
											</div>
											<div class="doc-info-cont">

												<h4 class="doc-name"><a href="doctor-profile.php">Dr. Mehmet A.</a></h4>
												<div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<span class="d-inline-block average-rating">(637)</span>
												</div>
												<a href="doctor-profile.php"><div class="doc-info custom-info">
													<div class="doc-location">
														<p>MBBS, MD - General Medicine, DNB - Cardiology</p>
													</div>
												</div></a>
											</div>
										</div>
									</div>
									<div class="booking-summary">
										<div class="title-col">
											<h5>Summary</h5>
										</div>
										<div class="summary-col">
											<div class="summary-col-inner">
												<div>Date <span>15 Sep 2021</span></div>
												<div>Time<span>10:00 AM</span></div>
												<div>Visit type<span>Online Meeting</span></div>
												<div>Consultation Fee<span>  $49</span></div>
											</div>
										</div>

									</div>
									<ul>
						    			<li class="bottom-button two-button">
								    		<a href="#reason" data-toggle="tab"><button class="btn"><span>TOTAL  -  $49</span> <span>NEXT</span></button></a>
								    	</li>
						    		</ul>

				          		</div>
				          	</div>
				        </div>
				    </div>

			<div class="tab-pane" id="reason">
				      	<div class="panel panel-default">
				        	<div id="collapseTwo" class="panel-collapse collapse">
				          		<div class="panel-body">
				          			<div class="setting-widget">
							      		<div class="widget-title">
											<h5>Reason to Visit</h5>
										</div>
										<form>
											<ul>
												<li class="item-content item-input">
											      	<div class="item-col">
											        	<div class="item-input-wrap">
											          		<textarea placeholder="Please describe your illness shortly"></textarea>
											        	</div>
											      	</div>
											    </li>
											<li class="bottom-button">
								    		<a href="#registration" data-toggle="tab"><button class="btn"><span>NEXT STEP</span></button></a>
								    	</li>
											</ul>
										</form>
							      	</div>
				          		</div>
				          	</div>
				        </div>
			      	</div>				
					<div class="tab-pane page-content change-password-col register-col" id="registration">
						<div class="list no-hairlines custom-form">



							<div class="register-inner-col" style="padding: 0px 15px 20px;">

								<ul class="change-list">
								
									<li class="item-content item-input">
										<div class="item-col">
											<div class="item-input-wrap">
												<input type="text" placeholder="E-Mail">
												<div class="item-input-icon"><img src="assets/images/mail.svg" alt=""></div>
											</div>
										</div>
									</li>								
									<li class="item-content item-input">
										<div class="item-col">
											<div class="item-input-wrap">
												<input type="text" placeholder="Name and Surname">
												<div class="item-input-icon"><img src="assets/images/user-icon.svg" alt=""></div>
											</div>
										</div>
									</li>
									<li class="item-content item-input">
										<div class="item-col">
											<div class="item-input-wrap">
												<input type="tel" placeholder="Mobile Number">
												<div class="item-input-icon"><img src="assets/images/smartphone.svg" alt=""></div>
											</div>
										</div>
									</li>
												    <li class="item-content item-input">
												      	<div class="item-col">
												        	<div class="item-input-wrap input-dropdown-wrap">
												          		<select>
																	<option value="" disabled selected hidden>Gender</option>
												            		<option value="Male">Male</option>
												            		<option value="Female">Female</option>
												            		<option value="Other">Other</option>
																	
												          		</select>
																<div class="item-input-icon"><img src="assets/images/user-icon.svg" alt=""></div>
												        	</div>
												      	</div>
												    </li>
									<li class="item-content item-input">
										<div class="item-col">
											<div class="item-input-wrap">
												<input type="password" placeholder="Create Password">
												<div class="item-input-icon"><img src="assets/images/lock-icon.svg" alt=""></div>
											</div>
										</div>
									</li>
									<li class="item-content item-input">
										<div class="item-col">
											<div class="item-input-wrap">
												<input type="password" placeholder="Re-type Password">
												<div class="item-input-icon"><img src="assets/images/lock-icon.svg" alt=""></div>
											</div>
										</div>
									</li>
									
									<li class="item-content item-input">
									<li class="bottom-button">
									<a href="#payment" data-toggle="tab"><button class="btn">NEXT STEP</button></a>
									</li>
									</li>
				</ul>
				<span class="login-back">Already have an account ? <a href="login.php">Login Now!</a></span>

            </div>
		</div>
	</div>
	
	
	
				    <div class="tab-pane" id="payment">
	      				<div class="panel panel-default">
	        				<div id="collapseThree" class="panel-collapse collapse">
	          					<div class="panel-body">

	          						<div class="widget-title">
										<h5>Payment Information</h5>
									</div>
									<div class="setting-widget">
										<div class="list no-hairlines-md pricing-col no-border">
											<form>
											  	<ul>
											  		<li class="for-tab-fullwidth">
															<div>
								            					<div class="item-icon" align="center" ><img style="width: 50px;" src="assets/images/mastercard.svg" alt=""><img style="width: 50px;" src="assets/images/visa.svg" alt=""><img style="width: 50px;" src="assets/images/amex.svg" alt=""></div>
								            				</div>
													</li>
												    <li class="item-content item-input">
												      	<div class="item-col">
												        	<div class="item-title item-label">Name on Card <span>*</span></div>
												        	<div class="item-input-wrap">
												          		<input type="text">
												          		<span class="input-clear-button"></span>
												        	</div>
												      	</div>
												    </li>
												    <li class="item-content item-input">
												      	<div class="item-col">
												        	<div class="item-title item-label">Card Number <span>*</span></div>
												        	<div class="item-input-wrap">
												          		<input type="text" placeholder="1234 5678 9876 5432">
												          		<span class="input-clear-button"></span>
												        	</div>
												      	</div>
												    </li>
												    <li class="item-content item-input col-50 gender">
												      	<div class="item-col">
												        	<div class="item-title item-label">Expiry Month <span>*</span></div>
												        	<div class="item-input-wrap">
												          		<input type="text" placeholder="AA">
												          		<span class="input-clear-button"></span>
												        	</div>
												      	</div>
												    </li>
												    <li class="item-content item-input col-50 dob">
												      	<div class="item-col">
												        	<div class="item-title item-label">Expiry Year  <span>*</span></div>
												        	<div class="item-input-wrap">
												          		<input type="text" placeholder="YY">
												          		<span class="input-clear-button"></span>
												        	</div>
												      	</div>
												    </li>
												    <li class="item-content item-input">
												      	<div class="item-col">
												        	<div class="item-title item-label">CVV <span>*</span></div>
												        	<div class="item-input-wrap">
												          		<input type="text">
												          		<span class="input-clear-button"></span>
												        	</div>
												      	</div>
												    </li>
											  	</ul>
										  	</form>
										</div>
								    </div>

								    <div class="list acceptence-col">
								    	<ul>
									    	<li>
											    <label class="item-checkbox item-content">
											        <input type="checkbox" name="checkbox" value="accept" />
											        <i class="icon icon-checkbox"></i>
											        <div class="item-col">
											          <div class="item-title">I have read and accept <a popup-open="popup-5" href="javascript:void(0)">Terms & Conditions</a></div>
											        </div>
											    </label>
											</li>
										</ul>
								    </div>
								    <ul>
								    	<li class="bottom-button">
								    		<button onclick="window.location.href='booking-success.php'" class="btn">Confirm And Pay</button>
								    	</li>
									</ul>

	          					</div>
	          				</div>
	          			</div>
	          		</div>
<div class="popup" popup-name="popup-5">
					<div class="popup-content-footer">
					<h2 style="font-size:16px">Terms & Conditions</h2>
				<p>Paylaşmış olduğunuz e-posta adresiniz, sadece bu websitesindeki güncel gelişme ve bilgilerden haberdar olmanızı sağlamak amacıyla kullanılacaktır.<br> Gönderilecek her e-postada yer alan linki tıklamak suretiyle, bizden ileti almayı sonladırmanız mümkündür.Paylaşmış olduğunuz e-posta adresiniz, sadece bu websitesindeki güncel gelişme ve bilgilerden haberdar olmanızı sağlamak amacıyla kullanılacaktır.<br> Gönderilecek her e-postada yer alan linki tıklamak suretiyle, bizden ileti almayı sonladırmanız mümkündür.Paylaşmış olduğunuz e-posta adresiniz, sadece bu websitesindeki güncel gelişme ve bilgilerden haberdar olmanızı sağlamak amacıyla kullanılacaktır.<br> Gönderilecek her e-postada yer alan linki tıklamak suretiyle, bizden ileti almayı sonladırmanız mümkündür.Paylaşmış olduğunuz e-posta adresiniz, sadece bu websitesindeki güncel gelişme ve bilgilerden haberdar olmanızı sağlamak amacıyla kullanılacaktır.<br> Gönderilecek her e-postada yer alan linki tıklamak suretiyle, bizden ileti almayı sonladırmanız mümkündür.Paylaşmış olduğunuz e-posta adresiniz, sadece bu websitesindeki güncel gelişme ve bilgilerden haberdar olmanızı sağlamak amacıyla kullanılacaktır.<br> Gönderilecek her e-postada yer alan linki tıklamak suretiyle, bizden ileti almayı sonladırmanız mümkündür.Paylaşmış olduğunuz e-posta adresiniz, sadece bu websitesindeki güncel gelişme ve bilgilerden haberdar olmanızı sağlamak amacıyla kullanılacaktır.<br> Gönderilecek her e-postada yer alan linki tıklamak suretiyle, bizden ileti almayı sonladırmanız mümkündür.</p>
				<a class="close-button" popup-close="popup-5" href="javascript:void(0)">x</a>
					</div>
				</div>
				</div>

			</div>
			<!-- Profile settings -->
		</div>

	</div>
<script>
$(function() {
    // Open Popup
    $('[popup-open]').on('click', function() {
        var popup_name = $(this).attr('popup-open');
	$('[popup-name="' + popup_name + '"]').fadeIn(300);
    });

    // Close Popup
    $('[popup-close]').on('click', function() {
	var popup_name = $(this).attr('popup-close');
	$('[popup-name="' + popup_name + '"]').fadeOut(300);
    });
	
    // Close Popup When Click Outside
    $('.popup').on('click', function() {
	var popup_name = $(this).find('[popup-close]').attr('popup-close');
	$('[popup-name="' + popup_name + '"]').fadeOut(300);
    }).children().click(function() {
	return false;
    });
	
});
</script>
    <!-- /Main wrapper -->
	<?php
   include( "footer.php" );
?>