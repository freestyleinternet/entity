<?php get_header(); ?>
 <div class="banner" role="banner">
    <div class="wrapper"> 
        <div class="slider-container">
            <div class=center>
                <span id=prev rel="prev"></span>
                <span id=next rel="next"></span>
            </div>
            <div class="cycle-slideshow" 
                data-cycle-fx=scrollHorz
                data-cycle-swipe=true
                data-cycle-slides="div.slide"
                data-cycle-prev="#prev"
                data-cycle-next="#next">
                <div class="cycle-pager"></div>
                
				<?php while(the_repeater_field('slide')): ?>    
                    <div class="slide">
                        <img src="<?php echo the_sub_field('slide_image'); ?>">
                        <div class="text">
                            <h1><?php echo the_sub_field('main_slide_title'); ?></h1>
                            <a class="yellowimg arrow thinner" href="<?php the_sub_field('slide_read_more_link'); ?>">READ MORE</a>
                        </div>
                    </div>
                <?php  endwhile; ?>

            </div>
        </div>
    </div>
    </div>
    
    <div class="pageContent">
    		
        <main role="main">
              <div class="wrapper">
                  
                  <div class="col homeblock">
                        <a href="#">
                            <img class="absolute" src="<?php the_field('our_services_featured_image'); ?>">
                            <h2>OUR SERVICES</h2>
                            <p><?php the_field('our_services_introduction_text'); ?></p>
                            <span class="yellowimg arrow thinner">Read More</span>
                        </a>
                  </div> 
                  
                  <div class="col homeblock">
                        <a href="<?php bloginfo('url'); ?>/case-studies/">
                            <img class="absolute" src="<?php the_field('case_studies_featured_image'); ?>">
                            <h2>CASE STUDIES</h2>
                            <p><?php the_field('case_studies_introduction_text'); ?></p>
                            <span class="yellowimg arrow thinner">Read More</span>
                        </a>
                  </div>  
                  
                 <div class="col homeblock update">
                        <a href="<?php bloginfo('url'); ?>/news/">
                            <img src="<?php the_field('fwt_update_featured_image'); ?>">
                            <h2>FWT UPDATE</h2>
                            <p><?php the_field('fwt_update_box_text'); ?></p>
                            <span class="yellowimg arrow thinner">News</span>
                        </a>
                  </div>  
                  
                  <div class="col homeblock">
                        <a href="<?php bloginfo('url'); ?>/our-principles/">
                            <img class="absolute" src="<?php the_field('our_principles_featured_image'); ?>">
                            <h2>OUR PRINCIPLES</h2>
                            <p><?php the_field('our_principles_introduction_text'); ?></p>
                            <span class="yellowimg arrow thinner">Read More</span>
                        </a>
                  </div>  
                  
                  <div class="col homeblock">
                        <a href="<?php bloginfo('url'); ?>/our-people/">
                            <img class="absolute" src="<?php the_field('our_people_featured_image'); ?>">
                            <h2>OUR PEOPLE</h2>
                            <p><?php the_field('our_people_introduction_text'); ?></p>
                            <span class="yellowimg arrow thinner">Read More</span>
                        </a>
                  </div>  
                  
                  <div class="col homeblock contactblock">
                        <a href="<?php the_field('contact_us_map_link'); ?>" target="_blank">
                            <h2>CONTACT US</h2>
                            <span class="yellowimg arrow thinner">View</span>
                        </a>
                  </div>                
    
              </div>
          </main>
	
<?php get_footer(); ?>
