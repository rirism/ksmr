<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>
<title>Smarthr Admin Template</title>
 <?php include 'layouts/title-meta.php'; ?>
 <?php include 'layouts/head-css.php'; ?>
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
                        <h2 class="mb-1">Timeline</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Pages
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Timeline</li>
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


                <div class="card">
                    <div class="card-body schedule-timeline">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center active-time">
                                <span class="timeline-date text-dark">24 Sep 2024</span>
                                <span class="timeline-border d-flex align-items-center justify-content-center bg-white">
                                    <i class="ti ti-point-filled text-gray-2 fs-18"></i>
                                </span>
                            </div>
                            <div class="flex-fill ps-3 pb-4 timeline-hrline">
                                <div class="mt-4">
                                    <p class="fw-medium text-gray-9 mb-1">Documentation</p>
                                    <span>Document system processes, policies, and procedures.</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center active-time">
                                <span class="timeline-date text-dark">20 Sep 2024</span>
                                <span class="timeline-border d-flex align-items-center justify-content-center bg-white">
                                    <i class="ti ti-point-filled text-gray-2 fs-18"></i>
                                </span>
                            </div>
                            <div class="flex-fill ps-3 pb-4 timeline-hrline">
                                <div class="mt-4">
                                    <p class="fw-medium text-gray-9 mb-1">Testing and Quality Assurance</p>
                                    <span> Perform unit testing, integration testing, and user acceptance testing</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center active-time">
                                <span class="timeline-date text-dark">10 Sep 2024</span>
                                <span class="timeline-border d-flex align-items-center justify-content-center bg-white">
                                    <i class="ti ti-point-filled text-gray-2 fs-18"></i>
                                </span>
                            </div>
                            <div class="flex-fill ps-3 pb-4 timeline-hrline">
                                <div class="mt-4">
                                    <p class="fw-medium text-gray-9 mb-1"> System Design and Configuration</p>
                                    <span>Set up modules, workflows, and user roles</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center active-time">
                                <span class="timeline-date text-dark">02 Sep 2024</span>
                                <span class="timeline-border d-flex align-items-center justify-content-center bg-white">
                                    <i class="ti ti-point-filled text-gray-2 fs-18"></i>
                                </span>
                            </div>
                            <div class="flex-fill ps-3 pb-4 timeline-hrline">
                                <div class="mt-4">
                                    <p class="fw-medium text-gray-9 mb-1">Requirements Gathering</p>
                                    <span> Collect requirements from HR, IT, and end-users.</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center active-time">
                                <span class="timeline-date text-dark">01 Sep 2024</span>
                                <span class="timeline-border d-flex align-items-center justify-content-center bg-white">
                                    <i class="ti ti-point-filled text-gray-2 fs-18"></i>
                                </span>
                            </div>
                            <div class="flex-fill ps-3 pb-4 timeline-hrline">
                                <div class="mt-4">
                                    <p class="fw-medium text-gray-9 mb-1">Planning and Preparation</p>
                                    <span>Identify objectives, deliverables, and stakeholders.</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-fill ps-3 pb-0 timeline-hrline"></div>
                        </div>
                    </div>
                </div>
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
</body>
</html>