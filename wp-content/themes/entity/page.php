<?php get_header(); ?>
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
                
                <section>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <?php if( get_field('upload_image') ): ?>
							<img class="topright" src="<?php the_field('upload_image'); ?>">	
						<?php endif; ?>
						<?php 
							if ( has_post_thumbnail() ) { 
								the_post_thumbnail('feature');
							}
						?>
                        <?php the_content(); ?>
   
                    <?php endwhile; endif; ?>
                </section>
                
                <aside class="right-menu-bar">
                	<?php
					$sidebox = get_field('show_sidebox');
	
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
