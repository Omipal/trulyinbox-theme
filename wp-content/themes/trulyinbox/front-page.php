<?php 
/*
  Template Name: Home Page
*/
get_header(); 
?>   
    <!--Hero Section-->
<?php $hero_section = get_field('hero_section'); ?>      
    <section class="hero">
        <div class="container">
            <div class="hero__content">
                <div class="hero__caption flex">
                <?php if(!empty($hero_section['section_title'])) : ?>    
                <h1 class="hero__title"><?php echo $hero_section['section_title']; ?></h1>
                <?php endif; ?>
                <?php if(!empty($hero_section['sub_title'])) : ?> 
                <p class="hero__subtitle"><?php echo $hero_section['sub_title']; ?></p>
                <?php endif; ?>
            </div>
            <div class="hero__contact flex">
                <div class="hero__form flex">
                    <input type="email" placeholder="Enter your work email" class="hero__input">
                    <?php if(!empty($hero_section['button_text']) || !empty($hero_section['button_image']['url'])) : ?> 
                    <button class="hero__button primary-btn flex"><?php echo $hero_section['button_text']; ?><span><img src="<?php echo $hero_section['button_image']['url']; ?>" alt="Arrow"></span></button>
                    <?php endif; ?>
                </div>
                <div class="hero__trial flex">
                <?php if(!empty($hero_section['free_image']['url']) || !empty($hero_section['free_text'])) : ?> 
                    <p class="hero__trial-info flex"><img src="<?php echo $hero_section['free_image']['url']; ?>" alt="Free"><?php echo $hero_section['free_text']; ?></p>
                    <?php endif; ?>
                    <?php if(!empty($hero_section['credit_image']['url']) || !empty($hero_section['credit_text'])) : ?> 
                    <p class="hero__trial-info flex"><img src="<?php echo $hero_section['credit_image']['url']; ?>" alt="Card"><?php echo $hero_section['credit_text']; ?></p>
                    <?php endif; ?>
                </div>
            </div>
            </div>
        </div>
    </section>
<!--Analytics Section-->
<?php $analytics_section = get_field('analytics_section'); ?>     
    <section class="analytics flex">
        <div class="analytics__left">
        <?php if(!empty($analytics_section['email_image']['url'])) : ?> 
            <div class="analytics__email">
                <img src="<?php echo $analytics_section['email_image']['url']; ?>" alt="Analytics">
            </div>
            <?php endif; ?>
            <?php if(!empty($analytics_section['warm_image']['url'])) : ?> 
            <div class="analytics__warm">
                <img src="<?php echo $analytics_section['warm_image']['url']; ?>" alt="warm">
            </div>
            <?php endif; ?>
        </div>
        <?php if(!empty($analytics_section['center_image']['url'])) : ?> 
        <div class="analytics__center">
            <img src="<?php echo $analytics_section['center_image']['url']; ?>" alt="Detail">
        </div>
        <?php endif; ?>
        <div class="analytics__right">
        <?php if(!empty($analytics_section['total_image']['url'])) : ?> 
            <div class="analytics__total">
                <img src="<?php echo $analytics_section['total_image']['url']; ?>" alt="Total">
            </div>
            <?php endif; ?>
            <?php if(!empty($analytics_section['address_image']['url'])) : ?>
            <div class="analytics__address">
                <img src="<?php echo $analytics_section['address_image']['url']; ?>" alt="Address">
            </div>
            <?php endif; ?>
        </div>
    </section>  
</div>
    <!--Main-->
<main class="main">
    <!--Features Section-->
<?php $features_section = get_field('features_section'); ?>      
    <section class="features">
        <div class="container">
        <div class="features__wrap flex">
        <div class="features__info flex">
        <?php if(!empty($features_section['section_title'])) : ?>    
            <h2 class="features__title"><?php echo $features_section['section_title']; ?></h2>
            <?php endif; ?>
            <?php if(!empty($features_section['description'])) : ?>      
            <p class="features__description"><?php echo $features_section['description']; ?></p>
            <?php endif; ?>
            <?php if(!empty($features_section['button_text']) || !empty($features_section['button_image']['url'])) : ?> 
            <button class="features__button primary-btn flex"><?php echo $features_section['button_text']; ?> <span><img src="<?php echo $features_section['button_image']['url']; ?>" alt="Arrow"></span></button>
            <?php endif; ?>
        </div>
        <div class="features__content flex">
            <div class="features__item">
                <div class="features__caption flex-col">
                <?php if(!empty($features_section['features_content_title_one'])) : ?>      
                <h3 class="features__title"><?php echo $features_section['features_content_title_one']; ?></h3>
                <?php endif; ?>
                <?php if(!empty($features_section['features_content_description_one'])) : ?>  
                <p class="features__description"><?php echo $features_section['features_content_description_one']; ?></p>
                <?php endif; ?>
            </div>
            <!-- Include image here -->
            <?php if(!empty($features_section['features_content_image_one']['url'])) : ?> 
                <div class="features__img features__img--first">
                <img src="<?php echo $features_section['features_content_image_one']['url']; ?>" alt="Project">
                </div>
            <?php endif; ?>    
            </div>
            <div class="features__item">
                <div class="features__caption flex-col">
                <?php if(!empty($features_section['features_content_title_two'])) : ?>       
                <h3 class="features__title"><?php echo $features_section['features_content_title_two']; ?></h3>
                <?php endif; ?>
                <?php if(!empty($features_section['features_content_description_two'])) : ?>
                <p class="features__description"><?php echo $features_section['features_content_description_two']; ?></p>
                <?php endif; ?>
                </div>
                <!-- Include image here -->
                <?php if(!empty($features_section['features_content_image_two']['url'])) : ?> 
                <div class="features__img features__img--second">
                    <img src="<?php echo $features_section['features_content_image_two']['url']; ?>" alt="Project">
                </div>
                <?php endif; ?>  
            </div>
            <div class="features__item">
                <div class="features__caption flex-col">
                <?php if(!empty($features_section['features_content_title_three'])) : ?>       
                <h3 class="features__title"><?php echo $features_section['features_content_title_three']; ?></h3>
                <?php endif; ?>
                <?php if(!empty($features_section['features_content_description_three'])) : ?>
                <p class="features__description"><?php echo $features_section['features_content_description_three']; ?></p>
                <?php endif; ?>
            </div>
                <!-- Include image here -->
                <?php if(!empty($features_section['features_content_image_three']['url'])) : ?> 
                <div class="features__img features__img--third">
                    <img src="<?php echo $features_section['features_content_image_three']['url']; ?>" alt="Project">
                </div>
                <?php endif; ?>
            </div>
            </div>
        </div>
        </div>
    </section>
<!--Cta Section-->
<?php $cta_section = get_field('cta_section'); ?>   
    <section class="cta">
        <div class="container">
        <div class="cta__inner flex-col">
        <?php if(!empty($cta_section['image']['url'])) : ?> 
            <img src="<?php echo $cta_section['image']['url']; ?>" alt="Email">  
            <?php endif; ?>   
    <?php if(!empty($cta_section['section_title'])) : ?>     
        <h2 class="cta__title"><?php echo $cta_section['section_title']; ?></h2>
    <?php endif; ?>
    <?php if(!empty($cta_section['button_text'])) : ?>    
        <button class="cta__button primary-btn"><?php echo $cta_section['button_text']; ?></button>
    <?php endif; ?>   
        </div>
        </div>
    </section>
    </main>
<?php get_footer(); ?>    