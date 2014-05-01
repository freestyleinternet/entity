<?php 
/*
	Template Name: Sectors 
*/
get_header(); ?>
 	<div class="pageContent">
        <main role="main">
            
            <div class="wrapper">
            	<?php the_breadcrumb() ?> 
                
                <aside class="left-menu-bar">
					<ul class="subnav">
						<?php
							if($post->post_parent)
                          		$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
                          	else
                          		$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
                          	if ($children) {
                        		$parent_title = get_the_title($post->post_parent);?>
                        		<li><a href="<?php echo get_permalink($post->post_parent) ?>"><?php echo $parent_title;?></a></li>
                         		<?php echo $children; ?>
                          <?php } ?>
                    </ul>
                      
                </aside>
                
                <section class="style__three">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php if( get_field('upload_image') ): ?>
							<img class="topright" src="<?php the_field('upload_image'); ?>">	
						<?php endif; ?>
                        
                        <?php if( get_field('lightbox_image_thumbnail') ): ?>
                                <div class="masklayer">
                                    <!-- thumbnail image wrapped in a link -->
                                    <a href="#img1">
                                      <img src="<?php the_field('lightbox_image_thumbnail'); ?>">
                                      <span></span>
                                      <div class="cross"></div>
                                    </a>
                                </div>
                                <!-- lightbox container hidden with CSS -->
                                <a href="#_" class="lightbox" id="img1">
                                  <img src="<?php the_field('lightbox_image_large'); ?>">
                                </a>
                        <?php endif; ?>

                        <?php the_content(); ?>
                        <div class="sharethisbar"><?php get_template_part( 'templates/partials/inc-socialbuttons'); ?></div>
                    <?php endwhile; endif; ?>
                </section>
                
                <aside class="right-menu-bar">
                	<a class="col h-feature" href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/home-feature-1.jpg">
                        <h1>About Entity</h1>
                        <p>For the latest Enterprise data management and the centra of what we education and finance sectors. Find out how Entity is implementing game changing technology in the technical</p>
                        <span>Find out more about Entity</span>
                    </a>
                    <a class="col h-feature" href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/home-feature-1.jpg">
                        <h1>About Entity</h1>
                        <p>For the latest Enterprise data management and the centra of what we education and finance sectors. Find out how Entity is implementing game changing technology in the technical</p>
                        <span>Find out more about Entity</span>
                    </a>
                </aside>
            </div>
            
        </main> <!-- /#main -->
<?php get_footer(); ?>
