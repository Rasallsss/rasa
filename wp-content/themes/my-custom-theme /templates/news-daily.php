<?php /* Template Name: news-daily*/?>
<?php
get_header();
?>


<section class="news-daily-section">
    <div class="main-perent">
        <?php
 //------------------ category getting the select area ----------------------//
        $categories = get_categories( array(
            'orderby' => 'name',
            'order'   => 'DESC',
        ) );
        // var_dump($categories);
        $remove_category = array (
            'contact',
            'Neque',
            'search',
            'new',
            'Uncategorized'
        );    
        ?>
    
        <form method="post" enctype="multipart/form-data" class="form">
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
            <div class="featured-img">
                <div class="select-img">
                    <input type="file" name="thumbnail" id="thumbnail" class="custom-file-input">
                </div>
                <div class="submit-btn">
                    <button type="submit">submit</button>
                </div>
            </div>
        </form>
    </div>
</section>
<?php
get_footer();
?>  

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>