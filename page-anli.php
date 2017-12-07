<?php
/*
  Template Name: anli
 */
?>
<?php get_header(); ?>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">案例展示</h2>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">

        <div class="row"> 
            <div class="col-md-12">
                <div class="about-logo">
                    <h3>Voluptatem Accusantium Doloremque</h3>
                    <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
                    <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
                </div>  
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="portfolio-categ filter">
                    <li class="all active"><a href="#">All</a></li>
                    <li class="web"><a href="#" title="">Web design</a></li>
                    <li class="icon"><a href="#" title="">Mobile App</a></li>
                    <li class="graphic"><a href="#" title="">UI design</a></li>
                </ul>
                <div class="clearfix">
                </div>

                <div class="row">
                    <section id="projects">
                        <ul id="thumbs" class="portfolio">
                            <!-- Item Project and Filter Name web icon graphic-->
                            <?php
                            $latest_cat_post = new WP_Query(array('category_name' => 'guan1-anli'));
                            if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                                    ?>
                                    <?php if (has_post_thumbnail($post->ID)): ?>
                                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                                        <li class="item-thumbs col-lg-3 col-md-3 design" data-id="id-0" data-type="<?php the_title(); ?>">
                                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->

                                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php echo $image[0]; ?>">
                                                <span class="overlay-img"></span>
                                                <span class="overlay-img-thumb"><i class="icon-info-blocks fa fa-code"></i></span>
                                            </a>
                                            <!-- Thumb Image and Description -->
                                            <img src="<?php echo $image[0]; ?>" alt="">
                                        </li>
                                    <?php endif; ?>
                                    <?php
                                endwhile;
                            endif;
                            ?>





                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
