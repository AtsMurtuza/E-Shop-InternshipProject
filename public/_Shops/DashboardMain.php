		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">E-Shop</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="#"><i class="fa fa-desktop"></i> Dashboard</a></li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-barcode"></i> Products <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="AddProducts.php"><i class="fa fa-plus"></i> Add Products</a></li>
                <li><a href="#"><i class="fa fa-pencil-square-o"></i> Manage Products</a></li>
				<li><a href="#"><i class="fa fa-rupee"></i> Product Pricing</a></li>
				<li><a href="#"><i class="fa fa-exchange"></i> Product Stock</a></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-briefcase"></i> Category <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="AddCategory.php"><i class="fa fa-plus"></i> Add Category</a></li>
                <li><a href="#"><i class="fa fa-pencil-square-o"></i> Manage Category List</a></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-check-square-o"></i> Orders <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-exclamation"></i> New Orders</a></li>
                <li><a href="#"><i class="fa fa-file-text"></i> Order History</a></li>
              </ul>
            </li>
			<li><a href="Shipping.php"><i class="fa fa-truck"></i> Shipping</a></li>
			<li><a href="#"><i class="fa fa-comments-o"></i> Feedback</a></li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bar-chart-o"></i> Analysis <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"> Price Fluctuation</a></li>
                <li><a href="#"> Shop Hits</a></li>
				<li><a href="#"> Order Feedback</a></li>
				<li><a href="#"> Wishlist Conversion</a></li>
				<li><a href="#"> Profitability</a></li>
				<li><a href="#"> Suggestion</a></li>
				<li><a href="#"> Sponsored Hits</a></li>
              </ul>
            </li>
			<li><a href="#"><i class="fa fa-credit-card"></i> Bank</a></li>
			<li><a href="#"><i class="fa fa-gears"></i> Shop Settings</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right navbar-user">
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
        </div>
      </nav>