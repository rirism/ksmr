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
					<img src="assets/img/logo.svg" alt="Logo">
				</a>
				<a href="admin-dashboard.php" class="logo-small">
					<img src="assets/img/logo-small.svg" alt="Logo">
				</a>
				<a href="admin-dashboard.php" class="dark-logo">
					<img src="assets/img/logo-white.svg" alt="Logo">
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
						<li class="menu-title"><span>MAIN MENU</span></li>
						<li>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);" class=" <?php echo ($page == 'admin-dashboard.php'||$page == 'employee-dashboard.php'||$page == 'deals-dashboard.php'||$page == 'leads-dashboard.php') ? 'active subdrop' : ''; ?>">
									
										<i class="ti ti-smart-home"></i>
										<span>Dashboard</span>
										<span class="badge badge-danger fs-10 fw-medium text-white p-1">Hot</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="admin-dashboard.php" class="<?php echo ($page == 'admin-dashboard.php') ? 'active' : ''; ?>">Admin Dashboard</a></li>
										<li><a href="employee-dashboard.php" class="<?php echo ($page == 'employee-dashboard.php') ? 'active' : ''; ?>">Employee Dashboard</a></li>
										<li><a href="deals-dashboard.php" class="<?php echo ($page == 'deals-dashboard.php') ? 'active' : ''; ?>">Deals Dashboard</a></li>
										<li><a href="leads-dashboard.php" class="<?php echo ($page == 'leads-dashboard.php') ? 'active' : ''; ?>">Leads Dashboard</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"  class=" <?php echo ($page == 'chat.php'||$page == 'call.php'||$page == 'voice-call.php'||$page == 'video-call.php'||$page == 'outgoing-call.php'||$page == 'incoming-call.php'||$page == 'call-history.php'||$page == 'calendar.php'
									||$page == 'email.php'||$page == 'todo.php'||$page == 'notes.php'||$page == 'social-feed.php'||$page == 'file-manager.php'||$page == 'kanban-view.php'||$page == 'invoices.php') ? 'active subdrop' : ''; ?>">
										<i class="ti ti-layout-grid-add"></i><span>Applications</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="chat.php" class="<?php echo ($page == 'chat.php') ? 'active' : ''; ?>">Chat</a></li>
										<li class="submenu submenu-two">
											<a href="call.php"class="<?php echo ($page == 'call.php'||$page == 'voice-call.php'||$page == 'video-call.php'||$page == 'outgoing-call.php'||$page == 'incoming-call.php'||$page == 'call-history.php') ? 'active subdrop' : ''; ?>">Calls<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="voice-call.php" class="<?php echo ($page == 'voice-call.php') ? 'active' : ''; ?>">Voice Call</a></li>
												<li><a href="video-call.php" class="<?php echo ($page == 'video-call.php') ? 'active' : ''; ?>">Video Call</a></li>
												<li><a href="outgoing-call.php" class="<?php echo ($page == 'outgoing-call.php') ? 'active' : ''; ?>">Outgoing Call</a></li>
												<li><a href="incoming-call.php" class="<?php echo ($page == 'incoming-call.php') ? 'active' : ''; ?>">Incoming Call</a></li>
												<li><a href="call-history.php" class="<?php echo ($page == 'call-history.php') ? 'active' : ''; ?>">Call History</a></li>
											</ul>
										</li>
										<li><a href="calendar.php" class="<?php echo ($page == 'calendar.php') ? 'active' : ''; ?>">Calendar</a></li>
										<li><a href="email.php" class="<?php echo ($page == 'email.php') ? 'active' : ''; ?>">Email</a></li>
										<li><a href="todo.php" class="<?php echo ($page == 'todo.php') ? 'active' : ''; ?>">To Do</a></li>
										<li><a href="notes.php" class="<?php echo ($page == 'notes.php') ? 'active' : ''; ?>">Notes</a></li>
										<li><a href="social-feed.php" class="<?php echo ($page == 'social-feed.php') ? 'active' : ''; ?>">Social Feed</a></li>
										<li><a href="file-manager.php" class="<?php echo ($page == 'file-manager.php') ? 'active' : ''; ?>">File Manager</a></li>
										<li><a href="kanban-view.php" class="<?php echo ($page == 'kanban-view.php') ? 'active' : ''; ?>">Kanban</a></li>
										<li><a href="invoices.php" class="<?php echo ($page == 'invoices.php') ? 'active' : ''; ?>">Invoices</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#" class=" <?php echo ($page == 'dashboard.php'||$page == 'companies.php'||$page == 'subscription.php'||$page == 'packages.php'||$page == 'domain.php'||$page == 'purchase-transaction.php') ? 'active subdrop' : ''; ?>">
										<i class="ti ti-user-star"></i><span>Super Admin</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="dashboard.php" class="<?php echo ($page == 'dashboard.php') ? 'active' : ''; ?>">Dashboard</a></li>
										<li><a href="companies.php" class="<?php echo ($page == 'companies.php') ? 'active' : ''; ?>">Companies</a></li>
										<li><a href="subscription.php" class="<?php echo ($page == 'subscription.php') ? 'active' : ''; ?>">Subscriptions</a></li>
										<li><a href="packages.php" class="<?php echo ($page == 'packages.php') ? 'active' : ''; ?>">Packages</a></li>
										<li><a href="domain.php" class="<?php echo ($page == 'domain.php') ? 'active' : ''; ?>">Domain</a></li>
										<li><a href="purchase-transaction.php" class="<?php echo ($page == 'purchase-transaction.php') ? 'active' : ''; ?>">Purchase Transaction</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-title"><span>LAYOUT</span></li>
						<li>
							<ul>
								<li class="<?php echo ($page == 'layout-horizontal.php') ? 'active' : ''; ?>">
									<a href="layout-horizontal.php">
										<i class="ti ti-layout-navbar"></i><span>Horizontal</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-detached.php') ? 'active' : ''; ?>">
									<a href="layout-detached.php">
										<i class="ti ti-details"></i><span>Detached</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-modern.php') ? 'active' : ''; ?>">
									<a href="layout-modern.php">
										<i class="ti ti-layout-board-split"></i><span>Modern</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-two-column.php') ? 'active' : ''; ?>">
									<a href="layout-two-column.php">
										<i class="ti ti-columns-2"></i><span>Two Column </span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-hovered.php') ? 'active' : ''; ?>">
									<a href="layout-hovered.php">
										<i class="ti ti-column-insert-left"></i><span>Hovered</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-box.php') ? 'active' : ''; ?>">
									<a href="layout-box.php">
										<i class="ti ti-layout-align-middle"></i><span>Boxed</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-horizontal-single.php') ? 'active' : ''; ?>">
									<a href="layout-horizontal-single.php">
										<i class="ti ti-layout-navbar-inactive"></i><span>Horizontal Single</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-horizontal-overlay.php') ? 'active' : ''; ?>">
									<a href="layout-horizontal-overlay.php">
										<i class="ti ti-layout-collage"></i><span>Horizontal Overlay</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-horizontal-box.php') ? 'active' : ''; ?>">
									<a href="layout-horizontal-box.php">
										<i class="ti ti-layout-board"></i><span>Horizontal Box</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-horizontal-sidemenu.php') ? 'active' : ''; ?>">
									<a href="layout-horizontal-sidemenu.php">
										<i class="ti ti-table"></i><span>Menu Aside</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-vertical-transparent.php') ? 'active' : ''; ?>">
									<a href="layout-vertical-transparent.php">
										<i class="ti ti-layout"></i><span>Transparent</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-without-header.php') ? 'active' : ''; ?>">
									<a href="layout-without-header.php">
										<i class="ti ti-layout-sidebar"></i><span>Without Header</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-rtl.php') ? 'active' : ''; ?>">
									<a href="layout-rtl.php">
										<i class="ti ti-text-direction-rtl"></i><span>RTL</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-dark.php') ? 'active' : ''; ?>">
									<a href="layout-dark.php">
										<i class="ti ti-moon"></i><span>Dark</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="menu-title"><span>PROJECTS</span></li>
						<li>
							<ul>
								<li class="<?php echo ($page == 'clients-grid.php') ? 'active' : ''; ?>">
									<a href="clients-grid.php">
										<i class="ti ti-users-group"></i><span>Clients</span>
									</a>
								</li class="<?php echo ($page == 'projects-grid.php') ? 'active' : ''; ?>">
								<li class="submenu">
									<a href="javascript:void(0);"class=" <?php echo ($page == 'projects-grid.php'||$page == 'tasks.php'||$page == 'task-board.php') ? 'active subdrop' : ''; ?>">
										<i class="ti ti-box"></i><span>Projects</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="projects-grid.php" class="<?php echo ($page == 'projects-grid.php') ? 'active' : ''; ?>">Projects</a></li>
										<li><a href="tasks.php" class="<?php echo ($page == 'tasks.php') ? 'active' : ''; ?>">Tasks</a></li>
										<li><a href="task-board.php" class="<?php echo ($page == 'task-board.php') ? 'active' : ''; ?>">Task Board</a></li>
									</ul>
								</li>								
							</ul>
						</li>
						<li class="menu-title"><span>CRM</span></li>
						<li>
							<ul>
								<li class="<?php echo ($page == 'contacts-grid.php'||$page == 'contacts.php'||$page == 'contact-details.php') ? 'active' : ''; ?>">
									<a href="contacts-grid.php">
										<i class="ti ti-user-shield"></i><span>Contacts</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'companies-grid.php'||$page == 'companies-crm.php'||$page == 'company-details.php') ? 'active' : ''; ?>">
									<a href="companies-grid.php">
										<i class="ti ti-building"></i><span>Companies</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'deals-grid.php'||$page == 'deals-details.php'||$page == 'deals.php') ? 'active' : ''; ?>">
									<a href="deals-grid.php">
										<i class="ti ti-heart-handshake"></i><span>Deals</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'leads-grid.php'||$page == 'leads-details.php'||$page == 'leads.php') ? 'active' : ''; ?>">
									<a href="leads-grid.php">
										<i class="ti ti-user-check"></i><span>Leads</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'pipeline.php') ? 'active' : ''; ?>">
									<a href="pipeline.php">
										<i class="ti ti-timeline-event-text"></i><span>Pipeline</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'analytics.php') ? 'active' : ''; ?>">
									<a href="analytics.php">
										<i class="ti ti-graph"></i><span>Analytics</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'activity.php') ? 'active' : ''; ?>">
									<a href="activity.php">
										<i class="ti ti-activity"></i><span>Activities</span>
									</a>
								</li>
							</ul>							
						</li>
						<li class="menu-title"><span>HRM</span></li>
						<li>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);" class=" <?php echo ($page == 'employees.php'||$page == 'employees-grid.php'||$page == 'employee-details.php'||$page == 'departments.php'||$page == 'designations.php'||$page == 'policy.php') ? 'active subdrop' : ''; ?>">
										<i class="ti ti-users"></i><span>Employees</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="employees.php" class="<?php echo ($page == 'employees.php') ? 'active' : ''; ?>">Employee Lists</a></li>
										<li><a href="employees-grid.php" class="<?php echo ($page == 'employees-grid.php') ? 'active' : ''; ?>">Employee Grid</a></li>
										<li><a href="employee-details.php" class="<?php echo ($page == 'employee-details.php') ? 'active' : ''; ?>">Employee Details</a></li>
										<li><a href="departments.php" class="<?php echo ($page == 'departments.php') ? 'active' : ''; ?>">Departments</a></li>
										<li><a href="designations.php" class="<?php echo ($page == 'designations.php') ? 'active' : ''; ?>">Designations</a></li>
										<li><a href="policy.php" class="<?php echo ($page == 'policy.php') ? 'active' : ''; ?>">Policies</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class=" <?php echo ($page == 'tickets.php'||$page == 'ticket-details.php') ? 'active subdrop' : ''; ?>">
										<i class="ti ti-ticket"></i><span>Tickets</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="tickets.php" class="<?php echo ($page == 'tickets.php') ? 'active' : ''; ?>">Tickets</a></li>
										<li><a href="ticket-details.php" class="<?php echo ($page == 'ticket-details.php') ? 'active' : ''; ?>">Ticket Details</a></li>
									</ul>
								</li>
								<li class="<?php echo ($page == 'holidays.php') ? 'active' : ''; ?>">
									<a href="holidays.php">
										<i class="ti ti-calendar-event"></i><span>Holidays</span>
									</a>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);" class=" <?php echo ($page == 'leaves.php'||$page == 'leaves-employee.php'||$page == 'leave-settings.php'||$page == 'attendance-admin.php'||$page == 'attendance-employee.php'||$page == 'timesheets.php'||$page == 'schedule-timing.php'||$page == 'overtime.php') ? 'active subdrop' : ''; ?>">
										<i class="ti ti-file-time"></i><span>Attendance</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);"class=" <?php echo ($page == 'leaves.php'||$page == 'leaves-employee.php'||$page == 'leave-settings.php') ? 'active subdrop' : ''; ?>">Leaves<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="leaves.php"class="<?php echo ($page == 'leaves.php') ? 'active' : ''; ?>">Leaves (Admin)</a></li>
												<li><a href="leaves-employee.php"class="<?php echo ($page == 'leaves-employee.php') ? 'active' : ''; ?>">Leave (Employee)</a></li>
												<li><a href="leave-settings.php"class="<?php echo ($page == 'leave-settings.php') ? 'active' : ''; ?>">Leave Settings</a></li>												
											</ul>												
										</li>
										<li><a href="attendance-admin.php" class="<?php echo ($page == 'attendance-admin.php') ? 'active' : ''; ?>">Attendance (Admin)</a></li>
										<li><a href="attendance-employee.php" class="<?php echo ($page == 'attendance-employee.php') ? 'active' : ''; ?>">Attendance (Employee)</a></li>
										<li><a href="timesheets.php" class="<?php echo ($page == 'timesheets.php') ? 'active' : ''; ?>">Timesheets</a></li>
										<li><a href="schedule-timing.php" class="<?php echo ($page == 'schedule-timing.php') ? 'active' : ''; ?>">Shift & Schedule</a></li>
										<li><a href="overtime.php" class="<?php echo ($page == 'overtime.php') ? 'active' : ''; ?>">Overtime</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class=" <?php echo ($page == 'performance-indicator.php'||$page == 'performance-review.php'||$page == 'performance-appraisal.php'||$page == 'goal-tracking.php'||$page == 'goal-type.php') ? 'active subdrop' : ''; ?>">
										<i class="ti ti-school"></i><span>Performance</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="performance-indicator.php" class="<?php echo ($page == 'performance-indicator.php') ? 'active' : ''; ?>">Performance Indicator</a></li>
										<li><a href="performance-review.php" class="<?php echo ($page == 'performance-review.php') ? 'active' : ''; ?>">Performance Review</a></li>
										<li><a href="performance-appraisal.php" class="<?php echo ($page == 'performance-appraisal.php') ? 'active' : ''; ?>">Performance Appraisal</a></li>
										<li><a href="goal-tracking.php" class="<?php echo ($page == 'goal-tracking.php') ? 'active' : ''; ?>">Goal List</a></li>
										<li><a href="goal-type.php" class="<?php echo ($page == 'goal-type.php') ? 'active' : ''; ?>">Goal Type</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class=" <?php echo ($page == 'training.php'||$page == 'trainers.php'||$page == 'training-type.php') ? 'active subdrop' : ''; ?>">
										<i class="ti ti-edit"></i><span>Training</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="training.php" class="<?php echo ($page == 'training.php') ? 'active' : ''; ?>">Training List</a></li>
										<li><a href="trainers.php" class="<?php echo ($page == 'trainers.php') ? 'active' : ''; ?>">Trainers</a></li>
										<li><a href="training-type.php" class="<?php echo ($page == 'training-type.php') ? 'active' : ''; ?>">Training Type</a></li>
									</ul>
								</li>
								<li class="<?php echo ($page == 'promotion.php') ? 'active' : ''; ?>">
									<a href="promotion.php">
										<i class="ti ti-speakerphone"></i><span>Promotion</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'resignation.php') ? 'active' : ''; ?>">
									<a href="resignation.php">
										<i class="ti ti-external-link"></i><span>Resignation</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'termination.php') ? 'active' : ''; ?>">
									<a href="termination.php">
										<i class="ti ti-circle-x"></i><span>Termination</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="menu-title"><span>RECRUITMENT</span></li>
						<li>
							<ul>
								<li class="<?php echo ($page == 'job-grid.php') ? 'active' : ''; ?>">
									<a href="job-grid.php">
										<i class="ti ti-timeline"></i><span>Jobs</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'candidates-grid.php') ? 'active' : ''; ?>">
									<a href="candidates-grid.php">
										<i class="ti ti-user-shield"></i><span>Candidates</span>
									</a>
								</li>
								<li  class="<?php echo ($page == 'refferals.php') ? 'active' : ''; ?>">
									<a href="refferals.php">
										<i class="ti ti-ux-circle"></i><span>Referrals</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="menu-title"><span>FINANCE & ACCOUNTS</span></li>
						<li>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"class=" <?php echo ($page == 'estimates.php'||$page == 'invoices.php'||$page == 'payments.php'||$page == 'expenses.php'||$page == 'provident-fund.php'||$page == 'taxes.php') ? 'active subdrop' : ''; ?>">
										<i class="ti ti-shopping-cart-dollar"></i><span>Sales</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="estimates.php" class="<?php echo ($page == 'estimates.php') ? 'active' : ''; ?>">Estimates</a></li>
										<li><a href="invoices.php" class="<?php echo ($page == 'invoices.php') ? 'active' : ''; ?>">Invoices</a></li>
										<li><a href="payments.php" class="<?php echo ($page == 'payments.php') ? 'active' : ''; ?>">Payments</a></li>
										<li><a href="expenses.php" class="<?php echo ($page == 'expenses.php') ? 'active' : ''; ?>">Expenses</a></li>
										<li><a href="provident-fund.php" class="<?php echo ($page == 'provident-fund.php') ? 'active' : ''; ?>">Provident Fund</a></li>
										<li><a href="taxes.php" class="<?php echo ($page == 'taxes.php') ? 'active' : ''; ?>">Taxes</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);" class=" <?php echo ($page == 'categories.php'||$page == 'budgets.php'||$page == 'budget-expenses.php'||$page == 'budget-revenues.php') ? 'active subdrop' : ''; ?>">
										<i class="ti ti-file-dollar"></i><span>Accounting</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="categories.php"class="<?php echo ($page == 'categories.php') ? 'active' : ''; ?>">Categories</a></li>
										<li><a href="budgets.php"class="<?php echo ($page == 'budgets.php') ? 'active' : ''; ?>">Budgets</a></li>
										<li><a href="budget-expenses.php"class="<?php echo ($page == 'budget-expenses.php') ? 'active' : ''; ?>">Budget Expenses</a></li>
										<li><a href="budget-revenues.php"class="<?php echo ($page == 'budget-revenues.php') ? 'active' : ''; ?>">Budget Revenues</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);" class="<?php echo ($page == 'employee-salary.php'||$page == 'payslip.php'||$page == 'payroll.php') ? 'active subdrop' : ''; ?>">
										<i class="ti ti-cash"></i><span>Payroll</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="employee-salary.php" class="<?php echo ($page == 'employee-salary.php') ? 'active' : ''; ?>">Employee Salary</a></li>
										<li><a href="payslip.php" class="<?php echo ($page == 'payslip.php') ? 'active' : ''; ?>">Payslip</a></li>
										<li><a href="payroll.php" class="<?php echo ($page == 'payroll.php') ? 'active' : ''; ?>">Payroll Items</a></li>
									</ul>
								</li>
							</ul>
						</li>						
						<li class="menu-title"><span>ADMINISTRATION</span></li>
						<li>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"class="<?php echo ($page == 'assets.php'||$page == 'asset-categories.php') ? 'active subdrop' : ''; ?>">
										<i class="ti ti-cash"></i><span>Assets</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="assets.php" class="<?php echo ($page == 'assets.php') ? 'active' : ''; ?>">Assets</a></li>
										<li><a href="asset-categories.php" class="<?php echo ($page == 'asset-categories.php') ? 'active' : ''; ?>">Asset Categories</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class="<?php echo ($page == 'knowledgebase.php'||$page == 'activity.php') ? 'active subdrop' : ''; ?>">
										<i class="ti ti-headset"></i><span>Help & Supports</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="knowledgebase.php" class="<?php echo ($page == 'knowledgebase.php') ? 'active' : ''; ?>">Knowledge Base</a></li>
										<li><a href="activity.php" class="<?php echo ($page == 'activity.php') ? 'active' : ''; ?>">Activities</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class="<?php echo ($page == 'users.php'||$page == 'roles-permissions.php') ? 'active subdrop' : ''; ?>">
										<i class="ti ti-user-star"></i><span>User Management</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="users.php">Users</a></li>
										<li><a href="roles-permissions.php" class="<?php echo ($page == 'roles-permissions.php') ? 'active' : ''; ?>">Roles & Permissions</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class="<?php echo ($page == 'expenses-report.php'||$page == 'invoice-report.php'||$page == 'payment-report.php'||$page == 'project-report.php'||$page == 'task-report.php'||$page == 'user-report.php'||$page == 'employee-report.php'||$page == 'payslip-report.php'||$page == 'attendance-report.php'||$page == 'leave-report.php'||$page == 'daily-report.php') ? 'active subdrop' : ''; ?>">
										<i class="ti ti-user-star"></i><span>Reports</span>
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
								<li class="submenu">
									<a href="javascript:void(0);"class="<?php echo ($page == 'profile-settings.php'||
									$page == 'security-settings.php'||
									$page == 'notification-settings.php'||
									$page == 'project-report.php'||
									$page == 'connected-apps.php'||
									$page == 'bussiness-settings.php'||
									$page == 'seo-settings.php'||
									$page == 'localization-settings.php'||
									$page == 'prefixes.php'||
									$page == 'preferences.php'||
									$page == 'performance-appraisal.php'||
									$page == 'language.php'||
									$page == 'authentication-settings.php'||
									$page == 'ai-settings.php'||
									$page == 'salary-settings.php'||
									$page == 'approval-settings.php'||
									$page == 'invoice-settings.php'||
									$page == 'leave-type.php'||
									$page == 'custom-fields.php'||
									$page == 'email-settings.php'||
									$page == 'email-template.php'||
									$page == 'sms-settings.php'||
									$page == 'sms-template.php'||
									$page == 'otp-settings.php'||
									$page == 'gdpr.php'||
									$page == 'maintenance-mode.php'||
									$page == 'payment-gateways.php'||
									$page == 'tax-rates.php'||
									$page == 'currencies.php'||
									$page == 'custom-css.php'||
									$page == 'custom-js.php'||
									$page == 'cronjob.php'||
									$page == 'storage-settings.php'||
									$page == 'ban-ip-address.php'||
									$page == 'backup.php'||
									$page == 'clear-cache.php'
									) ? 'active subdrop' : ''; ?>">
										<i class="ti ti-settings"></i><span>Settings</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);"class="<?php echo ($page == 'profile-settings.php'||$page == 'security-settings.php'||$page == 'notification-settings.php'||$page == 'connected-apps.php') ? 'active subdrop' : ''; ?>">General Settings<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="profile-settings.php" class="<?php echo ($page == 'daily-report.php') ? 'active' : ''; ?>">Profile</a></li>
												<li><a href="security-settings.php" class="<?php echo ($page == 'daily-report.php') ? 'active' : ''; ?>">Security</a></li>
												<li><a href="notification-settings.php" class="<?php echo ($page == 'daily-report.php') ? 'active' : ''; ?>">Notifications</a></li>
												<li><a href="connected-apps.php" class="<?php echo ($page == 'daily-report.php') ? 'active' : ''; ?>">Connected Apps</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);"class="<?php echo ($page == 'bussiness-settings.php'||$page == 'seo-settings.php'||$page == 'localization-settings.php'||$page == 'prefixes.php'||$page == 'preferences.php'||$page == 'performance-appraisal.php'||$page == 'language.php'||$page == 'authentication-settings.php'||$page == 'ai-settings.php') ? 'active subdrop' : ''; ?>">Website Settings<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="bussiness-settings.php" class="<?php echo ($page == 'bussiness-settings.php') ? 'active' : ''; ?>">Business Settings</a></li>
												<li><a href="seo-settings.php" class="<?php echo ($page == 'seo-settings.php') ? 'active' : ''; ?>">SEO Settings</a></li>
												<li><a href="localization-settings.php" class="<?php echo ($page == 'localization-settings.php') ? 'active' : ''; ?>">Localization</a></li>
												<li><a href="prefixes.php" class="<?php echo ($page == 'prefixes.php') ? 'active' : ''; ?>">Prefixes</a></li>
												<li><a href="preferences.php" class="<?php echo ($page == 'preferences.php') ? 'active' : ''; ?>">Preferences</a></li>
												<li><a href="performance-appraisal.php" class="<?php echo ($page == 'performance-appraisal.php') ? 'active' : ''; ?>">Appearance</a></li>
												<li><a href="language.php" class="<?php echo ($page == 'language.php') ? 'active' : ''; ?>">Language</a></li>
												<li><a href="authentication-settings.php" class="<?php echo ($page == 'authentication-settings.php') ? 'active' : ''; ?>">Authentication</a></li>
												<li><a href="ai-settings.php" class="<?php echo ($page == 'ai-settings.php') ? 'active' : ''; ?>">AI Settings</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);"class="<?php echo ($page == 'salary-settings.php'||$page == 'approval-settings.php'||$page == 'invoice-settings.php'||$page == 'leave-type.php'||$page == 'custom-fields.php') ? 'active subdrop' : ''; ?>">App Settings<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="salary-settings.php" class="<?php echo ($page == 'salary-settings.php') ? 'active' : ''; ?>">Salary Settings</a></li>
												<li><a href="approval-settings.php" class="<?php echo ($page == 'approval-settings.php') ? 'active' : ''; ?>">Approval Settings</a></li>
												<li><a href="invoice-settings.php" class="<?php echo ($page == 'invoice-settings.php') ? 'active' : ''; ?>">Invoice Settings</a></li>
												<li><a href="leave-type.php" class="<?php echo ($page == 'leave-type.php') ? 'active' : ''; ?>">Leave Type</a></li>
												<li><a href="custom-fields.php" class="<?php echo ($page == 'custom-fields.php') ? 'active' : ''; ?>">Custom Fields</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);"class="<?php echo ($page == 'email-settings.php'||$page == 'email-template.php'||$page == 'sms-settings.php'||$page == 'sms-template.php'||$page == 'otp-settings.php'||$page == 'gdpr.php'||$page == 'maintenance-mode.php') ? 'active subdrop' : ''; ?>">System Settings<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="email-settings.php" class="<?php echo ($page == 'email-settings.php') ? 'active' : ''; ?>">Email Settings</a></li>
												<li><a href="email-template.php" class="<?php echo ($page == 'email-template.php') ? 'active' : ''; ?>">Email Templates</a></li>
												<li><a href="sms-settings.php" class="<?php echo ($page == 'sms-settings.php') ? 'active' : ''; ?>">SMS Settings</a></li>
												<li><a href="sms-template.php" class="<?php echo ($page == 'sms-template.php') ? 'active' : ''; ?>">SMS Templates</a></li>
												<li><a href="otp-settings.php" class="<?php echo ($page == 'otp-settings.php') ? 'active' : ''; ?>">OTP</a></li>
												<li><a href="gdpr.php" class="<?php echo ($page == 'gdpr.php') ? 'active' : ''; ?>">GDPR Cookies</a></li>
												<li><a href="maintenance-mode.php" class="<?php echo ($page == 'maintenance-mode.php') ? 'active' : ''; ?>">Maintenance Mode</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);"class="<?php echo ($page == 'payment-gateways.php'||$page == 'tax-rates.php'||$page == 'currencies.php') ? 'active subdrop' : ''; ?>">Financial Settings<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="payment-gateways.php" class="<?php echo ($page == 'payment-gateways.php') ? 'active' : ''; ?>">Payment Gateways</a></li>
												<li><a href="tax-rates.php" class="<?php echo ($page == 'tax-rates.php') ? 'active' : ''; ?>">Tax Rate</a></li>
												<li><a href="currencies.php" class="<?php echo ($page == 'currencies.php') ? 'active' : ''; ?>">Currencies</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);"class="<?php echo ($page == 'custom-css.php'||$page == 'custom-js.php'||$page == 'cronjob.php'||$page == 'storage-settings.php'||$page == 'ban-ip-address.php'||$page == 'backup.php'||$page == 'clear-cache.php') ? 'active subdrop' : ''; ?>">Other Settings<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="custom-css.php" class="<?php echo ($page == 'custom-css.php') ? 'active' : ''; ?>">Custom CSS</a></li>
												<li><a href="custom-js.php" class="<?php echo ($page == 'custom-js.php') ? 'active' : ''; ?>">Custom JS</a></li>
												<li><a href="cronjob.php" class="<?php echo ($page == 'cronjob.php') ? 'active' : ''; ?>">Cronjob</a></li>
												<li><a href="storage-settings.php" class="<?php echo ($page == 'storage-settings.php') ? 'active' : ''; ?>">Storage</a></li>
												<li><a href="ban-ip-address.php" class="<?php echo ($page == 'ban-ip-address.php') ? 'active' : ''; ?>">Ban IP Address</a></li>
												<li><a href="backup.php" class="<?php echo ($page == 'backup.php') ? 'active' : ''; ?>">Backup</a></li>
												<li><a href="clear-cache.php" class="<?php echo ($page == 'clear-cache.php') ? 'active' : ''; ?>">Clear Cache</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-title"><span>CONTENT</span></li>
						<li>
							<ul>
								<li>
									<a href="pages.php">
										<i class="ti ti-box-multiple"></i><span>Pages</span>
									</a>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class="<?php echo ($page == 'blogs.php'||$page == 'blog-categories.php'||$page == 'blog-comments.php'||$page == 'blog-tags.php') ? 'active subdrop' : ''; ?>">
										<i class="ti ti-brand-blogger"></i><span>Blogs</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="blogs.php" class="<?php echo ($page == 'blogs.php') ? 'active' : ''; ?>">All Blogs</a></li>
										<li><a href="blog-categories.php" class="<?php echo ($page == 'blog-categories.php') ? 'active' : ''; ?>">Categories</a></li>
										<li><a href="blog-comments.php" class="<?php echo ($page == 'blog-comments.php') ? 'active' : ''; ?>">Comments</a></li>
										<li><a href="blog-tags.php" class="<?php echo ($page == 'blog-tags.php') ? 'active' : ''; ?>">Blog Tags</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class="<?php echo ($page == 'countries.php'||$page == 'states.php'||$page == 'cities.php') ? 'active subdrop' : ''; ?>">
										<i class="ti ti-map-pin-check"></i><span>Locations</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="countries.php" class="<?php echo ($page == 'countries.php') ? 'active' : ''; ?>">Countries</a></li>
										<li><a href="states.php" class="<?php echo ($page == 'states.php') ? 'active' : ''; ?>">States</a></li>
										<li><a href="cities.php" class="<?php echo ($page == 'cities.php') ? 'active' : ''; ?>">Cities</a></li>
									</ul>
								</li>
								<li class="<?php echo ($page == 'testimonials.php') ? 'active' : ''; ?>">
									<a href="testimonials.php">
										<i class="ti ti-message-2"></i><span>Testimonials</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'faq.php') ? 'active' : ''; ?>">
									<a href="faq.php">
										<i class="ti ti-question-mark"></i><span>FAQ’S</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="menu-title"><span>PAGES</span></li>
						<li>
							<ul>
								<li class="<?php echo ($page == 'starter.php') ? 'active' : ''; ?>">
									<a href="starter.php">
										<i class="ti ti-layout-sidebar"></i><span>Starter</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'profile.php') ? 'active' : ''; ?>">
									<a href="profile.php">
										<i class="ti ti-user-circle"></i><span>Profile</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'gallery.php') ? 'active' : ''; ?>">
									<a href="gallery.php">
										<i class="ti ti-photo"></i><span>Gallery</span>
									</a>
								</li>
								<li  class="<?php echo ($page == 'search-result.php') ? 'active' : ''; ?>">
									<a href="search-result.php">
										<i class="ti ti-list-search"></i><span>Search Results</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'timeline.php') ? 'active' : ''; ?>">
									<a href="timeline.php">
										<i class="ti ti-timeline"></i><span>Timeline</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'pricing.php') ? 'active' : ''; ?>">
									<a href="pricing.php">
										<i class="ti ti-file-dollar"></i><span>Pricing</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'coming-soon.php') ? 'active' : ''; ?>">
									<a href="coming-soon.php">
										<i class="ti ti-progress-bolt"></i><span>Coming Soon</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'under-maintenance.php') ? 'active' : ''; ?>">
									<a href="under-maintenance.php">
										<i class="ti ti-alert-octagon"></i><span>Under Maintenance</span>
									</a>
								</li>
								<li  class="<?php echo ($page == 'under-construction.php') ? 'active' : ''; ?>">
									<a href="under-construction.php">
										<i class="ti ti-barrier-block"></i><span>Under Construction</span>
									</a>
								</li>
								<li  class="<?php echo ($page == 'api-keys.php') ? 'active' : ''; ?>">
									<a href="api-keys.php">
										<i class="ti ti-api"></i><span>API Keys</span>
									</a>
								</li>
								<li  class="<?php echo ($page == 'privacy-policy.php') ? 'active' : ''; ?>">
									<a href="privacy-policy.php">
										<i class="ti ti-file-description"></i><span>Privacy Policy</span>
									</a>
								</li>
								<li  class="<?php echo ($page == 'terms-condition.php') ? 'active' : ''; ?>">
									<a href="terms-condition.php">
										<i class="ti ti-file-check"></i><span>Terms & Conditions</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="menu-title"><span>AUTHENTICATION</span></li>
						<li>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-login"></i><span>Login</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="login.php">Cover</a></li>
										<li><a href="login-2.php">Illustration</a></li>
										<li><a href="login-3.php">Basic</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-forms"></i><span>Register</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="register.php">Cover</a></li>
										<li><a href="register-2.php">Illustration</a></li>
										<li><a href="register-3.php">Basic</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-help-triangle"></i><span>Forgot Password</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="forgot-password.php">Cover</a></li>
										<li><a href="forgot-password-2.php">Illustration</a></li>
										<li><a href="forgot-password-3.php">Basic</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-restore"></i><span>Reset Password</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="reset-password.php">Cover</a></li>
										<li><a href="reset-password-2.php">Illustration</a></li>
										<li><a href="reset-password-3.php">Basic</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-mail-exclamation"></i><span>Email Verification</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="email-verification.php">Cover</a></li>
										<li><a href="email-verification-2.php">Illustration</a></li>
										<li><a href="email-verification-3.php">Basic</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-password"></i><span>2 Step Verification</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="two-step-verification.php">Cover</a></li>
										<li><a href="two-step-verification-2.php">Illustration</a></li>
										<li><a href="two-step-verification-3.php">Basic</a></li>
									</ul>
								</li>
								<li><a href="lock-screen.php"><i class="ti ti-lock-square"></i><span>Lock Screen</span></a></li>
								<li><a href="error-404.php"><i class="ti ti-error-404"></i><span>404 Error</span></a></li>
								<li><a href="error-500.php"><i class="ti ti-server"></i><span>500 Error</span></a></li>
							</ul>
						</li>
						<li class="menu-title"><span>UI INTERFACE</span></li>
						<li>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"class="<?php echo ($page == 'ui-alerts.php' || $page == 'ui-accordion.php' || $page == 'ui-avatar.php' || $page == 'ui-badges.php' || $page == 'ui-borders.php'
                                                                                                        || $page == 'ui-buttons.php' || $page == 'ui-buttons-group.php' || $page == 'ui-breadcrumb.php' || $page == 'ui-cards.php' || $page == 'ui-carousel.php'
                                                                                                        || $page == 'ui-colors.php' || $page == 'ui-dropdowns.php' || $page == 'ui-grid.php' || $page == 'ui-images.php' || $page == 'ui-lightbox.php'
                                                                                                        || $page == 'ui-media.php' || $page == 'ui-modals.php' || $page == 'ui-offcanvas.php' || $page == 'ui-pagination.php' || $page == 'ui-popovers.php'
                                                                                                        || $page == 'ui-progress.php' || $page == 'ui-placeholders.php'  || $page == 'ui-spinner.php'
                                                                                                        || $page == 'ui-sweetalerts.php' || $page == 'ui-nav-tabs.php' || $page == 'ui-toasts.php' || $page == 'ui-tooltips.php'
                                                                                                        || $page == 'ui-typography.php' || $page == 'ui-video.php'
                                                                                                )
                                                                                                        ? 'subdrop active'
                                                                                                        : ''; ?>">
										<i class="ti ti-hierarchy-2"></i>
										<span>Base UI</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li>
											<a href="ui-alerts.php" class="<?php echo ($page == 'ui-alerts.php') ? 'active' : ''; ?>">Alerts</a>
										</li>
										<li>
											<a href="ui-accordion.php" class="<?php echo ($page == 'ui-accordion.php') ? 'active' : ''; ?>">Accordion</a>
										</li>
										<li>
											<a href="ui-avatar.php" class="<?php echo ($page == 'ui-avatar.php') ? 'active' : ''; ?>">Avatar</a>
										</li>
										<li>
											<a href="ui-badges.php" class="<?php echo ($page == 'ui-badges.php') ? 'active' : ''; ?>">Badges</a>
										</li>
										<li>
											<a href="ui-borders.php" class="<?php echo ($page == 'ui-borders.php') ? 'active' : ''; ?>">Border</a>
										</li>
										<li>
											<a href="ui-buttons.php" class="<?php echo ($page == 'ui-buttons.php') ? 'active' : ''; ?>">Buttons</a>
										</li>
										<li>
											<a href="ui-buttons-group.php" class="<?php echo ($page == 'ui-buttons-group.php') ? 'active' : ''; ?>">Button Group</a>
										</li>
										<li>
											<a href="ui-breadcrumb.php" class="<?php echo ($page == 'ui-breadcrumb.php') ? 'active' : ''; ?>">Breadcrumb</a>
										</li>
										<li>
											<a href="ui-cards.php" class="<?php echo ($page == 'ui-cards.php') ? 'active' : ''; ?>">Card</a>
										</li>
										<li>
											<a href="ui-carousel.php" class="<?php echo ($page == 'ui-carousel.php') ? 'active' : ''; ?>">Carousel</a>
										</li>
										<li>
											<a href="ui-colors.php" class="<?php echo ($page == 'ui-colors.php') ? 'active' : ''; ?>">Colors</a>
										</li>
										<li>
											<a href="ui-dropdowns.php" class="<?php echo ($page == 'ui-dropdowns.php') ? 'active' : ''; ?>">Dropdowns</a>
										</li>
										<li>
											<a href="ui-grid.php" class="<?php echo ($page == 'ui-grid.php') ? 'active' : ''; ?>">Grid</a>
										</li>
										<li>
											<a href="ui-images.php" class="<?php echo ($page == 'ui-images.php') ? 'active' : ''; ?>">Images</a>
										</li>
										<li>
											<a href="ui-lightbox.php" class="<?php echo ($page == 'ui-lightbox.php') ? 'active' : ''; ?>">Lightbox</a>
										</li>
										<li>
											<a href="ui-media.php" class="<?php echo ($page == 'ui-media.php') ? 'active' : ''; ?>">Media</a>
										</li>
										<li>
											<a href="ui-modals.php" class="<?php echo ($page == 'ui-modals.php') ? 'active' : ''; ?>">Modals</a>
										</li>
										<li>
											<a href="ui-offcanvas.php" class="<?php echo ($page == 'ui-offcanvas.php') ? 'active' : ''; ?>">Offcanvas</a>
										</li>
										<li>
											<a href="ui-pagination.php" class="<?php echo ($page == 'ui-pagination.php') ? 'active' : ''; ?>">Pagination</a>
										</li>
										<li>
											<a href="ui-popovers.php" class="<?php echo ($page == 'ui-popovers.php') ? 'active' : ''; ?>">Popovers</a>
										</li>
										<li>
											<a href="ui-progress.php" class="<?php echo ($page == 'ui-progress.php') ? 'active' : ''; ?>">Progress</a>
										</li>
										<li>
											<a href="ui-placeholders.php" class="<?php echo ($page == 'ui-placeholders.php') ? 'active' : ''; ?>">Placeholders</a>
										</li>
										<li>
											<a href="ui-spinner.php" class="<?php echo ($page == 'ui-spinner.php') ? 'active' : ''; ?>">Spinner</a>
										</li>
										<li>
											<a href="ui-sweetalerts.php" class="<?php echo ($page == 'ui-sweetalerts.php') ? 'active' : ''; ?>">Sweet Alerts</a>
										</li>
										<li>
											<a href="ui-nav-tabs.php" class="<?php echo ($page == 'ui-nav-tabs.php') ? 'active' : ''; ?>">Tabs</a>
										</li>
										<li>
											<a href="ui-toasts.php" class="<?php echo ($page == 'ui-toasts.php') ? 'active' : ''; ?>">Toasts</a>
										</li>
										<li>
											<a href="ui-tooltips.php" class="<?php echo ($page == 'ui-tooltips.php') ? 'active' : ''; ?>">Tooltips</a>
										</li>
										<li>
											<a href="ui-typography.php" class="<?php echo ($page == 'ui-typography.php') ? 'active' : ''; ?>">Typography</a>
										</li>
										<li>
											<a href="ui-video.php" class="<?php echo ($page == 'ui-video.php') ? 'active' : ''; ?>">Video</a>
										</li>
										<li>
											<a href="ui-sortable.php" class="<?php echo ($page == 'ui-sortable.php') ? 'active' : ''; ?>">Sortable</a>
										</li>
										<li>
											<a href="ui-swiperjs.php" class="<?php echo ($page == 'ui-swiperjs.php') ? 'active' : ''; ?>">Swiperjs</a>
										</li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class="<?php echo ($page == 'ui-ribbon.php' || $page == 'ui-clipboard.php' || $page == 'ui-drag-drop.php' || $page == 'ui-rangeslider.php' || $page == 'ui-rating.php' || $page == 'ui-text-editor.php' || $page == 'ui-counter.php' || $page == 'ui-scrollbar.php' || $page == 'ui-stickynote.php' || $page == 'ui-timeline.php') ? 'subdrop active' : ''; ?>">
										<i class="ti ti-hierarchy-3"></i>
										<span>Advanced UI</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li>
											<a href="ui-ribbon.php" class="<?php echo ($page == 'ui-ribbon.php') ? 'active' : ''; ?>">Ribbon</a>
										</li>
										<li>
											<a href="ui-clipboard.php" class="<?php echo ($page == 'ui-clipboard.php') ? 'active' : ''; ?>">Clipboard</a>
										</li>
										<li>
											<a href="ui-drag-drop.php" class="<?php echo ($page == 'ui-drag-drop.php') ? 'active' : ''; ?>">Drag & Drop</a>
										</li>
										<li>
											<a href="ui-rangeslider.php" class="<?php echo ($page == 'ui-rangeslider.php') ? 'active' : ''; ?>">Range Slider</a>
										</li>
										<li>
											<a href="ui-rating.php" class="<?php echo ($page == 'ui-rating.php') ? 'active' : ''; ?>">Rating</a>
										</li>
										<li>
											<a href="ui-text-editor.php" class="<?php echo ($page == 'ui-text-editor.php') ? 'active' : ''; ?>">Text Editor</a>
										</li>
										<li>
											<a href="ui-counter.php" class="<?php echo ($page == 'ui-counter.php') ? 'active' : ''; ?>">Counter</a>
										</li>
										<li>
											<a href="ui-scrollbar.php" class="<?php echo ($page == 'ui-swiperjs.php') ? 'active' : ''; ?>">Scrollbar</a>
										</li>
										<li>
											<a href="ui-stickynote.php" class="<?php echo ($page == 'ui-stickynote.php') ? 'active' : ''; ?>">Sticky Note</a>
										</li>
										<li>
											<a href="ui-timeline.php" class="<?php echo ($page == 'ui-timeline.php') ? 'active' : ''; ?>">Timeline</a>
										</li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class="<?php echo ($page == 'form-basic-inputs.php' || $page == 'form-checkbox-radios.php' || $page == 'form-input-groups.php' || $page == 'form-grid-gutters.php' || $page == 'form-select.php' || $page == 'form-mask.php' || $page == 'form-fileupload.php' || $page == 'form-horizontal.php' || $page == 'form-vertical.php' || $page == 'form-floating-labels.php' || $page == 'form-validation.php' || $page == 'form-wizard.php' || $page == 'form-select2.php') ? 'subdrop active' : ''; ?>">
										<i class="ti ti-input-search"></i>
										<span>Forms</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);"class="<?php echo ($page == 'form-basic-inputs.php' || $page == 'form-checkbox-radios.php' || $page == 'form-input-groups.php' || $page == 'form-grid-gutters.php' || $page == 'form-select.php' || $page == 'form-mask.php' || $page == 'form-fileupload.php' ) ? 'subdrop active' : ''; ?>">Form Elements <span class="menu-arrow inside-submenu"></span>
											</a>
											<ul>
												<li>
													<a href="form-basic-inputs.php" class="<?php echo ($page == 'form-basic-inputs.php') ? 'active' : ''; ?>">Basic Inputs</a>
												</li>
												<li>
													<a href="form-checkbox-radios.php" class="<?php echo ($page == 'form-checkbox-radios.php') ? 'active' : ''; ?>">Checkbox & Radios</a>
												</li>
												<li>
													<a href="form-input-groups.php" class="<?php echo ($page == 'form-input-groups.php') ? 'active' : ''; ?>">Input Groups</a>
												</li>
												<li>
													<a href="form-grid-gutters.php" class="<?php echo ($page == 'form-grid-gutters.php') ? 'active' : ''; ?>">Grid & Gutters</a>
												</li>
												<li>
													<a href="form-select.php" class="<?php echo ($page == 'form-select.php') ? 'active' : ''; ?>">Form Select</a>
												</li>
												<li>
													<a href="form-mask.php" class="<?php echo ($page == 'form-mask.php') ? 'active' : ''; ?>">Input Masks</a>
												</li>
												<li>
													<a href="form-fileupload.php" class="<?php echo ($page == 'form-fileupload.php') ? 'active' : ''; ?>">File Uploads</a>
												</li>
											</ul>
										</li>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);"class="<?php echo ($page == 'form-horizontal.php' || $page == 'form-vertical.php' || $page == 'form-floating-labels.php') ? 'subdrop active' : ''; ?>">Layouts <span class="menu-arrow inside-submenu"></span>
											</a>
											<ul>
												<li>
													<a href="form-horizontal.php" class="<?php echo ($page == 'form-horizontal.php') ? 'active' : ''; ?>">Horizontal Form</a>
												</li>
												<li>
													<a href="form-vertical.php" class="<?php echo ($page == 'form-vertical.php') ? 'active' : ''; ?>">Vertical Form</a>
												</li>
												<li>
													<a href="form-floating-labels.php" class="<?php echo ($page == 'form-floating-labels.php') ? 'active' : ''; ?>">Floating Labels</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="form-validation.php" class="<?php echo ($page == 'form-validation.php') ? 'active' : ''; ?>">Form Validation</a>
										</li>
										
										<li>
											<a href="form-select2.php" class="<?php echo ($page == 'form-select2.php') ? 'active' : ''; ?>">Select2</a>
										</li>
										<li>
											<a href="form-wizard.php" class="<?php echo ($page == 'form-wizard.php') ? 'active' : ''; ?>">Form Wizard</a>
										</li>
										<li>
											<a href="form-pickers.php" class="<?php echo ($page == 'form-pickers.php') ? 'active' : ''; ?>">Form Picker</a>
										</li>
										
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class="<?php echo ($page == 'tables-basic.php' || $page == 'data-tables.php') ? 'subdrop active' : ''; ?>">
										<i class="ti ti-table-plus"></i>
										<span>Tables</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li>
											<a href="tables-basic.php" class="<?php echo ($page == 'tables-basic.php') ? 'active' : ''; ?>">Basic Tables </a>
										</li>
										<li>
											<a href="data-tables.php" class="<?php echo ($page == 'data-tables.php') ? 'active' : ''; ?>">Data Table </a>
										</li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class="<?php echo ($page == 'chart-apex.php' || $page == 'chart-js.php' || $page == 'chart-morris.php' || $page == 'chart-flot.php' || $page == 'chart-peity.php' || $page == 'chart-c3.php') ? 'subdrop active' : ''; ?>">
										<i class="ti ti-chart-line"></i>
										<span>Charts</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li>
											<a href="chart-apex.php" class="<?php echo ($page == 'chart-apex.php') ? 'active' : ''; ?>">Apex Charts</a>
										</li>
										<li>
											<a href="chart-c3.php" class="<?php echo ($page == 'chart-c3.php') ? 'active' : ''; ?>">Chart C3</a>
										</li>
										<li>
											<a href="chart-js.php" class="<?php echo ($page == 'chart-js.php') ? 'active' : ''; ?>">Chart Js</a>
										</li>
										<li>
											<a href="chart-morris.php" class="<?php echo ($page == 'chart-morris.php') ? 'active' : ''; ?>">Morris Charts</a>
										</li>
										<li>
											<a href="chart-flot.php" class="<?php echo ($page == 'chart-flot.php') ? 'active' : ''; ?>">Flot Charts</a>
										</li>
										<li>
											<a href="chart-peity.php" class="<?php echo ($page == 'chart-peity.php') ? 'active' : ''; ?>">Peity Charts</a>
										</li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class="<?php echo ($page == 'icon-fontawesome.php' || $page == 'icon-feather.php' || $page == 'icon-ionic.php' || $page == 'icon-material.php' || $page == 'icon-pe7.php' || $page == 'icon-simpleline.php' || $page == 'icon-themify.php' || $page == 'icon-weather.php' || $page == 'icon-typicon.php' || $page == 'icon-flag.php') ? 'subdrop active' : ''; ?>">
										<i class="ti ti-icons"></i>
										<span>Icons</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li>
											<a href="icon-fontawesome.php" class="<?php echo ($page == 'icon-fontawesome.php') ? 'active' : ''; ?>">Fontawesome Icons</a>
										</li>
										<li>
											<a href="icon-tabler.php" class="<?php echo ($page == 'icon-tabler.php') ? 'active' : ''; ?>">Tabler Icons</a>
										</li>
										<li>
											<a href="icon-bootstrap.php" class="<?php echo ($page == 'icon-bootstrap.php') ? 'active' : ''; ?>">Bootstrap Icons</a>
										</li>
										<li>
											<a href="icon-remix.php" class="<?php echo ($page == 'icon-remix.php') ? 'active' : ''; ?>">Remix Icons</a>
										</li>
										<li>
											<a href="icon-feather.php" class="<?php echo ($page == 'icon-feather.php') ? 'active' : ''; ?>">Feather Icons</a>
										</li>
										<li>
											<a href="icon-ionic.php" class="<?php echo ($page == 'icon-ionic.php') ? 'active' : ''; ?>">Ionic Icons</a>
										</li>
										<li>
											<a href="icon-material.php" class="<?php echo ($page == 'icon-material.php') ? 'active' : ''; ?>">Material Icons</a>
										</li>
										<li>
											<a href="icon-pe7.php" class="<?php echo ($page == 'icon-pe7.php') ? 'active' : ''; ?>">Pe7 Icons</a>
										</li>
										<li>
											<a href="icon-simpleline.php" class="<?php echo ($page == 'icon-simpleline.php') ? 'active' : ''; ?>">Simpleline Icons</a>
										</li>
										<li>
											<a href="icon-themify.php" class="<?php echo ($page == 'icon-themify.php') ? 'active' : ''; ?>">Themify Icons</a>
										</li>
										<li>
											<a href="icon-weather.php" class="<?php echo ($page == 'icon-weather.php') ? 'active' : ''; ?>">Weather Icons</a>
										</li>
										<li>
											<a href="icon-typicon.php" class="<?php echo ($page == 'icon-typicon.php') ? 'active' : ''; ?>">Typicon Icons</a>
										</li>
										<li>
											<a href="icon-flag.php" class="<?php echo ($page == 'icon-flag.php') ? 'active' : ''; ?>">Flag Icons</a>
										</li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class="<?php echo ($page == 'maps-vector.php' || $page == 'maps-leaflet.php') ? 'subdrop active' : ''; ?>">
										<i class="ti ti-table-plus"></i>
										<span>Maps</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li>
											<a href="maps-vector.php" class="<?php echo ($page == 'maps-vector.php') ? 'active' : ''; ?>">Vector</a>
										</li>
										<li>
											<a href="maps-leaflet.php" class="<?php echo ($page == 'maps-leaflet.php') ? 'active' : ''; ?>">Leaflet</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-title"><span>Extras</span></li>
						<li>
							<ul>
								<li>
									<a href="javascript:void(0);"><i class="ti ti-file-text"></i><span>Documentation</span></a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="ti ti-exchange"></i><span>Changelog</span><span class="badge bg-pink badge-xs text-white fs-10 ms-s">v4.0.2</span></a>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-menu-2"></i><span>Multi Level</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="javascript:void(0);">Multilevel 1</a></li>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);">Multilevel 2<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="javascript:void(0);">Multilevel 2.1</a></li>
												<li class="submenu submenu-two submenu-three">
													<a href="javascript:void(0);">Multilevel 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
													<ul>
														<li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
														<li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li><a href="javascript:void(0);">Multilevel 3</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->

		<!-- Horizontal Menu -->
		<div class="sidebar sidebar-horizontal" id="horizontal-menu">
			<div class="sidebar-menu">
				<div class="main-menu">
					<ul class="nav-menu">
						<li class="menu-title">
							<span>Main</span>
						</li>
						<li class="submenu">
							<a href="#" class=" <?php echo ($page == 'admin-dashboard.php'||$page == 'employee-dashboard.php'||$page == 'deals-dashboard.php'||$page == 'leads-dashboard.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-smart-home"></i><span>Dashboard</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="admin-dashboard.php" class="<?php echo ($page == 'admin-dashboard.php') ? 'active' : ''; ?>">Admin Dashboard</a></li>
								<li><a href="employee-dashboard.php" class="<?php echo ($page == 'employee-dashboard.php') ? 'active' : ''; ?>">Employee Dashboard</a></li>
								<li><a href="deals-dashboard.php" class="<?php echo ($page == 'deals-dashboard.php') ? 'active' : ''; ?>">Deals Dashboard</a></li>
								<li><a href="leads-dashboard.php" class="<?php echo ($page == 'leads-dashboard.php') ? 'active' : ''; ?>">Leads Dashboard</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#" class=" <?php echo ($page == 'dashboard.php'||$page == 'companies.php'||$page == 'subscription.php'||$page == 'packages.php'||$page == 'domain.php'||$page == 'purchase-transaction.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-user-star"></i><span>Super Admin</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="dashboard.php" class="<?php echo ($page == 'dashboard.php') ? 'active' : ''; ?>">Dashboard</a></li>
								<li><a href="companies.php" class="<?php echo ($page == 'companies.php') ? 'active' : ''; ?>">Companies</a></li>
								<li><a href="subscription.php" class="<?php echo ($page == 'subscription.php') ? 'active' : ''; ?>">Subscriptions</a></li>
								<li><a href="packages.php" class="<?php echo ($page == 'packages.php') ? 'active' : ''; ?>">Packages</a></li>
								<li><a href="domain.php" class="<?php echo ($page == 'domain.php') ? 'active' : ''; ?>">Domain</a></li>
								<li><a href="purchase-transaction.php" class="<?php echo ($page == 'purchase-transaction.php') ? 'active' : ''; ?>">Purchase Transaction</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#" class=" <?php echo ($page == 'chat.php'||$page == 'call.php'||$page == 'voice-call.php'||$page == 'video-call.php'||$page == 'outgoing-call.php'||$page == 'incoming-call.php'||$page == 'call-history.php'||$page == 'calendar.php'
									||$page == 'email.php'||$page == 'todo.php'||$page == 'notes.php'||$page == 'social-feed.php'||$page == 'file-manager.php'||$page == 'kanban-view.php'||$page == 'invoices.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-layout-grid-add"></i><span>Applications</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="chat.php">Chat</a></li>
								<li class="submenu submenu-two">
									<a href="call.php">Calls<span class="menu-arrow inside-submenu"></span></a>
									<ul>
										<li><a href="voice-call.php" class="<?php echo ($page == 'voice-call.php') ? 'active' : ''; ?>">Voice Call</a></li>
										<li><a href="video-call.php" class="<?php echo ($page == 'video-call.php') ? 'active' : ''; ?>">Video Call</a></li>
										<li><a href="outgoing-call.php" class="<?php echo ($page == 'outgoing-call.php') ? 'active' : ''; ?>">Outgoing Call</a></li>
										<li><a href="incoming-call.php" class="<?php echo ($page == 'incoming-call.php') ? 'active' : ''; ?>">Incoming Call</a></li>
										<li><a href="call-history.php" class="<?php echo ($page == 'call-history.php') ? 'active' : ''; ?>">Call History</a></li>
									</ul>
								</li>
								<li><a href="calendar.php" class="<?php echo ($page == 'calendar.php') ? 'active' : ''; ?>">Calendar</a></li>
								<li><a href="email.php" class="<?php echo ($page == 'email.php') ? 'active' : ''; ?>">Email</a></li>
								<li><a href="todo.php" class="<?php echo ($page == 'todo.php') ? 'active' : ''; ?>">To Do</a></li>
								<li><a href="notes.php" class="<?php echo ($page == 'notes.php') ? 'active' : ''; ?>">Notes</a></li>
								<li><a href="file-manager.php" class="<?php echo ($page == 'file-manager.php') ? 'active' : ''; ?>">File Manager</a></li>
								<li><a href="kanban-view.php" class="<?php echo ($page == 'kanban-view.php') ? 'active' : ''; ?>">Kanban</a></li>
								<li><a href="invoices.php" class="<?php echo ($page == 'invoices.php') ? 'active' : ''; ?>">Invoices</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"class=" <?php echo ($page == 'layout-horizontal.php'||$page == 'layout-detached.php'||$page == 'layout-modern.php'||$page == 'layout-two-column.php'||$page == 'layout-hovered.php'||$page == 'layout-box.php'||$page == 'layout-horizontal-single.php'||$page == 'layout-horizontal-box.php'
									||$page == 'layout-horizontal-overlay.php'||$page == 'layout-horizontal-sidemenu.php'||$page == 'layout-vertical-transparent.php'||$page == 'layout-without-header.php'||$page == 'layout-rtl.php'||$page == 'layout-dark.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-layout-board-split"></i><span>Layouts</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li class="<?php echo ($page == 'layout-horizontal.php') ? 'active' : ''; ?>">
									<a href="layout-horizontal.php">
										<span>Horizontal</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-detached.php') ? 'active' : ''; ?>">
									<a href="layout-detached.php">
										<span>Detached</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-modern.php') ? 'active' : ''; ?>">
									<a href="layout-modern.php">
										<span>Modern</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-two-column.php') ? 'active' : ''; ?>">
									<a href="layout-two-column.php">
										<span>Two Column </span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-hovered.php') ? 'active' : ''; ?>">
									<a href="layout-hovered.php">
										<span>Hovered</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-box.php') ? 'active' : ''; ?>">
									<a href="layout-box.php">
										<span>Boxed</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-horizontal-single.php') ? 'active' : ''; ?>">
									<a href="layout-horizontal-single.php">
										<span>Horizontal Single</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-horizontal-overlay.php') ? 'active' : ''; ?>">
									<a href="layout-horizontal-overlay.php">
										<span>Horizontal Overlay</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-horizontal-box.php') ? 'active' : ''; ?>">
									<a href="layout-horizontal-box.php">
										<span>Horizontal Box</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-horizontal-sidemenu.php') ? 'active' : ''; ?>">
									<a href="layout-horizontal-sidemenu.php">
										<span>Menu Aside</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-vertical-transparent.php') ? 'active' : ''; ?>">
									<a href="layout-vertical-transparent.php">
										<span>Transparent</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-without-header.php') ? 'active' : ''; ?>">
									<a href="layout-without-header.php">
										<span>Without Header</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-rtl.php') ? 'active' : ''; ?>">
									<a href="layout-rtl.php">
										<span>RTL</span>
									</a>
								</li>
								<li class="<?php echo ($page == 'layout-dark.php') ? 'active' : ''; ?>">
									<a href="layout-dark.php">
										<span>Dark</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#">
								<i class="ti ti-user-star"></i><span>Projects</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li class="<?php echo ($page == 'clients-grid.php'||$page == 'clients.php') ? 'active' : ''; ?>">
									<a href="clients-grid.php"><span>Clients</span>
									</a>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class=" <?php echo ($page == 'projects-grid.php'||$page == 'tasks.php'||$page == 'task-board.php') ? 'active subdrop' : ''; ?>"><span>Projects</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="projects-grid.php" class="<?php echo ($page == 'projects-grid.php') ? 'active' : ''; ?>">Projects</a></li>
										<li><a href="tasks.php" class="<?php echo ($page == 'tasks.php') ? 'active' : ''; ?>">Tasks</a></li>
										<li><a href="task-board.php" class="<?php echo ($page == 'task-board.php') ? 'active' : ''; ?>">Task Board</a></li>
									</ul>
								</li>		
								<li class="submenu">
									<a href="call.php">Crm<span class="menu-arrow"></span></a>
									<ul>
										<li><a href="contacts-grid.php" class="<?php echo ($page == 'contacts-grid.php'||$page == 'contacts.php'||$page == 'contact-details.php') ? 'active' : ''; ?>"><span>Contacts</span></a></li>
										<li><a href="companies-grid.php" class="<?php echo ($page == 'companies-grid.php'||$page == 'companies-crm.php'||$page == 'company-details.php') ? 'active' : ''; ?>"><span>Companies</span></a></li>
										<li><a href="deals-grid.php" class="<?php echo ($page == 'deals-grid.php'||$page == 'deals-details.php'||$page == 'deals.php') ? 'active' : ''; ?>"><span>Deals</span></a></li>
										<li><a href="leads-grid.php" class="<?php echo ($page == 'leads-grid.php'||$page == 'leads-details.php'||$page == 'leads.php') ? 'active' : ''; ?>"><span>Leads</span></a></li>
										<li><a href="pipeline.php" class="<?php echo ($page == 'pipeline.php') ? 'active' : ''; ?>"><span>Pipeline</span></a></li>
										<li><a href="analytics.php" class="<?php echo ($page == 'analytics.php') ? 'active' : ''; ?>"><span>Analytics</span></a></li>
										<li><a href="activity.php" class="<?php echo ($page == 'activity.php') ? 'active' : ''; ?>"><span>Activities</span></a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);" class="<?php echo ($page == 'employees.php'||$page == 'employees-grid.php'||$page == 'employee-details.php'||$page == 'departments.php'||$page == 'designations.php'||$page == 'policy.php') ? 'active subdrop' : ''; ?>"><span>Employees</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="employees.php" class="<?php echo ($page == 'employees.php') ? 'active' : ''; ?>">Employee Lists</a></li>
										<li><a href="employees-grid.php" class="<?php echo ($page == 'employees-grid.php') ? 'active' : ''; ?>">Employee Grid</a></li>
										<li><a href="employee-details.php" class="<?php echo ($page == 'employee-details.php') ? 'active' : ''; ?>">Employee Details</a></li>
										<li><a href="departments.php" class="<?php echo ($page == 'departments.php') ? 'active' : ''; ?>">Departments</a></li>
										<li><a href="designations.php" class="<?php echo ($page == 'designations.php') ? 'active' : ''; ?>">Designations</a></li>
										<li><a href="policy.php" class="<?php echo ($page == 'policy.php') ? 'active' : ''; ?>">Policies</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);" class=" <?php echo ($page == 'tickets.php'||$page == 'ticket-details.php') ? 'active subdrop' : ''; ?>"><span>Tickets</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="tickets.php" class="<?php echo ($page == 'tickets.php') ? 'active' : ''; ?>">Tickets</a></li>
										<li><a href="ticket-details.php" class="<?php echo ($page == 'ticket-details.php') ? 'active' : ''; ?>">Ticket Details</a></li>
									</ul>
								</li>
								<li><a href="holidays.php" class="<?php echo ($page == 'holidays.php') ? 'active' : ''; ?>"><span>Holidays</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);"  class=" <?php echo ($page == 'leaves.php'||$page == 'leaves-employee.php'||$page == 'leave-settings.php'||$page == 'attendance-admin.php'||$page == 'attendance-employee.php'||$page == 'timesheets.php'||$page == 'schedule-timing.php'||$page == 'overtime.php') ? 'active subdrop' : ''; ?>"><span>Attendance</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu">
											<a href="javascript:void(0);"class=" <?php echo ($page == 'leaves.php'||$page == 'leaves-employee.php'||$page == 'leave-settings.php') ? 'active subdrop' : ''; ?>">Leaves<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="leaves.php" class="<?php echo ($page == 'leaves.php') ? 'active' : ''; ?>">Leaves (Admin)</a></li>
												<li><a href="leaves-employee.php" class="<?php echo ($page == 'leaves-employee.php') ? 'active' : ''; ?>">Leave (Employee)</a></li>
												<li><a href="leave-settings.php" class="<?php echo ($page == 'leave-settings.php') ? 'active' : ''; ?>">Leave Settings</a></li>												
											</ul>												
										</li>
										<li><a href="attendance-admin.php" class="<?php echo ($page == 'attendance-admin.php') ? 'active' : ''; ?>">Attendance (Admin)</a></li>
										<li><a href="attendance-employee.php" class="<?php echo ($page == 'attendance-employee.php') ? 'active' : ''; ?>">Attendance (Employee)</a></li>
										<li><a href="timesheets.php" class="<?php echo ($page == 'timesheets.php') ? 'active' : ''; ?>">Timesheets</a></li>
										<li><a href="schedule-timing.php" class="<?php echo ($page == 'schedule-timing.php') ? 'active' : ''; ?>">Shift & Schedule</a></li>
										<li><a href="overtime.php" class="<?php echo ($page == 'overtime.php') ? 'active' : ''; ?>">Overtime</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);" class=" <?php echo ($page == 'performance-indicator.php'||$page == 'performance-review.php'||$page == 'performance-appraisal.php'||$page == 'goal-tracking.php'||$page == 'goal-type.php') ? 'active subdrop' : ''; ?>"><span>Performance</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="performance-indicator.php" class="<?php echo ($page == 'performance-indicator.php') ? 'active' : ''; ?>">Performance Indicator</a></li>
										<li><a href="performance-review.php" class="<?php echo ($page == 'performance-review.php') ? 'active' : ''; ?>">Performance Review</a></li>
										<li><a href="performance-appraisal.php" class="<?php echo ($page == 'performance-appraisal.php') ? 'active' : ''; ?>">Performance Appraisal</a></li>
										<li><a href="goal-tracking.php" class="<?php echo ($page == 'goal-tracking.php') ? 'active' : ''; ?>">Goal List</a></li>
										<li><a href="goal-type.php" class="<?php echo ($page == 'goal-type.php') ? 'active' : ''; ?>">Goal Type</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);" class=" <?php echo ($page == 'training.php'||$page == 'trainers.php'||$page == 'training-type.php') ? 'active subdrop' : ''; ?>"><span>Training</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="training.php" class="<?php echo ($page == 'training.php') ? 'active' : ''; ?>">Training List</a></li>
										<li><a href="trainers.php" class="<?php echo ($page == 'trainers.php') ? 'active' : ''; ?>">Trainers</a></li>
										<li><a href="training-type.php" class="<?php echo ($page == 'training-type.php') ? 'active' : ''; ?>">Training Type</a></li>
									</ul>
								</li>
								<li><a href="promotion.php" class="<?php echo ($page == 'promotion.php') ? 'active' : ''; ?>"><span>Promotion</span></a></li>
								<li><a href="resignation.php" class="<?php echo ($page == 'resignation.php') ? 'active' : ''; ?>"><span>Resignation</span></a></li>
								<li><a href="termination.php" class="<?php echo ($page == 'termination.php') ? 'active' : ''; ?>"><span>Termination</span></a></li>														
							</ul>
						</li>
						<li class="submenu">
							<a href="#">
								<i class="ti ti-user-star"></i><span>Administration</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);" class=" <?php echo ($page == 'estimates.php'||$page == 'invoices.php'||$page == 'payments.php'||$page == 'expenses.php'||$page == 'provident-fund.php'||$page == 'taxes.php') ? 'active subdrop' : ''; ?>"><span>Sales</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="estimates.php" class="<?php echo ($page == 'estimates.php') ? 'active' : ''; ?>">Estimates</a></li>
										<li><a href="invoices.php" class="<?php echo ($page == 'invoices.php') ? 'active' : ''; ?>">Invoices</a></li>
										<li><a href="payments.php" class="<?php echo ($page == 'payments.php') ? 'active' : ''; ?>">Payments</a></li>
										<li><a href="expenses.php" class="<?php echo ($page == 'expenses.php') ? 'active' : ''; ?>">Expenses</a></li>
										<li><a href="provident-fund.php" class="<?php echo ($page == 'provident-fund.php') ? 'active' : ''; ?>">Provident Fund</a></li>
										<li><a href="taxes.php" class="<?php echo ($page == 'taxes.php') ? 'active' : ''; ?>">Taxes</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class=" <?php echo ($page == 'categories.php'||$page == 'budgets.php'||$page == 'budget-expenses.php'||$page == 'budget-revenues.php') ? 'active subdrop' : ''; ?>"><span>Accounting</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="categories.php" class="<?php echo ($page == 'categories.php') ? 'active' : ''; ?>">Categories</a></li>
										<li><a href="budgets.php" class="<?php echo ($page == 'budgets.php') ? 'active' : ''; ?>">Budgets</a></li>
										<li><a href="budget-expenses.php" class="<?php echo ($page == 'budget-expenses.php') ? 'active' : ''; ?>">Budget Expenses</a></li>
										<li><a href="budget-revenues.php" class="<?php echo ($page == 'budget-revenues.php') ? 'active' : ''; ?>">Budget Revenues</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class="<?php echo ($page == 'employee-salary.php'||$page == 'payslip.php'||$page == 'payroll.php') ? 'active subdrop' : ''; ?>"><span>Payroll</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="employee-salary.php" class="<?php echo ($page == 'employee-salary.php') ? 'active' : ''; ?>">Employee Salary</a></li>
										<li><a href="payslip.php" class="<?php echo ($page == 'payslip.php') ? 'active' : ''; ?>">Payslip</a></li>
										<li><a href="payroll.php" class="<?php echo ($page == 'payroll.php') ? 'active' : ''; ?>">Payroll Items</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class="<?php echo ($page == 'assets.php'||$page == 'asset-categories.php') ? 'active subdrop' : ''; ?>"><span>Assets</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="assets.php"  class="<?php echo ($page == 'assets.php') ? 'active' : ''; ?>">Assets</a></li>
										<li><a href="asset-categories.php"  class="<?php echo ($page == 'asset-categories.php') ? 'active' : ''; ?>">Asset Categories</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class="<?php echo ($page == 'knowledgebase.php'||$page == 'activity.php') ? 'active subdrop' : ''; ?>"><span>Help & Supports</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="knowledgebase.php" class="<?php echo ($page == 'knowledgebase.php') ? 'active' : ''; ?>">Knowledge Base</a></li>
										<li><a href="activity.php" class="<?php echo ($page == 'activity.php') ? 'active' : ''; ?>">Activities</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class="<?php echo ($page == 'users.php'||$page == 'roles-permissions.php') ? 'active subdrop' : ''; ?>"><span>User Management</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="users.php" class="<?php echo ($page == 'users.php') ? 'active' : ''; ?>">Users</a></li>
										<li><a href="roles-permissions.php" class="<?php echo ($page == 'roles-permissions.php') ? 'active' : ''; ?>">Roles & Permissions</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class="<?php echo ($page == 'expenses-report.php'||$page == 'invoice-report.php'||$page == 'payment-report.php'||$page == 'project-report.php'||$page == 'task-report.php'||$page == 'user-report.php'||$page == 'employee-report.php'||$page == 'payslip-report.php'||$page == 'attendance-report.php'||$page == 'leave-report.php'||$page == 'daily-report.php') ? 'active subdrop' : ''; ?>"><span>Reports</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="expenses-report.php" class="<?php echo ($page == 'expenses-report.php') ? 'active' : ''; ?>">Expense Report</a></li>
										<li><a href="invoice-report.php" class="<?php echo ($page == 'invoice-report.php') ? 'active' : ''; ?>">Invoice Report</a></li>
										<li><a href="payment-report.php" class="<?php echo ($page == 'payment-report.php') ? 'active' : ''; ?>">Payment Report</a></li>
										<li><a href="project-report.php" class="<?php echo ($page == 'project-report.php') ? 'active' : ''; ?>">Project Report</a></li>
										<li><a href="task-report.php" class="<?php echo ($page == 'task-repor.php') ? 'active' : ''; ?>">Task Report</a></li>
										<li><a href="user-report.php" class="<?php echo ($page == 'user-report.php') ? 'active' : ''; ?>">User Report</a></li>
										<li><a href="employee-report.php" class="<?php echo ($page == 'employee-report.php') ? 'active' : ''; ?>">Employee Report</a></li>
										<li><a href="payslip-report.php" class="<?php echo ($page == 'payslip-report.php') ? 'active' : ''; ?>">Payslip Report</a></li>
										<li><a href="attendance-report.php" class="<?php echo ($page == 'attendance-report.php') ? 'active' : ''; ?>">Attendance Report</a></li>
										<li><a href="leave-report.php" class="<?php echo ($page == 'leave-report.php') ? 'active' : ''; ?>">Leave Report</a></li>
										<li><a href="daily-report.php" class="<?php echo ($page == 'daily-report.php') ? 'active' : ''; ?>">Daily Report</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"class="<?php echo ($page == 'profile-settings.php'||
									$page == 'security-settings.php'||
									$page == 'notification-settings.php'||
									$page == 'project-report.php'||
									$page == 'connected-apps.php'||
									$page == 'bussiness-settings.php'||
									$page == 'seo-settings.php'||
									$page == 'localization-settings.php'||
									$page == 'prefixes.php'||
									$page == 'preferences.php'||
									$page == 'performance-appraisal.php'||
									$page == 'language.php'||
									$page == 'authentication-settings.php'||
									$page == 'ai-settings.php'||
									$page == 'salary-settings.php'||
									$page == 'approval-settings.php'||
									$page == 'invoice-settings.php'||
									$page == 'leave-type.php'||
									$page == 'custom-fields.php'||
									$page == 'email-settings.php'||
									$page == 'email-template.php'||
									$page == 'sms-settings.php'||
									$page == 'sms-template.php'||
									$page == 'otp-settings.php'||
									$page == 'gdpr.php'||
									$page == 'maintenance-mode.php'||
									$page == 'payment-gateways.php'||
									$page == 'tax-rates.php'||
									$page == 'currencies.php'||
									$page == 'custom-css.php'||
									$page == 'custom-js.php'||
									$page == 'cronjob.php'||
									$page == 'storage-settings.php'||
									$page == 'ban-ip-address.php'||
									$page == 'backup.php'||
									$page == 'clear-cache.php'
									) ? 'active subdrop' : ''; ?>"><span>Settings</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'profile-settings.php'||$page == 'security-settings.php'||$page == 'notification-settings.php'||$page == 'connected-apps.php') ? 'active subdrop' : ''; ?>">General Settings<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="profile-settings.php" class="<?php echo ($page == 'profile-settings.php') ? 'active' : ''; ?>">Profile</a></li>
												<li><a href="security-settings.php" class="<?php echo ($page == 'security-settings.php') ? 'active' : ''; ?>">Security</a></li>
												<li><a href="notification-settings.php" class="<?php echo ($page == 'notification-settings.php') ? 'active' : ''; ?>">Notifications</a></li>
												<li><a href="connected-apps.php" class="<?php echo ($page == 'connected-apps.php') ? 'active' : ''; ?>">Connected Apps</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'bussiness-settings.php'||$page == 'seo-settings.php'||$page == 'localization-settings.php'||$page == 'prefixes.php'||$page == 'preferences.php'||$page == 'performance-appraisal.php'||$page == 'language.php'||$page == 'authentication-settings.php'||$page == 'ai-settings.php') ? 'active subdrop' : ''; ?>">Website Settings<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="bussiness-settings.php" class="<?php echo ($page == 'bussiness-settings.php') ? 'active' : ''; ?>">Business Settings</a></li>
												<li><a href="seo-settings.php" class="<?php echo ($page == 'seo-settings.php') ? 'active' : ''; ?>">SEO Settings</a></li>
												<li><a href="localization-settings.php" class="<?php echo ($page == 'localization-settings.php') ? 'active' : ''; ?>">Localization</a></li>
												<li><a href="prefixes.php" class="<?php echo ($page == 'prefixes.php') ? 'active' : ''; ?>">Prefixes</a></li>
												<li><a href="preferences.php" class="<?php echo ($page == 'preferences.php') ? 'active' : ''; ?>">Preferences</a></li>
												<li><a href="performance-appraisal.php" class="<?php echo ($page == 'performance-appraisal.php') ? 'active' : ''; ?>">Appearance</a></li>
												<li><a href="language.php" class="<?php echo ($page == 'language.php') ? 'active' : ''; ?>">Language</a></li>
												<li><a href="authentication-settings.php" class="<?php echo ($page == 'authentication-settings.php') ? 'active' : ''; ?>">Authentication</a></li>
												<li><a href="ai-settings.php" class="<?php echo ($page == 'ai-settings.php') ? 'active' : ''; ?>">AI Settings</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'salary-settings.php'||$page == 'approval-settings.php'||$page == 'invoice-settings.php'||$page == 'leave-type.php'||$page == 'custom-fields.php') ? 'active subdrop' : ''; ?>">App Settings<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="salary-settings.php" class="<?php echo ($page == 'salary-settings.php') ? 'active' : ''; ?>">Salary Settings</a></li>
												<li><a href="approval-settings.php" class="<?php echo ($page == 'approval-settings.php') ? 'active' : ''; ?>">Approval Settings</a></li>
												<li><a href="invoice-settings.php" class="<?php echo ($page == 'invoice-settings.php') ? 'active' : ''; ?>">Invoice Settings</a></li>
												<li><a href="leave-type.php" class="<?php echo ($page == 'leave-type.php') ? 'active' : ''; ?>">Leave Type</a></li>
												<li><a href="custom-fields.php" class="<?php echo ($page == 'custom-fields.php') ? 'active' : ''; ?>">Custom Fields</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'email-settings.php'||$page == 'email-template.php'||$page == 'sms-settings.php'||$page == 'sms-template.php'||$page == 'otp-settings.php'||$page == 'gdpr.php'||$page == 'maintenance-mode.php') ? 'active subdrop' : ''; ?>">System Settings<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="email-settings.php" class="<?php echo ($page == 'email-settings.php') ? 'active' : ''; ?>">Email Settings</a></li>
												<li><a href="email-template.php" class="<?php echo ($page == 'email-template.php') ? 'active' : ''; ?>">Email Templates</a></li>
												<li><a href="sms-settings.php" class="<?php echo ($page == 'sms-settings.php') ? 'active' : ''; ?>">SMS Settings</a></li>
												<li><a href="sms-template.php" class="<?php echo ($page == 'sms-template.php') ? 'active' : ''; ?>">SMS Templates</a></li>
												<li><a href="otp-settings.php" class="<?php echo ($page == 'otp-settings.php') ? 'active' : ''; ?>">OTP</a></li>
												<li><a href="gdpr.php" class="<?php echo ($page == 'gdpr.php') ? 'active' : ''; ?>">GDPR Cookies</a></li>
												<li><a href="maintenance-mode.php" class="<?php echo ($page == 'maintenance-mode.php') ? 'active' : ''; ?>">Maintenance Mode</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'payment-gateways.php'||$page == 'tax-rates.php'||$page == 'currencies.php') ? 'active subdrop' : ''; ?>">Financial Settings<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="payment-gateways.php" class="<?php echo ($page == 'payment-gateways.php') ? 'active' : ''; ?>">Payment Gateways</a></li>
												<li><a href="tax-rates.php" class="<?php echo ($page == 'tax-rates.php') ? 'active' : ''; ?>">Tax Rate</a></li>
												<li><a href="currencies.php" class="<?php echo ($page == 'currencies.php') ? 'active' : ''; ?>">Currencies</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'custom-css.php'||$page == 'custom-js.php'||$page == 'cronjob.php'||$page == 'storage-settings.php'||$page == 'ban-ip-address.php'||$page == 'backup.php'||$page == 'clear-cache.php') ? 'active subdrop' : ''; ?>">Other Settings<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="custom-css.php" class="<?php echo ($page == 'custom-css.php') ? 'active' : ''; ?>">Custom CSS</a></li>
												<li><a href="custom-js.php" class="<?php echo ($page == 'custom-js.php') ? 'active' : ''; ?>">Custom JS</a></li>
												<li><a href="cronjob.php" class="<?php echo ($page == 'cronjob.php') ? 'active' : ''; ?>">Cronjob</a></li>
												<li><a href="storage-settings.php" class="<?php echo ($page == 'storage-settings.php') ? 'active' : ''; ?>">Storage</a></li>
												<li><a href="ban-ip-address.php" class="<?php echo ($page == 'ban-ip-address.php') ? 'active' : ''; ?>">Ban IP Address</a></li>
												<li><a href="backup.php" class="<?php echo ($page == 'backup.php') ? 'active' : ''; ?>">Backup</a></li>
												<li><a href="clear-cache.php" class="<?php echo ($page == 'clear-cache.php') ? 'active' : ''; ?>">Clear Cache</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"class="<?php echo ($page == 'starter.php'||$page == 'profile.php'||$page == 'gallery.php'||$page == 'search-result.php'||$page == 'timeline.php'||$page == 'pricing.php'||$page == 'coming-soon.php'||$page == 'under-maintenance.php'||$page == 'under-construction.php'||$page == 'api-keys.php'||$page == 'privacy-policy.php'||$page == 'terms-condition.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-page-break"></i><span>Pages</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li class="<?php echo ($page == 'starter.php') ? 'active' : ''; ?>"><a href="starter.php"><span>Starter</span></a></li>
								<li class="<?php echo ($page == 'profile.php') ? 'active' : ''; ?>"><a href="profile.php"><span>Profile</span></a></li>
								<li class="<?php echo ($page == 'gallery.php') ? 'active' : ''; ?>"><a href="gallery.php"><span>Gallery</span></a></li>
								<li class="<?php echo ($page == 'search-result.php') ? 'active' : ''; ?>"><a href="search-result.php"><span>Search Results</span></a></li>
								<li class="<?php echo ($page == 'timeline.php') ? 'active' : ''; ?>"><a href="timeline.php"><span>Timeline</span></a></li>
								<li class="<?php echo ($page == 'pricing.php') ? 'active' : ''; ?>"><a href="pricing.php"><span>Pricing</span></a></li>
								<li class="<?php echo ($page == 'coming-soon.php') ? 'active' : ''; ?>"><a href="coming-soon.php"><span>Coming Soon</span></a></li>
								<li class="<?php echo ($page == 'under-maintenance.php') ? 'active' : ''; ?>"><a href="under-maintenance.php"><span>Under Maintenance</span></a></li>
								<li class="<?php echo ($page == 'under-construction.php') ? 'active' : ''; ?>"><a href="under-construction.php"><span>Under Construction</span></a></li>
								<li class="<?php echo ($page == 'api-keys.php') ? 'active' : ''; ?>"><a href="api-keys.php"><span>API Keys</span></a></li>
								<li class="<?php echo ($page == 'privacy-policy.php') ? 'active' : ''; ?>"><a href="privacy-policy.php"><span>Privacy Policy</span></a></li>
								<li class="<?php echo ($page == 'terms-condition.php') ? 'active' : ''; ?>"><a href="terms-condition.php"><span>Terms & Conditions</span></a></li>
								<li class="submenu">
									<a href="#"><span>Content</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="pages.php" class="<?php echo ($page == 'pages.php') ? 'active' : ''; ?>" >Pages</a></li>
										<li class="submenu">
											<a href="javascript:void(0);" class="<?php echo ($page == 'blogs.php'||$page == 'blog-categories.php'||$page == 'blog-comments.php'||$page == 'blog-tags.php') ? 'active subdrop' : ''; ?>">Blogs<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="blogs.php" class="<?php echo ($page == 'blogs.php') ? 'active' : ''; ?>">All Blogs</a></li>
												<li><a href="blog-categories.php" class="<?php echo ($page == 'blog-categories.php') ? 'active' : ''; ?>">Categories</a></li>
												<li><a href="blog-comments.php" class="<?php echo ($page == 'blog-comments.php') ? 'active' : ''; ?>">Comments</a></li>
												<li><a href="blog-tags.php" class="<?php echo ($page == 'blog-tags.php') ? 'active' : ''; ?>">Tags</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'countries.php'||$page == 'states.php'||$page == 'cities.php') ? 'active subdrop' : ''; ?>">Locations<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="countries.php" class="<?php echo ($page == 'countries.php') ? 'active' : ''; ?>">Countries</a></li>
												<li><a href="states.php" class="<?php echo ($page == 'states.php') ? 'active' : ''; ?>">States</a></li>
												<li><a href="cities.php" class="<?php echo ($page == 'cities.php') ? 'active' : ''; ?>">Cities</a></li>
											</ul>
										</li>
										<li><a href="testimonials.php" class="<?php echo ($page == 'testimonials.php') ? 'active' : ''; ?>">Testimonials</a></li>
										<li><a href="faq.php" class="<?php echo ($page == 'faq.php') ? 'active' : ''; ?>">FAQ’S</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#">
										<span>Authentication</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu">
											<a href="javascript:void(0);" class="">Login<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="login.php" class="<?php echo ($page == 'login.php') ? 'active' : ''; ?>">Cover</a></li>
												<li><a href="login-2.php" class="<?php echo ($page == 'login-2.php') ? 'active' : ''; ?>">Illustration</a></li>
												<li><a href="login-3.php" class="<?php echo ($page == 'login-3.php') ? 'active' : ''; ?>">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);" class="">Register<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="register.php" class="<?php echo ($page == 'register.php') ? 'active' : ''; ?>">Cover</a></li>
												<li><a href="register-2.php" class="<?php echo ($page == 'register-2.php') ? 'active' : ''; ?>">Illustration</a></li>
												<li><a href="register-3.php" class="<?php echo ($page == 'register-3.php') ? 'active' : ''; ?>">Basic</a></li>
											</ul>
										</li>
										<li class="submenu"><a href="javascript:void(0);">Forgot Password<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="forgot-password.php" class="<?php echo ($page == 'forgot-password.php') ? 'active' : ''; ?>">Cover</a></li>
												<li><a href="forgot-password-2.php" class="<?php echo ($page == 'forgot-password-2.php') ? 'active' : ''; ?>">Illustration</a></li>
												<li><a href="forgot-password-3.php" class="<?php echo ($page == 'forgot-password-3.php') ? 'active' : ''; ?>">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Reset Password<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="reset-password.php" class="<?php echo ($page == 'reset-password.php') ? 'active' : ''; ?>">Cover</a></li>
												<li><a href="reset-password-2.php" class="<?php echo ($page == 'reset-password-2.php') ? 'active' : ''; ?>">Illustration</a></li>
												<li><a href="reset-password-3.php" class="<?php echo ($page == 'reset-password-3.php') ? 'active' : ''; ?>">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Email Verification<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="email-verification.php" class="<?php echo ($page == 'email-verification.php') ? 'active' : ''; ?>">Cover</a></li>
												<li><a href="email-verification-2.php" class="<?php echo ($page == 'email-verification-2.php') ? 'active' : ''; ?>">Illustration</a></li>
												<li><a href="email-verification-3.php" class="<?php echo ($page == 'email-verification-3.php') ? 'active' : ''; ?>">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">2 Step Verification<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="two-step-verification.php" class="<?php echo ($page == 'two-step-verification.php') ? 'active' : ''; ?>">Cover</a></li>
												<li><a href="two-step-verification-2.php" class="<?php echo ($page == 'two-step-verification-2.php') ? 'active' : ''; ?>">Illustration</a></li>
												<li><a href="two-step-verification-3.php" class="<?php echo ($page == 'two-step-verification-3.php') ? 'active' : ''; ?>">Basic</a></li>
											</ul>
										</li>
										<li  class="<?php echo ($page == 'lock-screen.php') ? 'active' : ''; ?>"><a href="lock-screen.php">Lock Screen</a></li>
										<li  class="<?php echo ($page == 'error-404.php') ? 'active' : ''; ?>"><a href="error-404.php">404 Error</a></li>
										<li  class="<?php echo ($page == 'error-500.php') ? 'active' : ''; ?>"><a href="error-500.php">500 Error</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#">
										<span>UI Interface</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu">
											<a href="javascript:void(0);" class="<?php echo ($page == 'ui-alerts.php' || $page == 'ui-accordion.php' || $page == 'ui-avatar.php' || $page == 'ui-badges.php' || $page == 'ui-borders.php'
                                                                                                        || $page == 'ui-buttons.php' || $page == 'ui-buttons-group.php' || $page == 'ui-breadcrumb.php' || $page == 'ui-cards.php' || $page == 'ui-carousel.php'
                                                                                                        || $page == 'ui-colors.php' || $page == 'ui-dropdowns.php' || $page == 'ui-grid.php' || $page == 'ui-images.php' || $page == 'ui-lightbox.php'
                                                                                                        || $page == 'ui-media.php' || $page == 'ui-modals.php' || $page == 'ui-offcanvas.php' || $page == 'ui-pagination.php' || $page == 'ui-popovers.php'
                                                                                                        || $page == 'ui-progress.php' || $page == 'ui-placeholders.php'  || $page == 'ui-spinner.php'
                                                                                                        || $page == 'ui-sweetalerts.php' || $page == 'ui-nav-tabs.php' || $page == 'ui-toasts.php' || $page == 'ui-tooltips.php'
                                                                                                        || $page == 'ui-typography.php' || $page == 'ui-video.php'
                                                                                                )
                                                                                                        ? 'subdrop active'
                                                                                                        : ''; ?>">
												<i class="ti ti-hierarchy-2"></i>
												<span>Base UI</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="ui-alerts.php" class="<?php echo ($page == 'ui-alerts.php') ? 'active' : ''; ?>">Alerts</a>
												</li>
												<li>
													<a href="ui-accordion.php" class="<?php echo ($page == 'ui-accordion.php') ? 'active' : ''; ?>">Accordion</a>
												</li>
												<li>
													<a href="ui-avatar.php" class="<?php echo ($page == 'ui-avatar.php') ? 'active' : ''; ?>">Avatar</a>
												</li>
												<li>
													<a href="ui-badges.php" class="<?php echo ($page == 'ui-badges.php') ? 'active' : ''; ?>">Badges</a>
												</li>
												<li>
													<a href="ui-borders.php" class="<?php echo ($page == 'ui-borders.php') ? 'active' : ''; ?>">Border</a>
												</li>
												<li>
													<a href="ui-buttons.php" class="<?php echo ($page == 'ui-buttons.php') ? 'active' : ''; ?>">Buttons</a>
												</li>
												<li>
													<a href="ui-buttons-group.php" class="<?php echo ($page == 'ui-buttons-group.php') ? 'active' : ''; ?>">Button Group</a>
												</li>
												<li>
													<a href="ui-breadcrumb.php" class="<?php echo ($page == 'ui-breadcrumb.php') ? 'active' : ''; ?>">Breadcrumb</a>
												</li>
												<li>
													<a href="ui-cards.php" class="<?php echo ($page == 'ui-cards.php') ? 'active' : ''; ?>">Card</a>
												</li>
												<li>
													<a href="ui-carousel.php" class="<?php echo ($page == 'ui-carousel.php') ? 'active' : ''; ?>">Carousel</a>
												</li>
												<li>
													<a href="ui-colors.php" class="<?php echo ($page == 'ui-colors.php') ? 'active' : ''; ?>">Colors</a>
												</li>
												<li>
													<a href="ui-dropdowns.php" class="<?php echo ($page == 'ui-dropdowns.php') ? 'active' : ''; ?>">Dropdowns</a>
												</li>
												<li>
													<a href="ui-grid.php" class="<?php echo ($page == 'ui-grid.php') ? 'active' : ''; ?>">Grid</a>
												</li>
												<li>
													<a href="ui-images.php" class="<?php echo ($page == 'ui-images.php') ? 'active' : ''; ?>">Images</a>
												</li>
												<li>
													<a href="ui-lightbox.php" class="<?php echo ($page == 'ui-lightbox.php') ? 'active' : ''; ?>">Lightbox</a>
												</li>
												<li>
													<a href="ui-media.php" class="<?php echo ($page == 'ui-media.php') ? 'active' : ''; ?>">Media</a>
												</li>
												<li>
													<a href="ui-modals.php" class="<?php echo ($page == 'ui-modals.php') ? 'active' : ''; ?>">Modals</a>
												</li>
												<li>
													<a href="ui-offcanvas.php" class="<?php echo ($page == 'ui-offcanvas.php') ? 'active' : ''; ?>">Offcanvas</a>
												</li>
												<li>
													<a href="ui-pagination.php" class="<?php echo ($page == 'ui-pagination.php') ? 'active' : ''; ?>">Pagination</a>
												</li>
												<li>
													<a href="ui-popovers.php" class="<?php echo ($page == 'ui-popovers.php') ? 'active' : ''; ?>">Popovers</a>
												</li>
												<li>
													<a href="ui-progress.php" class="<?php echo ($page == 'ui-progress.php') ? 'active' : ''; ?>">Progress</a>
												</li>
												<li>
													<a href="ui-placeholders.php" class="<?php echo ($page == 'ui-placeholders.php') ? 'active' : ''; ?>">Placeholders</a>
												</li>
												<li>
													<a href="ui-spinner.php" class="<?php echo ($page == 'ui-spinner.php') ? 'active' : ''; ?>">Spinner</a>
												</li>
												<li>
													<a href="ui-sweetalerts.php" class="<?php echo ($page == 'ui-sweetalerts.php') ? 'active' : ''; ?>">Sweet Alerts</a>
												</li>
												<li>
													<a href="ui-nav-tabs.php" class="<?php echo ($page == 'ui-nav-tabs.php') ? 'active' : ''; ?>">Tabs</a>
												</li>
												<li>
													<a href="ui-toasts.php" class="<?php echo ($page == 'ui-toasts.php') ? 'active' : ''; ?>">Toasts</a>
												</li>
												<li>
													<a href="ui-tooltips.php" class="<?php echo ($page == 'ui-tooltips.php') ? 'active' : ''; ?>">Tooltips</a>
												</li>
												<li>
													<a href="ui-typography.php" class="<?php echo ($page == 'ui-typography.php') ? 'active' : ''; ?>">Typography</a>
												</li>
												<li>
													<a href="ui-video.php" class="<?php echo ($page == 'ui-video.php') ? 'active' : ''; ?>">Video</a>
												</li>
												<li>
													<a href="ui-sortable.php" class="<?php echo ($page == 'ui-sortable.php') ? 'active' : ''; ?>">Sortable</a>
												</li>
												<li>
													<a href="ui-swiperjs.php" class="<?php echo ($page == 'ui-swiperjs.php') ? 'active' : ''; ?>">Swiperjs</a>
												</li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'ui-ribbon.php' || $page == 'ui-clipboard.php' || $page == 'ui-drag-drop.php' || $page == 'ui-rangeslider.php' || $page == 'ui-rating.php' || $page == 'ui-text-editor.php' || $page == 'ui-counter.php' || $page == 'ui-scrollbar.php' || $page == 'ui-stickynote.php' || $page == 'ui-timeline.php') ? 'subdrop active' : ''; ?>">
												<i class="ti ti-hierarchy-3"></i>
												<span>Advanced UI</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="ui-ribbon.php" class="<?php echo ($page == 'ui-ribbon.php') ? 'active' : ''; ?>">Ribbon</a>
												</li>
												<li>
													<a href="ui-clipboard.php" class="<?php echo ($page == 'ui-clipboard.php') ? 'active' : ''; ?>">Clipboard</a>
												</li>
												<li>
													<a href="ui-drag-drop.php" class="<?php echo ($page == 'ui-drag-drop.php') ? 'active' : ''; ?>">Drag & Drop</a>
												</li>
												<li>
													<a href="ui-rangeslider.php" class="<?php echo ($page == 'ui-rangeslider.php') ? 'active' : ''; ?>">Range Slider</a>
												</li>
												<li>
													<a href="ui-rating.php" class="<?php echo ($page == 'ui-rating.php') ? 'active' : ''; ?>">Rating</a>
												</li>
												<li>
													<a href="ui-text-editor.php" class="<?php echo ($page == 'ui-text-editor.php') ? 'active' : ''; ?>">Text Editor</a>
												</li>
												<li>
													<a href="ui-counter.php" class="<?php echo ($page == 'ui-counter.php') ? 'active' : ''; ?>">Counter</a>
												</li>
												<li>
													<a href="ui-scrollbar.php" class="<?php echo ($page == 'ui-scrollbar.php') ? 'active' : ''; ?>">Scrollbar</a>
												</li>
												<li>
													<a href="ui-stickynote.php" class="<?php echo ($page == 'ui-stickynote.php') ? 'active' : ''; ?>">Sticky Note</a>
												</li>
												<li>
													<a href="ui-timeline.php" class="<?php echo ($page == 'ui-timeline.php') ? 'active' : ''; ?>">Timeline</a>
												</li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'form-basic-inputs.php' || $page == 'form-checkbox-radios.php' || $page == 'form-input-groups.php' || $page == 'form-grid-gutters.php' || $page == 'form-select.php' || $page == 'form-mask.php' || $page == 'form-fileupload.php' || $page == 'form-horizontal.php' || $page == 'form-vertical.php' || $page == 'form-floating-labels.php' || $page == 'form-validation.php' || $page == 'form-wizard.php' || $page == 'form-select2.php') ? 'subdrop active' : ''; ?>">
												<i class="ti ti-input-search"></i>
												<span>Forms</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li class="submenu submenu-two">
													<a href="javascript:void(0);"class="<?php echo ($page == 'form-basic-inputs.php' || $page == 'form-checkbox-radios.php' || $page == 'form-input-groups.php' || $page == 'form-grid-gutters.php' || $page == 'form-select.php' || $page == 'form-mask.php' || $page == 'form-fileupload.php' ) ? 'subdrop active' : ''; ?>">Form Elements <span class="menu-arrow inside-submenu"></span>
													</a>
													<ul>
														<li>
															<a href="form-basic-inputs.php" class="<?php echo ($page == 'form-basic-inputs.php') ? 'active' : ''; ?>">Basic Inputs</a>
														</li>
														<li>
															<a href="form-checkbox-radios.php" class="<?php echo ($page == 'form-checkbox-radios.php') ? 'active' : ''; ?>">Checkbox & Radios</a>
														</li>
														<li>
															<a href="form-input-groups.php" class="<?php echo ($page == 'form-input-groups.php') ? 'active' : ''; ?>">Input Groups</a>
														</li>
														<li>
															<a href="form-grid-gutters.php" class="<?php echo ($page == 'form-grid-gutters.php') ? 'active' : ''; ?>">Grid & Gutters</a>
														</li>
														<li>
															<a href="form-select.php" class="<?php echo ($page == 'form-select.php') ? 'active' : ''; ?>">Form Select</a>
														</li>
														<li>
															<a href="form-mask.php" class="<?php echo ($page == 'form-mask.php') ? 'active' : ''; ?>">Input Masks</a>
														</li>
														<li>
															<a href="form-fileupload.php" class="<?php echo ($page == 'form-fileupload.php') ? 'active' : ''; ?>">File Uploads</a>
														</li>
													</ul>
												</li>
												<li class="submenu submenu-two">
													<a href="javascript:void(0);" class="<?php echo ($page == 'form-horizontal.php' || $page == 'form-vertical.php' || $page == 'form-floating-labels.php') ? 'subdrop active' : ''; ?>">Layouts <span class="menu-arrow inside-submenu"></span>
													</a>
													<ul>
														<li>
															<a href="form-horizontal.php" class="<?php echo ($page == 'form-fileupload.php') ? 'active' : ''; ?>">Horizontal Form</a>
														</li>
														<li>
															<a href="form-vertical.php" class="<?php echo ($page == 'form-fileupload.php') ? 'active' : ''; ?>">Vertical Form</a>
														</li>
														<li>
															<a href="form-floating-labels.php" class="<?php echo ($page == 'form-fileupload.php') ? 'active' : ''; ?>">Floating Labels</a>
														</li>
													</ul>
												</li>
												<li>
													<a href="form-validation.php" class="<?php echo ($page == 'form-fileupload.php') ? 'active' : ''; ?>">Form Validation</a>
												</li>
												<li>
													<a href="form-select2.php" class="<?php echo ($page == 'form-fileupload.php') ? 'active' : ''; ?>">Select2</a>
												</li>
												<li>
													<a href="form-wizard.php" class="<?php echo ($page == 'form-fileupload.php') ? 'active' : ''; ?>">Form Wizard</a>
												</li>
												<li>
													<a href="form-pickers.php" class="<?php echo ($page == 'form-fileupload.php') ? 'active' : ''; ?>">Form Pickers</a>
												</li>
												
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);" class="<?php echo ($page == 'tables-basic.php' || $page == 'data-tables.php') ? 'subdrop active' : ''; ?>">
												<i class="ti ti-table-plus"></i>
												<span>Tables</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="tables-basic.php" class="<?php echo ($page == 'tables-basic.php') ? 'active' : ''; ?>">Basic Tables </a>
												</li>
												<li>
													<a href="data-tables.php" class="<?php echo ($page == 'data-tables.php') ? 'active' : ''; ?>">Data Table </a>
												</li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'chart-apex.php' || $page == 'chart-js.php' || $page == 'chart-morris.php' || $page == 'chart-flot.php' || $page == 'chart-peity.php' || $page == 'chart-c3.php') ? 'subdrop active' : ''; ?>">
												<i class="ti ti-chart-line"></i>
												<span>Charts</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="chart-apex.php" class="<?php echo ($page == 'chart-apex.php') ? 'active' : ''; ?>">Apex Charts</a>
												</li>
												<li>
													<a href="chart-c3.php" class="<?php echo ($page == 'chart-c3.php') ? 'active' : ''; ?>">Chart C3</a>
												</li>
												<li>
													<a href="chart-js.php" class="<?php echo ($page == 'chart-js.php') ? 'active' : ''; ?>">Chart Js</a>
												</li>
												<li>
													<a href="chart-morris.php" class="<?php echo ($page == 'chart-morris.php') ? 'active' : ''; ?>">Morris Charts</a>
												</li>
												<li>
													<a href="chart-flot.php" class="<?php echo ($page == 'chart-flot.php') ? 'active' : ''; ?>">Flot Charts</a>
												</li>
												<li>
													<a href="chart-peity.php" class="<?php echo ($page == 'chart-peity.php') ? 'active' : ''; ?>">Peity Charts</a>
												</li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'icon-fontawesome.php' || $page == 'icon-feather.php' || $page == 'icon-ionic.php' || $page == 'icon-material.php' || $page == 'icon-pe7.php' || $page == 'icon-simpleline.php' || $page == 'icon-themify.php' || $page == 'icon-weather.php' || $page == 'icon-typicon.php' || $page == 'icon-flag.php') ? 'subdrop active' : ''; ?>">
												<i class="ti ti-icons"></i>
												<span>Icons</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="icon-fontawesome.php" class="<?php echo ($page == 'icon-fontawesome.php') ? 'active' : ''; ?>">Fontawesome Icons</a>
												</li>
												<li>
													<a href="icon-tabler.php" class="<?php echo ($page == 'icon-tabler.php') ? 'active' : ''; ?>">Tabler Icons</a>
												</li>
												<li>
													<a href="icon-bootstrap.php" class="<?php echo ($page == 'icon-bootstrap.php') ? 'active' : ''; ?>">Bootstrap Icons</a>
												</li>
												<li>
													<a href="icon-remix.php" class="<?php echo ($page == 'icon-remix.php') ? 'active' : ''; ?>">Remix Icons</a>
												</li>
												<li>
													<a href="icon-feather.php" class="<?php echo ($page == 'icon-feather.php') ? 'active' : ''; ?>">Feather Icons</a>
												</li>
												<li>
													<a href="icon-ionic.php" class="<?php echo ($page == 'icon-ionic.php') ? 'active' : ''; ?>">Ionic Icons</a>
												</li>
												<li>
													<a href="icon-material.php" class="<?php echo ($page == 'icon-material.php') ? 'active' : ''; ?>">Material Icons</a>
												</li>
												<li>
													<a href="icon-pe7.php" class="<?php echo ($page == 'icon-pe7.php') ? 'active' : ''; ?>">Pe7 Icons</a>
												</li>
												<li>
													<a href="icon-simpleline.php" class="<?php echo ($page == 'icon-simpleline.php') ? 'active' : ''; ?>">Simpleline Icons</a>
												</li>
												<li>
													<a href="icon-themify.php" class="<?php echo ($page == 'icon-themify.php') ? 'active' : ''; ?>">Themify Icons</a>
												</li>
												<li>
													<a href="icon-weather.php" class="<?php echo ($page == 'icon-weather.php') ? 'active' : ''; ?>">Weather Icons</a>
												</li>
												<li>
													<a href="icon-typicon.php" class="<?php echo ($page == 'icon-typicon.php') ? 'active' : ''; ?>">Typicon Icons</a>
												</li>
												<li>
													<a href="icon-flag.php" class="<?php echo ($page == 'icon-flag.php') ? 'active' : ''; ?>">Flag Icons</a>
												</li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'maps-vector.php' || $page == 'maps-leaflet.php') ? 'subdrop active' : ''; ?>">
												<i class="ti ti-table-plus"></i>
												<span>Maps</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="maps-vector.php" class="<?php echo ($page == 'maps-vector.php') ? 'active' : ''; ?>">Vector</a>
												</li>
												<li>
													<a href="maps-leaflet.php" class="<?php echo ($page == 'maps-leaflet.php') ? 'active' : ''; ?>">Leaflet</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="#">Documentation</a></li>
								<li><a href="#">Change Log</a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="javascript:void(0);">Multilevel 1</a></li>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);">Multilevel 2<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="javascript:void(0);">Multilevel 2.1</a></li>
												<li class="submenu submenu-two submenu-three">
													<a href="javascript:void(0);">Multilevel 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
													<ul>
														<li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
														<li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li><a href="javascript:void(0);">Multilevel 3</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
					<div class="d-xl-flex align-items-center d-none">
						<a href="#" class="me-3 avatar avatar-sm">
							<img src="assets/img/profiles/avatar-07.jpg" alt="profile" class="rounded-circle">
						</a>
						<a href="#" class="btn btn-icon btn-sm rounded-circle mode-toggle">
							<i class="ti ti-sun"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /Horizontal Menu -->

		<!-- Two Col Sidebar -->
		<div class="two-col-sidebar" id="two-col-sidebar">
			<div class="sidebar sidebar-twocol">
				<div class="twocol-mini">
					<a href="admin-dashboard.php" class="logo-small">
						<img src="assets/img/logo-small.svg" alt="Logo">
					</a>
					<div class="sidebar-left slimscroll">
						<div class="nav flex-column align-items-center nav-pills" id="sidebar-tabs" role="tablist" aria-orientation="vertical">
							<a href="#" class="nav-link <?php echo ($page == 'admin-dashboard.php'||$page == 'employee-dashboard.php'||$page == 'deals-dashboard.php'||$page == 'leads-dashboard.php') ? 'active ' : ''; ?> " title="Dashboard" data-bs-toggle="tab" data-bs-target="#dashboard">
								<i class="ti ti-smart-home"></i>
							</a>
							<a href="#" class="nav-link <?php echo ($page == 'chat.php'||$page == 'call.php'||$page == 'voice-call.php'||$page == 'video-call.php'||$page == 'outgoing-call.php'||$page == 'incoming-call.php'||$page == 'call-history.php'||$page == 'calendar.php'
									||$page == 'email.php'||$page == 'todo.php'||$page == 'notes.php'||$page == 'social-feed.php'||$page == 'file-manager.php'||$page == 'kanban-view.php'||$page == 'invoices.php') ? 'active' : ''; ?>" title="Apps" data-bs-toggle="tab" data-bs-target="#application">
								<i class="ti ti-layout-grid-add"></i>
							</a>
							<a href="#" class="nav-link <?php echo ($page == 'dashboard.php'||$page == 'companies.php'||$page == 'subscription.php'||$page == 'packages.php'||$page == 'domain.php'||$page == 'purchase-transaction.php') ? 'active' : ''; ?></a>" title="Super Admin" data-bs-toggle="tab" data-bs-target="#super-admin">
								<i class="ti ti-user-star"></i>
							</a>
							<a href="#" class="nav-link  <?php echo ($page == 'layout-horizontal.php'||$page == 'layout-detached.php'||$page == 'layout-modern.php'||$page == 'layout-two-column.php'||$page == 'layout-hovered.php'||$page == 'layout-box.php'||$page == 'layout-horizontal-single.php'
							||$page == 'layout-horizontal-overlay.php'||$page == 'layout-horizontal-box.php'||$page == 'layout-horizontal-sidemenu.php'||$page == 'layout-vertical-transparent.php'||$page == 'layout-without-header.php'||$page == 'layout-rtl.php'||$page == 'layout-dark.php') ? 'active' : ''; ?>"  title="Layout" data-bs-toggle="tab" data-bs-target="#layout">
								<i class="ti ti-layout-board-split"></i>
							</a>
							<a href="#" class="nav-link <?php echo ($page == 'clients-grid.php'||$page == 'projects-grid.php'||$page == 'tasks.php'||$page == 'task-board.php') ? 'active ' : ''; ?> " title="Projects" data-bs-toggle="tab" data-bs-target="#projects">
								<i class="ti ti-users-group"></i>
							</a>
							<a href="#" class="nav-link <?php echo ($page == 'contacts-grid.php'||$page == 'companies-grid.php'||$page == 'deals-grid.php'||$page == 'leads-grid.php'||$page == 'pipeline.php'||$page == 'analytics.php'||$page == 'activity.php') ? ' show active ' : ''; ?>" title="Crm" data-bs-toggle="tab" data-bs-target="#crm">
								<i class="ti ti-user-shield"></i>
							</a>
							<a href="#" class="nav-link  <?php echo ($page == 'employees.php'||$page == 'employees-grid.php'||$page == 'employee-details.php'||$page == 'departments.php'||$page == 'designations.php'||$page == 'policy.php'||$page == 'tickets.php'||$page == 'ticket-details.php'
							||$page == 'holidays.php'||$page == 'leaves.php'||$page == 'leaves-employee.php'||$page == 'leave-settings.php'||$page == 'attendance-admin.php'||$page == 'attendance-employee.php'||$page == 'timesheets.php'||$page == 'schedule-timing.php'||$page == 'overtime.php'
							||$page == 'performance-indicator.php'||$page == 'performance-review.php'||$page == 'performance-appraisal.php'||$page == 'goal-tracking.php'||$page == 'goal-type.php'
							||$page == 'training.php'||$page == 'trainers.php'||$page == 'training-type.php'||$page == 'promotion.php'||$page == 'resignation.php'||$page == 'training-type.php') ? '  active ' : ''; ?></a>" title="Hrm" data-bs-toggle="tab" data-bs-target="#hrm">
								<i class="ti ti-user"></i>
							</a>
							<a href="#" class="nav-link <?php echo ($page == 'estimates.php'||$page == 'invoices.php'||$page == 'payments.php'||$page == 'expenses.php'||$page == 'provident-fund.php'
							||$page == 'taxes.php'||$page == 'categories.php'||$page == 'budgets.php'||$page == 'budget-expenses.php'||$page == 'budget-revenues.php'||$page == 'employee-salary.php'||$page == 'payslip.php'||$page == 'payroll.php') ? ' show active ' : ''; ?>" title="Finance" data-bs-toggle="tab" data-bs-target="#finance">
								<i class="ti ti-shopping-cart-dollar"></i>
							</a>
							<a href="#" class="nav-link <?php echo ($page == 'assets-list.php'||$page == 'asset-categories.php'||$page == 'assets-list.php'||$page == 'asset-categories.php'
							||$page == 'knowledgebase.php'||$page == 'activity.php'||$page == 'users.php'||$page == 'roles-permissions.php'||$page == 'expenses-report.php'||$page == 'invoice-report.php'||$page == 'payment-report.php'||$page == 'project-report.php'||$page == 'task-report.php'||$page == 'user-report.php'||$page == 'employee-report.php'||$page == 'payslip-report.php'||$page == 'attendance-report.php'||$page == 'leave-report.php'||$page == 'daily-report.php'
							||$page == 'profile-settings.php'||$page == 'security-settings.php'||$page == 'notification-settings.php'||$page == 'connected-apps.php'
							||$page == 'bussiness-settings.php'||$page == 'seo-settings.php'||$page == 'localization-settings.php'||$page == 'prefixes.php'||$page == 'preferences.php'||$page == 'performance-appraisal.php'||$page == 'language.php'||$page == 'authentication-settings.php'||$page == 'ai-settings.php'
							||$page == 'salary-settings.php'||$page == 'approval-settings.php'||$page == 'invoice-settings.php'||$page == 'leave-type.php'||$page == 'custom-fields.php'||$page == 'email-settings.php'||$page == 'email-template.php'||$page == 'sms-settings.php'||$page == 'sms-template.php'||$page == 'otp-settings.php'||$page == 'gdpr.php'||$page == 'maintenance-mode.php'
							||$page == 'payment-gateways.php'||$page == 'tax-rates.php'||$page == 'currencies.php'||$page == 'custom-css.php'||$page == 'custom-js.php'||$page == 'cronjob.php'||$page == 'storage-settings.php'||$page == 'ban-ip-address.php'||$page == 'backup.php'||$page == 'clear-cache.php'
							) ? ' active' : ''; ?>" title="Administration" data-bs-toggle="tab" data-bs-target="#administration">
								<i class="ti ti-cash"></i>
							</a>
							<a href="#" class="nav-link <?php echo ($page == 'pages.php'||$page == 'blogs.php'||$page == 'blog-categories.php'||$page == 'blog-comments.php'||$page == 'blog-tags.php'
							||$page == 'countries.php'||$page == 'states.php'||$page == 'cities.php'||$page == 'testimonials.php'||$page == 'faq.php') ? 'active' : ''; ?>" title="Content" data-bs-toggle="tab" data-bs-target="#content">
								<i class="ti ti-license"></i>
							</a>
							<a href="#" class="nav-link <?php echo ($page == 'starter.php'||$page == 'profile.php'||$page == 'gallery.php'||$page == 'search-result.php'||$page == 'timeline.php'
							||$page == 'pricing.php'||$page == 'coming-soon.php'||$page == 'under-maintenance.php'||$page == 'under-construction.php'||$page == 'api-keys.php'||$page == 'privacy-policy.php'||$page == 'terms-condition.php') ? 'active' : ''; ?>" title="Pages" data-bs-toggle="tab" data-bs-target="#pages">
								<i class="ti ti-page-break"></i>
							</a>
							<a href="#" class="nav-link <?php echo ($page == 'login.php'||$page == 'login-2.php'||$page == 'login-3.php'||$page == 'register.php'||$page == 'register-2.php'
							||$page == 'register-3.php'||$page == 'forgot-password.php'||$page == 'forgot-password-2.php'||$page == 'forgot-password-3.php'||$page == 'reset-password.php'||$page == 'reset-password-2.php'||$page == 'reset-password-3.php'
							||$page == 'email-verification.php'||$page == 'email-verification-2.php'||$page == 'email-verification-3.php'||$page == 'two-step-verification.php'||$page == 'two-step-verification-2.php'||$page == 'two-step-verification-3.php'||$page == 'lock-screen.php'||
							$page == 'error-404.php'||$page == 'error-500.php'
							) ? '  active' : ''; ?>" title="Authentication" data-bs-toggle="tab"
								data-bs-target="#authentication">
								<i class="ti ti-lock-check"></i>
							</a>
							<a href="#" class="nav-link <?php echo ($page == 'ui-alerts.php' || $page == 'ui-accordion.php' || $page == 'ui-avatar.php' || $page == 'ui-badges.php' || $page == 'ui-borders.php'
                                                                                                        || $page == 'ui-buttons.php' || $page == 'ui-buttons-group.php' || $page == 'ui-breadcrumb.php' || $page == 'ui-cards.php' || $page == 'ui-carousel.php'
                                                                                                        || $page == 'ui-colors.php' || $page == 'ui-dropdowns.php' || $page == 'ui-grid.php' || $page == 'ui-images.php' || $page == 'ui-lightbox.php'
                                                                                                        || $page == 'ui-media.php' || $page == 'ui-modals.php' || $page == 'ui-offcanvas.php' || $page == 'ui-pagination.php' || $page == 'ui-popovers.php'
                                                                                                        || $page == 'ui-progress.php' || $page == 'ui-placeholders.php'  || $page == 'ui-spinner.php'
                                                                                                        || $page == 'ui-sweetalerts.php' || $page == 'ui-nav-tabs.php' || $page == 'ui-toasts.php' || $page == 'ui-tooltips.php'
                                                                                                        || $page == 'ui-typography.php' || $page == 'ui-video.php'||$page == 'ui-ribbon.php' || $page == 'ui-clipboard.php' || $page == 'ui-drag-drop.php' || $page == 'ui-rangeslider.php' || $page == 'ui-rating.php' || $page == 'ui-text-editor.php' || $page == 'ui-counter.php' || $page == 'ui-scrollbar.php' || $page == 'ui-stickynote.php' || $page == 'ui-timeline.php'
																										||$page == 'form-basic-inputs.php' || $page == 'form-checkbox-radios.php' || $page == 'form-input-groups.php' || $page == 'form-grid-gutters.php' || $page == 'form-select.php' || $page == 'form-mask.php' || $page == 'form-fileupload.php' || $page == 'form-horizontal.php' || $page == 'form-vertical.php' || $page == 'form-floating-labels.php' || $page == 'form-validation.php' || $page == 'form-wizard.php' || $page == 'form-select2.php'
																										||$page == 'form-horizontal.php' || $page == 'form-vertical.php' || $page == 'form-floating-labels.php'||$page == 'tables-basic.php' || $page == 'data-tables.php'
																										||$page == 'chart-apex.php' || $page == 'chart-js.php' || $page == 'chart-morris.php' || $page == 'chart-flot.php' || $page == 'chart-peity.php' || $page == 'chart-c3.php'||$page == 'icon-fontawesome.php' || $page == 'icon-feather.php' || $page == 'icon-ionic.php' || $page == 'icon-material.php' || $page == 'icon-pe7.php' || $page == 'icon-simpleline.php' || $page == 'icon-themify.php' || $page == 'icon-weather.php' || $page == 'icon-typicon.php' || $page == 'icon-flag.php'
																										||$page == 'maps-vector.php'||$page == 'maps-leaflet.php'

                                                                                                )
                                                                                                        ? ' active'
                                                                                                        : ''; ?>  " title="UI Elements" data-bs-toggle="tab"
								data-bs-target="#ui-elements">
								<i class="ti ti-ux-circle"></i>
							</a>
							<a href="#" class="nav-link" title="Extras" data-bs-toggle="tab" data-bs-target="#extras">
								<i class="ti ti-vector-triangle"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="sidebar-right">
					<div class="sidebar-logo mb-4">
						<a href="admin-dashboard.php" class="logo logo-normal">
							<img src="assets/img/logo.svg" alt="Logo">
						</a>
						<a href="admin-dashboard.php" class="dark-logo">
							<img src="assets/img/logo-white.svg" alt="Logo">
						</a>
					</div>
					<div class="sidebar-scroll">
						<h6 class="mb-3">Welcome to SmartHR</h6>
						<div class="text-center rounded bg-light p-3 mb-4">
							<div class="avatar avatar-lg online mb-3">
								<img src="assets/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
							</div>
							<h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
							<p class="fs-10">System Admin</p>
						</div>
						<div class="tab-content" id="v-pills-tabContent">
							<div class="tab-pane fade <?php echo ($page == 'admin-dashboard.php'||$page == 'employee-dashboard.php'||$page == 'deals-dashboard.php'||$page == 'leads-dashboard.php') ? ' show active ' : ''; ?>" id="dashboard">
								<ul>
									<li class="menu-title"><span>MAIN MENU</span></li>
									<li><a href="admin-dashboard.php" class="<?php echo ($page == 'admin-dashboard.php') ? 'active' : ''; ?>">Admin Dashboard</a></li>
									<li><a href="employee-dashboard.php" class="<?php echo ($page == 'employee-dashboard.php') ? 'active' : ''; ?>">Employee Dashboard</a></li>
									<li><a href="deals-dashboard.php" class="<?php echo ($page == 'deals-dashboard.php') ? 'active' : ''; ?>">Deals Dashboard</a></li>
									<li><a href="leads-dashboard.php" class="<?php echo ($page == 'leads-dashboard.php') ? 'active' : ''; ?>">Leads Dashboard</a></li>
								</ul>
							</div>
							<div class="tab-pane fade <?php echo ($page == 'chat.php'||$page == 'call.php'||$page == 'voice-call.php'||$page == 'video-call.php'||$page == 'outgoing-call.php'||$page == 'incoming-call.php'||$page == 'call-history.php'||$page == 'calendar.php'
									||$page == 'email.php'||$page == 'todo.php'||$page == 'notes.php'||$page == 'social-feed.php'||$page == 'file-manager.php'||$page == 'kanban-view.php'||$page == 'invoices.php') ? ' show active ' : ''; ?>" id="application">
								<ul>
									<li class="menu-title"><span>APPLICATION</span></li>
									<li><a href="voice-call.php" class="<?php echo ($page == 'voice-call.php') ? 'active' : ''; ?>">Voice Call</a></li>
									<li><a href="video-call.php" class="<?php echo ($page == 'video-call.php') ? 'active' : ''; ?>">Video Call</a></li>
									<li><a href="outgoing-call.php" class="<?php echo ($page == 'outgoing-call.php') ? 'active' : ''; ?>">Outgoing Call</a></li>
									<li><a href="incoming-call.php" class="<?php echo ($page == 'incoming-call.php') ? 'active' : ''; ?>">Incoming Call</a></li>
									<li><a href="call-history.php" class="<?php echo ($page == 'call-history.php') ? 'active' : ''; ?>">Call History</a></li>
									<li><a href="calendar.php" class="<?php echo ($page == 'calendar.php') ? 'active' : ''; ?>">Calendar</a></li>
									<li><a href="email.php" class="<?php echo ($page == 'email.php') ? 'active' : ''; ?>">Email</a></li>
									<li><a href="todo.php" class="<?php echo ($page == 'todo.php') ? 'active' : ''; ?>">To Do</a></li>
									<li><a href="notes.php" class="<?php echo ($page == 'notes.php') ? 'active' : ''; ?>">Notes</a></li>
									<li><a href="file-manager.php" class="<?php echo ($page == 'file-manager.php') ? 'active' : ''; ?>">File Manager</a></li>
									<li><a href="kanban-view.php" class="<?php echo ($page == 'kanban-view.php') ? 'active' : ''; ?>">Kanban</a></li>
									<li><a href="invoices.php" class="<?php echo ($page == 'invoices.php') ? 'active' : ''; ?>">Invoices</a></li>
								</ul>
							</div>
							<div class="tab-pane fade <?php echo ($page == 'dashboard.php'||$page == 'companies.php'||$page == 'subscription.php'||$page == 'packages.php'||$page == 'domain.php'||$page == 'purchase-transaction.php') ? ' show active' : ''; ?>" id="super-admin">
								<ul>
									<li class="menu-title"><span>SUPER ADMIN</span></li>
									<li><a href="dashboard.php" class="<?php echo ($page == 'dashboard.php') ? 'active' : ''; ?>">Dashboard</a></li>
									<li><a href="companies.php" class="<?php echo ($page == 'companies.php') ? 'active' : ''; ?>">Companies</a></li>
									<li><a href="subscription.php" class="<?php echo ($page == 'subscription.php') ? 'active' : ''; ?>">Subscriptions</a></li>
									<li><a href="packages.php" class="<?php echo ($page == 'packages.php') ? 'active' : ''; ?>">Packages</a></li>
									<li><a href="domain.php" class="<?php echo ($page == 'domain.php') ? 'active' : ''; ?>">Domain</a></li>
									<li><a href="purchase-transaction.php" class="<?php echo ($page == 'purchase-transaction.php') ? 'active' : ''; ?>">Purchase Transaction</a></li>
								</ul>
							</div>
							<div class="tab-pane fade <?php echo ($page == 'layout-horizontal.php'||$page == 'layout-detached.php'||$page == 'layout-modern.php'||$page == 'layout-two-column.php'||$page == 'layout-hovered.php'||$page == 'layout-box.php'||$page == 'layout-horizontal-single.php'
							||$page == 'layout-horizontal-overlay.php'||$page == 'layout-horizontal-box.php'||$page == 'layout-horizontal-sidemenu.php'||$page == 'layout-vertical-transparent.php'||$page == 'layout-without-header.php'||$page == 'layout-rtl.php'||$page == 'layout-dark.php') ? ' show active' : ''; ?>" id="layout">
								<ul>
									<li class="menu-title"><span>LAYOUT</span></li>
									<li><a href="layout-horizontal.php" class="<?php echo ($page == 'layout-horizontal.php') ? 'active' : ''; ?>"><span>Horizontal</span></a></li>
									<li><a href="layout-detached.php" class="<?php echo ($page == 'layout-detached.php') ? 'active' : ''; ?>"><span>Detached</span></a></li>
									<li><a href="layout-modern.php" class="<?php echo ($page == 'layout-modern.php') ? 'active' : ''; ?>"><span>Modern</span></a></li>
									<li><a href="layout-two-column.php" class="<?php echo ($page == 'layout-two-column.php') ? 'active' : ''; ?>"><span>Two Column </span></a></li>
									<li><a href="layout-hovered.php" class="<?php echo ($page == 'layout-hovered.php') ? 'active' : ''; ?>"><span>Hovered</span></a></li>
									<li><a href="layout-box.php" class="<?php echo ($page == 'layout-box.php') ? 'active' : ''; ?>"><span>Boxed</span></a></li>
									<li><a href="layout-horizontal-single.php" class="<?php echo ($page == 'layout-horizontal-single.php') ? 'active' : ''; ?>"><span>Horizontal Single</span></a></li>
									<li><a href="layout-horizontal-overlay.php" class="<?php echo ($page == 'layout-horizontal-overlay.php') ? 'active' : ''; ?>"><span>Horizontal Overlay</span></a></li>
									<li><a href="layout-horizontal-box.php" class="<?php echo ($page == 'layout-horizontal-box.php') ? 'active' : ''; ?>"><span>Horizontal Box</span></a></li>
									<li><a href="layout-horizontal-sidemenu.php" class="<?php echo ($page == 'layout-horizontal-sidemenu.php') ? 'active' : ''; ?>"><span>Menu Aside</span></a></li>
									<li><a href="layout-vertical-transparent.php" class="<?php echo ($page == 'layout-vertical-transparent.php') ? 'active' : ''; ?>"><span>Transparent</span></a></li>
									<li><a href="layout-without-header.php" class="<?php echo ($page == 'layout-without-header.php') ? 'active' : ''; ?>"><span>Without Header</span></a></li>
									<li><a href="layout-rtl.php" class="<?php echo ($page == 'layout-rtl.php') ? 'active' : ''; ?>"><span>RTL</span></a></li>
									<li><a href="layout-dark.php" class="<?php echo ($page == 'layout-dark.php') ? 'active' : ''; ?>"><span>Dark</span></a></li>
								</ul>
							</div>
							<div class="tab-pane fade <?php echo ($page == 'clients-grid.php'||$page == 'projects-grid.php'||$page == 'tasks.php'||$page == 'task-board.php') ? 'show active ' : ''; ?> " id="projects">
								<ul>
									<li class="menu-title"><span>PROJECTS</span></li>
									<li><a href="clients-grid.php" class="<?php echo ($page == 'clients-grid.php') ? 'active' : ''; ?>">Clients</a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Projects</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="projects-grid.php" class="<?php echo ($page == 'projects-grid.php') ? 'active' : ''; ?>">Projects</a></li>
											<li><a href="tasks.php" class="<?php echo ($page == 'tasks.php') ? 'active' : ''; ?>">Tasks</a></li>
											<li><a href="task-board.php" class="<?php echo ($page == 'task-board.php') ? 'active' : ''; ?>">Task Board</a></li>
										</ul>
									</li>	
								</ul>
							</div>
							<div class="tab-pane fade <?php echo ($page == 'contacts-grid.php'||$page == 'companies-grid.php'||$page == 'deals-grid.php'||$page == 'leads-grid.php'||$page == 'pipeline.php'||$page == 'analytics.php'||$page == 'activity.php') ? ' show active ' : ''; ?> " id="crm">
								<ul>
									<li class="menu-title"><span>CRM</span></li>
									<li><a href="contacts-grid.php" class="<?php echo ($page == 'contacts-grid.php') ? 'active' : ''; ?>"><span>Contacts</span></a></li>
									<li><a href="companies-grid.php" class="<?php echo ($page == 'companies-grid.php') ? 'active' : ''; ?>"><span>Companies</span></a></li>
									<li><a href="deals-grid.php" class="<?php echo ($page == 'deals-grid.php') ? 'active' : ''; ?>"><span>Deals</span></a></li>
									<li><a href="leads-grid.php" class="<?php echo ($page == 'leads-grid.php') ? 'active' : ''; ?>"><span>Leads</span></a></li>
									<li><a href="pipeline.php" class="<?php echo ($page == 'pipeline.php') ? 'active' : ''; ?>"><span>Pipeline</span></a></li>
									<li><a href="analytics.php" class="<?php echo ($page == 'analytics.php') ? 'active' : ''; ?>"><span>Analytics</span></a></li>
									<li><a href="activity.php" class="<?php echo ($page == 'activity.php') ? 'active' : ''; ?>"><span>Activities</span></a></li>
								</ul>
							</div>
							<div class="tab-pane fade <?php echo ($page == 'employees.php'||$page == 'employees-grid.php'||$page == 'employee-details.php'||$page == 'departments.php'||$page == 'designations.php'||$page == 'policy.php'||$page == 'tickets.php'||$page == 'ticket-details.php'
							||$page == 'holidays.php'||$page == 'leaves.php'||$page == 'leaves-employee.php'||$page == 'leave-settings.php'||$page == 'attendance-admin.php'||$page == 'attendance-employee.php'||$page == 'timesheets.php'||$page == 'schedule-timing.php'||$page == 'overtime.php'
							||$page == 'performance-indicator.php'||$page == 'performance-review.php'||$page == 'performance-appraisal.php'||$page == 'goal-tracking.php'||$page == 'goal-type.php'
							||$page == 'training.php'||$page == 'trainers.php'||$page == 'training-type.php'||$page == 'promotion.php'||$page == 'resignation.php'||$page == 'training-type.php') ? ' show active ' : ''; ?></li>" id="hrm">
								<ul>
									<li class="menu-title"><span>HRM</span></li>
									<li class="submenu">
										<a href="javascript:void(0);"class=" <?php echo ($page == 'employees.php'||$page == 'employees-grid.php'||$page == 'employee-details.php'||$page == 'departments.php'||$page == 'designations.php'||$page == 'policy.php') ? 'show active' : ''; ?>"><span>Employees</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="employees.php" class="<?php echo ($page == 'employees.php') ? 'active' : ''; ?>">Employee Lists</a></li>
											<li><a href="employees-grid.php" class="<?php echo ($page == 'employees-grid.php') ? 'active' : ''; ?>">Employee Grid</a></li>
											<li><a href="employee-details.php" class="<?php echo ($page == 'employee-details.php') ? 'active' : ''; ?>">Employee Details</a></li>
											<li><a href="departments.php" class="<?php echo ($page == 'departments.php') ? 'active' : ''; ?>">Departments</a></li>
											<li><a href="designations.php" class="<?php echo ($page == 'designations.php') ? 'active' : ''; ?>">Designations</a></li>
											<li><a href="policy.php" class="<?php echo ($page == 'policy.php') ? 'active' : ''; ?>">Policies</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);" class=" <?php echo ($page == 'tickets.php'||$page == 'ticket-details.php') ? 'active subdrop' : ''; ?>"><span>Tickets</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="tickets.php" class="<?php echo ($page == 'tickets.php') ? 'active' : ''; ?>">Tickets</a></li>
											<li><a href="ticket-details.php" class="<?php echo ($page == 'ticket-details.php') ? 'active' : ''; ?>">Ticket Details</a></li>
										</ul>
									</li>
									<li><a href="holidays.php" class="<?php echo ($page == 'holidays.php') ? 'active' : ''; ?>"><span>Holidays</span></a></li>
									<li class="submenu">
										<a href="javascript:void(0);"class=" <?php echo ($page == 'leaves.php'||$page == 'leaves-employee.php'||$page == 'leave-settings.php'||$page == 'attendance-admin.php'||$page == 'attendance-employee.php'||$page == 'timesheets.php'||$page == 'schedule-timing.php'||$page == 'overtime.php') ? 'active subdrop' : ''; ?>"><span>Attendance</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li class="submenu submenu-two">
												<a href="javascript:void(0);"class=" <?php echo ($page == 'leaves.php'||$page == 'leaves-employee.php'||$page == 'leave-settings.php') ? 'active subdrop' : ''; ?>">Leaves<span
														class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="leaves.php" class="<?php echo ($page == 'leaves.php') ? 'active' : ''; ?>">Leaves (Admin)</a></li>
													<li><a href="leaves-employee.php" class="<?php echo ($page == 'leaves-employee.php') ? 'active' : ''; ?>">Leave (Employee)</a></li>
													<li><a href="leave-settings.php" class="<?php echo ($page == 'leave-settings.php') ? 'active' : ''; ?>">Leave Settings</a></li>												
												</ul>												
											</li>
											<li><a href="attendance-admin.php" class="<?php echo ($page == 'attendance-admin.php') ? 'active' : ''; ?>">Attendance (Admin)</a></li>
											<li><a href="attendance-employee.php" class="<?php echo ($page == 'attendance-employee.php') ? 'active' : ''; ?>">Attendance (Employee)</a></li>
											<li><a href="timesheets.php" class="<?php echo ($page == 'timesheets.php') ? 'active' : ''; ?>">Timesheets</a></li>
											<li><a href="schedule-timing.php" class="<?php echo ($page == 'schedule-timing.php') ? 'active' : ''; ?>">Shift & Schedule</a></li>
											<li><a href="overtime.php" class="<?php echo ($page == 'overtime.php') ? 'active' : ''; ?>">Overtime</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);" class=" <?php echo ($page == 'performance-indicator.php'||$page == 'performance-review.php'||$page == 'performance-appraisal.php'||$page == 'goal-tracking.php'||$page == 'goal-type.php') ? 'active subdrop' : ''; ?>"><span>Performance</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="performance-indicator.php" class="<?php echo ($page == 'performance-indicator.php') ? 'active' : ''; ?>">Performance Indicator</a></li>
											<li><a href="performance-review.php" class="<?php echo ($page == 'performance-review.php') ? 'active' : ''; ?>">Performance Review</a></li>
											<li><a href="performance-appraisal.php" class="<?php echo ($page == 'performance-appraisal.php') ? 'active' : ''; ?>">Performance Appraisal</a></li>
											<li><a href="goal-tracking.php" class="<?php echo ($page == 'goal-tracking.php') ? 'active' : ''; ?>">Goal List</a></li>
											<li><a href="goal-type.php" class="<?php echo ($page == 'goal-type.php') ? 'active' : ''; ?>">Goal Type</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);" class=" <?php echo ($page == 'training.php'||$page == 'trainers.php'||$page == 'training-type.php') ? 'active subdrop' : ''; ?>"><span>Training</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="training.php" class="<?php echo ($page == 'training.php') ? 'active' : ''; ?>">Training List</a></li>
											<li><a href="trainers.php" class="<?php echo ($page == 'trainers.php') ? 'active' : ''; ?>">Trainers</a></li>
											<li><a href="training-type.php" class="<?php echo ($page == 'training-type.php') ? 'active' : ''; ?>">Training Type</a></li>
										</ul>
									</li>
									<li><a href="promotion.php" class="<?php echo ($page == 'promotion.php') ? 'active' : ''; ?>"><span>Promotion</span></a></li>
									<li><a href="resignation.php" class="<?php echo ($page == 'resignation.php') ? 'active' : ''; ?>"><span>Resignation</span></a></li>
									<li><a href="termination.php" class="<?php echo ($page == 'termination.php') ? 'active' : ''; ?>"><span>Termination</span></a></li>
								</ul>
							</div>
							<div class="tab-pane fade <?php echo ($page == 'estimates.php'||$page == 'invoices.php'||$page == 'payments.php'||$page == 'expenses.php'||$page == 'provident-fund.php'
							||$page == 'taxes.php'||$page == 'categories.php'||$page == 'budgets.php'||$page == 'budget-expenses.php'||$page == 'budget-revenues.php'||$page == 'employee-salary.php'||$page == 'payslip.php'||$page == 'payroll.php') ? ' show active ' : ''; ?></ul>" id="finance">
								<ul>
									<li class="menu-title"><span>FINANCE & ACCOUNTS</span></li>
									<li class="submenu">
										<a href="javascript:void(0);" class=" <?php echo ($page == 'estimates.php'||$page == 'invoices.php'||$page == 'payments.php'||$page == 'expenses.php'||$page == 'provident-fund.php'||$page == 'taxes.php') ? 'active subdrop' : ''; ?>"><span>Sales</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="estimates.php" class="<?php echo ($page == 'estimates.php') ? 'active' : ''; ?>">Estimates</a></li>
											<li><a href="invoices.php" class="<?php echo ($page == 'invoices.php') ? 'active' : ''; ?>">Invoices</a></li>
											<li><a href="payments.php" class="<?php echo ($page == 'payments.php') ? 'active' : ''; ?>">Payments</a></li>
											<li><a href="expenses.php" class="<?php echo ($page == 'expenses.php') ? 'active' : ''; ?>">Expenses</a></li>
											<li><a href="provident-fund.php" class="<?php echo ($page == 'provident-fund.php') ? 'active' : ''; ?>">Provident Fund</a></li>
											<li><a href="taxes.php" class="<?php echo ($page == 'taxes.php') ? 'active' : ''; ?>">Taxes</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);" class=" <?php echo ($page == 'categories.php'||$page == 'budgets.php'||$page == 'budget-expenses.php'||$page == 'budget-revenues.php') ? 'active subdrop' : ''; ?>"><span>Accounting</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="categories.php" class="<?php echo ($page == 'categories.php') ? 'active' : ''; ?>">Categories</a></li>
											<li><a href="budgets.php" class="<?php echo ($page == 'budgets.php') ? 'active' : ''; ?>">Budgets</a></li>
											<li><a href="budget-expenses.php" class="<?php echo ($page == 'budget-expenses.php') ? 'active' : ''; ?>">Budget Expenses</a></li>
											<li><a href="budget-revenues.php" class="<?php echo ($page == 'budget-revenues.php') ? 'active' : ''; ?>">Budget Revenues</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"class="<?php echo ($page == 'employee-salary.php'||$page == 'payslip.php'||$page == 'payroll.php') ? 'active subdrop' : ''; ?>"><span>Payroll</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="employee-salary.php" class="<?php echo ($page == 'employee-salary.php') ? 'active' : ''; ?>">Employee Salary</a></li>
											<li><a href="payslip.php" class="<?php echo ($page == 'payslip.php') ? 'active' : ''; ?>">Payslip</a></li>
											<li><a href="payroll.php" class="<?php echo ($page == 'payroll.php') ? 'active' : ''; ?>">Payroll Items</a></li>
										</ul>
									</li>									
								</ul>
							</div>
							<div class="tab-pane fade <?php echo ($page == 'assets-list.php'||$page == 'asset-categories.php'||$page == 'assets-list.php'||$page == 'asset-categories.php'
							||$page == 'knowledgebase.php'||$page == 'activity.php'||$page == 'users.php'||$page == 'roles-permissions.php'||$page == 'expenses-report.php'||$page == 'invoice-report.php'||$page == 'payment-report.php'||$page == 'project-report.php'||$page == 'task-report.php'||$page == 'user-report.php'||$page == 'employee-report.php'||$page == 'payslip-report.php'||$page == 'attendance-report.php'||$page == 'leave-report.php'||$page == 'daily-report.php'
							||$page == 'profile-settings.php'||$page == 'security-settings.php'||$page == 'notification-settings.php'||$page == 'connected-apps.php'
							||$page == 'bussiness-settings.php'||$page == 'seo-settings.php'||$page == 'localization-settings.php'||$page == 'prefixes.php'||$page == 'preferences.php'||$page == 'performance-appraisal.php'||$page == 'language.php'||$page == 'authentication-settings.php'||$page == 'ai-settings.php'
							||$page == 'salary-settings.php'||$page == 'approval-settings.php'||$page == 'invoice-settings.php'||$page == 'leave-type.php'||$page == 'custom-fields.php'||$page == 'email-settings.php'||$page == 'email-template.php'||$page == 'sms-settings.php'||$page == 'sms-template.php'||$page == 'otp-settings.php'||$page == 'gdpr.php'||$page == 'maintenance-mode.php'
							||$page == 'payment-gateways.php'||$page == 'tax-rates.php'||$page == 'currencies.php'||$page == 'custom-css.php'||$page == 'custom-js.php'||$page == 'cronjob.php'||$page == 'storage-settings.php'||$page == 'ban-ip-address.php'||$page == 'backup.php'||$page == 'clear-cache.php'
							) ? 'show active' : ''; ?>" id="administration">
								<ul>
									<li class="menu-title"><span>ADMINISTRATION</span></li>
									<li class="submenu">
										<a href="javascript:void(0);"class="<?php echo ($page == 'assets.php'||$page == 'asset-categories.php') ? 'active subdrop' : ''; ?>"><span>Assets</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="assets.php" class="<?php echo ($page == 'assets.php') ? 'active' : ''; ?>">Assets</a></li>
											<li><a href="asset-categories.php" class="<?php echo ($page == 'asset-categories.php') ? 'active' : ''; ?>">Asset Categories</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"class="<?php echo ($page == 'knowledgebase.php'||$page == 'activity.php') ? 'active subdrop' : ''; ?>"><span>Help & Supports</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="knowledgebase.php" class="<?php echo ($page == 'knowledgebase.php') ? 'active' : ''; ?>">Knowledge Base</a></li>
											<li><a href="activity.php" class="<?php echo ($page == 'activity.php') ? 'active' : ''; ?>">Activities</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"class="<?php echo ($page == 'users.php'||$page == 'roles-permissions.php') ? 'active subdrop' : ''; ?>"><span>User Management</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="users.php" class="<?php echo ($page == 'users.php') ? 'active' : ''; ?>">Users</a></li>
											<li><a href="roles-permissions.php" class="<?php echo ($page == 'roles-permissions.php') ? 'active' : ''; ?>">Roles & Permissions</a></li>
										</ul>
									</li>
									<li class="submenu" class="<?php echo ($page == 'expenses-report.php'||$page == 'invoice-report.php'||$page == 'payment-report.php'||$page == 'project-report.php'||$page == 'task-report.php'||$page == 'user-report.php'||$page == 'employee-report.php'||$page == 'payslip-report.php'||$page == 'attendance-report.php'||$page == 'leave-report.php'||$page == 'daily-report.php') ? 'active subdrop' : ''; ?>">
										<a href="javascript:void(0);"><span>Reports</span>
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
									<li class="submenu">
										<a href="javascript:void(0);"class="<?php echo ($page == 'profile-settings.php'||$page == 'security-settings.php'||$page == 'notification-settings.php'||$page == 'connected-apps.php') ? 'active subdrop' : ''; ?>">
											General Settings
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="profile-settings.php" class="<?php echo ($page == 'profile-settings.php') ? 'active' : ''; ?>">Profile</a></li>
											<li><a href="security-settings.php" class="<?php echo ($page == 'security-settings.php') ? 'active' : ''; ?>">Security</a></li>
											<li><a href="notification-settings.php" class="<?php echo ($page == 'notification-settings.php') ? 'active' : ''; ?>">Notifications</a></li>
											<li><a href="connected-apps.php" class="<?php echo ($page == 'connected-apps.php') ? 'active' : ''; ?>">Connected Apps</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);" class="<?php echo ($page == 'bussiness-settings.php'||$page == 'seo-settings.php'||$page == 'localization-settings.php'||$page == 'prefixes.php'||$page == 'preferences.php'||$page == 'performance-appraisal.php'||$page == 'language.php'||$page == 'authentication-settings.php'||$page == 'ai-settings.php') ? 'active subdrop' : ''; ?>">
											Website Settings
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="bussiness-settings.php" class="<?php echo ($page == 'bussiness-settings.php') ? 'active' : ''; ?>">Business Settings</a></li>
											<li><a href="seo-settings.php" class="<?php echo ($page == 'seo-settings.php') ? 'active' : ''; ?>">SEO Settings</a></li>
											<li><a href="localization-settings.php" class="<?php echo ($page == 'localization-settings.php') ? 'active' : ''; ?>">Localization</a></li>
											<li><a href="prefixes.php" class="<?php echo ($page == 'prefixes.php') ? 'active' : ''; ?>">Prefixes</a></li>
											<li><a href="preferences.php" class="<?php echo ($page == 'preferences.php') ? 'active' : ''; ?>">Preferences</a></li>
											<li><a href="performance-appraisal.php" class="<?php echo ($page == 'performance-appraisal.php') ? 'active' : ''; ?>">Appearance</a></li>
											<li><a href="language.php" class="<?php echo ($page == 'language.php') ? 'active' : ''; ?>">Language</a></li>
											<li><a href="authentication-settings.php" class="<?php echo ($page == 'authentication-settings.php') ? 'active' : ''; ?>">Authentication</a></li>
											<li><a href="ai-settings.php" class="<?php echo ($page == 'ai-settings.php') ? 'active' : ''; ?>">AI Settings</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"class="<?php echo ($page == 'salary-settings.php'||$page == 'approval-settings.php'||$page == 'invoice-settings.php'||$page == 'leave-type.php'||$page == 'custom-fields.php') ? 'active subdrop' : ''; ?>">App Settings<span class="menu-arrow"></span></a>
										<ul>
											<li><a href="salary-settings.php" class="<?php echo ($page == 'salary-settings.php') ? 'active' : ''; ?>">Salary Settings</a></li>
											<li><a href="approval-settings.php" class="<?php echo ($page == 'approval-settings.php') ? 'active' : ''; ?>">Approval Settings</a></li>
											<li><a href="invoice-settings.php" class="<?php echo ($page == 'invoice-settings.php') ? 'active' : ''; ?>">Invoice Settings</a></li>
											<li><a href="leave-type.php" class="<?php echo ($page == 'leave-type.php') ? 'active' : ''; ?>">Leave Type</a></li>
											<li><a href="custom-fields.php" class="<?php echo ($page == 'custom-fields.php') ? 'active' : ''; ?>">Custom Fields</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"class="<?php echo ($page == 'email-settings.php'||$page == 'email-template.php'||$page == 'sms-settings.php'||$page == 'sms-template.php'||$page == 'otp-settings.php'||$page == 'gdpr.php'||$page == 'maintenance-mode.php') ? 'active subdrop' : ''; ?>">
											System Settings
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="email-settings.php" class="<?php echo ($page == 'email-settings.php') ? 'active' : ''; ?>">Email Settings</a></li>
											<li><a href="email-template.php" class="<?php echo ($page == 'email-template.php') ? 'active' : ''; ?>">Email Templates</a></li>
											<li><a href="sms-settings.php" class="<?php echo ($page == 'sms-settings.php') ? 'active' : ''; ?>">SMS Settings</a></li>
											<li><a href="sms-template.php" class="<?php echo ($page == 'sms-template.php') ? 'active' : ''; ?>" >SMS Templates</a></li>
											<li><a href="otp-settings.php" class="<?php echo ($page == 'otp-settings.php') ? 'active' : ''; ?>">OTP</a></li>
											<li><a href="gdpr.php" class="<?php echo ($page == 'gdpr.php') ? 'active' : ''; ?>">GDPR Cookies</a></li>
											<li><a href="maintenance-mode.php" class="<?php echo ($page == 'maintenance-mode.php') ? 'active' : ''; ?>">Maintenance Mode</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"class="<?php echo ($page == 'payment-gateways.php'||$page == 'tax-rates.php'||$page == 'currencies.php') ? 'active subdrop' : ''; ?>">
											Financial Settings
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="payment-gateways.php" class="<?php echo ($page == 'payment-gateways.php') ? 'active' : ''; ?>">Payment Gateways</a></li>
											<li><a href="tax-rates.php" class="<?php echo ($page == 'tax-rates.php') ? 'active' : ''; ?>">Tax Rate</a></li>
											<li><a href="currencies.php" class="<?php echo ($page == 'currencies.php') ? 'active' : ''; ?>">Currencies</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"class="<?php echo ($page == 'custom-css.php'||$page == 'custom-js.php'||$page == 'cronjob.php'||$page == 'storage-settings.php'||$page == 'ban-ip-address.php'||$page == 'backup.php'||$page == 'clear-cache.php') ? 'active subdrop' : ''; ?>">Other Settings<span class="menu-arrow"></span></a>
										<ul>
											<li><a href="custom-css.php" class="<?php echo ($page == 'custom-css.php') ? 'active' : ''; ?>">Custom CSS</a></li>
											<li><a href="custom-js.php" class="<?php echo ($page == 'custom-js.php') ? 'active' : ''; ?>">Custom JS</a></li>
											<li><a href="cronjob.php" class="<?php echo ($page == 'cronjob.php') ? 'active' : ''; ?>">Cronjob</a></li>
											<li><a href="storage-settings.php" class="<?php echo ($page == 'storage-settings.php') ? 'active' : ''; ?>">Storage</a></li>
											<li><a href="ban-ip-address.php" class="<?php echo ($page == 'ban-ip-address.php') ? 'active' : ''; ?>">Ban IP Address</a></li>
											<li><a href="backup.php" class="<?php echo ($page == 'backup.php') ? 'active' : ''; ?>">Backup</a></li>
											<li><a href="clear-cache.php" class="<?php echo ($page == 'clear-cache.php') ? 'active' : ''; ?>">Clear Cache</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="tab-pane fade <?php echo ($page == 'pages.php'||$page == 'blogs.php'||$page == 'blog-categories.php'||$page == 'blog-comments.php'||$page == 'blog-tags.php'
							||$page == 'countries.php'||$page == 'states.php'||$page == 'cities.php'||$page == 'testimonials.php'||$page == 'faq.php') ? ' show active' : ''; ?>" id="content">
								<ul>
									<li class="menu-title"><span>CONTENT</span></li>
									<li><a href="pages.php" class="<?php echo ($page == 'pages.php') ? 'active' : ''; ?>">Pages</a></li>
									<li class="submenu">
										<a href="javascript:void(0);" class="<?php echo ($page == 'blogs.php'||$page == 'blog-categories.php'||$page == 'blog-comments.php'||$page == 'blog-tags.php') ? 'active subdrop' : ''; ?>">
											Blogs
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="blogs.php" class="<?php echo ($page == 'blogs.php') ? 'active' : ''; ?>">All Blogs</a></li>
											<li><a href="blog-categories.php" class="<?php echo ($page == 'blog-categories.php') ? 'active' : ''; ?>">Categories</a></li>
											<li><a href="blog-comments.php" class="<?php echo ($page == 'blog-comments.php') ? 'active' : ''; ?>">Comments</a></li>
											<li><a href="blog-tags.php" class="<?php echo ($page == 'blog-tags.php') ? 'active' : ''; ?>">Blog Tags</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"class="<?php echo ($page == 'countries.php'||$page == 'states.php'||$page == 'cities.php') ? 'active subdrop' : ''; ?>">
											Locations
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="countries.php" class="<?php echo ($page == 'countries.php') ? 'active' : ''; ?>">Countries</a></li>
											<li><a href="states.php" class="<?php echo ($page == 'states.php') ? 'active' : ''; ?>">States</a></li>
											<li><a href="cities.php" class="<?php echo ($page == 'cities.php') ? 'active' : ''; ?>">Cities</a></li>
										</ul>
									</li>
									<li><a href="testimonials.php" class="<?php echo ($page == 'testimonials.php') ? 'active' : ''; ?>">Testimonials</a></li>
									<li><a href="faq.php" class="<?php echo ($page == 'faq.php') ? 'active' : ''; ?>">FAQ’S</a></li>
								</ul>
							</div>
							<div class="tab-pane fade <?php echo ($page == 'starter.php'||$page == 'profile.php'||$page == 'gallery.php'||$page == 'search-result.php'||$page == 'timeline.php'
							||$page == 'pricing.php'||$page == 'coming-soon.php'||$page == 'under-maintenance.php'||$page == 'under-construction.php'||$page == 'api-keys.php'||$page == 'privacy-policy.php'||$page == 'terms-condition.php') ? ' show active' : ''; ?>" id="pages">
								<ul>
									<li class="menu-title"><span>PAGES</span></li>
									<li ><a href="starter.php" class="<?php echo ($page == 'starter.php') ? 'active' : ''; ?>"><span>Starter</span></a></li>
									<li><a href="profile.php" class="<?php echo ($page == 'profile.php') ? 'active' : ''; ?>"><span>Profile</span></a></li>
									<li><a href="gallery.php" class="<?php echo ($page == 'gallery.php') ? 'active' : ''; ?>"><span>Gallery</span></a></li>
									<li><a href="search-result.php" class="<?php echo ($page == 'search-result.php') ? 'active' : ''; ?>"><span>Search Results</span></a></li>
									<li><a href="timeline.php" class="<?php echo ($page == 'timeline.php') ? 'active' : ''; ?>"><span>Timeline</span></a></li>
									<li><a href="pricing.php" class="<?php echo ($page == 'pricing.php') ? 'active' : ''; ?>"><span>Pricing</span></a></li>
									<li><a href="coming-soon.php" class="<?php echo ($page == 'coming-soon.php') ? 'active' : ''; ?>"><span>Coming Soon</span></a></li>
									<li><a href="under-maintenance.php" class="<?php echo ($page == 'under-maintenance.php') ? 'active' : ''; ?>"><span>Under Maintenance</span></a></li>
									<li><a href="under-construction.php" class="<?php echo ($page == 'under-construction.php') ? 'active' : ''; ?>"><span>Under Construction</span></a></li>
									<li><a href="api-keys.php" class="<?php echo ($page == 'api-keys.php') ? 'active' : ''; ?>"><span>API Keys</span></a></li>
									<li><a href="privacy-policy.php" class="<?php echo ($page == 'privacy-policy.php') ? 'active' : ''; ?>"><span>Privacy Policy</span></a></li>
									<li><a href="terms-condition.php" class="<?php echo ($page == 'terms-condition.php') ? 'active' : ''; ?>"><span>Terms & Conditions</span></a></li>
								</ul>
							</div>
							<div class="tab-pane fade <?php echo ($page == 'login.php'||$page == 'login-2.php'||$page == 'login-3.php'||$page == 'register.php'||$page == 'register-2.php'
							||$page == 'register-3.php'||$page == 'forgot-password.php'||$page == 'forgot-password-2.php'||$page == 'forgot-password-3.php'||$page == 'reset-password.php'||$page == 'reset-password-2.php'||$page == 'reset-password-3.php'
							||$page == 'email-verification.php'||$page == 'email-verification-2.php'||$page == 'email-verification-3.php'||$page == 'two-step-verification.php'||$page == 'two-step-verification-2.php'||$page == 'two-step-verification-3.php'||$page == 'lock-screen.php'||
							$page == 'error-404.php'||$page == 'error-500.php'
							) ? ' show active' : ''; ?>" id="authentication">
								<ul>
									<li class="menu-title"><span>AUTHENTICATION</span></li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Login<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="login.php" class="<?php echo ($page == 'login.php') ? 'active' : ''; ?>">Cover</a></li>
											<li><a href="login-2.php" class="<?php echo ($page == 'login-2.php') ? 'active' : ''; ?>">Illustration</a></li>
											<li><a href="login-3.php" class="<?php echo ($page == 'login-3.php') ? 'active' : ''; ?>">Basic</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Register<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="register.php" class="<?php echo ($page == 'register.php') ? 'active' : ''; ?>">Cover</a></li>
											<li><a href="register-2.php" class="<?php echo ($page == 'register-2.php') ? 'active' : ''; ?>">Illustration</a></li>
											<li><a href="register-3.php" class="<?php echo ($page == 'register-3.php') ? 'active' : ''; ?>">Basic</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Forgot Password<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="forgot-password.php" class="<?php echo ($page == 'forgot-password.php') ? 'active' : ''; ?>">Cover</a></li>
											<li><a href="forgot-password-2.php" class="<?php echo ($page == 'forgot-password-2.php') ? 'active' : ''; ?>">Illustration</a></li>
											<li><a href="forgot-password-3.php" class="<?php echo ($page == 'forgot-password-3.php') ? 'active' : ''; ?>">Basic</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Reset Password<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="reset-password.php" class="<?php echo ($page == 'reset-password.php') ? 'active' : ''; ?>">Cover</a></li>
											<li><a href="reset-password-2.php" class="<?php echo ($page == 'reset-password-2.php') ? 'active' : ''; ?>">Illustration</a></li>
											<li><a href="reset-password-3.php" class="<?php echo ($page == 'reset-password-3.php') ? 'active' : ''; ?>">Basic</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											Email Verification<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="email-verification.php" class="<?php echo ($page == 'email-verification.php') ? 'active' : ''; ?>">Cover</a></li>
											<li><a href="email-verification-2.php" class="<?php echo ($page == 'email-verification-2.php') ? 'active' : ''; ?>">Illustration</a></li>
											<li><a href="email-verification-3.php" class="<?php echo ($page == 'email-verification-3.php') ? 'active' : ''; ?>">Basic</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											2 Step Verification<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="two-step-verification.php" class="<?php echo ($page == 'two-step-verification.php') ? 'active' : ''; ?>">Cover</a></li>
											<li><a href="two-step-verification-2.php" class="<?php echo ($page == 'two-step-verification-2.php') ? 'active' : ''; ?>">Illustration</a></li>
											<li><a href="two-step-verification-3.php" class="<?php echo ($page == 'two-step-verification-3.php') ? 'active' : ''; ?>">Basic</a></li>
										</ul>
									</li>
									<li class="<?php echo ($page == 'lock-screen.php') ? 'active' : ''; ?>"><a href="lock-screen.php">Lock Screen</a></li>
									<li class="<?php echo ($page == 'error-404.php') ? 'active' : ''; ?>"><a href="error-404.php">404 Error</a></li>
									<li class="<?php echo ($page == 'error-500.php') ? 'active' : ''; ?>"><a href="error-500.php">500 Error</a></li>
								</ul>
							</div>
							<div class="tab-pane fade <?php echo ($page == 'ui-alerts.php' || $page == 'ui-accordion.php' || $page == 'ui-avatar.php' || $page == 'ui-badges.php' || $page == 'ui-borders.php'
                                                                                                        || $page == 'ui-buttons.php' || $page == 'ui-buttons-group.php' || $page == 'ui-breadcrumb.php' || $page == 'ui-cards.php' || $page == 'ui-carousel.php'
                                                                                                        || $page == 'ui-colors.php' || $page == 'ui-dropdowns.php' || $page == 'ui-grid.php' || $page == 'ui-images.php' || $page == 'ui-lightbox.php'
                                                                                                        || $page == 'ui-media.php' || $page == 'ui-modals.php' || $page == 'ui-offcanvas.php' || $page == 'ui-pagination.php' || $page == 'ui-popovers.php'
                                                                                                        || $page == 'ui-progress.php' || $page == 'ui-placeholders.php'  || $page == 'ui-spinner.php'
                                                                                                        || $page == 'ui-sweetalerts.php' || $page == 'ui-nav-tabs.php' || $page == 'ui-toasts.php' || $page == 'ui-tooltips.php'
                                                                                                        || $page == 'ui-typography.php' || $page == 'ui-video.php'||$page == 'ui-ribbon.php' || $page == 'ui-clipboard.php' || $page == 'ui-drag-drop.php' || $page == 'ui-rangeslider.php' || $page == 'ui-rating.php' || $page == 'ui-text-editor.php' || $page == 'ui-counter.php' || $page == 'ui-scrollbar.php' || $page == 'ui-stickynote.php' || $page == 'ui-timeline.php'
																										||$page == 'form-basic-inputs.php' || $page == 'form-checkbox-radios.php' || $page == 'form-input-groups.php' || $page == 'form-grid-gutters.php' || $page == 'form-select.php' || $page == 'form-mask.php' || $page == 'form-fileupload.php' || $page == 'form-horizontal.php' || $page == 'form-vertical.php' || $page == 'form-floating-labels.php' || $page == 'form-validation.php' || $page == 'form-wizard.php' || $page == 'form-select2.php'
																										||$page == 'form-horizontal.php' || $page == 'form-vertical.php' || $page == 'form-floating-labels.php'||$page == 'tables-basic.php' || $page == 'data-tables.php'
																										||$page == 'chart-apex.php' || $page == 'chart-js.php' || $page == 'chart-morris.php' || $page == 'chart-flot.php' || $page == 'chart-peity.php' || $page == 'chart-c3.php'||$page == 'icon-fontawesome.php' || $page == 'icon-feather.php' || $page == 'icon-ionic.php' || $page == 'icon-material.php' || $page == 'icon-pe7.php' || $page == 'icon-simpleline.php' || $page == 'icon-themify.php' || $page == 'icon-weather.php' || $page == 'icon-typicon.php' || $page == 'icon-flag.php'
																										||$page == 'maps-vector.php'||$page == 'maps-leaflet.php'

                                                                                                )
                                                                                                        ? 'show active'
                                                                                                        : ''; ?>" id="ui-elements">
								<ul>
									<li class="menu-title"><span>UI INTERFACE</span></li>
									<li class="submenu">
										<a href="javascript:void(0);"class="<?php echo ($page == 'ui-alerts.php' || $page == 'ui-accordion.php' || $page == 'ui-avatar.php' || $page == 'ui-badges.php' || $page == 'ui-borders.php'
                                                                                                        || $page == 'ui-buttons.php' || $page == 'ui-buttons-group.php' || $page == 'ui-breadcrumb.php' || $page == 'ui-cards.php' || $page == 'ui-carousel.php'
                                                                                                        || $page == 'ui-colors.php' || $page == 'ui-dropdowns.php' || $page == 'ui-grid.php' || $page == 'ui-images.php' || $page == 'ui-lightbox.php'
                                                                                                        || $page == 'ui-media.php' || $page == 'ui-modals.php' || $page == 'ui-offcanvas.php' || $page == 'ui-pagination.php' || $page == 'ui-popovers'
                                                                                                        || $page == 'ui-progress.php' || $page == 'ui-placeholders.php'  || $page == 'ui-spinner.php'
                                                                                                        || $page == 'ui-sweetalerts.php' || $page == 'ui-nav-tabs.php' || $page == 'ui-toasts.php' || $page == 'ui-tooltips.php'
                                                                                                        || $page == 'ui-typography.php' || $page == 'ui-video.php'
                                                                                                )
                                                                                                        ? 'subdrop active'
                                                                                                        : ''; ?>">Base UI<span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="ui-alerts.php" class="<?php echo ($page == 'ui-alerts.php') ? 'active' : ''; ?>">Alerts</a></li>
											<li><a href="ui-accordion.php" class="<?php echo ($page == 'ui-accordion.php') ? 'active' : ''; ?>">Accordion</a></li>
											<li><a href="ui-avatar.php" class="<?php echo ($page == 'ui-avatar.php') ? 'active' : ''; ?>">Avatar</a></li>
											<li><a href="ui-badges.php" class="<?php echo ($page == 'ui-badges.php') ? 'active' : ''; ?>">Badges</a></li>
											<li><a href="ui-borders.php" class="<?php echo ($page == 'ui-borders.php') ? 'active' : ''; ?>">Border</a></li>
											<li><a href="ui-buttons.php" class="<?php echo ($page == 'ui-buttons.php') ? 'active' : ''; ?>">Buttons</a></li>
											<li><a href="ui-buttons-group.php" class="<?php echo ($page == 'ui-buttons-group.php') ? 'active' : ''; ?>">Button Group</a></li>
											<li><a href="ui-breadcrumb.php" class="<?php echo ($page == 'ui-breadcrumb.php') ? 'active' : ''; ?>">Breadcrumb</a></li>
											<li><a href="ui-cards.php" class="<?php echo ($page == 'ui-cards.php') ? 'active' : ''; ?>">Card</a></li>
											<li><a href="ui-carousel.php" class="<?php echo ($page == 'ui-carousel.php') ? 'active' : ''; ?>">Carousel</a></li>
											<li><a href="ui-colors.php" class="<?php echo ($page == 'ui-colors.php') ? 'active' : ''; ?>">Colors</a></li>
											<li><a href="ui-dropdowns.php" class="<?php echo ($page == 'ui-dropdowns.php') ? 'active' : ''; ?>">Dropdowns</a></li>
											<li><a href="ui-grid.php" class="<?php echo ($page == 'ui-grid.php') ? 'active' : ''; ?>">Grid</a></li>
											<li><a href="ui-images.php" class="<?php echo ($page == 'ui-images.php') ? 'active' : ''; ?>">Images</a></li>
											<li><a href="ui-lightbox.php" class="<?php echo ($page == 'ui-lightbox.php') ? 'active' : ''; ?>">Lightbox</a></li>
											<li><a href="ui-media.php" class="<?php echo ($page == 'ui-media.php') ? 'active' : ''; ?>">Media</a></li>
											<li><a href="ui-modals.php" class="<?php echo ($page == 'ui-modals.php') ? 'active' : ''; ?>">Modals</a></li>
											<li><a href="ui-offcanvas.php" class="<?php echo ($page == 'ui-offcanvas.php') ? 'active' : ''; ?>">Offcanvas</a></li>
											<li><a href="ui-pagination.php" class="<?php echo ($page == 'ui-pagination.php') ? 'active' : ''; ?>">Pagination</a></li>
											<li><a href="ui-popovers.php" class="<?php echo ($page == 'ui-popovers.php') ? 'active' : ''; ?>">Popovers</a></li>
											<li><a href="ui-progress.php" class="<?php echo ($page == 'ui-progress.php') ? 'active' : ''; ?>">Progress</a></li>
											<li><a href="ui-placeholders.php" class="<?php echo ($page == 'ui-placeholders.php') ? 'active' : ''; ?>">Placeholders</a></li>
											<li><a href="ui-spinner.php" class="<?php echo ($page == 'ui-spinner.php') ? 'active' : ''; ?>">Spinner</a></li>
											<li><a href="ui-sweetalerts.php" class="<?php echo ($page == 'ui-sweetalerts.php') ? 'active' : ''; ?>">Sweet Alerts</a></li>
											<li><a href="ui-nav-tabs.php" class="<?php echo ($page == 'ui-nav-tabs.php') ? 'active' : ''; ?>">Tabs</a></li>
											<li><a href="ui-toasts.php" class="<?php echo ($page == 'ui-toasts.php') ? 'active' : ''; ?>">Toasts</a></li>
											<li><a href="ui-tooltips.php" class="<?php echo ($page == 'ui-tooltips.php') ? 'active' : ''; ?>">Tooltips</a></li>
											<li><a href="ui-typography.php" class="<?php echo ($page == 'ui-typography.php') ? 'active' : ''; ?>">Typography</a></li>
											<li><a href="ui-video.php" class="<?php echo ($page == 'ui-video.php') ? 'active' : ''; ?>">Video</a></li>
											<li><a href="ui-sortable.php" class="<?php echo ($page == 'ui-sortable.php') ? 'active' : ''; ?>">Sortable</a></li>
											<li><a href="ui-swiperjs.php" class="<?php echo ($page == 'ui-swiperjs.php') ? 'active' : ''; ?>">Swiperjs</a></li>						
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"class="<?php echo ($page == 'ui-ribbon.php' || $page == 'ui-clipboard.php' || $page == 'ui-drag-drop.php' || $page == 'ui-rangeslider.php' || $page == 'ui-rating.php' || $page == 'ui-text-editor.php' || $page == 'ui-counter.php' || $page == 'ui-scrollbar.php' || $page == 'ui-stickynote.php' || $page == 'ui-timeline.php') ? 'subdrop active' : ''; ?>"> Advanced UI <span class="menu-arrow"></span> </a>
										<ul>
											<li><a href="ui-ribbon.php" class="<?php echo ($page == 'ui-ribbon.php') ? 'active' : ''; ?>">Ribbon</a></li>
											<li><a href="ui-clipboard.php" class="<?php echo ($page == 'ui-clipboard.php') ? 'active' : ''; ?>">Clipboard</a></li>
											<li><a href="ui-drag-drop.php" class="<?php echo ($page == 'ui-drag-drop.php') ? 'active' : ''; ?>">Drag & Drop</a></li>
											<li><a href="ui-rangeslider.php" class="<?php echo ($page == 'ui-rangeslider.php') ? 'active' : ''; ?>">Range Slider</a></li>
											<li><a href="ui-rating.php" class="<?php echo ($page == 'rating.php') ? 'active' : ''; ?>">Rating</a></li>
											<li><a href="ui-text-editor.php" class="<?php echo ($page == 'text-editor.php') ? 'active' : ''; ?>">Text Editor</a></li>
											<li><a href="ui-counter.php" class="<?php echo ($page == 'counter.php') ? 'active' : ''; ?>">Counter</a></li>
											<li><a href="ui-scrollbar.php" class="<?php echo ($page == 'scrollbar.php') ? 'active' : ''; ?>">Scrollbar</a></li>
											<li><a href="ui-stickynote.php" class="<?php echo ($page == 'stickynote.php') ? 'active' : ''; ?>">Sticky Note</a></li>
											<li><a href="ui-timeline.php" class="<?php echo ($page == 'timeline.php') ? 'active' : ''; ?>">Timeline</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"> Forms <span class="menu-arrow"></span>
										</a>
										<ul>
											<li class="submenu submenu-two">
												<a href="javascript:void(0);"class="<?php echo ($page == 'form-basic-inputs.php' || $page == 'form-checkbox-radios.php' || $page == 'form-input-groups.php' || $page == 'form-grid-gutters.php' || $page == 'form-select.php' || $page == 'form-mask.php' || $page == 'form-fileupload.php' || $page == 'form-horizontal.php' || $page == 'form-vertical.php' || $page == 'form-floating-labels.php' || $page == 'form-validation.php' || $page == 'form-wizard.php' || $page == 'form-select2.php') ? 'subdrop active' : ''; ?>">Form Elements<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="form-basic-inputs.php"class="<?php echo ($page == 'form-basic-inputs.php') ? 'active' : ''; ?>">Basic Inputs</a></li>
													<li><a href="form-checkbox-radios.php" class="<?php echo ($page == 'form-checkbox-radios.php') ? 'active' : ''; ?>">Checkbox & Radios</a></li>
													<li><a href="form-input-groups.php" class="<?php echo ($page == 'form-input-groups.php') ? 'active' : ''; ?>">Input Groups</a></li>
													<li><a href="form-grid-gutters.php" class="<?php echo ($page == 'form-grid-gutters.php') ? 'active' : ''; ?>">Grid & Gutters</a></li>
													<li><a href="form-select.php" class="<?php echo ($page == 'form-select.php') ? 'active' : ''; ?>">Form Select</a></li>
													<li><a href="form-mask.php" class="<?php echo ($page == 'form-mask.php') ? 'active' : ''; ?>">Input Masks</a></li>
													<li><a href="form-fileupload.php" class="<?php echo ($page == 'form-fileupload.php') ? 'active' : ''; ?>">File Uploads</a></li>
												</ul>
											</li>
											<li class="submenu submenu-two">
												<a href="javascript:void(0);"class="<?php echo ($page == 'form-horizontal.php' || $page == 'form-vertical.php' || $page == 'form-floating-labels.php') ? 'subdrop active' : ''; ?>">Layouts<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="form-horizontal.php" class="<?php echo ($page == 'form-horizontal.php') ? 'active' : ''; ?>">Horizontal Form</a></li>
													<li><a href="form-vertical.php" class="<?php echo ($page == 'form-vertical.php') ? 'active' : ''; ?>">Vertical Form</a></li>
													<li><a href="form-floating-labels.php" class="<?php echo ($page == 'form-floating-labels.php') ? 'active' : ''; ?>">Floating Labels</a></li>
												</ul>
											</li>
											<li><a href="form-validation.php" class="<?php echo ($page == 'form-validation.php') ? 'active' : ''; ?>">Form Validation</a></li>
											<li><a href="form-select2.php" class="<?php echo ($page == 'form-select2.php') ? 'active' : ''; ?>">Select2</a></li>
											<li><a href="form-wizard.php" class="<?php echo ($page == 'form-wizard.php') ? 'active' : ''; ?>">Form Wizard</a></li>
											<li><a href="form-pickers.php" class="<?php echo ($page == 'form-pickers.php') ? 'active' : ''; ?>">Form Picker</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"class="<?php echo ($page == 'tables-basic.php' || $page == 'data-tables.php') ? 'subdrop active' : ''; ?>">Tables <span class="menu-arrow"></span></a>
										<ul>
											<li><a href="tables-basic.php" class="<?php echo ($page == 'tables-basic.php') ? 'active' : ''; ?>">Basic Tables </a></li>
											<li><a href="data-tables.php" class="<?php echo ($page == 'data-tables.php') ? 'active' : ''; ?>">Data Table </a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"class="<?php echo ($page == 'chart-apex.php' || $page == 'chart-js.php' || $page == 'chart-morris.php' || $page == 'chart-flot.php' || $page == 'chart-peity.php' || $page == 'chart-c3.php') ? 'subdrop active' : ''; ?>">Charts<span class="menu-arrow"></span> </a>
										<ul>
											<li><a href="chart-apex.php" class="<?php echo ($page == 'chart-apex.php') ? 'active' : ''; ?>">Apex Charts</a></li>
											<li><a href="chart-c3.php" class="<?php echo ($page == 'chart-c3.php') ? 'active' : ''; ?>">Chart C3</a></li>
											<li><a href="chart-js.php" class="<?php echo ($page == 'chart-js.php') ? 'active' : ''; ?>">Chart Js</a></li>
											<li><a href="chart-morris.php" class="<?php echo ($page == 'chart-morris.php') ? 'active' : ''; ?>">Morris Charts</a></li>
											<li><a href="chart-flot.php" class="<?php echo ($page == 'chart-flot.php') ? 'active' : ''; ?>">Flot Charts</a></li>
											<li><a href="chart-peity.php" class="<?php echo ($page == 'chart-peity.php') ? 'active' : ''; ?>">Peity Charts</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"class="<?php echo ($page == 'icon-fontawesome.php' || $page == 'icon-feather.php' || $page == 'icon-ionic.php' || $page == 'icon-material.php' || $page == 'icon-pe7.php' || $page == 'icon-simpleline.php' || $page == 'icon-themify.php' || $page == 'icon-weather.php' || $page == 'icon-typicon.php' || $page == 'icon-flag.php') ? 'subdrop active' : ''; ?>">Icons<span class="menu-arrow"></span> </a>
										<ul>
											<li><a href="icon-fontawesome.php" class="<?php echo ($page == 'icon-fontawesome.php') ? 'active' : ''; ?>">Fontawesome Icons</a></li>
											<li><a href="icon-tabler.php" class="<?php echo ($page == 'icon-tabler.php') ? 'active' : ''; ?>">Tabler Icons</a></li>
											<li><a href="icon-bootstrap.php" class="<?php echo ($page == 'icon-bootstrap.php') ? 'active' : ''; ?>">Bootstrap Icons</a></li>
											<li><a href="icon-remix.php" class="<?php echo ($page == 'icon-remix.php') ? 'active' : ''; ?>">Remix Icons</a></li>
											<li><a href="icon-feather.php" class="<?php echo ($page == 'icon-feather.php') ? 'active' : ''; ?>">Feather Icons</a></li>
											<li><a href="icon-ionic.php" class="<?php echo ($page == 'icon-ionic.php') ? 'active' : ''; ?>">Ionic Icons</a></li>
											<li><a href="icon-material.php" class="<?php echo ($page == 'icon-material.php') ? 'active' : ''; ?>">Material Icons</a></li>
											<li><a href="icon-pe7.php" class="<?php echo ($page == 'icon-pe7.php') ? 'active' : ''; ?>">Pe7 Icons</a></li>
											<li><a href="icon-simpleline.php" class="<?php echo ($page == 'icon-simpleline.php') ? 'active' : ''; ?>">Simpleline Icons</a></li>
											<li><a href="icon-themify.php" class="<?php echo ($page == 'icon-themify.php') ? 'active' : ''; ?>">Themify Icons</a></li>
											<li><a href="icon-weather.php" class="<?php echo ($page == 'icon-weather.php') ? 'active' : ''; ?>">Weather Icons</a></li>
											<li><a href="icon-typicon.php" class="<?php echo ($page == 'icon-typicon.php') ? 'active' : ''; ?>">Typicon Icons</a></li>
											<li><a href="icon-flag.php" class="<?php echo ($page == 'icon-flag.php') ? 'active' : ''; ?>">Flag Icons</a></li>
											
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											<i class="ti ti-table-plus"></i>
											<span>Maps</span>
											<span class="menu-arrow"></span>
										</a>
										<ul>
											<li>
												<a href="maps-vector.php" class="<?php echo ($page == 'maps-vector.php') ? 'active' : ''; ?>">Vector</a>
											</li>
											<li>
												<a href="maps-leaflet.php" class="<?php echo ($page == 'maps-leaflet.php') ? 'active' : ''; ?>">Leaflet</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="extras">
								<ul>
									<li class="menu-title"><span>EXTRAS</span></li>
									<li><a href="#">Documentation</a></li>
									<li><a href="#">Change Log</a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="javascript:void(0);">Multilevel 1</a></li>
											<li class="submenu submenu-two">
												<a href="javascript:void(0);">Multilevel 2<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="javascript:void(0);">Multilevel 2.1</a></li>
													<li class="submenu submenu-two submenu-three">
														<a href="javascript:void(0);">Multilevel 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
														<ul>
															<li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
															<li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a href="javascript:void(0);">Multilevel 3</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Two Col Sidebar -->

		<!-- Stacked Sidebar -->
		<div class="stacked-sidebar" id="stacked-sidebar">
			<div class="sidebar sidebar-stacked" style="display: flex !important;">
				<div class="stacked-mini">
					<a href="admin-dashboard.php" class="logo-small">
						<img src="assets/img/logo-small.svg" alt="Logo">
					</a>
					<div class="sidebar-left slimscroll">
						<div class="d-flex align-items-center flex-column">
							<div class="mb-1 notification-item">
								<a href="#" class="btn btn-menubar position-relative">
									<i class="ti ti-bell"></i>
									<span class="notification-status-dot"></span>
								</a>
							</div>
							<div class="mb-1">
								<a href="#" class="btn btn-menubar btnFullscreen">
									<i class="ti ti-maximize"></i>
								</a>
							</div>
							<div class="mb-1">
								<a href="calendar.php" class="btn btn-menubar">
									<i class="ti ti-layout-grid-remove"></i>
								</a>
							</div>
							<div class="mb-1">
								<a href="chat.php" class="btn btn-menubar position-relative">
									<i class="ti ti-brand-hipchat"></i>
									<span class="badge bg-info rounded-pill d-flex align-items-center justify-content-center header-badge">5</span>
								</a>
							</div>
							<div class="mb-1">
								<a href="email.php" class="btn btn-menubar">
									<i class="ti ti-mail"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="sidebar-right d-flex justify-content-between flex-column">
					<div class="sidebar-scroll">
						<h6 class="mb-3">Welcome to SmartHR</h6>
						<div class="sidebar-profile text-center rounded bg-light p-3 mb-4">
							<div class="avatar avatar-lg online mb-3">
								<img src="assets/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
							</div>
							<h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
							<p class="fs-10">System Admin</p>
						</div>
						<div class="stack-menu">
							<div class="nav flex-column align-items-center nav-pills" role="tablist" aria-orientation="vertical">
								<div class="row g-2">
									<div class="col-6">
										<a href="#menu-dashboard" role="tab" class="nav-link <?php echo ($page == 'admin-dashboard.php'||$page == 'employee-dashboard.php'||$page == 'deals-dashboard.php'||$page == 'leads-dashboard.php') ? 'active ' : ''; ?></a>" title="Dashboard" data-bs-toggle="tab" data-bs-target="#menu-dashboard" aria-selected="true">
											<span><i class="ti ti-smart-home"></i></span>
											<p>Dashboard</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-application" role="tab" class="nav-link <?php echo ($page == 'chat.php'||$page == 'call.php'||$page == 'voice-call.php'||$page == 'video-call.php'||$page == 'outgoing-call.php'||$page == 'incoming-call.php'||$page == 'call-history.php'||$page == 'calendar.php'
									||$page == 'email.php'||$page == 'todo.php'||$page == 'notes.php'||$page == 'social-feed.php'||$page == 'file-manager.php'||$page == 'kanban-view.php'||$page == 'invoices.php') ? 'active' : ''; ?>" title="Apps" data-bs-toggle="tab" data-bs-target="#menu-application" aria-selected="false">
											<span><i class="ti ti-layout-grid-add"></i></span>
											<p>Applications</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-superadmin" role="tab" class="nav-link <?php echo ($page == 'dashboard.php'||$page == 'companies.php'||$page == 'subscription.php'||$page == 'packages.php'||$page == 'domain.php'||$page == 'purchase-transaction.php') ? 'active' : ''; ?>" title="Apps" data-bs-toggle="tab" data-bs-target="#menu-superadmin" aria-selected="false">
											<span><i class="ti ti-user-star"></i></span>
											<p>Super Admin</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-layout" role="tab" class="nav-link <?php echo ($page == 'layout-horizontal.php'||$page == 'layout-detached.php'||$page == 'layout-modern.php'||$page == 'layout-two-column.php'||$page == 'layout-hovered.php'||$page == 'layout-box.php'||$page == 'layout-horizontal-single.php'
							||$page == 'layout-horizontal-overlay.php'||$page == 'layout-horizontal-box.php'||$page == 'layout-horizontal-sidemenu.php'||$page == 'layout-vertical-transparent.php'||$page == 'layout-without-header.php'||$page == 'layout-rtl.php'||$page == 'layout-dark.php') ? 'active' : ''; ?>" title="Layout" data-bs-toggle="tab" data-bs-target="#menu-layout" aria-selected="false">
											<span><i class="ti ti-layout-board-split"></i></span>
											<p>Layouts</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-project" role="tab" class="nav-link <?php echo ($page == 'clients-grid.php'||$page == 'projects-grid.php'||$page == 'tasks.php'||$page == 'task-board.php') ? 'active ' : ''; ?> " title="Projects" data-bs-toggle="tab" data-bs-target="#menu-project" aria-selected="false">
											<span><i class="ti ti-folder"></i></span>
											<p>Projects</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-crm" role="tab" class="nav-link <?php echo ($page == 'contacts-grid.php'||$page == 'companies-grid.php'||$page == 'deals-grid.php'||$page == 'leads-grid.php'||$page == 'pipeline.php'||$page == 'analytics.php'||$page == 'activity.php') ? ' show active ' : ''; ?>" title="CRM" data-bs-toggle="tab" data-bs-target="#menu-crm" aria-selected="false">
											<span><i class="ti ti-user-shield"></i></span>
											<p>Crm</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-hrm" role="tab" class="nav-link <?php echo ($page == 'employees.php'||$page == 'employees-grid.php'||$page == 'employee-details.php'||$page == 'departments.php'||$page == 'designations.php'||$page == 'policy.php'||$page == 'tickets.php'||$page == 'ticket-details.php'
							||$page == 'holidays.php'||$page == 'leaves.php'||$page == 'leaves-employee.php'||$page == 'leave-settings.php'||$page == 'attendance-admin.php'||$page == 'attendance-employee.php'||$page == 'timesheets.php'||$page == 'schedule-timing.php'||$page == 'overtime.php'
							||$page == 'performance-indicator.php'||$page == 'performance-review.php'||$page == 'performance-appraisal.php'||$page == 'goal-tracking.php'||$page == 'goal-type.php'
							||$page == 'training.php'||$page == 'trainers.php'||$page == 'training-type.php'||$page == 'promotion.php'||$page == 'resignation.php'||$page == 'training-type.php') ? '  active ' : ''; ?>" title="HRM" data-bs-toggle="tab" data-bs-target="#menu-hrm" aria-selected="false">
											<span><i class="ti ti-users"></i></span>
											<p>Hrm</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-finance" role="tab" class="nav-link <?php echo ($page == 'estimates.php'||$page == 'invoices.php'||$page == 'payments.php'||$page == 'expenses.php'||$page == 'provident-fund.php'
							||$page == 'taxes.php'||$page == 'categories.php'||$page == 'budgets.php'||$page == 'budget-expenses.php'||$page == 'budget-revenues.php'||$page == 'employee-salary.php'||$page == 'payslip.php'||$page == 'payroll.php') ? ' show active ' : ''; ?>" title="Finance & Accounts" data-bs-toggle="tab" data-bs-target="#menu-finance" aria-selected="false">
											<span><i class="ti ti-shopping-cart-dollar"></i></span>
											<p>Finance & Accounts</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-administration" role="tab" class="nav-link <?php echo ($page == 'assets-list.php'||$page == 'asset-categories.php'||$page == 'assets-list.php'||$page == 'asset-categories.php'
							||$page == 'knowledgebase.php'||$page == 'activity.php'||$page == 'users.php'||$page == 'roles-permissions.php'||$page == 'expenses-report.php'||$page == 'invoice-report.php'||$page == 'payment-report.php'||$page == 'project-report.php'||$page == 'task-report.php'||$page == 'user-report.php'||$page == 'employee-report.php'||$page == 'payslip-report.php'||$page == 'attendance-report.php'||$page == 'leave-report.php'||$page == 'daily-report.php'
							||$page == 'profile-settings.php'||$page == 'security-settings.php'||$page == 'notification-settings.php'||$page == 'connected-apps.php'
							||$page == 'bussiness-settings.php'||$page == 'seo-settings.php'||$page == 'localization-settings.php'||$page == 'prefixes.php'||$page == 'preferences.php'||$page == 'performance-appraisal.php'||$page == 'language.php'||$page == 'authentication-settings.php'||$page == 'ai-settings.php'
							||$page == 'salary-settings.php'||$page == 'approval-settings.php'||$page == 'invoice-settings.php'||$page == 'leave-type.php'||$page == 'custom-fields.php'||$page == 'email-settings.php'||$page == 'email-template.php'||$page == 'sms-settings.php'||$page == 'sms-template.php'||$page == 'otp-settings.php'||$page == 'gdpr.php'||$page == 'maintenance-mode.php'
							||$page == 'payment-gateways.php'||$page == 'tax-rates.php'||$page == 'currencies.php'||$page == 'custom-css.php'||$page == 'custom-js.php'||$page == 'cronjob.php'||$page == 'storage-settings.php'||$page == 'ban-ip-address.php'||$page == 'backup.php'||$page == 'clear-cache.php'
							) ? ' active' : ''; ?>" title="Administration" data-bs-toggle="tab" data-bs-target="#menu-administration" aria-selected="false">
											<span><i class="ti ti-cash"></i></span>
											<p>Administration</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-content" role="tab" class="nav-link <?php echo ($page == 'pages.php'||$page == 'blogs.php'||$page == 'blog-categories.php'||$page == 'blog-comments.php'||$page == 'blog-tags.php'
							||$page == 'countries.php'||$page == 'states.php'||$page == 'cities.php'||$page == 'testimonials.php'||$page == 'faq.php') ? 'active' : ''; ?>" title="Content" data-bs-toggle="tab" data-bs-target="#menu-content" aria-selected="false">
											<span><i class="ti ti-license"></i></span>
											<p>Contents</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-pages" role="tab" class="nav-link <?php echo ($page == 'starter.php'||$page == 'profile.php'||$page == 'gallery.php'||$page == 'search-result.php'||$page == 'timeline.php'
							||$page == 'pricing.php'||$page == 'coming-soon.php'||$page == 'under-maintenance.php'||$page == 'under-construction.php'||$page == 'api-keys.php'||$page == 'privacy-policy.php'||$page == 'terms-condition.php') ? 'active' : ''; ?>" title="Pages"
											data-bs-toggle="tab" data-bs-target="#menu-pages" aria-selected="false">
											<span><i class="ti ti-page-break"></i></span>
											<p>Pages</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-authentication" role="tab" class="nav-link <?php echo ($page == 'login.php'||$page == 'login-2.php'||$page == 'login-3.php'||$page == 'register.php'||$page == 'register-2.php'
							||$page == 'register-3.php'||$page == 'forgot-password.php'||$page == 'forgot-password-2.php'||$page == 'forgot-password-3.php'||$page == 'reset-password.php'||$page == 'reset-password-2.php'||$page == 'reset-password-3.php'
							||$page == 'email-verification.php'||$page == 'email-verification-2.php'||$page == 'email-verification-3.php'||$page == 'two-step-verification.php'||$page == 'two-step-verification-2.php'||$page == 'two-step-verification-3.php'||$page == 'lock-screen.php'||
							$page == 'error-404.php'||$page == 'error-500.php'
							) ? '  active' : ''; ?>" title="Authentication" data-bs-toggle="tab" data-bs-target="#menu-authentication" aria-selected="false">
											<span><i class="ti ti-lock-check"></i></span>
											<p>Authentication</p>
										</a>
									</div>
									<div class="col-6">
										<a href="#menu-ui-elements" role="tab" class="nav-link <?php echo ($page == 'ui-alerts.php' || $page == 'ui-accordion.php' || $page == 'ui-avatar.php' || $page == 'ui-badges.php' || $page == 'ui-borders.php'
                                                                                                        || $page == 'ui-buttons.php' || $page == 'ui-buttons-group.php' || $page == 'ui-breadcrumb.php' || $page == 'ui-cards.php' || $page == 'ui-carousel.php'
                                                                                                        || $page == 'ui-colors.php' || $page == 'ui-dropdowns.php' || $page == 'ui-grid.php' || $page == 'ui-images.php' || $page == 'ui-lightbox.php'
                                                                                                        || $page == 'ui-media.php' || $page == 'ui-modals.php' || $page == 'ui-offcanvas.php' || $page == 'ui-pagination.php' || $page == 'ui-popovers.php'
                                                                                                        || $page == 'ui-progress.php' || $page == 'ui-placeholders.php'  || $page == 'ui-spinner.php'
                                                                                                        || $page == 'ui-sweetalerts.php' || $page == 'ui-nav-tabs.php' || $page == 'ui-toasts.php' || $page == 'ui-tooltips.php'
                                                                                                        || $page == 'ui-typography.php' || $page == 'ui-video.php'||$page == 'ui-ribbon.php' || $page == 'ui-clipboard.php' || $page == 'ui-drag-drop.php' || $page == 'ui-rangeslider.php' || $page == 'ui-rating.php' || $page == 'ui-text-editor.php' || $page == 'ui-counter.php' || $page == 'ui-scrollbar.php' || $page == 'ui-stickynote.php' || $page == 'ui-timeline.php'
																										||$page == 'form-basic-inputs.php' || $page == 'form-checkbox-radios.php' || $page == 'form-input-groups.php' || $page == 'form-grid-gutters.php' || $page == 'form-select.php' || $page == 'form-mask.php' || $page == 'form-fileupload.php' || $page == 'form-horizontal.php' || $page == 'form-vertical.php' || $page == 'form-floating-labels.php' || $page == 'form-validation.php' || $page == 'form-wizard.php' || $page == 'form-select2.php'
																										||$page == 'form-horizontal.php' || $page == 'form-vertical.php' || $page == 'form-floating-labels.php'||$page == 'tables-basic.php' || $page == 'data-tables.php'
																										||$page == 'chart-apex.php' || $page == 'chart-js.php' || $page == 'chart-morris.php' || $page == 'chart-flot.php' || $page == 'chart-peity.php' || $page == 'chart-c3.php'||$page == 'icon-fontawesome.php' || $page == 'icon-feather.php' || $page == 'icon-ionic.php' || $page == 'icon-material.php' || $page == 'icon-pe7.php' || $page == 'icon-simpleline.php' || $page == 'icon-themify.php' || $page == 'icon-weather.php' || $page == 'icon-typicon.php' || $page == 'icon-flag.php'
																										||$page == 'maps-vector.php'||$page == 'maps-leaflet.php'

                                                                                                )
                                                                                                        ? ' active'
                                                                                                        : ''; ?>" title="UI Elements" data-bs-toggle="tab" data-bs-target="#menu-ui-elements" aria-selected="false">
											<span><i class="ti ti-ux-circle"></i></span>
											<p>Basic UI</p>
										</a>
									</div>
								</div>
							</div>
							<div class="tab-content">
								<div class="tab-pane fade <?php echo ($page == 'admin-dashboard.php'||$page == 'employee-dashboard.php'||$page == 'deals-dashboard.php'||$page == 'leads-dashboard.php') ? ' show active ' : ''; ?></div>" id="menu-dashboard">
									<ul class="stack-submenu">
										<li><a href="admin-dashboard.php" class="<?php echo ($page == 'admin-dashboard.php') ? 'active' : ''; ?>">Admin Dashboard</a></li>
										<li><a href="employee-dashboard.php" class="<?php echo ($page == 'employee-dashboard.php') ? 'active' : ''; ?>">Employee Dashboard</a></li>
										<li><a href="deals-dashboard.php" class="<?php echo ($page == 'deals-dashboard.php') ? 'active' : ''; ?>">Deals Dashboard</a></li>
										<li><a href="leads-dashboard.php" class="<?php echo ($page == 'leads-dashboard.php') ? 'active' : ''; ?>">Leads Dashboard</a></li>
									</ul>
								</div>
								<div class="tab-pane fade <?php echo ($page == 'dashboard.php'||$page == 'companies.php'||$page == 'subscription.php'||$page == 'packages.php'||$page == 'domain.php'||$page == 'purchase-transaction.php') ? ' show active' : ''; ?></div>" id="menu-superadmin">
									<ul class="stack-submenu">
										<li><a href="dashboard.php" class="<?php echo ($page == 'dashboard.php') ? 'active' : ''; ?>">Dashboard</a></li>
										<li><a href="companies.php" class="<?php echo ($page == 'companies.php') ? 'active' : ''; ?>">Companies</a></li>
										<li><a href="subscription.php" class="<?php echo ($page == 'subscription.php') ? 'active' : ''; ?>">Subscriptions</a></li>
										<li><a href="packages.php" class="<?php echo ($page == 'packages.php') ? 'active' : ''; ?>">Packages</a></li>
										<li><a href="domain.php" class="<?php echo ($page == 'domain.php') ? 'active' : ''; ?>">Domain</a></li>
										<li><a href="purchase-transaction.php" class="<?php echo ($page == 'purchase-transaction.php') ? 'active' : ''; ?>">Purchase Transaction</a></li>
									</ul>
								</div>
								<div class="tab-pane fade <?php echo ($page == 'chat.php'||$page == 'call.php'||$page == 'voice-call.php'||$page == 'video-call.php'||$page == 'outgoing-call.php'||$page == 'incoming-call.php'||$page == 'call-history.php'||$page == 'calendar.php'
									||$page == 'email.php'||$page == 'todo.php'||$page == 'notes.php'||$page == 'social-feed.php'||$page == 'file-manager.php'||$page == 'kanban-view.php'||$page == 'invoices.php') ? ' show active ' : ''; ?>" id="menu-application">
									<ul class="stack-submenu">
										<li><a href="chat.php">Chat</a></li>
										<li class="submenu submenu-two">
											<a href="call.php">Calls<span
													class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="voice-call.php" class="<?php echo ($page == 'voice-call.php') ? 'active' : ''; ?>">Voice Call</a></li>
												<li><a href="video-call.php" class="<?php echo ($page == 'video-call.php') ? 'active' : ''; ?>">Video Call</a></li>
												<li><a href="outgoing-call.php" class="<?php echo ($page == 'outgoing-call.php') ? 'active' : ''; ?>">Outgoing Call</a></li>
												<li><a href="incoming-call.php" class="<?php echo ($page == 'incoming-call.php') ? 'active' : ''; ?>">Incoming Call</a></li>
												<li><a href="call-history.php" class="<?php echo ($page == 'call-history.php') ? 'active' : ''; ?>">Call History</a></li>
											</ul>
										</li>
										<li><a href="calendar.php" class="<?php echo ($page == 'calendar.php') ? 'active' : ''; ?>">Calendar</a></li>
										<li><a href="email.php" class="<?php echo ($page == 'email.php') ? 'active' : ''; ?>">Email</a></li>
										<li><a href="todo.php" class="<?php echo ($page == 'todo.php') ? 'active' : ''; ?>">To Do</a></li>
										<li><a href="notes.php" class="<?php echo ($page == 'notes.php') ? 'active' : ''; ?>">Notes</a></li>
										<li><a href="social-feed.php" class="<?php echo ($page == 'social-feed.php') ? 'active' : ''; ?>">Social Feed</a></li>
										<li><a href="file-manager.php" class="<?php echo ($page == 'file-manager.php') ? 'active' : ''; ?>">File Manager</a></li>
										<li><a href="kanban-view.php" class="<?php echo ($page == 'kanban-view.php') ? 'active' : ''; ?>">Kanban</a></li>
										<li><a href="invoices.php" class="<?php echo ($page == 'invoices.php') ? 'active' : ''; ?>">Invoices</a></li>
									</ul>
								</div>
								<div class="tab-pane fade <?php echo ($page == 'layout-horizontal.php'||$page == 'layout-detached.php'||$page == 'layout-modern.php'||$page == 'layout-two-column.php'||$page == 'layout-hovered.php'||$page == 'layout-box.php'||$page == 'layout-horizontal-single.php'
							||$page == 'layout-horizontal-overlay.php'||$page == 'layout-horizontal-box.php'||$page == 'layout-horizontal-sidemenu.php'||$page == 'layout-vertical-transparent.php'||$page == 'layout-without-header.php'||$page == 'layout-rtl.php'||$page == 'layout-dark.php') ? ' show active' : ''; ?>" id="menu-layout">
									<ul class="stack-submenu">
										<li><a href="layout-horizontal.php" class="<?php echo ($page == 'layout-horizontal.php') ? 'active' : ''; ?>">Horizontal</a></li>
										<li><a href="layout-detached.php" class="<?php echo ($page == 'layout-detached.php') ? 'active' : ''; ?>">Detached</a></li>
										<li><a href="layout-modern.php" class="<?php echo ($page == 'layout-modern.php') ? 'active' : ''; ?>">Modern</a></li>
										<li><a href="layout-two-column.php" class="<?php echo ($page == 'layout-two-column.php') ? 'active' : ''; ?>">Two Column</a></li>
										<li><a href="layout-hovered.php" class="<?php echo ($page == 'layout-hovered.php') ? 'active' : ''; ?>">Hovered</a></li>
										<li><a href="layout-box.php" class="<?php echo ($page == 'layout-box.php') ? 'active' : ''; ?>">Boxed</a></li>
										<li><a href="layout-horizontal-single.php" class="<?php echo ($page == 'layout-horizontal-single.php') ? 'active' : ''; ?>">Horizontal Single</a></li>
										<li><a href="layout-horizontal-overlay.php" class="<?php echo ($page == 'layout-horizontal-overlay.php') ? 'active' : ''; ?>">Horizontal Overlay</a></li>
										<li><a href="layout-horizontal-box.php" class="<?php echo ($page == 'layout-horizontal-box.php') ? 'active' : ''; ?>">Horizontal Box</a></li>
										<li><a href="layout-horizontal-sidemenu.php" class="<?php echo ($page == 'layout-horizontal-sidemenu.php') ? 'active' : ''; ?>">Menu Aside</a></li>
										<li><a href="layout-vertical-transparent.php" class="<?php echo ($page == 'layout-vertical-transparent.php') ? 'active' : ''; ?>">Transparent</a></li>
										<li><a href="layout-without-header.php" class="<?php echo ($page == 'layout-without-header.php') ? 'active' : ''; ?>">Without Header</a></li>
										<li><a href="layout-rtl.php" class="<?php echo ($page == 'layout-rtl.php') ? 'active' : ''; ?>">RTL</a></li>
										<li><a href="layout-dark.php" class="<?php echo ($page == 'layout-dark.php') ? 'active' : ''; ?>">Dark</a></li>
									</ul>
								</div>
								<div class="tab-pane fade <?php echo ($page == 'clients-grid.php'||$page == 'projects-grid.php'||$page == 'tasks.php'||$page == 'task-board.php') ? 'show active ' : ''; ?>" id="menu-project">
									<ul class="stack-submenu">
										<li><a href="clients-grid.php" class="<?php echo ($page == 'clients-grid.php') ? 'active' : ''; ?>"><span>Clients</span></a></li>
										<li class="submenu">
											<a href="javascript:void(0);"class=" <?php echo ($page == 'projects-grid.php'||$page == 'tasks.php'||$page == 'task-board.php') ? 'active subdrop' : ''; ?>"><span>Projects</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="projects-grid.php" class="<?php echo ($page == 'projects-grid.php') ? 'active' : ''; ?>">Projects</a></li>
												<li><a href="tasks.php" class="<?php echo ($page == 'tasks.php') ? 'active' : ''; ?>">Tasks</a></li>
												<li><a href="task-board.php" class="<?php echo ($page == 'task-board.php') ? 'active' : ''; ?>">Task Board</a></li>
											</ul>
										</li>	
									</ul>
								</div>
								<div class="tab-pane fade <?php echo ($page == 'contacts-grid.php'||$page == 'companies-grid.php'||$page == 'deals-grid.php'||$page == 'leads-grid.php'||$page == 'pipeline.php'||$page == 'analytics.php'||$page == 'activity.php') ? ' show active ' : ''; ?>" id="menu-crm">
									<ul class="stack-submenu">
										<li><a href="contacts-grid.php" class="<?php echo ($page == 'contacts-grid.php') ? 'active' : ''; ?>"><span>Contacts</span></a></li>
										<li><a href="companies-grid.php" class="<?php echo ($page == 'companies-grid.php') ? 'active' : ''; ?>"><span>Companies</span></a></li>
										<li><a href="deals-grid.php" class="<?php echo ($page == 'deals-grid.php') ? 'active' : ''; ?>"><span>Deals</span></a></li>
										<li><a href="leads-grid.php" class="<?php echo ($page == 'leads-grid.php') ? 'active' : ''; ?>"><span>Leads</span></a></li>
										<li><a href="pipeline.php" class="<?php echo ($page == 'pipeline.php') ? 'active' : ''; ?>"><span>Pipeline</span></a></li>
										<li><a href="analytics.php" class="<?php echo ($page == 'analytics.php') ? 'active' : ''; ?>"><span>Analytics</span></a></li>
										<li><a href="activity.php" class="<?php echo ($page == 'activity.php') ? 'active' : ''; ?>"><span>Activities</span></a></li>
									</ul>
								</div>
								<div class="tab-pane fade <?php echo ($page == 'employees.php'||$page == 'employees-grid.php'||$page == 'employee-details.php'||$page == 'departments.php'||$page == 'designations.php'||$page == 'policy.php'||$page == 'tickets.php'||$page == 'ticket-details.php'
							||$page == 'holidays.php'||$page == 'leaves.php'||$page == 'leaves-employee.php'||$page == 'leave-settings.php'||$page == 'attendance-admin.php'||$page == 'attendance-employee.php'||$page == 'timesheets.php'||$page == 'schedule-timing.php'||$page == 'overtime.php'
							||$page == 'performance-indicator.php'||$page == 'performance-review.php'||$page == 'performance-appraisal.php'||$page == 'goal-tracking.php'||$page == 'goal-type.php'
							||$page == 'training.php'||$page == 'trainers.php'||$page == 'training-type.php'||$page == 'promotion.php'||$page == 'resignation.php'||$page == 'training-type.php') ? ' show active ' : ''; ?>" id="menu-hrm">
									<ul class="stack-submenu">
										<li class="submenu">
											<a href="javascript:void(0);" class=" <?php echo ($page == 'employees.php'||$page == 'employees-grid.php'||$page == 'employee-details.php'||$page == 'departments.php'||$page == 'designations.php'||$page == 'policy.php') ? 'active subdrop' : ''; ?>"><span>Employees</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="employees.php" class="<?php echo ($page == 'employees.php') ? 'active' : ''; ?>">Employee Lists</a></li>
												<li><a href="employees-grid.php" class="<?php echo ($page == 'employees-grid.php') ? 'active' : ''; ?>">Employee Grid</a></li>
												<li><a href="employee-details.php" class="<?php echo ($page == 'employee-details.php') ? 'active' : ''; ?>">Employee Details</a></li>
												<li><a href="departments.php" class="<?php echo ($page == 'departments.php') ? 'active' : ''; ?>">Departments</a></li>
												<li><a href="designations.php" class="<?php echo ($page == 'designations.php') ? 'active' : ''; ?>">Designations</a></li>
												<li><a href="policy.php" class="<?php echo ($page == 'policy.php') ? 'active' : ''; ?>">Policies</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class=" <?php echo ($page == 'tickets.php'||$page == 'ticket-details.php') ? 'active subdrop' : ''; ?>"><span>Tickets</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="tickets.php" class="<?php echo ($page == 'tickets.php') ? 'active' : ''; ?>">Tickets</a></li>
												<li><a href="ticket-details.php" class="<?php echo ($page == 'ticket-details.php') ? 'active' : ''; ?>">Ticket Details</a></li>
											</ul>
										</li>
										<li><a href="holidays.php" class="<?php echo ($page == 'holidays.php') ? 'active' : ''; ?>"><span>Holidays</span></a></li>
										<li class="submenu">
											<a href="javascript:void(0);"class=" <?php echo ($page == 'leaves.php'||$page == 'leaves-employee.php'||$page == 'leave-settings.php'||$page == 'attendance-admin.php'||$page == 'attendance-employee.php'||$page == 'timesheets.php'||$page == 'schedule-timing.php'||$page == 'overtime.php') ? 'active subdrop' : ''; ?>"><span>Attendance</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li class="submenu submenu-two">
													<a href="javascript:void(0);"class=" <?php echo ($page == 'leaves.php'||$page == 'leaves-employee.php'||$page == 'leave-settings.php') ? 'active subdrop' : ''; ?>">Leaves<span class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="leaves.php" class="<?php echo ($page == 'leaves.php') ? 'active' : ''; ?>">Leaves (Admin)</a></li>
														<li><a href="leaves-employee.php" class="<?php echo ($page == 'leaves-employee.php') ? 'active' : ''; ?>">Leave (Employee)</a></li>
														<li><a href="leave-settings.php" class="<?php echo ($page == 'leave-settings.php') ? 'active' : ''; ?>">Leave Settings</a></li>												
													</ul>												
												</li>
												<li><a href="attendance-admin.php" class="<?php echo ($page == 'attendance-admin.php') ? 'active' : ''; ?>">Attendance (Admin)</a></li>
												<li><a href="attendance-employee.php" class="<?php echo ($page == 'attendance-employee.php') ? 'active' : ''; ?>">Attendance (Employee)</a></li>
												<li><a href="timesheets.php" class="<?php echo ($page == 'timesheets.php') ? 'active' : ''; ?>">Timesheets</a></li>
												<li><a href="schedule-timing.php" class="<?php echo ($page == 'schedule-timing.php') ? 'active' : ''; ?>">Shift & Schedule</a></li>
												<li><a href="overtime.php" class="<?php echo ($page == 'overtime.php') ? 'active' : ''; ?>">Overtime</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class=" <?php echo ($page == 'performance-indicator.php'||$page == 'performance-review.php'||$page == 'performance-appraisal.php'||$page == 'goal-tracking.php'||$page == 'goal-type.php') ? 'active subdrop' : ''; ?>"><span>Performance</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="performance-indicator.php" class="<?php echo ($page == 'performance-indicator.php') ? 'active' : ''; ?>">Performance Indicator</a></li>
												<li><a href="performance-review.php" class="<?php echo ($page == 'performance-review.php') ? 'active' : ''; ?>">Performance Review</a></li>
												<li><a href="performance-appraisal.php" class="<?php echo ($page == 'performance-appraisal.php') ? 'active' : ''; ?>">Performance Appraisal</a></li>
												<li><a href="goal-tracking.php" class="<?php echo ($page == 'goal-tracking.php') ? 'active' : ''; ?>">Goal List</a></li>
												<li><a href="goal-type.php" class="<?php echo ($page == 'goal-type.php') ? 'active' : ''; ?>">Goal Type</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class=" <?php echo ($page == 'training.php'||$page == 'trainers.php'||$page == 'training-type.php') ? 'active subdrop' : ''; ?>"><span>Training</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="training.php" class="<?php echo ($page == 'training.php') ? 'active' : ''; ?>">Training List</a></li>
												<li><a href="trainers.php" class="<?php echo ($page == 'trainers.php') ? 'active' : ''; ?>">Trainers</a></li>
												<li><a href="training-type.php" class="<?php echo ($page == 'training-type.php') ? 'active' : ''; ?>">Training Type</a></li>
											</ul>
										</li>
										<li><a href="promotion.php" class="<?php echo ($page == 'promotion.php') ? 'active' : ''; ?>"><span>Promotion</span></a></li>
										<li><a href="resignation.php" class="<?php echo ($page == 'resignation.php') ? 'active' : ''; ?>"><span>Resignation</span></a></li>
										<li><a href="termination.php" class="<?php echo ($page == 'termination.php') ? 'active' : ''; ?>"><span>Termination</span></a></li>
									</ul>
								</div>
								<div class="tab-pane fade <?php echo ($page == 'estimates.php'||$page == 'invoices.php'||$page == 'payments.php'||$page == 'expenses.php'||$page == 'provident-fund.php'
							||$page == 'taxes.php'||$page == 'categories.php'||$page == 'budgets.php'||$page == 'budget-expenses.php'||$page == 'budget-revenues.php'||$page == 'employee-salary.php'||$page == 'payslip.php'||$page == 'payroll.php') ? ' show active ' : ''; ?>" id="menu-finance">
									<ul class="stack-submenu">
										<li class="submenu">
											<a href="javascript:void(0);"class=" <?php echo ($page == 'estimates.php'||$page == 'invoices.php'||$page == 'payments.php'||$page == 'expenses.php'||$page == 'provident-fund.php'||$page == 'taxes.php') ? 'active subdrop' : ''; ?>"><span>Sales</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="estimates.php" class="<?php echo ($page == 'estimates.php') ? 'active' : ''; ?>">Estimates</a></li>
												<li><a href="invoices.php" class="<?php echo ($page == 'invoices.php') ? 'active' : ''; ?>">Invoices</a></li>
												<li><a href="payments.php" class="<?php echo ($page == 'payments.php') ? 'active' : ''; ?>">Payments</a></li>
												<li><a href="expenses.php" class="<?php echo ($page == 'expenses.php') ? 'active' : ''; ?>">Expenses</a></li>
												<li><a href="provident-fund.php" class="<?php echo ($page == 'provident-fund.php') ? 'active' : ''; ?>">Provident Fund</a></li>
												<li><a href="taxes.php" class="<?php echo ($page == 'taxes.php') ? 'active' : ''; ?>">Taxes</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class=" <?php echo ($page == 'categories.php'||$page == 'budgets.php'||$page == 'budget-expenses.php'||$page == 'budget-revenues.php') ? 'active subdrop' : ''; ?>"><span>Accounting</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="categories.php" class="<?php echo ($page == 'categories.php') ? 'active' : ''; ?>">Categories</a></li>
												<li><a href="budgets.php" class="<?php echo ($page == 'budgets.php') ? 'active' : ''; ?>">Budgets</a></li>
												<li><a href="budget-expenses.php" class="<?php echo ($page == 'budget-expenses.php') ? 'active' : ''; ?>">Budget Expenses</a></li>
												<li><a href="budget-revenues.php" class="<?php echo ($page == 'budget-revenues.php') ? 'active' : ''; ?>">Budget Revenues</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'employee-salary.php'||$page == 'payslip.php'||$page == 'payroll.php') ? 'active subdrop' : ''; ?>"><span>Payroll</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="employee-salary.php" class="<?php echo ($page == 'employee-salary.php') ? 'active' : ''; ?>">Employee Salary</a></li>
												<li><a href="payslip.php" class="<?php echo ($page == 'payslip.php') ? 'active' : ''; ?>">Payslip</a></li>
												<li><a href="payroll.php" class="<?php echo ($page == 'payroll.php') ? 'active' : ''; ?>">Payroll Items</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="tab-pane fade <?php echo ($page == 'assets-list.php'||$page == 'asset-categories.php'||$page == 'assets-list.php'||$page == 'asset-categories.php'
							||$page == 'knowledgebase.php'||$page == 'activity.php'||$page == 'users.php'||$page == 'roles-permissions.php'||$page == 'expenses-report.php'||$page == 'invoice-report.php'||$page == 'payment-report.php'||$page == 'project-report.php'||$page == 'task-report.php'||$page == 'user-report.php'||$page == 'employee-report.php'||$page == 'payslip-report.php'||$page == 'attendance-report.php'||$page == 'leave-report.php'||$page == 'daily-report.php'
							||$page == 'profile-settings.php'||$page == 'security-settings.php'||$page == 'notification-settings.php'||$page == 'connected-apps.php'
							||$page == 'bussiness-settings.php'||$page == 'seo-settings.php'||$page == 'localization-settings.php'||$page == 'prefixes.php'||$page == 'preferences.php'||$page == 'performance-appraisal.php'||$page == 'language.php'||$page == 'authentication-settings.php'||$page == 'ai-settings.php'
							||$page == 'salary-settings.php'||$page == 'approval-settings.php'||$page == 'invoice-settings.php'||$page == 'leave-type.php'||$page == 'custom-fields.php'||$page == 'email-settings.php'||$page == 'email-template.php'||$page == 'sms-settings.php'||$page == 'sms-template.php'||$page == 'otp-settings.php'||$page == 'gdpr.php'||$page == 'maintenance-mode.php'
							||$page == 'payment-gateways.php'||$page == 'tax-rates.php'||$page == 'currencies.php'||$page == 'custom-css.php'||$page == 'custom-js.php'||$page == 'cronjob.php'||$page == 'storage-settings.php'||$page == 'ban-ip-address.php'||$page == 'backup.php'||$page == 'clear-cache.php'
							) ? 'show active' : ''; ?>" id="menu-administration">
									<ul class="stack-submenu">
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'assets-list.php'||$page == 'asset-categories.php') ? 'active subdrop' : ''; ?>"><span>Assets</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="assets.php" class="<?php echo ($page == 'assets.php') ? 'active' : ''; ?>">Assets</a></li>
												<li><a href="asset-categories.php" class="<?php echo ($page == 'asset-categories.php') ? 'active' : ''; ?>">Asset Categories</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'knowledgebase.php'||$page == 'activity.php') ? 'active subdrop' : ''; ?>"><span>Help & Supports</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="knowledgebase.php" class="<?php echo ($page == 'knowledgebase.php') ? 'active' : ''; ?>">Knowledge Base</a></li>
												<li><a href="activity.php" class="<?php echo ($page == 'activity.php') ? 'active' : ''; ?>">Activities</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'users.php'||$page == 'roles-permissions.php') ? 'active subdrop' : ''; ?>"><span>User Management</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="users.php" class="<?php echo ($page == 'users.php') ? 'active' : ''; ?>">Users</a></li>
												<li><a href="roles-permissions.php" class="<?php echo ($page == 'roles-permissions.php') ? 'active' : ''; ?>">Roles & Permissions</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'expenses-report.php'||$page == 'invoice-report.php'||$page == 'payment-report.php'||$page == 'project-report.php'||$page == 'task-report.php'||$page == 'user-report.php'||$page == 'employee-report.php'||$page == 'payslip-report.php'||$page == 'attendance-report.php'||$page == 'leave-report.php'||$page == 'daily-report.php') ? 'active subdrop' : ''; ?>"><span>Reports</span>
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
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'profile-settings.php'||$page == 'security-settings.php'||$page == 'notification-settings.php'||$page == 'connected-apps.php') ? 'active subdrop' : ''; ?>">
												General Settings
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="profile-settings.php" class="<?php echo ($page == 'profile-settings.php') ? 'active' : ''; ?>">Profile</a></li>
												<li><a href="security-settings.php" class="<?php echo ($page == 'security-settings.php') ? 'active' : ''; ?>">Security</a></li>
												<li><a href="notification-settings.php" class="<?php echo ($page == 'notification-settings.php') ? 'active' : ''; ?>">Notifications</a></li>
												<li><a href="connected-apps.php" class="<?php echo ($page == 'connected-apps.php') ? 'active' : ''; ?>">Connected Apps</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'bussiness-settings.php'||$page == 'seo-settings.php'||$page == 'localization-settings.php'||$page == 'prefixes.php'||$page == 'preferences.php'||$page == 'performance-appraisal.php'||$page == 'language.php'||$page == 'authentication-settings.php'||$page == 'ai-settings.php') ? 'active subdrop' : ''; ?>">
												Website Settings
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="bussiness-settings.php" class="<?php echo ($page == 'bussiness-settings.php') ? 'active' : ''; ?>">Business Settings</a></li>
												<li><a href="seo-settings.php" class="<?php echo ($page == 'seo-settings.php') ? 'active' : ''; ?>">SEO Settings</a></li>
												<li><a href="localization-settings.php" class="<?php echo ($page == 'localization-settings.php') ? 'active' : ''; ?>">Localization</a></li>
												<li><a href="prefixes.php" class="<?php echo ($page == 'prefixes.php') ? 'active' : ''; ?>">Prefixes</a></li>
												<li><a href="preferences.php" class="<?php echo ($page == 'preferences.php') ? 'active' : ''; ?>">Preferences</a></li>
												<li><a href="performance-appraisal.php" class="<?php echo ($page == 'performance-appraisal.php') ? 'active' : ''; ?>">Appearance</a></li>
												<li><a href="language.php" class="<?php echo ($page == 'language.php') ? 'active' : ''; ?>">Language</a></li>
												<li><a href="authentication-settings.php" class="<?php echo ($page == 'authentication-settings.php') ? 'active' : ''; ?>">Authentication</a></li>
												<li><a href="ai-settings.php" class="<?php echo ($page == 'ai-settings.php') ? 'active' : ''; ?>">AI Settings</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'salary-settings.php'||$page == 'approval-settings.php'||$page == 'invoice-settings.php'||$page == 'leave-type.php'||$page == 'custom-fields.php') ? 'active subdrop' : ''; ?>">App Settings<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="salary-settings.php" class="<?php echo ($page == 'salary-settings.php') ? 'active' : ''; ?>">Salary Settings</a></li>
												<li><a href="approval-settings.php" class="<?php echo ($page == 'approval-settings.php') ? 'active' : ''; ?>">Approval Settings</a></li>
												<li><a href="invoice-settings.php" class="<?php echo ($page == 'invoice-settings.php') ? 'active' : ''; ?>">Invoice Settings</a></li>
												<li><a href="leave-type.php" class="<?php echo ($page == 'leave-type.php') ? 'active' : ''; ?>">Leave Type</a></li>
												<li><a href="custom-fields.php" class="<?php echo ($page == 'custom-fields.php') ? 'active' : ''; ?>">Custom Fields</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'email-settings.php'||$page == 'email-template.php'||$page == 'sms-settings.php'||$page == 'sms-template.php'||$page == 'otp-settings.php'||$page == 'gdpr.php'||$page == 'maintenance-mode.php') ? 'active subdrop' : ''; ?>">
												System Settings
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="email-settings.php" class="<?php echo ($page == 'email-settings.php') ? 'active' : ''; ?>">Email Settings</a></li>
												<li><a href="email-template.php" class="<?php echo ($page == 'email-template.php') ? 'active' : ''; ?>">Email Templates</a></li>
												<li><a href="sms-settings.php" class="<?php echo ($page == 'sms-settings.php') ? 'active' : ''; ?>">SMS Settings</a></li>
												<li><a href="sms-template.php" class="<?php echo ($page == 'sms-template.php') ? 'active' : ''; ?>">SMS Templates</a></li>
												<li><a href="otp-settings.php" class="<?php echo ($page == 'otp-settings.php') ? 'active' : ''; ?>">OTP</a></li>
												<li><a href="gdpr.php" class="<?php echo ($page == 'gdpr.php') ? 'active' : ''; ?>">GDPR Cookies</a></li>
												<li><a href="maintenance-mode.php" class="<?php echo ($page == 'maintenance-mode.php') ? 'active' : ''; ?>">Maintenance Mode</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'payment-gateways.php'||$page == 'tax-rates.php'||$page == 'currencies.php') ? 'active subdrop' : ''; ?>">
												Financial Settings
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="payment-gateways.php" class="<?php echo ($page == 'payment-gateways.php') ? 'active' : ''; ?>">Payment Gateways</a></li>
												<li><a href="tax-rates.php" class="<?php echo ($page == 'tax-rates.php') ? 'active' : ''; ?>">Tax Rate</a></li>
												<li><a href="currencies.php" class="<?php echo ($page == 'currencies.php') ? 'active' : ''; ?>">Currencies</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'custom-css.php'||$page == 'custom-js.php'||$page == 'cronjob.php'||$page == 'storage-settings.php'||$page == 'ban-ip-address.php'||$page == 'backup.php'||$page == 'clear-cache.php') ? 'active subdrop' : ''; ?>">Other Settings<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="custom-css.php" class="<?php echo ($page == 'custom-css.php') ? 'active' : ''; ?>">Custom CSS</a></li>
												<li><a href="custom-js.php" class="<?php echo ($page == 'custom-js.php') ? 'active' : ''; ?>">Custom JS</a></li>
												<li><a href="cronjob.php" class="<?php echo ($page == 'cronjob.php') ? 'active' : ''; ?>">Cronjob</a></li>
												<li><a href="storage-settings.php" class="<?php echo ($page == 'storage-settings.php') ? 'active' : ''; ?>">Storage</a></li>
												<li><a href="ban-ip-address.php" class="<?php echo ($page == 'ban-ip-address.php') ? 'active' : ''; ?>">Ban IP Address</a></li>
												<li><a href="backup.php" class="<?php echo ($page == 'backup.php') ? 'active' : ''; ?>">Backup</a></li>
												<li><a href="clear-cache.php" class="<?php echo ($page == 'clear-cache.php') ? 'active' : ''; ?>">Clear Cache</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="tab-pane fade <?php echo ($page == 'pages.php'||$page == 'blogs.php'||$page == 'blog-categories.php'||$page == 'blog-comments.php'||$page == 'blog-tags.php'
							||$page == 'countries.php'||$page == 'states.php'||$page == 'cities.php'||$page == 'testimonials.php'||$page == 'faq.php') ? ' show active' : ''; ?>" id="menu-content">
									<ul class="stack-submenu">
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'blogs.php'||$page == 'blog-categories.php'||$page == 'blog-comments.php'||$page == 'blog-tags.php') ? 'active subdrop' : ''; ?>">Blogs<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="blogs.php" class="<?php echo ($page == 'blogs.php') ? 'active' : ''; ?>">All Blogs</a></li>
												<li><a href="blog-categories.php" class="<?php echo ($page == 'blog-categories.php') ? 'active' : ''; ?>">Categories</a></li>
												<li><a href="blog-comments.php" class="<?php echo ($page == 'blog-comments.php') ? 'active' : ''; ?>">Comments</a></li>
												<li><a href="blog-tags.php" class="<?php echo ($page == 'blog-tags.php') ? 'active' : ''; ?>">Tags</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Locations<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="countries.php" class="<?php echo ($page == 'countries.php') ? 'active' : ''; ?>">Countries</a></li>
												<li><a href="states.php" class="<?php echo ($page == 'states.php') ? 'active' : ''; ?>">States</a></li>
												<li><a href="cities.php" class="<?php echo ($page == 'cities.php') ? 'active' : ''; ?>">Cities</a></li>
											</ul>
										</li>
										<li><a href="testimonials.php" class="<?php echo ($page == 'testimonials.php') ? 'active' : ''; ?>">Testimonials</a></li>
										<li><a href="faq.php" class="<?php echo ($page == 'faq.php') ? 'active' : ''; ?>">FAQ’S</a></li>
									</ul>
								</div>
								<div class="tab-pane fade <?php echo ($page == 'starter.php'||$page == 'profile.php'||$page == 'gallery.php'||$page == 'search-result.php'||$page == 'timeline.php'
							||$page == 'pricing.php'||$page == 'coming-soon.php'||$page == 'under-maintenance.php'||$page == 'under-construction.php'||$page == 'api-keys.php'||$page == 'privacy-policy.php'||$page == 'terms-condition.php') ? ' show active' : ''; ?>" id="menu-pages">
									<ul class="stack-submenu">
										<li><a href="starter.php" class="<?php echo ($page == 'starter.php') ? 'active' : ''; ?>">Starter</a></li>
										<li><a href="profile.php" class="<?php echo ($page == 'profile.php') ? 'active' : ''; ?>">Profile</a></li>
										<li><a href="profile-settings.php" class="<?php echo ($page == 'profile-settings.php') ? 'active' : ''; ?>">Profile Settings</a></li>
										<li><a href="gallery.php" class="<?php echo ($page == 'gallery.php') ? 'active' : ''; ?>">Gallery</a></li>
										<li><a href="search-result.php" class="<?php echo ($page == 'search-result.php') ? 'active' : ''; ?>">Search Results</a></li>
										<li><a href="timeline.php" class="<?php echo ($page == 'timeline.php') ? 'active' : ''; ?>">Timeline</a></li>
										<li><a href="pricing.php" class="<?php echo ($page == 'pricing.php') ? 'active' : ''; ?>">Pricing</a></li>
										<li><a href="coming-soon.php" class="<?php echo ($page == 'coming-soon.php') ? 'active' : ''; ?>">Coming Soon</a></li>
										<li><a href="under-maintenance.php" class="<?php echo ($page == 'under-maintenance.php') ? 'active' : ''; ?>">Under Maintenance</a></li>
										<li><a href="under-construction.php" class="<?php echo ($page == 'under-construction.php') ? 'active' : ''; ?>">Under Construction</a></li>
										<li><a href="api-keys.php" class="<?php echo ($page == 'api-keys.php') ? 'active' : ''; ?>">API Keys</a></li>
										<li><a href="privacy-policy.php" class="<?php echo ($page == 'privacy-policy.php') ? 'active' : ''; ?>">Privacy Policy</a></li>
										<li><a href="terms-condition.php" class="<?php echo ($page == 'terms-condition.php') ? 'active' : ''; ?>">Terms & Conditions</a></li>
									</ul>
								</div>
								<div class="tab-pane fade <?php echo ($page == 'login.php'||$page == 'login-2.php'||$page == 'login-3.php'||$page == 'register.php'||$page == 'register-2.php'
							||$page == 'register-3.php'||$page == 'forgot-password.php'||$page == 'forgot-password-2.php'||$page == 'forgot-password-3.php'||$page == 'reset-password.php'||$page == 'reset-password-2.php'||$page == 'reset-password-3.php'
							||$page == 'email-verification.php'||$page == 'email-verification-2.php'||$page == 'email-verification-3.php'||$page == 'two-step-verification.php'||$page == 'two-step-verification-2.php'||$page == 'two-step-verification-3.php'||$page == 'lock-screen.php'||
							$page == 'error-404.php'||$page == 'error-500.php'
							) ? ' show active' : ''; ?>" id="menu-authentication">
									<ul class="stack-submenu">
										<li class="submenu">
											<a href="javascript:void(0);" class="">Login<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="login.php" class="<?php echo ($page == 'login.php') ? 'active' : ''; ?>">Cover</a></li>
												<li><a href="login-2.php" class="<?php echo ($page == 'login-2.php') ? 'active' : ''; ?>">Illustration</a></li>
												<li><a href="login-3.php" class="<?php echo ($page == 'login-3.php') ? 'active' : ''; ?>">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);" class="">Register<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="register.php" class="<?php echo ($page == 'register.php') ? 'active' : ''; ?>">Cover</a></li>
												<li><a href="register-2.php" class="<?php echo ($page == 'register-2.php') ? 'active' : ''; ?>">Illustration</a></li>
												<li><a href="register-3.php" class="<?php echo ($page == 'register-3.php') ? 'active' : ''; ?>">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Reset Password<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="reset-password.php" class="<?php echo ($page == 'reset-password.php') ? 'active' : ''; ?>">Cover</a></li>
												<li><a href="reset-password-2.php" class="<?php echo ($page == 'reset-password-2.php') ? 'active' : ''; ?>">Illustration</a></li>
												<li><a href="reset-password-3.php" class="<?php echo ($page == 'reset-password-3.php') ? 'active' : ''; ?>">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">Email Verification<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="email-verification.php" class="<?php echo ($page == 'email-verification.php') ? 'active' : ''; ?>">Cover</a></li>
												<li><a href="email-verification-2.php" class="<?php echo ($page == 'email-verification-2.php') ? 'active' : ''; ?>">Illustration</a></li>
												<li><a href="email-verification-3.php" class="<?php echo ($page == 'email-verification-3.php') ? 'active' : ''; ?>">Basic</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">2 Step Verification<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="two-step-verification.php" class="<?php echo ($page == 'two-step-verification.php') ? 'active' : ''; ?>">Cover</a></li>
												<li><a href="two-step-verification-2.php" class="<?php echo ($page == 'two-step-verification-2.php') ? 'active' : ''; ?>">Illustration</a></li>
												<li><a href="two-step-verification-3.php" class="<?php echo ($page == 'two-step-verification-3.php') ? 'active' : ''; ?>">Basic</a></li>
											</ul>
										</li>
										<li><a href="lock-screen.php" class="<?php echo ($page == 'lock-screen.php') ? 'active' : ''; ?>">Lock Screen</a></li>
										<li><a href="error-404.php" class="<?php echo ($page == 'error-404.php') ? 'active' : ''; ?>">404 Error</a></li>
										<li><a href="error-500.php" class="<?php echo ($page == 'error-500.php') ? 'active' : ''; ?>">500 Error</a></li>
									</ul>
								</div>
								<div class="tab-pane fade <?php echo ($page == 'ui-alerts.php' || $page == 'ui-accordion.php' || $page == 'ui-avatar.php' || $page == 'ui-badges.php' || $page == 'ui-borders.php'
                                                                                                        || $page == 'ui-buttons.php' || $page == 'ui-buttons-group.php' || $page == 'ui-breadcrumb.php' || $page == 'ui-cards.php' || $page == 'ui-carousel.php'
                                                                                                        || $page == 'ui-colors.php' || $page == 'ui-dropdowns.php' || $page == 'ui-grid.php' || $page == 'ui-images.php' || $page == 'ui-lightbox.php'
                                                                                                        || $page == 'ui-media.php' || $page == 'ui-modals.php' || $page == 'ui-offcanvas.php' || $page == 'ui-pagination.php' || $page == 'ui-popovers.php'
                                                                                                        || $page == 'ui-progress.php' || $page == 'ui-placeholders.php'  || $page == 'ui-spinner.php'
                                                                                                        || $page == 'ui-sweetalerts.php' || $page == 'ui-nav-tabs.php' || $page == 'ui-toasts.php' || $page == 'ui-tooltips.php'
                                                                                                        || $page == 'ui-typography.php' || $page == 'ui-video.php'||$page == 'ui-ribbon.php' || $page == 'ui-clipboard.php' || $page == 'ui-drag-drop.php' || $page == 'ui-rangeslider.php' || $page == 'ui-rating.php' || $page == 'ui-text-editor.php' || $page == 'ui-counter.php' || $page == 'ui-scrollbar.php' || $page == 'ui-stickynote.php' || $page == 'ui-timeline.php'
																										||$page == 'form-basic-inputs.php' || $page == 'form-checkbox-radios.php' || $page == 'form-input-groups.php' || $page == 'form-grid-gutters.php' || $page == 'form-select.php' || $page == 'form-mask.php' || $page == 'form-fileupload.php' || $page == 'form-horizontal.php' || $page == 'form-vertical.php' || $page == 'form-floating-labels.php' || $page == 'form-validation.php' || $page == 'form-wizard.php' || $page == 'form-select2.php'
																										||$page == 'form-horizontal.php' || $page == 'form-vertical.php' || $page == 'form-floating-labels.php'||$page == 'tables-basic.php' || $page == 'data-tables.php'
																										||$page == 'chart-apex.php' || $page == 'chart-js.php' || $page == 'chart-morris.php' || $page == 'chart-flot.php' || $page == 'chart-peity.php' || $page == 'chart-c3.php'||$page == 'icon-fontawesome.php' || $page == 'icon-feather.php' || $page == 'icon-ionic.php' || $page == 'icon-material.php' || $page == 'icon-pe7.php' || $page == 'icon-simpleline.php' || $page == 'icon-themify.php' || $page == 'icon-weather.php' || $page == 'icon-typicon.php' || $page == 'icon-flag.php'
																										||$page == 'maps-vector.php'||$page == 'maps-leaflet.php'

                                                                                                )
                                                                                                        ? 'show active'
                                                                                                        : ''; ?>" id="menu-ui-elements">
									<ul class="stack-submenu">
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'ui-alerts.php' || $page == 'ui-accordion.php' || $page == 'ui-avatar.php' || $page == 'ui-badges.php' || $page == 'ui-borders.php'
                                                                                                        || $page == 'ui-buttons.php' || $page == 'ui-buttons-group.php' || $page == 'ui-breadcrumb.php' || $page == 'ui-cards.php' || $page == 'ui-carousel.php'
                                                                                                        || $page == 'ui-colors.php' || $page == 'ui-dropdowns.php' || $page == 'ui-grid.php' || $page == 'ui-images.php' || $page == 'ui-lightbox.php'
                                                                                                        || $page == 'ui-media.php' || $page == 'ui-modals.php' || $page == 'ui-offcanvas.php' || $page == 'ui-pagination.php' || $page == 'ui-popovers.php'
                                                                                                        || $page == 'ui-progress.php' || $page == 'ui-placeholders.php'  || $page == 'ui-spinner.php'
                                                                                                        || $page == 'ui-sweetalerts.php' || $page == 'ui-nav-tabs.php' || $page == 'ui-toasts.php' || $page == 'ui-tooltips.php'
                                                                                                        || $page == 'ui-typography.php' || $page == 'ui-video.php'
                                                                                                )
                                                                                                        ? 'subdrop active'
                                                                                                        : ''; ?>">Base UI<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="ui-alerts.php" class="<?php echo ($page == 'ui-alerts.php') ? 'active' : ''; ?>">Alerts</a></li>
												<li><a href="ui-accordion.php" class="<?php echo ($page == 'ui-accordion.php') ? 'active' : ''; ?>">Accordion</a></li>
												<li><a href="ui-avatar.php" class="<?php echo ($page == 'ui-avatar.php') ? 'active' : ''; ?>">Avatar</a></li>
												<li><a href="ui-badges.php" class="<?php echo ($page == 'ui-badges.php') ? 'active' : ''; ?>">Badges</a></li>
												<li><a href="ui-borders.php" class="<?php echo ($page == 'ui-borders.php') ? 'active' : ''; ?>">Border</a></li>
												<li><a href="ui-buttons.php" class="<?php echo ($page == 'ui-buttons.php') ? 'active' : ''; ?>">Buttons</a></li>
												<li><a href="ui-buttons-group.php" class="<?php echo ($page == 'ui-buttons-group.php') ? 'active' : ''; ?>">Button Group</a></li>
												<li><a href="ui-breadcrumb.php" class="<?php echo ($page == 'ui-breadcrumb.php') ? 'active' : ''; ?>">Breadcrumb</a></li>
												<li><a href="ui-cards.php" class="<?php echo ($page == 'ui-cards.php') ? 'active' : ''; ?>">Card</a></li>
												<li><a href="ui-carousel.php" class="<?php echo ($page == 'ui-carousel.php') ? 'active' : ''; ?>">Carousel</a></li>
												<li><a href="ui-colors.php" class="<?php echo ($page == 'ui-colors.php') ? 'active' : ''; ?>">Colors</a></li>
												<li><a href="ui-dropdowns.php" class="<?php echo ($page == '"ui-dropdowns.php') ? 'active' : ''; ?>">Dropdowns</a></li>
												<li><a href="ui-grid.php" class="<?php echo ($page == 'ui-grid.php') ? 'active' : ''; ?>">Grid</a></li>
												<li><a href="ui-images.php" class="<?php echo ($page == 'ui-images.php') ? 'active' : ''; ?>">Images</a></li>
												<li><a href="ui-lightbox.php" class="<?php echo ($page == 'ui-lightbox.php') ? 'active' : ''; ?>">Lightbox</a></li>
												<li><a href="ui-media.php" class="<?php echo ($page == 'ui-media.php') ? 'active' : ''; ?>">Media</a></li>
												<li><a href="ui-modals.php" class="<?php echo ($page == 'ui-modals.php') ? 'active' : ''; ?>">Modals</a></li>
												<li><a href="ui-offcanvas.php" class="<?php echo ($page == 'ui-offcanvas.php') ? 'active' : ''; ?>">Offcanvas</a></li>
												<li><a href="ui-pagination.php" class="<?php echo ($page == 'ui-pagination.php') ? 'active' : ''; ?>">Pagination</a></li>
												<li><a href="ui-popovers.php" class="<?php echo ($page == 'ui-popovers.php') ? 'active' : ''; ?>">Popovers</a></li>
												<li><a href="ui-progress.php" class="<?php echo ($page == 'ui-progress.php') ? 'active' : ''; ?>">Progress</a></li>
												<li><a href="ui-placeholders.php" class="<?php echo ($page == 'ui-placeholders.php') ? 'active' : ''; ?>">Placeholders</a></li>
												<li><a href="ui-spinner.php" class="<?php echo ($page == 'ui-spinner.php') ? 'active' : ''; ?>">Spinner</a></li>
												<li><a href="ui-sweetalerts.php" class="<?php echo ($page == 'ui-sweetalerts.php') ? 'active' : ''; ?>">Sweet Alerts</a></li>
												<li><a href="ui-nav-tabs.php" class="<?php echo ($page == 'ui-nav-tabs.php') ? 'active' : ''; ?>">Tabs</a></li>
												<li><a href="ui-toasts.php" class="<?php echo ($page == 'ui-toasts.php') ? 'active' : ''; ?>">Toasts</a></li>
												<li><a href="ui-tooltips.php" class="<?php echo ($page == 'ui-tooltips.php') ? 'active' : ''; ?>">Tooltips</a></li>
												<li><a href="ui-typography.php" class="<?php echo ($page == 'ui-typography.php') ? 'active' : ''; ?>">Typography</a></li>
												<li><a href="ui-video.php" class="<?php echo ($page == 'ui-video.php') ? 'active' : ''; ?>">Video</a></li>
											<li><a href="ui-sortable.php" class="<?php echo ($page == 'ui-sortable.php') ? 'active' : ''; ?>">Sortable</a></li>
											<li><a href="ui-swiperjs.php" class="<?php echo ($page == 'ui-swiperjs.php') ? 'active' : ''; ?>">Swiperjs</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'ui-ribbon.php' || $page == 'ui-clipboard.php' || $page == 'ui-drag-drop.php' || $page == 'ui-rangeslider.php' || $page == 'ui-rating.php' || $page == 'ui-text-editor.php' || $page == 'ui-counter.php' || $page == 'ui-scrollbar.php' || $page == 'ui-stickynote.php' || $page == 'ui-timeline.php') ? 'subdrop active' : ''; ?>"> Advanced UI<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="ui-ribbon.php" class="<?php echo ($page == 'ui-ribbon.php') ? 'active' : ''; ?>" >Ribbon</a></li>
												<li><a href="ui-clipboard.php" class="<?php echo ($page == 'ui-clipboard.php') ? 'active' : ''; ?>">Clipboard</a></li>
												<li><a href="ui-drag-drop.php" class="<?php echo ($page == 'ui-drag-drop.php') ? 'active' : ''; ?>">Drag & Drop</a></li>
												<li><a href="ui-rangeslider.php" class="<?php echo ($page == 'ui-rangeslider.php') ? 'active' : ''; ?>">Range Slider</a></li>
												<li><a href="ui-rating.php" class="<?php echo ($page == 'ui-rating.php') ? 'active' : ''; ?>">Rating</a></li>
												<li><a href="ui-text-editor.php" class="<?php echo ($page == 'ui-text-editor.php') ? 'active' : ''; ?>">Text Editor</a></li>
												<li><a href="ui-counter.php" class="<?php echo ($page == 'ui-counter.php') ? 'active' : ''; ?>">Counter</a></li>
												<li><a href="ui-scrollbar.php" class="<?php echo ($page == 'ui-scrollbar.php') ? 'active' : ''; ?>">Scrollbar</a></li>
												<li><a href="ui-stickynote.php" class="<?php echo ($page == 'ui-stickynote.php') ? 'active' : ''; ?>">Sticky Note</a></li>
												<li><a href="ui-timeline.php" class="<?php echo ($page == 'ui-timeline.php') ? 'active' : ''; ?>">Timeline</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'form-basic-inputs.php' || $page == 'form-checkbox-radios.php' || $page == 'form-input-groups.php' || $page == 'form-grid-gutters.php' || $page == 'form-select.php' || $page == 'form-mask.php' || $page == 'form-fileupload.php' || $page == 'form-horizontal.php' || $page == 'form-vertical.php' || $page == 'form-floating-labels.php' || $page == 'form-validation.php' || $page == 'form-wizard.php' || $page == 'form-select2.php') ? 'subdrop active' : ''; ?>">Forms<span class="menu-arrow"></span> </a>
											<ul>
												<li class="submenu submenu-two">
													<a href="javascript:void(0);"class="<?php echo ($page == 'form-basic-inputs.php' || $page == 'form-checkbox-radios.php' || $page == 'form-input-groups.php' || $page == 'form-grid-gutters.php' || $page == 'form-select.php' || $page == 'form-mask.php' || $page == 'form-fileupload.php' ) ? 'subdrop active' : ''; ?>">Form Elements<span class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="form-basic-inputs.php" class="<?php echo ($page == 'form-basic-inputs.php') ? 'active' : ''; ?>">Basic Inputs</a></li>
														<li><a href="form-checkbox-radios.php" class="<?php echo ($page == 'form-checkbox-radios.php') ? 'active' : ''; ?>">Checkbox & Radios</a> </li>
														<li><a href="form-input-groups.php" class="<?php echo ($page == 'form-input-groups.php') ? 'active' : ''; ?>">Input Groups</a></li>
														<li><a href="form-grid-gutters.php" class="<?php echo ($page == 'form-grid-gutters.php') ? 'active' : ''; ?>">Grid & Gutters</a></li>
														<li><a href="form-select.php" class="<?php echo ($page == 'form-select.php') ? 'active' : ''; ?>">Form Select</a></li>
														<li><a href="form-mask.php" class="<?php echo ($page == 'form-mask.php') ? 'active' : ''; ?>">Input Masks</a></li>
														<li><a href="form-fileupload.php" class="<?php echo ($page == 'form-fileupload.php') ? 'active' : ''; ?>">File Uploads</a></li>
														
													</ul>
												</li>
												<li class="submenu submenu-two">
													<a href="javascript:void(0);"class="<?php echo ($page == 'form-horizontal.php' || $page == 'form-vertical.php' || $page == 'form-floating-labels.php') ? 'subdrop active' : ''; ?>">Layouts<span class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="form-horizontal.php" class="<?php echo ($page == 'form-horizontal.php') ? 'active' : ''; ?>">Horizontal Form</a></li>
														<li><a href="form-vertical.php" class="<?php echo ($page == 'form-vertical.php') ? 'active' : ''; ?>">Vertical Form</a></li>
														<li><a href="form-floating-labels.php" class="<?php echo ($page == 'form-floating-labels.php') ? 'active' : ''; ?>">Floating Labels</a></li>
													</ul>
												</li>
												<li><a href="form-validation.php" class="<?php echo ($page == 'form-validation.php') ? 'active' : ''; ?>">Form Validation</a></li>
												<li><a href="form-select2.php" class="<?php echo ($page == 'form-select2.php') ? 'active' : ''; ?>">Select2</a></li>
												<li><a href="form-wizard.php" class="<?php echo ($page == 'form-wizard.php') ? 'active' : ''; ?>">Form Wizard</a></li>
												<li><a href="form-pickers.php" class="<?php echo ($page == 'form-pickers.php') ? 'active' : ''; ?>">Form Picker</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'tables-basic.php' || $page == 'data-tables.php') ? 'subdrop active' : ''; ?>">Tables<span class="menu-arrow"></span></a>
											<ul>
												<li><a href="tables-basic.php" class="<?php echo ($page == 'tables-basic.php') ? 'active' : ''; ?>">Basic Tables </a></li>
												<li><a href="data-tables.php" class="<?php echo ($page == 'data-tables.php') ? 'active' : ''; ?>">Data Table </a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'chart-apex.php' || $page == 'chart-js.php' || $page == 'chart-morris.php' || $page == 'chart-flot.php' || $page == 'chart-peity.php' || $page == 'chart-c3.php') ? 'subdrop active' : ''; ?>">Charts<span class="menu-arrow"></span> </a>
											<ul>
												<li><a href="chart-apex.php" class="<?php echo ($page == 'chart-apex.php') ? 'active' : ''; ?>">Apex Charts</a></li>
												<li><a href="chart-c3.php" class="<?php echo ($page == 'chart-c3.php') ? 'active' : ''; ?>">Chart C3</a></li>
												<li><a href="chart-js.php" class="<?php echo ($page == 'chart-js.php') ? 'active' : ''; ?>">Chart Js</a></li>
												<li><a href="chart-morris.php" class="<?php echo ($page == 'chart-morris.php') ? 'active' : ''; ?>">Morris Charts</a></li>
												<li><a href="chart-flot.php" class="<?php echo ($page == 'chart-flot.php') ? 'active' : ''; ?>">Flot Charts</a></li>
												<li><a href="chart-peity.php" class="<?php echo ($page == 'chart-peity.php') ? 'active' : ''; ?>">Peity Charts</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'icon-fontawesome.php' || $page == 'icon-feather.php' || $page == 'icon-ionic.php' || $page == 'icon-material.php' || $page == 'icon-pe7.php' || $page == 'icon-simpleline.php' || $page == 'icon-themify.php' || $page == 'icon-weather.php' || $page == 'icon-typicon.php' || $page == 'icon-flag.php') ? 'subdrop active' : ''; ?>">Icons<span class="menu-arrow"></span> </a>
											<ul>
												<li><a href="icon-fontawesome.php" class="<?php echo ($page == 'icon-fontawesome.php') ? 'active' : ''; ?>">Fontawesome Icons</a></li>
												<li><a href="icon-tabler.php" class="<?php echo ($page == 'icon-tabler.php') ? 'active' : ''; ?>">Tabler Icons</a></li>
												<li><a href="icon-bootstrap.php" class="<?php echo ($page == 'icon-bootstrap.php') ? 'active' : ''; ?>">Bootstrap Icons</a></li>
												<li><a href="icon-remix.php" class="<?php echo ($page == 'icon-remix.php') ? 'active' : ''; ?>">Remix Icons</a></li>
												<li><a href="icon-feather.php" class="<?php echo ($page == 'icon-feather.php') ? 'active' : ''; ?>">Feather Icons</a></li>
												<li><a href="icon-ionic.php" class="<?php echo ($page == 'icon-ionic.php') ? 'active' : ''; ?>">Ionic Icons</a></li>
												<li><a href="icon-material.php" class="<?php echo ($page == 'icon-material.php') ? 'active' : ''; ?>">Material Icons</a></li>
												<li><a href="icon-pe7.php" class="<?php echo ($page == 'icon-pe7.php') ? 'active' : ''; ?>">Pe7 Icons</a></li>
												<li><a href="icon-simpleline.php" class="<?php echo ($page == 'icon-simpleline.php') ? 'active' : ''; ?>">Simpleline Icons</a></li>
												<li><a href="icon-themify.php" class="<?php echo ($page == 'icon-themify.php') ? 'active' : ''; ?>">Themify Icons</a></li>
												<li><a href="icon-weather.php" class="<?php echo ($page == 'icon-weather.php') ? 'active' : ''; ?>">Weather Icons</a></li>
												<li><a href="icon-typicon.php" class="<?php echo ($page == 'icon-typicon.php') ? 'active' : ''; ?>">Typicon Icons</a></li>
												<li><a href="icon-flag.php" class="<?php echo ($page == 'icon-flag.php') ? 'active' : ''; ?>">Flag Icons</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"class="<?php echo ($page == 'maps-vector.php' || $page == 'maps-leaflet.php') ? 'subdrop active' : ''; ?>">
												<i class="ti ti-table-plus"></i>
												<span>Maps</span>
												<span class="menu-arrow"></span>
											</a>
											<ul>
												<li>
													<a href="maps-vector.php" class="<?php echo ($page == 'maps-vector.php') ? 'active' : ''; ?>">Vector</a>
												</li>
												<li>
													<a href="maps-leaflet.php" class="<?php echo ($page == 'maps-leaflet.php') ? 'active' : ''; ?>">Leaflet</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="p-3">
						<a href="javascript:void(0);" class="d-flex align-items-center fs-12 mb-3">Documentation</a>
						<a href="javascript:void(0);" class="d-flex align-items-center fs-12">Change Log<span class="badge bg-pink badge-xs text-white fs-10 ms-2">v4.0.2</span></a>
					</div>
				</div>
			</div>
		</div>
		<!-- /Stacked Sidebar -->
