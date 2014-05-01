<?php get_header(); ?>
 	<div class="pageContent">
        <main role="main">
            
            <div class="wrapper">
            	<?php the_breadcrumb() ?> 
                
                <section>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <?php if( get_field('upload_image') ): ?>
							<img class="topright" src="<?php the_field('upload_image'); ?>">	
						<?php endif; ?>
						<?php 
							if ( has_post_thumbnail() ) { 
								the_post_thumbnail('feature', array('class' => 'alignright'));
							}
						?>
                        <?php the_content(); ?>
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
                </aside>
            </div>
            
        </main> <!-- /#main -->
<?php get_footer(); ?>



