<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>
<title>Smarthr Admin Template</title>
 <?php include 'layouts/title-meta.php'; ?>
 <?php include 'layouts/head-css.php'; ?>
</head>
<body class="bg-linear-gradiant">
<div id="global-loader" style="display: none;">
		<div class="page-loader"></div>
	</div>

    <div class="main-wrapper">
    <div class="container-fuild">
			<div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
				<div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap ">
					<div class="col-md-4 mx-auto vh-100">
						<form action="reset-password-3.php" class="digit-group vh-100">
							<div class="vh-100 d-flex flex-column justify-content-between p-4 pb-0">
								<div class=" mx-auto mb-5 text-center">
									<img src="assets/img/logo.svg"
										class="img-fluid" alt="Logo">
								</div>
								<div class="">
									<div class="text-center mb-3">
										<h2 class="mb-2">2 Step Verification</h2>
										<p class="mb-0">Please enter the OTP received to confirm your account ownership. A code has been send to ******doe@example.com</p>
									</div>
									<div class="text-center otp-input">
										<div class="d-flex align-items-center mb-3">
											<input type="text" class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold me-3" id="digit-1" name="digit-1" data-next="digit-2" maxlength="1">
											<input type="text" class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold me-3" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" maxlength="1">
											<input type="text" class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold me-3" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" maxlength="1">
											<input type="text" class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3" maxlength="1">
										</div>
										<div>
											<div class="badge bg-danger-transparent mb-3">
												<p class="d-flex align-items-center "><i class="ti ti-clock me-1"></i>09:59</p>
											</div>
											<div class="mb-3 d-flex justify-content-center">
												<p class="text-gray-9">Didn't get the OTP? <a href="javascript:void(0);" class="text-primary">Resend OTP</a></p>
											</div>
										</div>
									</div>
									<div class="mb-3">
										<button type="submit" class="btn btn-primary w-100">Verify & Proceed</button>
									</div>
								</div>
								<div class="mt-5 pb-4 text-center">
									<p class="mb-0 text-gray-9">Copyright &copy; 2024 - Smarthr</p>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
    </div>
<!-- end main wrapper-->
<!-- JAVASCRIPT -->
<script src="assets/js/otp.js"></script>
<?php include 'layouts/vendor-scripts.php'; ?>
</body>
</html>