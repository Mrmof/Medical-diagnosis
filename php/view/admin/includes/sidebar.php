<nav class="sidebar-wrapper">

				<!-- Sidebar brand starts -->
				<div class="sidebar-brand">
					<a href="index.html" class="logo">
						<img src="assets/images/logo.svg" alt="Melon Admin Dashboard" />
					</a>
				</div>
				<!-- Sidebar brand starts -->

				<!-- Sidebar menu starts -->
				<div class="sidebar-menu">
					<div class="sidebarMenuScroll">
						<ul>
							<li class=" active">
								<a href="index.php">
									<i class="bi bi-house"></i>
									<span class="menu-text">Dashboards</span>
								</a>
							</li>
							<li class="">
								<a href="add.php">
									<i class="bi bi-gem"></i>
									<span class="menu-text">Add</span>
								</a>
							</li>
							<li class="">
								<a href="conditions.php">
									<i class="bi bi-gem"></i>
									<span class="menu-text">Conditions</span>
								</a>
							</li>
							<li class="">
								<a href="appointment.php">
									<i class="bi bi-hourglass"></i>
									<span class="menu-text">Appointment</span>
								</a>
							</li>
                            <li class="">
								<a href="edit.php">
									<i class="bi bi-people"></i>
									<span class="menu-text">Users</span>
								</a>
							</li>
                            <li class="">
								<a href="" data-bs-target="#logout" data-bs-toggle="modal">
									<i class="bi bi-gem"></i>
									<span class="menu-text">Logout</span>
								</a>
							</li>
							
						</ul>
					</div>
				</div>
				<!-- Sidebar menu ends -->
                

			</nav>
            <div class="modal fade" id="logout" tabindex="" aria-labelledby="verticallyCenteredLabel"
						aria-hidden="false">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="verticallyCenteredLabel">Logout</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<p>Do you wish to logout?</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
								<button type="button" class="btn btn-success" data-bs-dismiss="modal"><a href="<?=WEB_URL?>/php/controller/logout.php">Logout</a></button>
							</div>
						</div>
					</div>
				</div>