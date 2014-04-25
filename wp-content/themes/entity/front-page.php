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
            </div>
        </div>
    </div>
    </div>
    
    <div class="pageContent">
    		
    <main role="main">
        <div class="wrapper">               
        	<h1><span>MORE FROM ENTITY&nbsp;&nbsp;</span></h1>
            <a class="col h-feature" href="#">
            	<img src="<?php bloginfo('template_directory'); ?>/assets/images/home-feature-1.jpg">
            	<h1>About Entity</h1>
                <p>For the latest Enterprise data management and the centra of what we education and finance sectors. Find out how Entity is implementing game changing technology in the technical</p>
            	<span>Find out more about Entity</span>
            </a>
            <a class="col h-feature" href="#">
            	<img src="<?php bloginfo('template_directory'); ?>/assets/images/home-feature-1.jpg">
            	<h1>About Entity</h1>
                <h2>Noodle 1.0</h2>
                <p>For the latest Enterprise data management and the centra of what we education and finance sectors. Find out how Entity is implementing game changing technology in the technical</p>
            	<span>Find out more about Entity</span>
            </a>
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
        </div>
    </main>
	
<?php get_footer(); ?>
