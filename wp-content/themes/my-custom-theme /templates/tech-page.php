<?php /* Template Name: tech-page*/?>

<?php   
get_header();
?>
<section class="tech-section">
        <div class="main-parent">

            <?php

                $slug = 'tech';
                $cat = get_category_by_slug($slug);
                $catID = $cat->term_id;
                // var_dump($catID);

                //-------------------------------------- posts ----------------------------------------//

                $argmnd = array ('category' => $catID);
                $post = get_posts($argmnd);
                // var_dump($post);
                // echo $post;

				$content_post = get_post($post->ID);
				$content = $content_post->post_content;
                $images = $content->post_mime_type;
				// var_dump($content);

                // $args = array(
                //     'post_type' => 'attachment',
                //     'post_mime_type' => 'image',
                //     'numberposts' => 1,
                //     'orderby' => 'menu_order',
                //     'order' => 'ASC',
                //     'post_parent' => $catID
                // );
                // $images = get_posts($args);

                if ($post > 0){
                    // echo 'its currect';
                    foreach($post as $eachPost){
                        // var_dump($eachPost);
                        ?>
                            <div class="flex-section">
                                <div class="headding-section">
                                    <h1><?php echo $eachPost->post_title?></h1>
                            </div>
                            <div class="image-section-1">
                                <?php echo $eachPost->post_content; ?>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
        </div>
    </section>

<?php   
get_footer();
?>