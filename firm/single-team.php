<?php get_header(); ?>
<div id="page">

<div id="header" role="banner">
	<div id="headerimg">
    <?php echo do_shortcode('[hfe_template id="49"]'); ?>
	</div>
</div>
<hr>
<?php while (have_posts()) : the_post(); ?>
<section class="elementor-section elementor-top-section elementor-element elementor-section-boxed content" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element" data-element_type="column">
                <div class="elementor-column-wrap">
                    <div class="elementor-widget-wrap contact-links text-center">
                        <?php echo the_post_thumbnail('large', array('class'=>'img-fluid')); ?>
                        <?php   
                            $email = get_field('email');
                            $phone = get_field('phone_number');
                            if($email != ''):
                                echo '<a href="mailto:'.$email.'" title="Email '.get_the_title().'"><i class="fas fa-envelope-square fa-3x"></i></a>';
                            endif;
                            if($phone != ''):
                                echo '<a href="tel:'.$phone.'" title="Call '.get_the_title().'"><i class="fas fa-phone-square fa-3x"></i></a>';
                            endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-75 elementor-top-column elementor-element" data-element_type="column">
                <div class="elementor-column-wrap">
                    <div class="elementor-widget-wrap">
                        <h1><?php echo get_the_title(); ?></h1>
                        <h2><?php echo do_shortcode('[acf field="title"]'); ?></h2>
                        <?php echo the_content(); ?>
                        <?php
                            $areas = get_field('areas_of_practice');
                            $associations = get_field('professional_associations');
                            $education = get_field('education');
                            if($areas != ''):
                                echo '<h3>Areas of Expertise</h3>';
                                echo '<div class="team-section">'.$areas.'</div>';
                                echo '<br>';
                            endif;
                            if($associations != ''):
                                echo '<h3>Professional Associations</h3>';
                                echo '<div class="team-section">'.$associations.'</div>';
                                echo '<br>';
                            endif;
                            if($education != ''):
                                echo '<h3>Education</h3>';
                                echo '<div class="team-section">'.$education.'</div>';
                                echo '<br>';
                            endif;
                        ?>
                        <h3 class="text-center">Request A Consultation</h3>
                        <p class="text-center">You can complete the following form to request a consultation.</p>
                        <?php echo do_shortcode('[fluentform id="6"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<div id="footer" role="contentinfo">
<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
<?php echo do_shortcode('[hfe_template id="60"]'); ?>
</div>
</div>
<?php get_footer(); ?>
