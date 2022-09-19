<?php
	/**
	 * The main template file.
	 */
?>

<?php
	get_header();
?>

<?php



if (have_posts()) {
	while ( have_posts()) :

		the_post();
		the_title();
		// the_content();
	endwhile;
}

?>
	<section class="image-section">
		<div class="main-image-sec">
			<div class="bg-image">

				<?php
				$slug = 'tech';
					$cat = get_category_by_slug($slug);
					$catID = $cat->term_id;
				// var_dump($catID);

				//-------------------------------------- posts ----------------------------------------//


				$argmnd = array ('category' => $catID,'numberposts'=> 1,'orderby' => 'post_date','order'=> 'DESC');
				$post = get_posts($argmnd);
				// var_dump($post[0]);

				//-------------------------------------- category name ----------------------------------------//
			
				$category = get_cat_name($catID);
				// var_dump($category);

				//-------------------------------------- date ----------------------------------------//

				$orgDate = $post[0]->post_date;  
				$newDate = date("F d  Y", strtotime($orgDate));

				//-------------------------------------- admin ----------------------------------------//
				
				$user_id = $post[0]->post_author;
				// var_dump($user_id);
				$user =  get_user_by('ID', $user_id);
				// var_dump($user);
				
				//-------------------------------------- image/content ----------------------------------------//

				$content_post = get_post($post[0]->ID);
				$content = $content_post->post_content;
				// var_dump($content);
				?>	

				<?php echo $content; ?>

				<div class="content-section">
						<div class="btn">
							<a href="http://localhost/wordpress/index.php/tech-page/"><?php echo $category;?></a>
						</div>
							<h1> <?php echo $post[0]->post_title ;?> </h1>
						<div class="cal-date">
							<div class="date">
								<i class="fa-solid fa-calendar-days"></i>
								<dfn> <?php echo $newDate; ?></dfn>
							</div>
							<div class="demo-adm">
							<i class="fa-solid fa-user"></i>
								<dfn> <?php	echo $user->user_login;?></dfn>
							</div>
						</div>
					</div>
				</div>
			<div class="flex-image-small">
				<div class="img-1 img">

					<?php

				//-------------------------------------- select slug/post ----------------------------------------//

						$slug = 'music';
						$cat = get_category_by_slug($slug);
						$catID = $cat->term_id;
						// var_dump($catID);

				//-------------------------------------- posts ----------------------------------------//


						$argmnd = array ('category' => $catID,'numberposts'=> 1,'orderby' => 'post_date','order'=> 'DESC',);
						$post = get_posts($argmnd);
						// var_dump($post[0]);

				//-------------------------------------- category name ----------------------------------------//
			
						$category = get_cat_name($catID);
						// var_dump($category);


				//-------------------------------------- date ----------------------------------------//

						$orgDate = $post[0]->post_date;  
						$newDate = date("F d  Y", strtotime($orgDate));


				//-------------------------------------- admin ----------------------------------------//
				
						$user_id = $post[0]->post_author;
						// var_dump($user_id);
						$user =  get_user_by('ID', $user_id);
						// var_dump($user);

				//-------------------------------------- image/content ----------------------------------------//

						$content_post = get_post($post[0]->ID);
						$content = $content_post->post_content;
						// var_dump($content);
					?>


							<?php echo $content; ?>


					<div class="content-section">
						<div class="btn">
							<a href=""><?php echo $category;?></a>
						</div>
						<h1> <?php echo $post[0]->post_title; ?></h1>
						<div class="cal-date">
							<div class="date">
								<i class="fa-solid fa-calendar-days"></i>
								<dfn>  <?php echo $newDate; ?></dfn>
							</div>
							<div class="demo-adm">
							<i class="fa-solid fa-user"></i>
								<dfn><?php	echo $user->user_login;?></dfn>
							</div>
						</div>
					</div>
				</div>
				<div class="img-2 img">


					<?php

				//-------------------------------------- select slug/post ----------------------------------------//

					
					$cat = get_category_by_slug('fashion');
					$catID = $cat->term_id;
					// var_dump($catID);

				//-------------------------------------- posts ----------------------------------------//


					$argmnd = array ('category' => $catID,'numberposts'=> 1,'orderby' => 'post_date','order'=> 'DESC',);
					$post = get_posts($argmnd);
					// var_dump($post[0]);

				//-------------------------------------- category name ----------------------------------------//
			
					$category = get_cat_name($catID);
					// var_dump($category);
				//-------------------------------------- date ----------------------------------------//

					$orgDate = $post[0]->post_date;  
					$newDate = date("F d  Y", strtotime($orgDate));


				//-------------------------------------- admin ----------------------------------------//

					$user_id = $post[0]->post_author;
					// var_dump($user_id);
					$user =  get_user_by('ID', $user_id);
					// var_dump($user);

				//-------------------------------------- image/content ----------------------------------------//

					$content_post = get_post($post[0]->ID);
					$content = $content_post->post_content;
					// var_dump($content);

					?>


						<?php echo $content; ?>


					<div class="content-section">
						<div class="btn">
							<a href=""><?php echo $category;?></a>
						</div>
						<h1> <?php echo $post[0]->post_title; ?></h1>
						<div class="cal-date">
							<div class="date">
								<i class="fa-solid fa-calendar-days"></i>
								<dfn><?php echo $newDate; ?></dfn>
							</div>
							<div class="demo-adm">
							<i class="fa-solid fa-user"></i>
								<dfn><?php echo $user->user_login; ?></dfn>
							</div>
						</div>
					</div>
				</div>
				<div class="img-3 img">


					<?php

				//-------------------------------------- select slug/post ----------------------------------------//

	
					$cat = get_category_by_slug('lifestyle');
					$catID = $cat->term_id;
					// var_dump($catID);

				//-------------------------------------- posts ----------------------------------------//


					$argmnd = array ('category' => $catID,'numberposts'=> 1,'orderby' => 'post_date','order'=> 'DESC',);
					$post = get_posts($argmnd);
					// var_dump($post[0]);

				//-------------------------------------- category name ----------------------------------------//
			
					$category = get_cat_name($catID);
					// var_dump($category);


				//-------------------------------------- date ----------------------------------------//

					$orgDate = $post[0]->post_date;  
					$newDate = date("F d  Y", strtotime($orgDate));


				//-------------------------------------- admin ----------------------------------------//

					$user_id = $post[0]->post_author;
					// var_dump($user_id);
					$user =  get_user_by('ID', $user_id);
					// var_dump($user);

				//-------------------------------------- image/content ----------------------------------------//

					$content_post = get_post($post[0]->ID);
					$content = $content_post->post_content;
					// var_dump($content);

					?>


						<?php echo $content; ?>

					<div class="content-section">
						<div class="btn">
							<a href=""><?php echo $category;?></a>
						</div>
						<h1><?php echo $post[0]->post_title; ?></h1>
						<div class="cal-date">
							<div class="date">
								<i class="fa-solid fa-calendar-days"></i>
								<dfn><?php echo $newDate; ?></dfn>
							</div>
							<div class="demo-adm">
							<i class="fa-solid fa-user"></i>
								<dfn><?php echo $user->user_login; ?></dfn>
							</div>
						</div>
					</div>
				</div>
				<div class="img-4 img">

					<?php

				//-------------------------------------- select slug/post ----------------------------------------//


					$cat = get_category_by_slug('travel');
					$catID = $cat->term_id;
					// var_dump($catID);

				//-------------------------------------- posts ----------------------------------------//


					$argmnd = array ('category' => $catID,'numberposts'=> 1,'orderby' => 'post_date','order'=> 'DESC',);
					$post = get_posts($argmnd);
					// var_dump($post[0]);
				//-------------------------------------- category name ----------------------------------------//
			
					$category = get_cat_name($catID);
					// var_dump($category);

				//-------------------------------------- date ----------------------------------------//

					$orgDate = $post[0]->post_date;  
					$newDate = date("F d  Y", strtotime($orgDate));


				//-------------------------------------- admin ----------------------------------------//

					$user_id = $post[0]->post_author;
					// var_dump($user_id);
					$user =  get_user_by('ID', $user_id);
					// var_dump($user);

				//-------------------------------------- image/content ----------------------------------------//

					$content_post = get_post($post[0]->ID);
					$content = $content_post->post_content;
					// var_dump($content);

					?>


						<?php echo $content; ?>

					<div class="content-section">
						<div class="btn">
							<a href=""><?php echo $category;?></a>
						</div>
						<h1><?php echo $post[0]->post_title; ?></h1>
						<div class="cal-date">
							<div class="date">
								<i class="fa-solid fa-calendar-days"></i>
								<dfn><?php echo $newDate;?></dfn>
							</div>
							<div class="demo-adm">
							<i class="fa-solid fa-user"></i>
								<dfn><?php echo $user->user_login;?></dfn>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
	get_footer();
?>
