<?php 
/*
	Template Name: News and Events 
*/
get_header(); ?>
 	<div class="pageContent">
        <main role="main">
            
            <div class="wrapper">
            	<?php the_breadcrumb() ?> 
                
                <section>
                	
                    <?php
					$args = array( 'numberposts' => 1 );
					$lastposts = get_posts( $args );
					foreach($lastposts as $post) : setup_postdata($post); ?>
					<article class="first">
                    	<a href="<?php the_permalink(); ?>">
                        	<?php 
								if ( has_post_thumbnail() ) { 
									the_post_thumbnail('postthumb', array('class' => 'alignright'));
								}
							  ?>
                        	<h1><?php the_title(); ?></h1>
                            <p><?php echo truncate($post->post_content, 300); ?></p>
                            <span>Read more</span>
                        </a>
                    </article>
					<?php endforeach; ?>

					<div class="style_three">
                    		<h1 class="more">MORE ENTITY NEWS &amp; EVENTS</h1>
                            <?php 
								$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
								$args = array( 'post_type' => 'post', 'paged' => $paged, 'offset'=> 1);
								$wp_query = new WP_Query($args);
								
								while ( have_posts() ) : the_post(); 
							?>
                            <article>
                            	<a href="<?php echo get_permalink(); ?>">
                                	<?php 
										if ( has_post_thumbnail() ) { 
											the_post_thumbnail('partner', array('class' => 'alignleft'));
										}
									?>
                                     <span><?php the_date('d.n.y'); ?></span>
                                    <h1><?php the_title(); ?></h1>
                                    <p><?php echo truncate($post->post_content, 230); ?></p>
                                </a>
                            </article>
                             <?php endwhile; ?>
                             <?php if(function_exists('wp_paginate')) {
									wp_paginate();
								} ?>
					</div>
                    
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
