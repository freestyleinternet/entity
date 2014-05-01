<?php get_header(); ?>
 	
        <div class="banner" role="banner">
        <div class="wrapper"> 
            <div class="slider-container">
                <div class="cycle-slideshow" 
                    data-cycle-fx=scrollHorz
                    data-cycle-swipe=true
                    data-cycle-prev="#prev"
                    data-cycle-next="#next">
                    <span id=prev rel="prev"></span>
                    <span id=next rel="next"></span>
                    <?php while(the_repeater_field('slide')): ?>    
                            <img src="<?php echo the_sub_field('slide_image'); ?>">
                    <?php  endwhile; ?>
                    <div class="cycle-pager"></div>
                </div>
            </div>
        </div>
        </div>
    
        <main role="main">
            
            <div class="wrapper">
                
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
                
                <section class="style__two">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php 
							if ( has_post_thumbnail() ) { 
								the_post_thumbnail('feature', array('class' => 'feature__two'));
							}
						  ?>
                        <?php the_content(); ?>
                        <div class="sharethisbar"><?php get_template_part( 'templates/partials/inc-socialbuttons'); ?></div>
                    <?php endwhile; endif; ?>
                </section>
                
                <aside class="right-menu-bar">
					<div class="contact-box">
                    	<h2>Contact Entity</h2>
                        <p>If you wish to speak to one of our team about our products please:</p>
                        <p class="call">Call: XXXXXXXXXXXX</p>
                        <p class="call">Email: <a href="#">XXXXXXXXXXXXX</a></p>
                    </div>
                </aside>
            </div>
            
        </main> <!-- /#main -->
<?php get_footer(); ?>
