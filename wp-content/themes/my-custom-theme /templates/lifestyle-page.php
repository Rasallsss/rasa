<?php /* Template Name: lifestyle-page*/?>
<?php
get_header();
?>

    <section class="life-style-section">
        <div class="main-parent">

            <?php

                $slug = 'lifestyle';
                $cat = get_category_by_slug($slug);
                $catID = $cat->term_id;
                // var_dump($catID);

                //-------------------------------------- posts ----------------------------------------//

                $argmnd = array ('category' => $catID);
                $post = get_posts($argmnd);
                // var_dump($post);
                // echo $post;

				// $content_post = get_post($post->ID);
				// $content = $content_post->post_content;
				// // var_dump($content);

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

