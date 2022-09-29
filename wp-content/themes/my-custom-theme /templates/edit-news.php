<?php /* Template Name: edit news*/?>

<?php

    get_header();

?>
<?php

    $myposts = get_posts( array(
        'post_type' => get_post_types(),
        'post_status' => 'publish',
        'numberposts' => -1,
    ) );
        // var_dump($myposts);

        $categories = get_categories( $myposts );
        
        $category_name = get_cat_name( $categories );
        var_dump( $category_name );

?>


<div class="container">
        <table>
            <thead>
                <tr>
                    <th>images</th>
                    <th>title</th>
                    <th>calegory</th>
                    <th>edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ( $myposts ){
                        foreach (  $myposts as $post  ) {
                            ?>
                            <tr>
                            <td></td>
                            <td><?php echo $post->post_title; ?></td>
                            <td><?php echo $post->post_title; ?></td>

                            </tr>
                            <?php
                        }
                    }




                ?>
        </table>
</div>

<?php

$args = array(
	'numberposts'	=> 20,
	'category'		=> 4
);
$my_posts = get_posts( $args );
var_dump($my_posts );
if( ! empty( $my_posts ) ){
	$output = '<ul>';
	foreach ( $my_posts as $p ){
		$output .= '<li><a href="' . get_permalink( $p->ID ) . '">' 
		. $p->post_title . '</a></li>';
	}
	$output .= '</ul>';
}


?>
<ul>
	<?php
	


	if ( $myposts ) {
		foreach ( $myposts as $post ) : 
			setup_postdata( $post ); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php
		endforeach;
		wp_reset_postdata();
	}
	?>
</ul>