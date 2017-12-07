<?php

/*
  Template Name: zhaopin
 */
?>
<?php get_header(); ?>
<section id="inner-headline">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">人才招聘</h2>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">	 
        <div class="row"> 
            <div class="col-md-12">
                <div class="about-logo">
                    <h3>加入我們</h3>
                    <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
                    <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
                </div>  
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <div class="about">
            <div class="row">
             
                <div class="col-md-12 ">
                    <div class="block-heading-two" style="text-align: center;">
                        <h3><span>招聘崗位</span></h3>
                    </div>		
                    <!-- Accordion starts -->
                    <div class="panel-group" id="accordion-alt3">
                        <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                        <?php
                        $latest_cat_post = new WP_Query(array('category_name' => 'guan1-zhaopin', 'posts_per_page' => 4));
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
         
            </div>
        
          

        </div>
    </div>
</section>
<?php get_footer(); ?>
