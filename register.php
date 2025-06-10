<?php include 'layouts/session.php'; 
include 'layouts/config.php';
include 'layouts/head-main.php'; 
?>
<head>
<title>Register | Sistem Informasi Pengawasan Treasuri/Market</title>
 <?php include 'layouts/title-meta.php'; ?>
 <?php include 'layouts/head-css.php'; ?>
</head>
<body class="bg-white">
<div id="global-loader" style="display: none;">
		<div class="page-loader"></div>
	</div>

    <div class="main-wrapper">
   
    <div class="container-fuild">
			<div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
				<div class="row">
					<div class="col-lg-5">
						<div class="login-background position-relative d-lg-flex align-items-center justify-content-center d-none flex-wrap vh-100">
							<div class="bg-overlay-img">
								<img src="assets/img/bg/bg-01.png" class="bg-1" alt="Img">
								<!--<img src="assets/img/bg/bg-02.png" class="bg-2" alt="Img">
								<img src="assets/img/bg/bg-03.png" class="bg-3" alt="Img">-->
							</div>
							<div class="authentication-card w-100">
								<div class="authen-overlay-item border w-100">
									<h1 class="text-white  text-center">Sistem Informasi <br>Pengawasan Treasuri/Market</h1>
									<div class="my-4 mx-auto authen-overlay-img">
										<img src="assets/img/BI/market2.png" alt="Img">
									</div>
									<div>
										<p class="text-white fs-20 fw-semibold text-center">Departemen Surveilans Makroprudensial, Moneter, dan Market. <br> Bank Indonesia</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-7 col-md-12 col-sm-12">
						<div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap">
							<div class="col-md-7 mx-auto vh-100">
								<form action="proses-daftar.php" method="POST" class="vh-100">
									<div class="vh-100 d-flex flex-column justify-content-between p-4 pb-0">
										<div class=" mx-auto mb-5 text-center">
											<img src="assets/img/BI/dsmm-trans.png" width="150" height="100"
												class="img-fluid" alt="Logo">
										</div>
										<div class="">
											<div class="text-center mb-3">
												<h2 class="mb-2">Sign Up</h2>
												<p class="mb-0">Please enter your details to sign up</p>
											</div>
											<div class="mb-3">
												<label for="firsname" class="form-label">Nama Depan</label>
												<div class="input-group">
													<input type="text" class="form-control border-end-0" type="firstname" required="" id="firstname" name="firstname" placeholder="Enter your name">
													<span class="input-group-text border-start-0">
														<i class="ti ti-user"></i>
													</span>
												</div>
											</div>
											<div class="mb-3">
												<label for="lastname" class="form-label">Nama Belakang</label>
												<div class="input-group">
													<input type="text" class="form-control border-end-0" type="lastname" required="" id="lastname" name="lastname" placeholder="Enter your name">
													<span class="input-group-text border-start-0">
														<i class="ti ti-user"></i>
													</span>
												</div>
											</div>
											<div class="mb-3">
												<label for="username" class="form-label">Username</label>
												<div class="input-group">
													<input type="text" class="form-control border-end-0" type="username" required="" id="username" name="username" placeholder="Enter your username">
													<span class="input-group-text border-start-0">
														<i class="ti ti-user"></i>
													</span>
												</div>
											</div>
											<div class="mb-3">
												<label for="email" class="form-label">Email</label>
												<div class="input-group">
													<input type="text" class="form-control border-end-0" type="email" required="" id="email" name="email" placeholder="Enter your email">
													<span class="input-group-text border-start-0">
														<i class="ti ti-mail"></i>
													</span>
												</div>
											</div>
											<div class="mb-3">
												<label for="password" class="form-label">Password</label>
												<div class="pass-group">
													<input type="password" class="pass-input form-control" type="password" required="" id="password" name="password" placeholder="Enter your password">
													<span class="ti toggle-password ti-eye-off"></span>
												</div>
											</div>
											<div class="d-flex align-items-center justify-content-between mb-3">
												<div class="d-flex align-items-center">
													<div class="form-check form-check-md mb-0">
														<input class="form-check-input" id="remember_me" type="checkbox">
														<label for="remember_me" class="form-check-label text-dark mt-0">Agree to <span class="text-primary">Terms & Privacy</span></label>
													</div>
												</div>
											</div>
											<div class="mb-3">
												<button type="submit" class="btn btn-primary w-100">Sign Up</button>
											</div>
											<div class="text-center">
												<h6 class="fw-normal text-dark mb-0">Already have an account?
													<a href="login.php" class="hover-a">Sign In</a>
												</h6>
											</div>
											<div class="login-or">
												<span class="span-or">Or</span>
											</div>
											<div class="mt-2">
												<div class="d-flex align-items-center justify-content-center flex-wrap">
													<div class="text-center me-2 flex-fill">
														<a href="javascript:void(0);"
															class="br-10 p-2 btn btn-info d-flex align-items-center justify-content-center">
															<img class="img-fluid m-1" src="assets/img/icons/facebook-logo.svg" alt="Facebook">
														</a>
													</div>
													<div class="text-center me-2 flex-fill">
														<a href="javascript:void(0);"
															class="br-10 p-2 btn btn-outline-light border d-flex align-items-center justify-content-center">
															<img class="img-fluid m-1" src="assets/img/icons/google-logo.svg" alt="Facebook">
														</a>
													</div>
													<div class="text-center flex-fill">
														<a href="javascript:void(0);"
															class="bg-dark br-10 p-2 btn btn-dark d-flex align-items-center justify-content-center">
															<img class="img-fluid m-1" src="assets/img/icons/apple-logo.svg" alt="Apple">
														</a>
													</div>
												</div>
											</div>
										</div>
                                        <div class="mt-5 pb-4 text-center">
											<p class="mb-0 text-gray-9">© 2025 DSMM-KSMR. All Rights Reserved.</p>
										</div>
									</div>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>


    </div>
<!-- end main wrapper-->
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
</body>
</html>