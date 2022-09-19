<?php /* Template Name: contact-page*/?>
<?php
get_header();
?>

<?php
// $temp = 'contact-page';
// $page = get_page($temp);
// var_dump($page);

$slug = 'contact';
$cat = get_category_by_slug($slug);
$catID = $cat->term_id;
var_dump($catID);

$argmnd = array ('category' => $catID);
$post = get_posts($argmnd);
var_dump($post);
// echo $post;
				$content_post = get_post($post->ID);
				$content = $content_post->post_content;
				// var_dump($content);
echo $content->post_content;

?>
<h1>oISUHUDGH   OWD</h1>
<?php
get_footer();
?>