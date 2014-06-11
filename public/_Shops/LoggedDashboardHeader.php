<header class="navbar">
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<header id="navigationHeader" class="navbar-header">
			<a class="navbar-brand" href="Home.php">E-Shop</a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapsibleMenu">
				<span class="sr-only">Toogle</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</header>
		<section class="collapse navbar-collapse" id="collapsibleMenu">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown messages-dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-check-square-o"></i> Orders <span class="badge">7</span> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li class="dropdown-header">7 New Orders</li>
						<li class="message-preview">
						<a href="#">
							<span class="avatar"><img src="http://placehold.it/50x50"></span>
							<span class="name">John Smith:</span>
							<span class="message">Hey there, I wanted to ask you something...</span>
							<span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
						</a>
						</li>
						<li class="divider"></li>
						<li><a href="#">View Inbox <span class="badge">7</span></a></li>
					</ul>
				</li>
				<li class="dropdown alerts-dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Default <span class="label label-default">Default</span></a></li>
						<li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
						<li class="divider"></li>
						<li><a href="#">View All</a></li>
					</ul>
				</li>
				<li class="dropdown user-dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Mr. Sugarwala <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
						<li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
						<li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
					</ul>
				</li>
			</ul>
		</section>
	</nav>
</header>

<section id="sideNavigation" style="z-index:1000;position:fixed;left:0;top:55px;border:2px solid black;">
	<ul>
		<li><a href="#"><span class="fa fa-desktop">Dashboard</a></li>
	</ul>
</section>