<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>
<title>Smarthr Admin Template</title>
 <?php include 'layouts/title-meta.php'; ?>
 <?php include 'layouts/head-css.php'; ?>
  <!-- Fancybox CSS -->
  <link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">

</head>
<body>
<div id="global-loader" style="display: none;">
		<div class="page-loader"></div>
	</div>

    <div class="main-wrapper">
    <?php include 'layouts/menu.php'; ?>
   
     <!-- Page Wrapper -->
     <div class="page-wrapper">
            <div class="content">

                <!-- Breadcrumb -->
                <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Gallery</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Pages
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="head-icons ms-2">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
                <!-- /Breadcrumb -->

                <!-- Gallery -->
                <div class="card">
                    <div class="card-body">
                        <div class="row row-gap-4 justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="assets/img/social/gallery.jpg" data-fancybox="gallery" class="gallery-item">
                                    <img src="assets/img/social/gallery.jpg" class="img-fluid rounded w-100" alt="img">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="assets/img/social/gallery-06.jpg" data-fancybox="gallery" class="gallery-item">
                                    <img src="assets/img/social/gallery-06.jpg" class="img-fluid rounded w-100" alt="img">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="assets/img/social/gallery-07.jpg" data-fancybox="gallery" class="gallery-item">
                                    <img src="assets/img/social/gallery-07.jpg" class="img-fluid rounded w-100" alt="img">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="assets/img/social/gallery-08.jpg" data-fancybox="gallery" class="gallery-item">
                                    <img src="assets/img/social/gallery-08.jpg" class="img-fluid rounded w-100" alt="img">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="assets/img/social/gallery-09.jpg" data-fancybox="gallery" class="gallery-item">
                                    <img src="assets/img/social/gallery-09.jpg" class="img-fluid rounded w-100" alt="img">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="assets/img/social/gallery-05.jpg" data-fancybox="gallery" class="gallery-item">
                                    <img src="assets/img/social/gallery-05.jpg" class="img-fluid rounded w-100" alt="img">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="assets/img/social/gallery-10.jpg" data-fancybox="gallery" class="gallery-item">
                                    <img src="assets/img/social/gallery-10.jpg" class="img-fluid rounded w-100" alt="img">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="assets/img/social/gallery-11.jpg" data-fancybox="gallery" class="gallery-item">
                                    <img src="assets/img/social/gallery-11.jpg" class="img-fluid rounded w-100" alt="img">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="assets/img/social/gallery-12.jpg" data-fancybox="gallery" class="gallery-item">
                                    <img src="assets/img/social/gallery-12.jpg" class="img-fluid rounded w-100" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Gallery -->

            </div>

            <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>
        </div>
        <!-- /Page Wrapper -->


    </div>
<!-- end main wrapper-->
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
  <!-- Fancybox JS -->
  <script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>

</body>
</html>