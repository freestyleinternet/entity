<?php 
/*
	Template Name: Transport Facilities 
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
                        
                        <div class="style_one">

                                <?php while(the_repeater_field('case_study_area', 140)): ?>
                            		<article>
                                        <img class="topright" src="<?php bloginfo('template_directory'); ?>/assets/images/council-logo.png">
                                        <h1><?php echo the_sub_field('title', 140); ?></h1>
                                        <p><?php echo the_sub_field('description', 140); ?></p>
                                        <div class="downloads">
                                            <h3><?php the_sub_field('download_files_main_title', 140); ?></h3>
                                            <?php while(the_repeater_field('downloads', 140)): ?>
                                            <a href="<?php echo the_sub_field('upload_file', 140); ?>" target="_blank"><?php echo the_sub_field('download_file_name', 140); ?></a>
                                            <?php  endwhile; ?>
                                        </div>
                                    </article>
								
								<?php  endwhile; ?>                  
                       
                       </div> 
                        
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
