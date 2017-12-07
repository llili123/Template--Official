<?php
/*
  Template Name: about
 */
?>
<?php get_header(); ?>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">关于我们</h2>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <section class="section-padding">
        <div class="container">
            <div class="row showcase-section">
                <div class="col-md-6">
                    <img src="<?php bloginfo('template_directory'); ?>/img/dev1.png" alt="showcase image">
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <h2>Lorem Ipsum Dolor sit</h2>
                        <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Vivamus suscipit tortor eget felis porttitor volutpat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.</p>
                        <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo..</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="about">
            <div class="row">
                <div class="col-md-4">
                    <!-- Heading and para -->
                    <div class="block-heading-two">
                        <h3><span>Why Choose Us?</span></h3>
                    </div>
                    <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. <br/><br/>Sed ut perspiciaatis iste natus error sit voluptatem probably haven't heard of them accusamus.</p>
                </div>
                <div class="col-md-4">
                    <div class="block-heading-two">
                        <h3><span>Our Solution</span></h3>
                    </div>		
                    <!-- Accordion starts -->
                    <div class="panel-group" id="accordion-alt3">
                        <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                        <?php
                        $latest_cat_post = new WP_Query(array('category_name' => 'guan1-jiejue', 'posts_per_page' => 4));
                        if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                                ?>

                                <div class="panel">	
                                    <!-- Panel heading -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-<?php the_ID(); ?>">
                                                <i class="fa fa-angle-right"></i> <?php the_title(); ?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne-<?php the_ID(); ?>" class="panel-collapse collapse">
                                        <!-- Panel body -->
                                        <div class="panel-body">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <!-- Accordion ends -->
                </div>
                <div class="col-md-4">
                    <div class="block-heading-two">
                        <h3><span>Our Expertise</span></h3>
                    </div>								
                    <h6>Web Development</h6>
                    <div class="progress pb-sm">
                        <!-- White color (progress-bar-white) -->
                        <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>
                    <h6>Designing</h6>
                    <div class="progress pb-sm">
                        <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>
                    <h6>User Experience</h6>
                    <div class="progress pb-sm">
                        <div class="progress-bar progress-bar-lblue" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>
                    <h6>Development</h6>
                    <div class="progress pb-sm">
                        <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="block-heading-six">
                <h4 class="bg-color">Our Team</h4>
            </div>
            <br>
            <div class="team-six">
                <div class="row">
                    <?php
                    $latest_cat_post = new WP_Query(array('category_name' => 'guan1-team', 'posts_per_page' => 9));
                    if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                            ?>
                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                            <div class="col-md-3 col-sm-6">
                                <!-- Team Member -->
                                <div class="team-member">
                                    <!-- Image -->
                                    <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="" />
                                    <!-- Name -->
                                    <h4><?php the_title(); ?></h4>
                                    <span class="deg"><?php the_excerpt(); ?></span> 
                                </div>
                            </div>
                            <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>