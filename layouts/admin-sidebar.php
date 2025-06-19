<?php
$link = $_SERVER['PHP_SELF'];
$link_array = explode('/', $link);
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
					<span
						class="badge bg-info rounded-pill d-flex align-items-center justify-content-center header-badge">5</span>
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
						<li class="<?php echo ($page == 'admin-dashboard.php') ? 'active' : ''; ?>">
							<a href="admin-dashboard.php">
								<i class="ti ti-smart-home"></i><span>Beranda</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="menu-title"><span>Pengelolaan Aplikasi</span></li>
				<li>
					<ul>
						<li class="submenu">
							<a href="javascript:void(0);"
								class=" <?php echo ($page == 'pegawai.php' || $page == 'pangkat.php' || $page == 'jabatan.php' || $page == 'akses.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-users"></i><span>Pegawai</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="pegawai.php"
										class="<?php echo ($page == 'pegawai.php') ? 'active' : ''; ?>">Daftar
										Pegawai</a></li>
								<li><a href="pangkat.php"
										class="<?php echo ($page == 'pangkat.php') ? 'active' : ''; ?>">Pangkat</a></li>
								<li><a href="jabatan.php"
										class="<?php echo ($page == 'jabatan.php') ? 'active' : ''; ?>">Jabatan</a></li>
								<li><a href="akses.php"
										class="<?php echo ($page == 'akses.php') ? 'active' : ''; ?>">Akses</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);" class="<?php echo ($page == 'profile-settings.php' ||
								$page == 'security-settings.php' ||
								$page == 'notification-settings.php' ||
								$page == 'project-report.php' ||
								$page == 'connected-apps.php' ||
								$page == 'bussiness-settings.php' ||
								$page == 'seo-settings.php' ||
								$page == 'localization-settings.php' ||
								$page == 'prefixes.php' ||
								$page == 'preferences.php' ||
								$page == 'performance-appraisal.php' ||
								$page == 'language.php' ||
								$page == 'authentication-settings.php' ||
								$page == 'ai-settings.php' ||
								$page == 'salary-settings.php' ||
								$page == 'approval-settings.php' ||
								$page == 'invoice-settings.php' ||
								$page == 'leave-type.php' ||
								$page == 'custom-fields.php' ||
								$page == 'email-settings.php' ||
								$page == 'email-template.php' ||
								$page == 'sms-settings.php' ||
								$page == 'sms-template.php' ||
								$page == 'otp-settings.php' ||
								$page == 'gdpr.php' ||
								$page == 'maintenance-mode.php' ||
								$page == 'payment-gateways.php' ||
								$page == 'tax-rates.php' ||
								$page == 'currencies.php' ||
								$page == 'custom-css.php' ||
								$page == 'custom-js.php' ||
								$page == 'cronjob.php' ||
								$page == 'storage-settings.php' ||
								$page == 'ban-ip-address.php' ||
								$page == 'backup.php' ||
								$page == 'clear-cache.php'
							) ? 'active subdrop' : ''; ?>">
								<i class="ti ti-settings"></i><span>Pengaturan</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li class="submenu submenu-two">
									<a href="javascript:void(0);"
										class="<?php echo ($page == 'profile-settings.php' || $page == 'security-settings.php' || $page == 'notification-settings.php' || $page == 'connected-apps.php') ? 'active subdrop' : ''; ?>">General
										Settings<span class="menu-arrow inside-submenu"></span></a>
									<ul>
										<li><a href="profile-settings.php"
												class="<?php echo ($page == 'daily-report.php') ? 'active' : ''; ?>">Profile</a>
										</li>
										<li><a href="security-settings.php"
												class="<?php echo ($page == 'daily-report.php') ? 'active' : ''; ?>">Security</a>
										</li>
										<li><a href="notification-settings.php"
												class="<?php echo ($page == 'daily-report.php') ? 'active' : ''; ?>">Notifications</a>
										</li>
										<li><a href="connected-apps.php"
												class="<?php echo ($page == 'daily-report.php') ? 'active' : ''; ?>">Connected
												Apps</a></li>
									</ul>
								</li>
								<li class="submenu submenu-two">
									<a href="javascript:void(0);"
										class="<?php echo ($page == 'bussiness-settings.php' || $page == 'seo-settings.php' || $page == 'localization-settings.php' || $page == 'prefixes.php' || $page == 'preferences.php' || $page == 'performance-appraisal.php' || $page == 'language.php' || $page == 'authentication-settings.php' || $page == 'ai-settings.php') ? 'active subdrop' : ''; ?>">Website
										Settings<span class="menu-arrow inside-submenu"></span></a>
									<ul>
										<li><a href="bussiness-settings.php"
												class="<?php echo ($page == 'bussiness-settings.php') ? 'active' : ''; ?>">Business
												Settings</a></li>
										<li><a href="seo-settings.php"
												class="<?php echo ($page == 'seo-settings.php') ? 'active' : ''; ?>">SEO
												Settings</a></li>
										<li><a href="localization-settings.php"
												class="<?php echo ($page == 'localization-settings.php') ? 'active' : ''; ?>">Localization</a>
										</li>
										<li><a href="prefixes.php"
												class="<?php echo ($page == 'prefixes.php') ? 'active' : ''; ?>">Prefixes</a>
										</li>
										<li><a href="preferences.php"
												class="<?php echo ($page == 'preferences.php') ? 'active' : ''; ?>">Preferences</a>
										</li>
										<li><a href="performance-appraisal.php"
												class="<?php echo ($page == 'performance-appraisal.php') ? 'active' : ''; ?>">Appearance</a>
										</li>
										<li><a href="language.php"
												class="<?php echo ($page == 'language.php') ? 'active' : ''; ?>">Language</a>
										</li>
										<li><a href="authentication-settings.php"
												class="<?php echo ($page == 'authentication-settings.php') ? 'active' : ''; ?>">Authentication</a>
										</li>
										<li><a href="ai-settings.php"
												class="<?php echo ($page == 'ai-settings.php') ? 'active' : ''; ?>">AI
												Settings</a></li>
									</ul>
								</li>
								<li class="submenu submenu-two">
									<a href="javascript:void(0);"
										class="<?php echo ($page == 'salary-settings.php' || $page == 'approval-settings.php' || $page == 'invoice-settings.php' || $page == 'leave-type.php' || $page == 'custom-fields.php') ? 'active subdrop' : ''; ?>">App
										Settings<span class="menu-arrow inside-submenu"></span></a>
									<ul>
										<li><a href="salary-settings.php"
												class="<?php echo ($page == 'salary-settings.php') ? 'active' : ''; ?>">Salary
												Settings</a></li>
										<li><a href="approval-settings.php"
												class="<?php echo ($page == 'approval-settings.php') ? 'active' : ''; ?>">Approval
												Settings</a></li>
										<li><a href="invoice-settings.php"
												class="<?php echo ($page == 'invoice-settings.php') ? 'active' : ''; ?>">Invoice
												Settings</a></li>
										<li><a href="leave-type.php"
												class="<?php echo ($page == 'leave-type.php') ? 'active' : ''; ?>">Leave
												Type</a></li>
										<li><a href="custom-fields.php"
												class="<?php echo ($page == 'custom-fields.php') ? 'active' : ''; ?>">Custom
												Fields</a></li>
									</ul>
								</li>
								<li class="submenu submenu-two">
									<a href="javascript:void(0);"
										class="<?php echo ($page == 'email-settings.php' || $page == 'email-template.php' || $page == 'sms-settings.php' || $page == 'sms-template.php' || $page == 'otp-settings.php' || $page == 'gdpr.php' || $page == 'maintenance-mode.php') ? 'active subdrop' : ''; ?>">System
										Settings<span class="menu-arrow inside-submenu"></span></a>
									<ul>
										<li><a href="email-settings.php"
												class="<?php echo ($page == 'email-settings.php') ? 'active' : ''; ?>">Email
												Settings</a></li>
										<li><a href="email-template.php"
												class="<?php echo ($page == 'email-template.php') ? 'active' : ''; ?>">Email
												Templates</a></li>
										<li><a href="sms-settings.php"
												class="<?php echo ($page == 'sms-settings.php') ? 'active' : ''; ?>">SMS
												Settings</a></li>
										<li><a href="sms-template.php"
												class="<?php echo ($page == 'sms-template.php') ? 'active' : ''; ?>">SMS
												Templates</a></li>
										<li><a href="otp-settings.php"
												class="<?php echo ($page == 'otp-settings.php') ? 'active' : ''; ?>">OTP</a>
										</li>
										<li><a href="gdpr.php"
												class="<?php echo ($page == 'gdpr.php') ? 'active' : ''; ?>">GDPR
												Cookies</a></li>
										<li><a href="maintenance-mode.php"
												class="<?php echo ($page == 'maintenance-mode.php') ? 'active' : ''; ?>">Maintenance
												Mode</a></li>
									</ul>
								</li>
								<li class="submenu submenu-two">
									<a href="javascript:void(0);"
										class="<?php echo ($page == 'payment-gateways.php' || $page == 'tax-rates.php' || $page == 'currencies.php') ? 'active subdrop' : ''; ?>">Financial
										Settings<span class="menu-arrow inside-submenu"></span></a>
									<ul>
										<li><a href="payment-gateways.php"
												class="<?php echo ($page == 'payment-gateways.php') ? 'active' : ''; ?>">Payment
												Gateways</a></li>
										<li><a href="tax-rates.php"
												class="<?php echo ($page == 'tax-rates.php') ? 'active' : ''; ?>">Tax
												Rate</a></li>
										<li><a href="currencies.php"
												class="<?php echo ($page == 'currencies.php') ? 'active' : ''; ?>">Currencies</a>
										</li>
									</ul>
								</li>
								<li class="submenu submenu-two">
									<a href="javascript:void(0);"
										class="<?php echo ($page == 'custom-css.php' || $page == 'custom-js.php' || $page == 'cronjob.php' || $page == 'storage-settings.php' || $page == 'ban-ip-address.php' || $page == 'backup.php' || $page == 'clear-cache.php') ? 'active subdrop' : ''; ?>">Other
										Settings<span class="menu-arrow inside-submenu"></span></a>
									<ul>
										<li><a href="custom-css.php"
												class="<?php echo ($page == 'custom-css.php') ? 'active' : ''; ?>">Custom
												CSS</a></li>
										<li><a href="custom-js.php"
												class="<?php echo ($page == 'custom-js.php') ? 'active' : ''; ?>">Custom
												JS</a></li>
										<li><a href="cronjob.php"
												class="<?php echo ($page == 'cronjob.php') ? 'active' : ''; ?>">Cronjob</a>
										</li>
										<li><a href="storage-settings.php"
												class="<?php echo ($page == 'storage-settings.php') ? 'active' : ''; ?>">Storage</a>
										</li>
										<li><a href="ban-ip-address.php"
												class="<?php echo ($page == 'ban-ip-address.php') ? 'active' : ''; ?>">Ban
												IP Address</a></li>
										<li><a href="backup.php"
												class="<?php echo ($page == 'backup.php') ? 'active' : ''; ?>">Backup</a>
										</li>
										<li><a href="clear-cache.php"
												class="<?php echo ($page == 'clear-cache.php') ? 'active' : ''; ?>">Clear
												Cache</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="menu-title"><span>PENGAWASAN</span></li>
				<li>
					<ul>
						<li class="<?php echo ($page == 'bank.php') ? 'active' : ''; ?>">
							<a href="bank.php">
								<i class="ti ti-cash"></i><span>Daftar Bank</span>
							</a>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);"
								class="<?php echo ($page == 'dealer-utama.php' || $page == 'chart-js.php' || $page == 'chart-morris.php' || $page == 'chart-flot.php' || $page == 'chart-peity.php' || $page == 'chart-c3.php') ? 'subdrop active' : ''; ?>">
								<i class="ti ti-database"></i>
								<span>Data Pokok TI</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li>
									<a href='data-pokok.php'
										class="<?php echo ($page == 'data-pokok.php') ? 'active' : ''; ?>">Semua
									</a>
								</li>
								<li>
									<a href='dc-drc.php'
										class="<?php echo ($page == 'dc-drc.php') ? 'active' : ''; ?>">DC dan DRC
									</a>
								</li>
								<li>
									<a href='aplikasi-tresuri.php'
										class="<?php echo ($page == 'aplikasi-tresuri.php') ? 'active' : ''; ?>">Aplikasi Tresuri
									</a>
								</li>
								<li>
									<a href='soc.php'
										class="<?php echo ($page == 'soc.php') ? 'active' : ''; ?>">SOC
									</a>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);"
								class="<?php echo ($page == 'dealer-utama.php' || $page == 'chart-js.php' || $page == 'chart-morris.php' || $page == 'chart-flot.php' || $page == 'chart-peity.php' || $page == 'chart-c3.php') ? 'subdrop active' : ''; ?>">
								<i class="ti ti-chart-line"></i>
								<span>Dashboard</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li>
									<a href="dealer-utama.php"
										class="<?php echo ($page == 'dealer-utama.php') ? 'active' : ''; ?>">Dealer
										Utama</a>
								</li>
								<li>
									<a href="chart-c3.php"
										class="<?php echo ($page == 'chart-c3.php') ? 'active' : ''; ?>">30 Bank
										Besar</a>
								</li>
								<li>
									<a href="chart-js.php"
										class="<?php echo ($page == 'chart-js.php') ? 'active' : ''; ?>">Bappebti</a>
								</li>
								<li>
									<a href="chart-morris.php"
										class="<?php echo ($page == 'chart-morris.php') ? 'active' : ''; ?>">FMI</a>
								</li>
								<li>
									<a href="chart-flot.php"
										class="<?php echo ($page == 'chart-flot.php') ? 'active' : ''; ?>">Likuiditas</a>
								</li>
								<!--<li>
											<a href="chart-peity.php" class="<?php echo ($page == 'chart-peity.php') ? 'active' : ''; ?>">Peity Charts</a>
										</li>-->
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);"
								class="<?php echo ($page == 'expenses-report.php' || $page == 'invoice-report.php' || $page == 'payment-report.php' || $page == 'project-report.php' || $page == 'task-report.php' || $page == 'user-report.php' || $page == 'employee-report.php' || $page == 'payslip-report.php' || $page == 'attendance-report.php' || $page == 'leave-report.php' || $page == 'daily-report.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-user-star"></i><span>Laporan</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<!--<li><a href="expenses-report.php" class="<?php echo ($page == 'expenses-report.php') ? 'active' : ''; ?>">Expense Report</a></li>
										<li><a href="invoice-report.php" class="<?php echo ($page == 'invoice-report.php') ? 'active' : ''; ?>">Invoice Report</a></li>
										<li><a href="payment-report.php" class="<?php echo ($page == 'payment-report.php') ? 'active' : ''; ?>">Payment Report</a></li>
										<li><a href="project-report.php" class="<?php echo ($page == 'project-report.php') ? 'active' : ''; ?>">Project Report</a></li>
										<li><a href="task-report.php" class="<?php echo ($page == 'task-report.php') ? 'active' : ''; ?>">Task Report</a></li>
										<li><a href="user-report.php" class="<?php echo ($page == 'user-report.php') ? 'active' : ''; ?>">User Report</a></li>
										<li><a href="attendance-report.php" class="<?php echo ($page == 'attendance-report.php') ? 'active' : ''; ?>">Attendance Report</a></li>
										<li><a href="leave-report.php" class="<?php echo ($page == 'leave-report.php') ? 'active' : ''; ?>">Leave Report</a></li>-->
								<li><a href="employee-report.php"
										class="<?php echo ($page == 'employee-report.php') ? 'active' : ''; ?>">Laporan
										Pegawai</a></li>
								<li><a href="daily-report.php"
										class="<?php echo ($page == 'daily-report.php') ? 'active' : ''; ?>">Laporan
										Harian</a></li>
								<li><a href="payslip-report.php"
										class="<?php echo ($page == 'payslip-report.php') ? 'active' : ''; ?>">Laporan
										Harian</a></li>
							</ul>
						</li>
					</ul>
				</li>
		</div>
	</div>
</div>
</div>
<!-- /Stacked Sidebar -->