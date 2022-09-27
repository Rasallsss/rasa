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
                $cat_ID = get_cat_ID( $cat );
                $my_post = array(
                    'post_title'    => $tittle,
                    'post_content'  => $content,
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_category' => array($cat_ID)
                );

                // Insert the post into the database.
                 wp_insert_post( $my_post );
                $categories = get_categories( array(
                    'orderby' => 'name',
                    'order'   => 'DESC',
                ) );
                // var_dump($categories);
                $remove_category = array (
                    'contact',
                    'Neque',
                    'search',
                    'Uncategorized'
                );                   
        ?>
       <form action="" method="POST" class="form">
            <div class="title">
                <h3>tittle</h3>
                <input type="text" name="tittle" class="input-1">
            </div>
            <div class="category">
                <h3>category</h3>
                <select name="category">
                <?php
                   
                    if ( $categories > 0 ){
                       
                        foreach ( $categories as $category ) { 
                           
                            if (in_array($category->cat_name, $remove_category)){
                                   
                            }else{
                            ?>
                                <option><?php echo $category->cat_name;?></option>
                            <?php 
                            }
                        }
                    }
                ?>
                </select>
            </div>
            <div class="content">
                <h3>content</h3>
                <textarea name="content" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="buttons-main">
                <div class="upload-image">
                        <input type="button" value="Select : Image" id="upload_image" class="input"/>
                        <input type="hidden" name="attachment_id" class="wp_attachment_id" value="" /> </br>
                        <img src="" class="image" style="display:none;margin-top:10px;"/>
                </div>
                <div class="submit-news">
                    <button type="submit">submit</button>
                </div>
            </div>

       </form>
    </div>
    <!-- <label for="dog-names">Choose a dog name:</label>
    <select name="dog-names" id="dog-names">
    <option value="rigatoni">Rigatoni</option>


<option value="dave">Dave</option>


<option value="pumpernickel">Pumpernickel</option>


<option value="reeses">Reeses</option>
    
</section> -->







<?php
get_footer();
?>  

