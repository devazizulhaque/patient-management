<?php
   include( "header-in.php" );
?>

<body>
    <div class="main-wrapper">

	<div class="page-content change-password-col register-col">
		<div class="list no-hairlines custom-form">
            <div class="back-btn"><a href="index.php" class="back link">
                <img src="assets/images/left-arrow-big-black.svg" alt=""></a>
            </div>

			<div class="logo">
					<a href="index.php"><img src="assets/images/logo.png" alt=""></a>
			</div>
            <div class="register-inner-col">
												<div class="section-title">
								<h3>
									Register
								</h3>
							</div>
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
						<div class="item-input-wrap submit-btn-col">
							<button type="button" class="btn btn-submit">Register</button>
						</div>
	                </li>
				</ul>
				<span class="login-back">Already have an account ? <a href="login.php">Login Now!</a></span>

            </div>
		</div>
	</div>

    </div>
    <!-- /Main wrapper -->
    <?php
   include( "footer.php" );
?>