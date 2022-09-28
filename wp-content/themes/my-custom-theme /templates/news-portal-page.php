<?php /* Template Name: news-portal-page*/?>


<?php
get_header();
?>
    <section class="life-style-section">
        <div class="main-parent">

            <?php

                $slug = 'newsPortal';
                $cat = get_category_by_slug($slug);
                $catID = $cat->term_id;
//-------------------------------------- posts ----------------------------------------//
                $argmnd = array ('category' => $catID);
                $post = get_posts($argmnd);
                if ( have_posts() ){
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