

<?php /* Template Name: sign-up-page*/?>
<?php
wp_head();
?>
<section class="sign-up-section">
    <div class="main">
        <div class="form-section">
            <form action="">
                <label for="">name</label>
                    <div class="main-perent">
                        <div class="first-name">
                            <input type="text" name="Fname">
                        </div>
                        <div class="last-name">
                            <input type="text" name="Lname">
                        </div>
                    </div>
                    <label for="">email</label> <br>
                        <input type="email" name="email"> <br>
                    <label for="">password</label><br>
                        <input type="password" name="password">

                    <div class="submit-buttom">
                        <button type="button">submit</button>
                    </div>
            </form>
        </div>
        <div class="image-section">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-img.png" alt="img"> 
        </div>
    </div>
</section>