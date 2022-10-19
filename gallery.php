<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="admin_employee.css">
	<title>DARIOM-10</title>
</head>
<body>
	
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="admin_index.html" class="brand"><img src='img/logoDAR.jpg' class='logo'></i>&nbsp;&nbsp;DAR-10</a>
		<ul class="side-menu">
			<li><a href="admin_index.html" class="active"><i class='bx bx-stats icon'></i> Dashboard</a></li>
			<li><a href="gallery.html" class="active"><i class='bx bx-archive icon'></i> Gallery</a></li>
			<li><a href="admin_profile.html" class="active"><i class='bx bx-user-circle icon'></i> Profile</a></li>
			<li class="divider" data-text="Manage">Manage</li>
			<li>
				<li><a href="calendar.html" class="active"><i class='bx bx-calendar icon'></i> Calendar</a></li>
				<li><a href="admin_employee.html" class="active"><i class='bx bx-group icon'></i> Employee</a></li>
				<li><a href="admin_leaverequest.html" class="active"><i class='bx bx-list-ul icon'></i></i> Leave Request</a></li>
				<li><a href="admin_leavecard.html" class="active"><i class='bx bx-archive icon'></i> Leave Card</a></li>
				<li><a href="gallery.html" class="active"><i class='bx bx-archive icon'></i> Gallery</a></li>
			</li>
			<li class="divider" data-text="Reports">Reports</li>
			<li><a href="admin_emptimesheet.html" class="active"><i class='bx bx-spreadsheet icon'></i> Employee Timesheets</a></li>
			<li><a href="admin_empleavehistory.html" class="active"><i class='bx bx-history icon'></i> Employee Leave History</a></li>
			

		</ul>
		<div class="ads">
			<div class="wrapper">
				<a href="#" class="btn-upgrade" onclick="myFunction()">Toggle dark mode</a>
			</div>
		</div>
	</section>
	<!-- SIDEBAR -->

	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu toggle-sidebar' ></i>
			<form action="#">
				<div class="form-group">
					<input type="text" placeholder="Search...">
					<i class='bx bx-search icon' ></i>
				</div>
			</form>
			<a href="#" class="nav-link">
				<i class='bx bxs-bell icon' ></i>
				<span class="badge"></span>
			</a>
			<span class="divider"></span>
			<div class="profile">
				<img src="./profile.png"  alt="">
				<ul class="profile-link">
					<li><a href="#"><i class='bx bxs-cog' ></i> Settings</a></li>
					<li><a href="#"><i class='bx bxs-log-out-circle' ></i> Logout</a></li>
				</ul>
			</div>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>

<br>	
<div>
			<figure>
	  			<img  src="img/img1.jpg">
	  			<img  src="img/img2.jpg">
	  			<img  src="img/img3.jpg">
                <figcaption>Congratulations to DARRO-10's dear PHINMA-COC and USTP OJTs for having successfully completed their internship program with us ❤ We hope you have enjoyed and learned much from your OJT journey.. Wishing you the best in your future endeavors!</figcaption>
              </figure>
<br>
              <figure>
                <img src="img/img4.jpg">
                <img src="img/img5.jpg">
                <img src="img/img6.jpg">
                <figcaption>Congratulations, DAR Region 10  for having awarded by the CSC in their  Appreciation Program for Government Frontliners and Workers for DAR's delivery of exemplary public service through the tireless commitment,resiliency and priceless contribution of its government frontliners and workers amidst the COVID-19 pandemic.</figcaption>
              </figure>
<br>
              <figure>
                <img src="img/img8.jpg">
                <img src="img/img7.jpg">
                <img src="img/img9.jpg">
                <figcaption>September 1, 2022. The commencement of the 122nd Philippine Civil Service Anniversary kicks off with the simultaneous Zumba session participated in by the various national and local government agencies, and afterwards followed by films-showing streamed via an online link. The DAR-10 Regional Office unites with all other civil servants in this month-long PCSA celebration.</figcaption>
              </figure>
</div>
<br>				
<figure>  
	<video width="400" controls>
		<source src="vid/vid.mp4" type="video/mp4">
	  </video>
	  
	  <video width="400" controls>
		<source src="vid/vid2.mp4" type="video/mp4">		
	  </video>
	  <figcaption>batch's 'OJT Journey and The ZumBayani ng DAR 10. In Celebration of 122nd Philippine Civil Service Anniversary</figcaption>
</figure>   
		</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="script.js"></script>
</body>
</html>