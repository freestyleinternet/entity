<?php 
/*
	Template Name: Contact us 
*/
get_header(); ?>
 	<div class="pageContent">
        <main role="main">
            
            <div class="wrapper">
            	<?php the_breadcrumb() ?> 
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <aside class="left-menu-bar-contact">
					<h2><?php the_title(); ?></h2>
                    <address>
                    	<?php the_field('full_address'); ?>
                    </address> 
                    <p><?php the_field('telephone_number'); ?></p>                     
                </aside>
                
                <section>
                	<div id="map"></div>
					<?php the_content(); ?>
                </section>
                <?php endwhile; endif; ?>
                
            </div>
            
        </main> <!-- /#main -->
<?php get_footer(); ?>
