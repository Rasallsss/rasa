<?php /* Template Name: edit news*/?>

<?php

    get_header();

?>
<?php

    $myposts = get_posts( array(
        'post_status' => 'publish',
        'numberposts' => -1,
        'orderby'     => 'date',
        'order'       => 'DESC',

    ) );
        $categories = get_categories( $myposts );
        

?>


<div class="container">
        <table>
            <thead>
                <tr>
                    <th >images</th>
                    <th>title</th>
                    <th>calegory</th>
                    <th>date</th>
                    <th>edit</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <?php
                    if ( $myposts ){
                        foreach (  $myposts as $post  ) {
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post ), 'single-post-thumbnail' );
                            ?>
                            <td><img src="<?php echo $image[0];?>" alt=""></td>
                            <td><?php echo $post->post_title; ?></td> 
                            <?php
                                  $category = get_the_category($post);
                                  ?>
                              
                                  <td><?php echo $category[0]->cat_name; ?></td>
                            <?php
                                  $orgDate = $post->post_date;  
                                  $newDate = date("F d  Y", strtotime($orgDate));
                            ?>                                  
                                <td><?php echo $newDate; ?></td>
                                  <td>
                                    <?php
                                        $slug = 'news-daily';
						                $link = get_permalink( get_page_by_path($slug) );
                                    ?>
                                    <a href="<?php echo $link;?>" >
                                        <i class="fa-solid fa-pen-to-square "></i>
                                    </a>
                                  </td>  
                            </tr>
                        <?php
                        }
                    }




                ?>
        </table>
</div>

