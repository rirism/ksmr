<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>
<title>Forget | Sistem Informasi Pengawasan Treasuri/Market</title>
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
								<img src="assets/img/bg/bg-02.png" class="bg-2" alt="Img">
								<!--<img src="assets/img/bg/bg-03.png" class="bg-3" alt="Img">-->
							</div>
							<div class="authentication-card w-100">
								<div class="authen-overlay-item border w-100">
									<h1 class="text-white display-1 text-center">Sistem Informasi <br>Pengawasan Treasuri/Market</h1>
									<div class="my-4 mx-auto authen-overlay-img">
										<img src="assets/img/BI/bg.png" alt="Img">
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
								<form action="email-verification.php" class="vh-100">
									<div class="vh-100 d-flex flex-column justify-content-between p-4 pb-0">
										<div class=" mx-auto mb-5 text-center">
											<img src="assets/img/BI/dsmm-trans.png" width="150" height="100"
												class="img-fluid" alt="Logo">
										</div>
										<div class="">
											<div class="text-center mb-3">
												<h2 class="mb-2">Forgot Password?</h2>
												<p class="mb-0">If you forgot your password, well, then we'll email you instructions to reset your password.</p>
											</div>
											<div class="mb-3">
												<label class="form-label">Email Address</label>
												<div class="input-group">
													<input type="text" value="" class="form-control border-end-0">
													<span class="input-group-text border-start-0">
														<i class="ti ti-mail"></i>
													</span>
												</div>
											</div>
											<div class="mb-3">
												<button type="submit" class="btn btn-primary w-100">Submit</button>
											</div>
											<div class="text-center">
												<h6 class="fw-normal text-dark mb-0">Return to
													<a href="login.php" class="hover-a">Sign In</a>
												</h6>
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