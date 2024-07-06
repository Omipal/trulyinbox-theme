<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Trulyinbox
 */

?>
     <!--footer Section-->
     <footer class="footer">
        <div class="container">
            <div class="footer__inner flex">
            <?php $copyright_text = get_field("copyright_text", "option"); 
                if(!empty($copyright_text)){ ?>  
            <p class="footer__text"><?php echo $copyright_text; ?></p>
            <?php } ?>
            <?php 
                wp_nav_menu( array(
                    'container' => false,
                    'menu' => 'footer-menu',
                    'menu_class' => 'footer__links flex',
                    'add_li_class'  => 'footer__link',
                    ) );
            ?>
        </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>



 

