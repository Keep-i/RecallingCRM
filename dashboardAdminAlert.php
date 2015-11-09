<?php include 'header.php' ?>

	<body>
		<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
	
		<section>
			<aside class="main_menu">
				<img src="assets/Logo_TalentGarden_Dashboard.png">
				<img src="assets/Dashboard_Avatar.png">
				<h1>Mark Dulberg</h1>
				<h3>#ID 947562</h3>
				<ul>
					<a href="dashboardAdmin.php"><li>Campaigns</li></a>
					<a href="dashboardAdminTeam.php"><li>Team</li></a>
					<a href="dashboardAdminReport.php"><li>Reports</li></a>
					<a href="dashboardAdminAlert.php"><li class="active">Alert</li></a>
					<a href="#"><li>Settings</li></a>
				</ul>
				<a href="login.php">Logout <i class="fa fa-sign-out fa-lg"></i></a>
			</aside>
			<section class="main_content">
				
				<section class="ghostLabel cf">
					<div class="addDot">
						<i class="material-icons">add</i>
					</div>
					<p>add new alert</p>
				</section>
				
				<section class="label cf animated fadeInUp">
					<div class="labelName">Alert One</div>
					<a href="#"><div class="button">manage</div></a>
					<div class="labelInfo">
						<h3 class="ctr">ctr</h3>
						<p class="ctrValue">< 4,97%</p>
					</div>
				</section>
				
				<section class="label cf animated fadeInUp">
					<div class="labelName">Alert Two</div>
					<a href="#"><div class="button">manage</div></a>
					<div class="labelInfo">
						<h3 class="ctr">call/day</h3>
						<p class="ctrValue">< 460</p>
					</div>
				</section>
				
			</section>
		</section>
	
	<!-- Javascript Script Links -->
	
	<script type="text/javascript" src="js/retina.min.js"></script>
	
	</body>

</html>