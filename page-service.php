<?php
/*
  Template Name: service
 */
?>
<?php get_header(); ?>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">业务范围</h2>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container content">		

        <div class="row"> 
            <div class="col-md-12">
                <div class="about-logo">
                    <h3>We are awesome <span class="color">TEAM</span></h3>
                    <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
                    <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
                </div>
                <a href="#" class="btn btn-color">Read more</a>  
            </div>
        </div>


        <div class="row">
            <?php
            $latest_cat_post = new WP_Query(array('category_name' => 'guan1-server', 'tag' => ''));
            if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                    ?>
                    <div class="col-sm-4 info-blocks">
                        <i class="<?php echo the_title(); ?>"></i>
                        <div class="info-blocks-in">
                            <h3><?php the_excerpt(); ?></h3>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>

                    <?php
                endwhile;
            endif;
            ?>
        </div>
        <div class="row service-v1 margin-bottom-40">
            <?php
            $latest_cat_post = new WP_Query(array('category_name' => 'guan1-server1', 'tag' => ''));
            if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                    ?>
                    <?php if (has_post_thumbnail($post->ID)): ?>
                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                        <div class="col-md-4 md-margin-bottom-40">
                            <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="" />
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_content(); ?></p>        
                        </div>

                    <?php endif; ?>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>