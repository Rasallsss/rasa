<?php /* Template Name: contact-page*/?>
<?php
get_header();
?>
<section class="contact-us">
	<div class="main-contact">
		<div class="headding-section">
		<h1><?php echo the_title();?></h1>
		</div>
	<?php
if (have_posts()) {
	while ( have_posts()) :

		the_post();
		// the_title();
		the_content();
	endwhile;
}
?>
	</div>
	
</section>
<?php
get_footer();
?>