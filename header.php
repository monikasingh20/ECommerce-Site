
	<div class="navbar navbar-inverse navbar-fixed-top ">
			<div class ="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href ="indexboot.php" class="navbar-brand">Lifestyle Store</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<?php
							if(isset($_SESSION['email_id']))
						{?>
						<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
						<li><a href="settingboot.php"><span class="glyphicon glyphicon-user"></span> Setting</a></li>
						<li><a href="logoutboot.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						<?php
						}	else
						{
						?>	
						<li><a href="signupboot.php"><span class="glyphicon glyphicon-user"></span>SignUp</a></li>
						<li><a href="loginboot.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						<?php
						}	
						?>	
					</ul>
				</div>	
			</div>	
	</div>