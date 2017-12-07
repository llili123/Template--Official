<?php get_header(); ?>
<!-- end header -->
<section id="banner">
    <!-- Slider -->
    <div id="main-slider" class="flexslider">
        <ul class="slides">
            <li>
                <img src="<?php bloginfo('template_directory'); ?>/img/1.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Flexy Themes</h3> 
                    <p>Doloribus omnis minus temporibus perferquam</p> 			 
                </div>
            </li>
            <li>
                <img src="<?php bloginfo('template_directory'); ?>/img/2.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Flat Design</h3> 
                    <p>Lorem ipsum dolo amet, consectetur  provident.</p>		 
                </div>
            </li>
        </ul>
    </div>
    <!-- end slider -->
</section> 
<section id="call-to-action-2">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-9">
                <h3>Welcome to WebThemez</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti</p>
            </div>
            <div class="col-md-2 col-sm-3">
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aligncenter"><h2 class="aligncenter">我们的服务</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</div>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="skill-home"> <div class="skill-home-solid clearfix"> 
                    <?php
                    $latest_cat_post = new WP_Query(array('category_name' => 'yewu03', 'posts_per_page' => 4));
                    if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                            ?>
                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                            <div class="col-md-3 text-center">
                                <?php the_content(); ?>
                            </div>
                            <?php
                        endwhile;
                    endif;
                    ?>
                </div></div>
        </div> 
    </div>
</section>
<section class="section-padding gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>关于我们</h2>
                    <p>Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada Pellentesque <br>ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="about-text">
                    <p>Grids is a responsive Multipurpose Template. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>consectetur adipiscing elit</li>
                        <li>Curabitur aliquet quam id dui</li>
                        <li>Donec sollicitudin molestie malesuada.</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="about-image">
                    <img src="<?php bloginfo('template_directory'); ?>/img/about.jpg" alt="About Images">
                </div>
            </div>
        </div>
    </div>
</section>	 
<section id="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aligncenter"><h2 class="aligncenter">我们的客户</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</div>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-4 client">
                <div class="img client1"></div>

            </div>
            <div class="col-md-2 col-sm-4 client">
                <div class="img client2"></div>
            </div>
            <div class="col-md-2 col-sm-4 client">
                <div class="img client3"></div>
            </div>
            <div class="col-md-2 col-sm-4 client">
                <div class="img client1"></div>
            </div>
            <div class="col-md-2 col-sm-4 client">
                <div class="img client2"></div>
            </div>
            <div class="col-md-2 col-sm-4 client">
                <div class="img client3"></div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
	
