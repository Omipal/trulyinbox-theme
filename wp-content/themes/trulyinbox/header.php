<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Trulyinbox
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'trulyinbox' ); ?></a>
    <div class="combine">
    <!--Header Start-->
<header class="header">
    <div class="container__nav">
        <div class="header__row flex" id="myHeader">
        <?php $header_logo = get_field("header_logo", "option"); 
                    $logo_url = wp_get_attachment_image_src($header_logo, 'full');
                        if(!empty($logo_url)){
        ?>    
        <div class="header__logo">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo $logo_url[0]; ?>" alt="TrulyInbox"></a>
        </div>
        <?php } ?>   
        <nav class="header__nav flex" id="nav-links">
            <?php 
                wp_nav_menu( array(
                    'container' => false,
                    'menu' => 'primary-menu',
                    'menu_class' => 'header__nav-list flex',
                    'add_li_class'  => 'header__nav-item',
                    'add_a_class'  => 'header__nav-link',
                    ) );
            ?>
             <?php 
             $button_link = get_field("button_link", "option");
             $button_text = get_field("button_text", "option"); 
             if(!empty($button_link) || !empty($button_text) ){

              
             ?>
            <ul class="header__btn">
                <li class="header__nav-item"><a href="<?php echo  $button_link;  ?>" class="header__nav-link header__nav-link--cta"><?php echo $button_text; ?></a></li>
            </ul>
            <?php  } ?>
        </nav>
        <a href="#" class="nav-toggle header__nav-link" id="nav-toggle"><i class="fa-solid fa-bars"></i></a>
        </div>
    </div>
</header>

