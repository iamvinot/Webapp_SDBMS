<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="default.php">A Next Generation Student Information System</a>
	</div>

	<ul class="nav navbar-top-links navbar-right">
		<?php if(isset($_SESSION['dept_full'])) {
			echo "<li>" . $_SESSION['dept_full'] . "</li>";
		} ?>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu dropdown-user">

				<li><a href="../login"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
				</li>
			</ul>
		</li>
	</ul>

	<div class="navbar-default sidebar" role="navigation">
		<div class="sidebar-nav navbar-collapse">
			<ul class="nav" id="side-menu">

				<li>
					<a href="index.php"><i class="fa fa-dashboard fa-fw"></i>Home</a>
				</li>
				<li>
					<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Attendance Details<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li>
							<a href="add_att_web.php">Mark Attendance</a>
						</li>
						<li>
							<a href="view_att.php">View Attendance</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#"><i class="fa fa-table fa-fw"></i>Student Details<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li>
							<a href="viewstu_form.php">View Student Details</a>
						</li>
						<li>
							<a href="newstu_form.php">Add New Student Details</a>
						</li>
						<li>
							<a href="exestu_form.php">Modify Existing Student Details</a>
						</li>


					</ul>
				</li>
				<li>
					<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Student Mark Details<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li>
							<a href="add_marks.php">Add Marks</a>
						</li>
						<li>
							<a href="view_marks.php">View Marks</a>
						</li>
					</ul>
				</li>
				<?php //if(is_admin()) { ?>
				<li>
					<a href="update_year.php"><i class="fa fa-wrench fa-fw"></i> Update Year Details</a>
				</li>
<!--<li>
					<a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li>
							<a href="#">Second Level Item</a>
						</li>
						<li>
							<a href="#">Second Level Item</a>
						</li>
						<li>
							<a href="#">Third Level <span class="fa arrow"></span></a>
							<ul class="nav nav-third-level">
								<li>
									<a href="#">Third Level Item</a>
								</li>
								<li>
									<a href="#">Third Level Item</a>
								</li>
								<li>
									<a href="#">Third Level Item</a>
								</li>
								<li>
									<a href="#">Third Level Item</a>
								</li>
							</ul>

						</li>
					</ul>
				</li>
				<li>
					<a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li>
							<a href="blank.html">Blank Page</a>
						</li>
						<li>
							<a href="login.html">Login Page</a>
						</li>
					</ul>

				</li>-->
			</ul>
		</div>
	</div>
</nav>
