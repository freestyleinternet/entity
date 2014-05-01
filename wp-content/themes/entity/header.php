<?php
    $page_slug = '';
	if (is_page())
	{
		$page_slug = 'page-'.basename(get_permalink());
		
		if ($post->post_parent)
		{
			$page_slug.= ' parent-'.basename(get_permalink($post->post_parent));
		}
	}
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php wp_title(''); ?></title>
	<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
	<meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <!-- For third-generation iPad with high-resolution Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-144x144-precomposed.png">
    <!-- For iPhone with high-resolution Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-114x114-precomposed.png">
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-72x72-precomposed.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-precomposed.png">
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "701044eb-d205-461c-95f2-1b96b1e3ee47", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script>  
	
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript">
		function initialize() {
		  var myLatlng = new google.maps.LatLng(51.31528,0.72404);
		  var mapOptions = {
			zoom: 12,
			center: myLatlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		  }
		
		  var map = new google.maps.Map(document.getElementById('map'), mapOptions);
		
		  var contentString = 
		  	  '<div id="content">'+
			  	  '<h1>Entity Group Limited</h1>'+
				  '<div id="bodyContent">'+
					  '<ul>'+
					  	'<li>Cornforth Drive</li>' +
						'<li>Kent Science Park</li>' +
						'<li>Sittingbourne</li>' +
						'<li>Kent</li>' +
						'<li>ME9 8AG</li>' +
					  '</ul>' +
				  '</div>'+
			  '</div>';
		
		  var infowindow = new google.maps.InfoWindow({
			  content: contentString,
			  maxWidth: 250
		  });
		
		  var marker = new google.maps.Marker({
			  position: myLatlng,
			  map: map,
			  title: 'Cauldron'
		  });
		  google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		  });
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	<?php wp_head(); ?>
</head>

<body <?php body_class($page_slug); ?>>
	<!--[if lt IE 8]>
	    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
    
     <div id="page">
		<div class="wrapper clearfix">
            <div id="header">
                <a href="#menu"><img class="menuclose" src="<?php bloginfo('template_directory'); ?>/assets/images/trigger.svg"></a>
            </div>
        </div>
        <header>
            <div class="wrapper clearfix">
                <a class="logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/entity-logo.png" alt="Entity"/></a>
                <div class="search-form-container">
                    <?php get_search_form(); ?>
                </div>
                <h2>CALL US ON: <span>+ 971 (0)50 8828 479</span></h2>
                <nav id="menu">
                    <div class="navigation-menu">
                        <?php
                                wp_nav_menu(
                                    array(
                                    'menu'		  => 'main-menu',
                                    'container'       => '',
                                    'menu_class'	=> 'holder'
                                ));
                            ?>
                    </div>
                </nav>
            </div>
        </header>

        
       