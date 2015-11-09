<?php include 'header.php' ?>

	<body>
		<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
	
		<form class="login_form" method="POST">
			<img src="assets/loginAreaLogo.png" alt="Recalling CRM">
			<input type="text" id="user_name" name="user_name" placeholder="username">
			<input type="password" id="user_password" class="error" name="user_password" placeholder="password">
			<p class="error">wrong password</p>
			<button type="submit" class="error">Log in</button>
			<a href="reset_password.php">forgot password</a>
		</form>
	
	<!-- Javascript Script Links -->
	
	<script type="text/javascript" src="js/retina.min.js"></script>
	
	</body>

</html>