

<?php /* Template Name: sign-up-page*/?>
<?php
wp_head();



?>


<?php
global $wpdb;
$result = $wpdb->get_results ( "SELECT * FROM wp_users" );
foreach ( $result as $print ) {
?>
<?php
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
if ($username == $print->user_login){
    echo "
    
    <script>alert('already exist')</script>
    ";
    ?>
    <h1 style="text-align: center; text-transform: capitalize;">already exist</h1>
<?php
}else{
    $result = wp_create_user($username, $password, $email); 
        if(is_wp_error($result)){
            $error = $result->get_error_message();

        }else{
            $user = get_user_by('id', $result);
        }
    }  
}
?>
<section class="sign-up-section">
    <div class="main">
        <div class="form-section">
            <form action="" method="POST">
                <label for="">user name</label>
                    <input type="text" name="username" placeholder="name">
                <label for="">email</label>
                    <input type="email" name="email" placeholder="email">
                <label for="">password</label>
                    <input type="password" name="password" placeholder="password">
                <div class="submit-buttom">
                    <button type="submit">submit</button>
                </div>
            </form>
        </div>
        <div class="image-section">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-img.png" alt="img"> 
        </div>
    </div>
</section>
