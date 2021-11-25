<!DOCTYPE html>
<html>
<head>
	<meta>
	<title>KIRA</title>
	 <link rel="shortcut icon"type="image/png"href="img/logo4.png"class="Img Profile" alt="">
	<link rel="stylesheet" href="css1/bootstrap.min.css">
	<link rel="stylesheet" href="css1/ready.css">
</head>
<body>
	<div class="wrapper">
		<!-- start header-->
		<div class="main-header">
			<!-- start header logo-->
			<div class="logo-header" >
				<a href="admin_controlsystem.php" class="logo">
				<img src="img/logo4.png" style="width: 100px;height: 50px;" alt="Img Profile">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>

			</div>
			<!-- start nav bar-->
			<nav class="navbar navbar-header navbar-expand-lg" >
				<div class="container-fluid">
					<!-- start  form seach-->
					<form class="navbar-left navbar-form nav-search mr-md-3" action="">
						<div class="input-group">
							<input type="text" placeholder="Search ..." class="form-control">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
							</div>
						</div>
					</form>
					<!-- start  navigatio bar -->
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-envelope"></i>Message<span class="badge badge-danger">10</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">inbox<span class="badge badge-danger">10</span></a>
								<a class="dropdown-item" href="#"></a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Replly</a>
							</div>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-bell"></i>
							notification<span class="badge badge-danger">3</span>
							</a>
							<ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-center">
										<a href="#">
											<div class="notif-icon notif-primary"> <i class="la la-user-plus"></i> </div>
											<div class="notif-content">
												<span class="block">
													New user registered
												</span>
												<span class="time">20 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-success"> <i class="la la-comment"></i> </div>
											<div class="notif-content">
												<span class="block">
													Gaetan commented on Admin
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-img"> 
												<img src="img/ben.png" alt="Img Profile">
											</div>
											<div class="notif-content">
												<span class="block">
													Athlete send messages to you
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-img"> 
												<img src="img/doctor.png" alt="Img Profile">
											</div>
											<div class="notif-content">
												<span class="block">
													Patrick  send messages to you
												</span>
												<span class="time">20 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-img"> 
												<img src="img/doctor.png" alt="Img Profile">
											</div>
											<div class="notif-content">
												<span class="block">
													Tumusifu  send messages to you
												</span>
												<span class="time">5 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-img"> 
												<img src="img/doctor.png" alt="Img Profile">
											</div>
											<div class="notif-content">
												<span class="block">
													Madina  send messages to you
												</span>
												<span class="time">11 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-danger"> <i class="la la-heart"></i> </div>
											<div class="notif-content">
												<span class="block">
													enock liked Admin
												</span>
												<span class="time">17 minutes ago</span> 
											</div>
										</a>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="la la-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<!-- start  admin profile  -->
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="img/doctor.png" alt="user-img" width="36" class="img-circle"><span >mbonigaba alexis</span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="img/doctor.png" alt="user"></div>
										<div class="u-text">
											<h4>  Alexis</h4>
											<span class="user-level">Admin</span>
											<a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
										</div>
									</li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-user"></i> My Profile</a>
									<a class="dropdown-item" href="#"></i> My Balance</a>
									<a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="register"><i class="ti-settings"></i> Account Setting</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="index.php"><i class="fa fa-power-off"></i> Logout</a>
								</ul>
								<!-- /.dropdown-user -->
								<!-- end  admin profile right -->
							</li>
						</ul>
					</div>
				</nav>
				<!-- end  navigation bar -->
			</div>

			<!-- start   siderbar -->
			<div class="sidebar"style="background:linear-gradient(white,#00a2d1);">
				<div class="scrollbar-inner sidebar-wrapper">
					<!-- start   admin profire left -->
					<div class="user">
						<div class="photo">
							<img src="img/doctor.png">
						</div>
						<div class="info">
							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									 Alexis
									<span class="user-level">Admin</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- end    admin profile -->
					<ul class="nav">
						<li class="nav-item active">
							<a href="#">
								<i class="la la-home"></i>
								<p> HOME</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#">
								<P>View user</P>
							</a>
						</li>
						<li class="nav-item">
							<a href="#">
								<p>View contact</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#">
								<p>View Patient Treatment</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#">
								<p >Regester User</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#">
								<p>Regester patient</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#">
								<p>Report </p>
		
							</a>
						</li>
						<li class="nav-item">
							<a href="#">
								<p>show all patient </p>
								
							</a>
						</li>
						<li class="nav-item">
							<a href="#">
								<p>VIEW DONATE</p>
						</li>
					</ul>
				</div>
			</div>
			<!-- end   sidebar -->

                <!-- start   amaain part p -->
			<div class="main-panel" style="background: #fff">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Wellcome Admin  Page KIRA</h4>
						<!-- start row 1inside main -->
						<div class="row" style="background: #fff">
							<div class="col-md-3">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Doctor of KIRA</h4>
									
									</div>
									<div class="card-body">
										<img src="img/doctor.png" alt="user" width="100">
									</div>
									<div class="card-body">
										<img src="img/DR.gif" alt="user" width="100">
									</div>
									<div class="card-footer">
										<div class="legend"><i class="la la-circle text-primary"></i> more</div>
									</div>
								</div>
							</div>
							<div class="col-md-9" style="background: #fff">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">This our  soft developer    it used to designed website font end and back end  </h4>
									</div>
									<!-- open Map-->
									<div class="card-body">
										<div class="mapcontainer">
											<img src="img/Alexis.jpg" alt="user" width="220"height="300px;">
											<img src="img/doctor.jpg" alt="user" width="200"height="300px;"><img src="img/doctor.jpg" alt="user" width="300"height="300px;">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<footer class="footer" style=" background:linear-gradient(white,#00a2d1);">
					<div class="container-fluid">
					<div class="copyright ml-center">
							<p >Copy&copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This  KIRA</p>
						</div>				
					</div>
				</footer>
			</div>
         <!-- END   amain part -->
		</div>
	</div>

</body>
</html>
<script src="js1/core/jquery.3.2.1.min.js"></script>
<script src="js1/core/bootstrap.min.js"></script>
<script src="js1/ready.min.js"></script>
<script src="js1/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

