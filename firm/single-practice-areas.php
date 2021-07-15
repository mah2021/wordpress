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
            <div class="elementor-column elementor-col-75 elementor-top-column elementor-element" data-element_type="column">
                <div class="elementor-column-wrap">
                    <div class="elementor-widget-wrap">
                        <h1><?php echo get_the_title(); ?></h1>
                        <h2><?php echo do_shortcode('[acf field="blurb"]'); ?></h2>
                        <?php echo the_content(); ?>
                        <h3 class="text-center">Request A Consultation</h3>
                        <p class="text-center">You can complete the following form to request a consultation.</p>
                        <?php echo do_shortcode('[fluentform id="4"]'); ?>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element" data-element_type="column">
                <div class="elementor-column-wrap">
                    <div class="elementor-widget-wrap">
                        <h3>All Pactice Areas</h3>
                        <?php echo do_shortcode('[practice_areas_link]'); ?>
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
