<?php
   include( "header-in.php" );
?>

<body>
    <div class="main-wrapper">

    	<div class="page-content change-password-col register-col">
    		<div class="list no-hairlines custom-form">
                <div class="back-btn"><a href="index.php" class="back link">
                   							<span class="material-symbols-outlined">
arrow_back_ios
</span>
                </div>

    			<div class="logo">
					<a href="index.php"><img src="assets/images/logo.png" alt=""></a>
    			</div>
                <div class="register-inner-col">

    				<ul class="change-list">
												<div class="section-title">
								<h3>
									Login
								</h3>
							</div>
                        <li class="item-content item-input">
                            <div class="item-col">
                                <div class="item-input-wrap">
                                    <input type="text" placeholder="Email">
                                    <div class="item-input-icon"><img src="assets/images/email.svg" alt=""></div>
                                </div>
                            </div>
                        </li>
    					<li class="item-content item-input">
    						<div class="item-col">
    							<div class="item-input-wrap">
    								<input type="password" placeholder="Password">
    								<div class="item-input-icon"><img src="assets/images/lock-icon.svg" alt=""></div>
    							</div>
    						</div>
    					</li>
                        <li class="col-50 save-password">
                        </li>
                        <li class="col-50 forgot-password">
                            <a href="forgot-password.php">Forgot Password ?</a>
                        </li>
    					<li class="item-content item-input">
    						<div class="item-input-wrap submit-btn-col">
    							<button type="button" class="btn btn-submit">Login Now</button>
    						</div>
    	                </li>
    				</ul>
    				<span class="login-back">Don't have an login ? <a href="register.php">Signup Now!</a></span>

                </div>
    		</div>
    	</div>

    </div>
    <!-- /Main wrapper -->
    <?php
   include( "footer.php" );
?>