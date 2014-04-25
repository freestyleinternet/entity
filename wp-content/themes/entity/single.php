<?php get_header(); ?>
 	<div class="pageContent">
        <main role="main">
            
            <div class="wrapper">
            	<section>
					<?php while ( have_posts() ) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <div class="first"><?php the_field('first_paragraph_of_content_goes_here'); ?></div>
                        <blockquote>
                            
                            <?php if( $featureimage = get_field('quote_feature_image') ): ?>
                                <img src="<?php echo $featureimage; ?>">
                            <?php endif; ?>
                            
                            <p class="quote"><?php the_field('quote'); ?></p>
                            <p><?php the_field('quote_by'); ?></p>
                        </blockquote>
                        <div class="secondbody"><?php the_content(); ?></div>
                        <div class="sharethisbar"><?php get_template_part( 'templates/partials/inc-socialbuttons'); ?></div>
                        <div class="downloads">
                        	<h1>Related links</h1>
                            <p>Arriving the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley it to make a type specimen book. It has survivedchanged. </p>
                            <a href="#">www.urlpartner.com/FWT</a>
						</div>
                        <a class="yellowimg leftarrow thinner" href="<?php bloginfo('url'); ?>/news/">NEWS</a>
                    <?php endwhile; ?>
                </section>
                
                <?php get_sidebar(); ?>
            </div>
            
        </main> <!-- /#main -->
<?php get_footer(); ?>


