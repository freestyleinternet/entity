<?php 
/*
	Template Name: Product single page 
*/
get_header(); ?>
    
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
                
                <section class="style__two">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php 
							if ( has_post_thumbnail() ) { 
								the_post_thumbnail('feature', array('class' => 'feature__two'));
							}
						  ?>
                        <?php the_content(); ?>
                        <div class="sharethisbar"><?php get_template_part( 'templates/partials/inc-socialbuttons'); ?></div>
                        
						<?php if( get_field('documents') ): ?>
                            <div class="downloads">
                                <h3><?php the_field('link_documents_title'); ?></h3>
                                <?php while(the_repeater_field('documents')): ?>
									<a href="<?php echo the_sub_field('document_upload'); ?>" target="_blank"><?php echo the_sub_field('document_name'); ?></a>
                            	<?php  endwhile; ?>
                            </div>
                        <?php endif; ?>
                        
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
