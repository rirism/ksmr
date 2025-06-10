<?php
    $link = $_SERVER['PHP_SELF'];
    $link_array = explode('/',$link);
    $page = end($link_array);
?>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
			<!-- Logo -->
			<div class="sidebar-logo">
				<a href="admin-dashboard.php" class="logo logo-normal">
					<img src="assets/img/BI/dsmm-trans.png" alt="Logo" width="100" height="100">
				</a>
				<a href="admin-dashboard.php" class="logo-small">
					<img src="assets/img/BI/favicondsmm.png" alt="Logo">
				</a>
				<a href="admin-dashboard.php" class="dark-logo">
					<img src="assets/img/BI/favicondsmm.png" alt="Logo">
				</a>
			</div>
			<!-- /Logo -->
			<div class="modern-profile p-3 pb-0">
				<div class="text-center rounded bg-light p-3 mb-4 user-profile">
					<div class="avatar avatar-lg online mb-3">
						<img src="assets/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
					</div>
					<h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
					<p class="fs-10">System Admin</p>
				</div>
				<div class="sidebar-nav mb-3">
					<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified bg-transparent" role="tablist">
						<li class="nav-item"><a class="nav-link active border-0" href="#">Menu</a></li>
						<li class="nav-item"><a class="nav-link border-0" href="chat.php">Chats</a></li>
						<li class="nav-item"><a class="nav-link border-0" href="email.php">Inbox</a></li>
					</ul>
				</div>
			</div>
			<div class="sidebar-header p-3 pb-0 pt-2">
				<div class="text-center rounded bg-light p-2 mb-4 sidebar-profile d-flex align-items-center">
					<div class="avatar avatar-md onlin">
						<img src="assets/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
					</div>
					<div class="text-start sidebar-profile-info ms-2">
						<h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
						<p class="fs-10">System Admin</p>
					</div>
				</div>
				<div class="input-group input-group-flat d-inline-flex mb-4">
					<span class="input-icon-addon">
						<i class="ti ti-search"></i>
					</span>
					<input type="text" class="form-control" placeholder="Search in HRMS">
					<span class="input-group-text">
						<kbd>CTRL + / </kbd>
					</span>
				</div>
				<div class="d-flex align-items-center justify-content-between menu-item mb-3">
					<div class="me-3">
						<a href="calendar.php" class="btn btn-menubar">
							<i class="ti ti-layout-grid-remove"></i>
						</a>
					</div>
					<div class="me-3">
						<a href="chat.php" class="btn btn-menubar position-relative">
							<i class="ti ti-brand-hipchat"></i>
							<span class="badge bg-info rounded-pill d-flex align-items-center justify-content-center header-badge">5</span>
						</a>
					</div>
					<div class="me-3 notification-item">
						<a href="activity.php" class="btn btn-menubar position-relative me-1">
							<i class="ti ti-bell"></i>
							<span class="notification-status-dot"></span>
						</a>
					</div>
					<div class="me-0">
						<a href="email.php" class="btn btn-menubar">
							<i class="ti ti-message"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="menu-title"><span>MENU UTAMA</span></li>
						<li>
							<ul>
                                <li class="<?php echo ($page == 'beranda.php') ? 'active' : ''; ?>">
									<a href="beranda.php">
										<i class="ti ti-smart-home"></i><span>Beranda</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="menu-title"><span>PENGAWASAN</span></li>
						<li>
							<ul>
								<li  class="<?php echo ($page == 'bank.php') ? 'active' : ''; ?>">
									<a href="bank.php">
										<i class="ti ti-cash"></i><span>Daftar Bank</span>
									</a>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class="<?php echo ($page == 'dealer-utama.php' || $page == 'chart-js.php' || $page == 'chart-morris.php' || $page == 'chart-flot.php' || $page == 'chart-peity.php' || $page == 'chart-c3.php') ? 'subdrop active' : ''; ?>">
										<i class="ti ti-chart-line"></i>
										<span>Dashboard</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li>
											<a href="dealer-utama.php" class="<?php echo ($page == 'dealer-utama.php') ? 'active' : ''; ?>">Dealer Utama</a>
										</li>
										<li>
											<a href="chart-c3.php" class="<?php echo ($page == 'chart-c3.php') ? 'active' : ''; ?>">30 Bank Besar</a>
										</li>
										<li>
											<a href="chart-js.php" class="<?php echo ($page == 'chart-js.php') ? 'active' : ''; ?>">Bappebti</a>
										</li>
										<li>
											<a href="chart-morris.php" class="<?php echo ($page == 'chart-morris.php') ? 'active' : ''; ?>">FMI</a>
										</li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class="<?php echo ($page == 'expenses-report.php'||$page == 'invoice-report.php'||$page == 'payment-report.php'||$page == 'project-report.php'||$page == 'task-report.php'||$page == 'user-report.php'||$page == 'employee-report.php'||$page == 'payslip-report.php'||$page == 'attendance-report.php'||$page == 'leave-report.php'||$page == 'daily-report.php') ? 'active subdrop' : ''; ?>">
										<i class="ti ti-user-star"></i><span>Laporan</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="expenses-report.php" class="<?php echo ($page == 'expenses-report.php') ? 'active' : ''; ?>">Expense Report</a></li>
										<li><a href="invoice-report.php" class="<?php echo ($page == 'invoice-report.php') ? 'active' : ''; ?>">Invoice Report</a></li>
										<li><a href="payment-report.php" class="<?php echo ($page == 'payment-report.php') ? 'active' : ''; ?>">Payment Report</a></li>
										<li><a href="project-report.php" class="<?php echo ($page == 'project-report.php') ? 'active' : ''; ?>">Project Report</a></li>
										<li><a href="task-report.php" class="<?php echo ($page == 'task-report.php') ? 'active' : ''; ?>">Task Report</a></li>
										<li><a href="user-report.php" class="<?php echo ($page == 'user-report.php') ? 'active' : ''; ?>">User Report</a></li>
										<li><a href="employee-report.php" class="<?php echo ($page == 'employee-report.php') ? 'active' : ''; ?>">Employee Report</a></li>
										<li><a href="payslip-report.php" class="<?php echo ($page == 'payslip-report.php') ? 'active' : ''; ?>">Payslip Report</a></li>
										<li><a href="attendance-report.php" class="<?php echo ($page == 'attendance-report.php') ? 'active' : ''; ?>">Attendance Report</a></li>
										<li><a href="leave-report.php" class="<?php echo ($page == 'leave-report.php') ? 'active' : ''; ?>">Leave Report</a></li>
										<li><a href="daily-report.php" class="<?php echo ($page == 'daily-report.php') ? 'active' : ''; ?>">Daily Report</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</div>
				</div>
			</div>
		</div>
		<!-- /Stacked Sidebar -->
