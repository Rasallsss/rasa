
<?php /** contains the header */ ?>




<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>News Portal</title>

</head>
<?php 
	wp_head();
	?>
<body>
	<header class="main-section">
		<div class="logo-section">
			<a href="http://localhost/wordpress/index.php/">
				<h1>news <span>portal</span> </h1>
			</a>
		</div>
		<nav class="menu-bar">
			<ul class="menu-items">
				<li class="home-icon">
					<a class="active" href="http://localhost/wordpress/index.php/">
					<i class="fa-solid fa-house"></i>
					</a>
				</li>
			</ul>
			<?php
			
				if ( has_nav_menu('primary')):

					wp_nav_menu([
						'theme_location'  => 'primary',
						'container'     => false,
						'menu_class'    => '',
						'menu_id'       => '',
						'depth'         => 3
					]);

				else :

					echo  'menu';
					
				endif;
			?>
			<div class="sing-in" onclick="muFunction()">
				<button type="button">login</button>
			</div>
			<div class="login-section">
				<div class="main-form">
				<h2>login to your account</h2>
				<form action="http://localhost/wordpress/wp-login.php " method="POST">
					<label for="">user name</label>
					<input type="text" name="user" placeholder="name"> <br>
					<label for="">password</label> 
					<input type="password" name="password" placeholder="password"> <br>
					<input type="submit" name="submit">
				  </form>
				  <div class="sign-up">
					<?php
						$slug = 'sign-up';
						$link = get_permalink( get_page_by_path($slug) );
					?>
					<p>please
					<a href="<?php echo $link;?>">sign up</a> your account </p>
				  </div>
				</div>
				</div>
			<div class="search-box">
				<i class="fa-solid fa-magnifying-glass"></i>
			<form action="">
				<input type="search" name="search" >
			</form>
			
			</div>
		</nav>
	</header>

	<!-- http://localhost/wordpress/index.php/sign-up/ -->

	<!-- http://localhost/wordpress/wp-login.php -->