<?php 
/*
	Template Name: Partners 
*/
get_header(); ?>
 	<div class="pageContent">
        <main role="main">
            
            <div class="wrapper">
            	<?php the_breadcrumb() ?> 
                
                <section>
                
					<div class="style_two">
                            <?php 
								$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
								
								$args = array( 'post_type' => 'partners', 'paged' => $paged);
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
                	<?php
					$sidebox = get_field('show_sidebox', 31);
	
					if( in_array('Premium Credit', $sidebox) ) {
					?>
                    <a class="col h-feature" href="<?php the_field('link_to_page', 5); ?>">
                        <img src="<?php the_field('feature_image', 5); ?>">
                        <h1><?php the_field('title', 5); ?></h1>
                        <p><?php the_field('description_text', 5); ?></p>
                        <span><?php the_field('link_text', 5); ?></span>
                    </a>
                    <?php
					}
					if ( in_array('Microsoft', $sidebox)) { 
					?>
                    <a class="col h-feature" href="<?php the_field('link_to_page_2', 5); ?>">
                        <img src="<?php the_field('featured_image', 5); ?>">
                        <h1><?php the_field('title_text', 5); ?></h1>
                        <p><?php the_field('description', 5); ?></p>
                        <span><?php the_field('link_text_2', 5); ?></span>
                    </a>
                    <?php 
					} 
					if ( in_array('Contact Entity', $sidebox)) { 
					?>
                    <div class="contact-box">
                    	<h2><?php the_field('contact_title', 5); ?></h2>
                        <p><?php the_field('contact_strap_text', 5); ?></p>
                        <p class="call">Call: <?php the_field('telephone_number', 5); ?></p>
                        <p class="call">Email: <a href="mailto:<?php the_field('email_address', 5); ?>"><?php the_field('email_address', 5); ?></a></p>
                    </div>
                    <?php
					}
					?>
                </aside>
            </div>
            
        </main> <!-- /#main -->
<?php get_footer(); ?>
