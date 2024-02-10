<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include("../db_con/dbCon.php") ?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Admin Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- font CSS -->
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!-- js-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<!--webfonts-->
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic'
		rel='stylesheet' type='text/css'>
	<!--//webfonts-->
	<!--animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!--//end-animate-->
	<!-- chart -->
	<script src="js/Chart.js"></script>
	<!-- //chart -->
	<!--Calender-->
	<link rel="stylesheet" href="css/clndr.css" type="text/css" />
	d
	<script src="js/underscore-min.js" type="text/javascript"></script>
	<script src="js/moment-2.2.1.js" type="text/javascript"></script>
	<script src="js/clndr.js" type="text/javascript"></script>
	<script src="js/site.js" type="text/javascript"></script>
	<!--End Calender-->
	<!-- Metis Menu -->
	<script src="js/metisMenu.min.js"></script>
	<script src="js/custom.js"></script>
	<link href="css/custom.css" rel="stylesheet">
	<!--//Metis Menu -->
</head>

<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
			<div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
				<ul class="nav" id="side-menu">
						<li>
							<a href="index.php" class="active"><i class="fa fa-home nav_icon"></i>Dashboard</a>
						</li>

						<li>
							<a href="client.php"><i class="fa fa-user nav_icon"></i>Client </a>
						</li>
						<li>
							<a href="case.php"><i class="fa fa-gavel nav_icon"></i>Case </a>
						</li>
						<li>
							<a href="task.php"><i class="fa fa-book nav_icon"></i>Task </a>
						</li>
						<li>
							<a href="lawyer_booking1.php"><i class="fa fa-calendar nav_icon"></i>Appointment </a>
						</li>
						<li>
							<a href="invoice.php"><i class="fa fa-file nav_icon"></i>Invoice </a>
						</li>
						<li>
							<a href="expence.php"><i class="fa fa-money nav_icon"></i>Expence<span class="nav-badge-btm">02</span><span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="cash.php">Cash</a>
								</li>
								<li>
									<a href="online.php">Online</a>
								</li>
							</ul>
							<!-- //nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-cog nav_icon"></i>Setting<span class="nav-badge-btm">02</span><span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="lawyer_edit_profile1.php">Edit Profile</a>
								</li>
								<li>
									<a href="update_password_admin.php">Update Password</a>
								</li>	
							</ul>
							<!-- //nav-second-level -->
						</li>


				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="index.html">
						<h1>LAW OFFICE</h1>
						<span>AdminPanel</span>
					</a>
				</div>
				<!--//logo-->
				<!--search-box-->
				<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search"
							id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77"
								preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z" />
							</svg>
						</label>
					</form>
				</div><!--//end-search-box-->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
									class="fa fa-envelope"></i><span class="badge">3</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new messages</h3>
									</div>
								</li>
								<li><a href="#">
										<div class="user_img"><img src="images/1.png" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet</p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li class="odd"><a href="#">
										<div class="user_img"><img src="images/2.png" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet </p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li><a href="#">
										<div class="user_img"><img src="images/3.png" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet </p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all messages</a>
									</div>
								</li>
							</ul>
						</li>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
									class="fa fa-bell"></i><span class="badge blue">3</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new notification</h3>
									</div>
								</li>
								<li><a href="#">
										<div class="user_img"><img src="images/2.png" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet</p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li class="odd"><a href="#">
										<div class="user_img"><img src="images/1.png" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet </p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li><a href="#">
										<div class="user_img"><img src="images/3.png" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet </p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all notifications</a>
									</div>
								</li>
							</ul>
						</li>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
									class="fa fa-tasks"></i><span class="badge blue1">15</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 8 pending task</h3>
									</div>
								</li>
								<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Database update</span><span
												class="percentage">40%</span>
											<div class="clearfix"></div>
										</div>
										<div class="progress progress-striped active">
											<div class="bar yellow" style="width:40%;"></div>
										</div>
									</a></li>
								<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Dashboard done</span><span
												class="percentage">90%</span>
											<div class="clearfix"></div>
										</div>


								<li>
									<div class="notification_bottom">
										<a href="#">See all pending tasks</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="profile_details">
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
									<span class="prfil-img"><img src="...." alt=""> </span>
									<div class="user-name">
										<p><?php echo $_SESSION["first_Name"].' '.$_SESSION['last_Name'] ?></p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>
								</div>
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
								<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="row-one">
					<div class="col-md-4 widget">

						<div class="clearfix"> </div>
					</div>
					<!-- edit profile -->
					<section class="bookingrqst">
						<div class="container">
							<div class="span7">
								<div class="">

									<div class="widget-header">
										<i class="icon-th-list"></i>
										<?php if (isset($_GET['ok'])) {
											echo "<div class='alert alert-success alert-dismissible fade show'>
											<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
											<strong>Sucessfully!</strong> update your Profile.
											</div>";
										} ?>
									</div> <!-- /widget-header -->

									<div class="widget-content">
										<div class="row">
											<div class="col-md-1"></div>

											<?php
											$a = $_SESSION['lawyer_id'];
											$conn = connect();

											$result = mysqli_query($conn, "SELECT * FROM user,lawyer WHERE user.u_id=lawyer.lawyer_id AND user.status='Active' AND user.u_id='$a'");

											while ($row = mysqli_fetch_array($result)) {
												?>
												<div class="col-md-10">
													<form action="save_lawyer_edit_Profile.php" method="post"
														enctype="multipart/form-data" id="validateForm">
														<div class="form-row">
															<div class="form-group col-md-6">
																<label for="fname">First Name</label>
																<input type="text" class="form-control" id="first_Name"
																	name="first_Name"
																	value="<?php echo $row["first_Name"]; ?>">
															</div>
															<div class="form-group col-md-6">
																<label for="lname">Last Name</label>
																<input type="text" class="form-control" id="lname"
																	name="last_Name"
																	value="<?php echo $row["last_Name"]; ?>">
															</div>
														</div>

														<div class="form-group">
															<label for="num">Contact Number</label>
															<input type="text" class="form-control" name="contact_number"
																id="contact_number"
																value="<?php echo $row["contact_Number"]; ?>">
														</div>

														<div class="form-row"><label for="edu"><small>Put Your Last
																	Education</small></label></div>
														<div class="form-row">
															<div class="form-group col-md-6">
																<label for="institute">University / College Name</label>
																<input type="text" class="form-control" id="institute"
																	name="university_College"
																	value="<?php echo $row["university_College"]; ?>">
															</div>
															<div class="form-group col-md-3">
																<label for="degree">Degree</label>
																<select id="degree" name="degree" class="form-control">
																	<option value=" " selected>Choose...</option>
																	<option value="LLB" <?php if ($row['degree'] == 'LLB') {
																		echo "selected";
																	} ?>>LLB</option>
																	<option value="LLM" <?php if ($row['degree'] == 'LLM') {
																		echo "selected";
																	} ?>>LLM</option>


																</select>
															</div>
															<div class="form-group col-md-3">
																<label for="pyear">Passing Year</label>
																<select id="passing_year" name="passing_year"
																	class="form-control">
																	<option value=" " selected>Choose...</option>
																	<option value="2000" <?php if ($row['passing_year'] == '2000') {
																		echo "selected";
																	} ?>>2000
																	</option>
																	<option value="2001" <?php if ($row['passing_year'] == '2001') {
																		echo "selected";
																	} ?>>2001
																	</option>
																	<option value="2002" <?php if ($row['passing_year'] == '2002') {
																		echo "selected";
																	} ?>>2002
																	</option>
																	<option value="2003" <?php if ($row['passing_year'] == '2003') {
																		echo "selected";
																	} ?>>2003
																	</option>
																	<option value="2004" <?php if ($row['passing_year'] == '2004') {
																		echo "selected";
																	} ?>>2004
																	</option>
																	<option value="2005" <?php if ($row['passing_year'] == '2005') {
																		echo "selected";
																	} ?>>2005
																	</option>
																	<option value="2006" <?php if ($row['passing_year'] == '2006') {
																		echo "selected";
																	} ?>>2006
																	</option>
																	<option value="2007" <?php if ($row['passing_year'] == '2007') {
																		echo "selected";
																	} ?>>2007
																	</option>
																	<option value="2008" <?php if ($row['passing_year'] == '2008') {
																		echo "selected";
																	} ?>>2008
																	</option>
																	<option value="2009" <?php if ($row['passing_year'] == '2009') {
																		echo "selected";
																	} ?>>2009
																	</option>
																	<option value="2010" <?php if ($row['passing_year'] == '2010') {
																		echo "selected";
																	} ?>>2010
																	</option>
																	<option value="2011" <?php if ($row['passing_year'] == '2011') {
																		echo "selected";
																	} ?>>2011
																	</option>
																	<option value="2012" <?php if ($row['passing_year'] == '2012') {
																		echo "selected";
																	} ?>>2012
																	</option>
																	<option value="2013" <?php if ($row['passing_year'] == '2013') {
																		echo "selected";
																	} ?>>2013
																	</option>
																	<option value="2014" <?php if ($row['passing_year'] == '2014') {
																		echo "selected";
																	} ?>>2014
																	</option>
																	<option value="2015" <?php if ($row['passing_year'] == '2015') {
																		echo "selected";
																	} ?>>2015
																	</option>
																	<option value="2016" <?php if ($row['passing_year'] == '2016') {
																		echo "selected";
																	} ?>>2016
																	</option>
																	<option value="2017" <?php if ($row['passing_year'] == '2017') {
																		echo "selected";
																	} ?>>2017
																	</option>
																	<option value="2018" <?php if ($row['passing_year'] == '2018') {
																		echo "selected";
																	} ?>>2018
																	</option>
																	<option value="2019" <?php if ($row['passing_year'] == '2019') {
																		echo "selected";
																	} ?>>2019
																	</option>
																</select>
															</div>
														</div>
														<div class="form-row"><label for="edu"><small>Put Your chamber
																	Location
																</small></label></div>
														<div class="form-row">
															<div class="form-group col-md-6">
																<label for="address">Full Address</label>
																<input type="text" class="form-control" id="address"
																	name="full_address"
																	value="<?php echo $row["full_address"]; ?>">
															</div>
															<div class="form-group col-md-3">
																<label for="city">City</label>
																<select id="city" name="city" class="form-control">
																	<option value=" " selected>Choose...</option>
																	<option value="Nashik" <?php if ($row['city'] == 'Dhaka') {
																		echo "selected";
																	} ?>>Nashik</option>
																	<option value="Pune" <?php if ($row['city'] == 'Chittagong') {
																		echo "selected";
																	} ?>>Pune</option>
																	<option value="Kolkata" <?php if ($row['city'] == 'Sylhet') {
																		echo "selected";
																	} ?>>Kolkata</option>
																	<option value="Chalisgaon" <?php if ($row['city'] == 'Barishal') {
																		echo "selected";
																	} ?>>Chalisgaon
																	</option>
																	<option value="Mumbai" <?php if ($row['city'] == 'Khulna') {
																		echo "selected";
																	} ?>>Mumbai</option>
																	<option value="Bhusawal" <?php if ($row['city'] == 'Mymensingh') {
																		echo "selected";
																	} ?>>Bhusawal
																	</option>
																	<option value="Delhi" <?php if ($row['city'] == 'Rajshahi') {
																		echo "selected";
																	} ?>>Delhi</option>
																	<option value="Shinagar" <?php if ($row['city'] == 'Rangpur') {
																		echo "selected";
																	} ?>>Shinagar</option>
																</select>
															</div>
															<div class="form-group col-md-3">
																<label for="zip">Zip code</label>
																<input type="text" class="form-control" id="zip"
																	name="zip_code" value="<?php echo $row["zip_code"]; ?>">
															</div>
														</div>
														<div class="form-group">
															<label for="practise">Length of practise</label>
															<select id="practise" name="practise_Length"
																class="form-control">
																<option value=" " selected>Choose...</option>
																<option value="1-5 years" <?php if ($row['practise_Length'] == '1-5 years') {
																	echo "selected";
																} ?>>1-5 years</option>
																<option value="6-10 years" <?php if ($row['practise_Length'] == '6-10 years') {
																	echo "selected";
																} ?>>6-10 years</option>
																<option value="11-15 years" <?php if ($row['practise_Length'] == '11-15 years') {
																	echo "selected";
																} ?>>
																	11-15 years</option>
																<option value="16-20 years" <?php if ($row['practise_Length'] == '16-20 years') {
																	echo "selected";
																} ?>>
																	16-20 years</option>
																<option value="Most Senior" <?php if ($row['practise_Length'] == 'Most Senior') {
																	echo "selected";
																} ?>>Most Senior</option>
															</select>
														</div>
														<div class="form-group">
															<label for="practise">My Speciality</label>
															<select id="practise" name="speciality" class="form-control">
																<option value=" " selected>Choose...</option>
																<option value="Criminal Law" <?php if ($row['speciality'] == 'Criminal Law') {
																	echo "selected";
																} ?>>Criminal law</option>
																<option value="Civil Law" <?php if ($row['speciality'] == 'Civil Law') {
																	echo "selected";
																} ?>>Civil law</option>
																<option value="Writ Jurisdiction" <?php if ($row['speciality'] == 'Writ Jurisdiction') {
																	echo "selected";
																} ?>>
																	Writ Jurisdiction</option>
																<option value="Company Law" <?php if ($row['speciality'] == 'Company Law') {
																	echo "selected";
																} ?>>Company law</option>
																<option value="Contract Law" <?php if ($row['speciality'] == 'Contract Law') {
																	echo "selected";
																} ?>>Contract law</option>
																<option value="Commercial Law" <?php if ($row['speciality'] == 'Commercial Law') {
																	echo "selected";
																} ?>>
																	Commercial law</option>
																<option value="Construction Law" <?php if ($row['speciality'] == 'Construction Law') {
																	echo "selected";
																} ?>>
																	Construction law</option>
																<option value="IT Law" <?php if ($row['speciality'] == 'IT Law') {
																	echo "selected";
																} ?>>IT law</option>
																<option value="Family Law" <?php if ($row['speciality'] == 'Family Law') {
																	echo "selected";
																} ?>>Family law</option>
																<option value="Religious Law" <?php if ($row['speciality'] == 'Religious Law') {
																	echo "selected";
																} ?>>
																	Religious law</option>
																<option value="Investment Law" <?php if ($row['speciality'] == 'Investment Law') {
																	echo "selected";
																} ?>>
																	Investment law</option>
																<option value="Labour Law" <?php if ($row['speciality'] == 'Labour Law') {
																	echo "selected";
																} ?>>Labour law</option>
																<option value="Property Law" <?php if ($row['speciality'] == 'Property Law') {
																	echo "selected";
																} ?>>Property law</option>
																<option value="Taxation Law" <?php if ($row['speciality'] == 'Taxation Law') {
																	echo "selected";
																} ?>>Taxation law</option>

															</select>
														</div>
														<div class="form-group">

														</div>
														<input name="update" type="submit" class="btn btn-block btn-info"
															value="Update" />
														<!--after signup redirect lawyer dashboard page-->
													</form>

												</div>
												<?php
											}
											?>
											<div class="col-md-1"></div>
										</div>


										<div class="clearfix"> </div>
									</div>
								</div>
								<!--footer-->
								<div class="footer">
									<p>&copy; All rights reserved. 2024</p>
								</div>
								<!--//footer-->
							</div>
							<!-- Classie -->
							<script src="js/classie.js"></script>
							<script>
								var menuLeft = document.getElementById('cbp-spmenu-s1'),
									showLeftPush = document.getElementById('showLeftPush'),
									body = document.body;

								showLeftPush.onclick = function () {
									classie.toggle(this, 'active');
									classie.toggle(body, 'cbp-spmenu-push-toright');
									classie.toggle(menuLeft, 'cbp-spmenu-open');
									disableOther('showLeftPush');
								};


								function disableOther(button) {
									if (button !== 'showLeftPush') {
										classie.toggle(showLeftPush, 'disabled');
									}
								}
							</script>
							<!--scrolling js-->
							<script src="js/jquery.nicescroll.js"></script>
							<script src="js/scripts.js"></script>
							<!--//scrolling js-->
							<!-- Bootstrap Core JavaScript -->
							<script src="js/bootstrap.js"> </script>
</body>

</html>