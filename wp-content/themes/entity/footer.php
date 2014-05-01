                <div class="wrapper">
                    <footer>
                        
                        <div class="foot-col">
                        	<h2>About us</h2>
                            <?php
								wp_nav_menu(
									array(
									'menu'		  => 'footer-about',
									'container'       => '',
									'menu_class'	=> ''
								));
							?>
                            <h2>Solutions</h2>
                            <?php
								wp_nav_menu(
									array(
									'menu'		  => 'footer-solutions',
									'container'       => '',
									'menu_class'	=> 'last'
								));
							?>
                        </div>
                        
                        <div class="foot-col">
                        	<h2>Sectors</h2>
                            <?php
								wp_nav_menu(
									array(
									'menu'		  => 'footer-sectors',
									'container'       => '',
									'menu_class'	=> ''
								));
							?>
                            <h2>Products</h2>
                            <?php
								wp_nav_menu(
									array(
									'menu'		  => 'footer-products',
									'container'       => '',
									'menu_class'	=> 'last'
								));
							?>
                        </div>
                        
                        <div class="foot-col">
                            <?php
								wp_nav_menu(
									array(
									'menu'		  => 'footer-main',
									'container'       => '',
									'menu_class'	=> 'important-list'
								));
							?>
						</div>
                        
                        <div class="foot-col single rightalign">
                            <a class="light" href="#">REFER ENTITY </a>
                            <a class="light rightalign" href="#">SHARE ENTITY +</a>
                            <div class="partners">
                            	<img src="<?php bloginfo('template_directory'); ?>/assets/images/partner1.png">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/partner2.png">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/partner3.png">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/partner4.png">
                            </div>
                            <p class="copy">Copyright Entity <?php echo date('Y'); ?></p>
						</div>
                        
                    </footer>
                </div>
    
    </div> <!-- End of container --> 
 
    <?php wp_footer(); ?>
</body>
</html>
