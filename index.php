<!DOCTYPE>
<html>
<head>
	<title> My Online Shop</title>
	<link rel="stylesheet" href="styles/style.css" media="all">
</head>
<body>
<div class="main_wrapper">
	<div class="header_wrapper">
		<img id="logo" src="images/logo1.png">
		<img id="banner" src="images/banner1.png">
		<div></div>
	</div>
	<div class="menubar">
		<ul id="menu">
			<li><a href="#">Home</a></li>
			<li><a href="#">All Products</a></li>
			<li><a href="#">My Account</a></li>
			<li><a href="#">Sign Up</a></li>
			<li><a href="#">Shopping Carts</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
		<div id="form">
                    <form method="get" action="index.php" enctype="multipart/form-data">
                    <input type="text" class="txtSearch" name="user_query" placeholder="Search a Product"/>
                    <input type="submit" class="search" name="search" value="search"/>
                    </form>
                </div>

	</div>


	<div class="content_wrapper">
	<div id="sidebar">This is sidebar</div>
	<div id="content_area">This is content area</div>
	<div id="footer">This is footer</div>
</div>
</body