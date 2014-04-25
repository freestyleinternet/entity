<?php get_header(); ?>
 	<div class="pageContent">
        <main role="main">
            
            <div class="wrapper">
            	<section>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                        <div class="sharethisbar"><?php get_template_part( 'templates/partials/inc-socialbuttons'); ?></div>
                    <?php endwhile; endif; ?>
                </section>
                
                <aside>
                	<div class="sharethisbar"><?php get_template_part( 'templates/partials/inc-socialbuttons'); ?></div>
                	
                     <div class="homeblock update">
                        <a href="<?php bloginfo('url'); ?>/news/">
                            <img src="<?php the_field('fwt_update_featured_image', 19); ?>">
                            <h2>FWT UPDATE</h2>
                            <p><?php the_field('fwt_update_box_text', 19); ?></p>
                            <span class="yellowimg arrow thinner">News</span>
                        </a>
                  </div>
                  
                  <div class="col homeblock contactblock">
                        <a href="<?php the_field('contact_us_map_link', 19); ?>" target="_blank">
                            <h2>CONTACT US</h2>
                            <span class="yellowimg arrow thinner">View</span>
                        </a>
                  </div>
                  
                </aside>
            </div>
            
        </main> <!-- /#main -->
<?php get_footer(); ?>
