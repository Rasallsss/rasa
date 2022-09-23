<?php /* Template Name: news-daily*/?>
<?php
get_header();
?>


<section class="news-daily-section">
    <div class="main-perent">

        <?php
            
            $tittle = $_POST['tittle'];
            $content = $_POST['content'];
            $cat = $_POST['category'];
                // Gather post data.
            // $cate = wp_insert_category($cat);
                $category = get_cat_ID( $cat );
        
$my_post = array(
	'post_title'    => $tittle,
	'post_content'  => $content,
	'post_status'   => 'publish',
	'post_author'   => 1,
	'post_category' => array($category)
);

// Insert the post into the database.
wp_insert_post( $my_post );

        ?>
       <form action="" method="POST" class="form">
            <div class="title">
                <h3>tittle</h3>
                <input type="text" name="tittle">
            </div>
            <div class="title category">
                <h3>category</h3>
                <input type="text" name="category">
            </div>
            <div class="content">
                <h3>content</h3>
                <textarea name="content" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="buttons-main">
                <div class="upload-image">
                    <button type="button">Image : Select image</button>
                </div>
                <div class="submit-news">
                    <button type="submit">submit</button>
                </div>
            </div>

       </form>
    </div>
</section>











<?php
get_footer();
?>
$tittle = $_POST['tittle'];
                $category = $_POST['category'];
                $content = $_POST['content'];
                $insert = wp_insert_post($content, $title, $category);