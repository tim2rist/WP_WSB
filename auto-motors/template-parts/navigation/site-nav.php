<?php
/*
* Display Theme menus
*/

$automobile_hub_sticky = get_theme_mod('automobile_hub_sticky');
    $automobile_hub_data_sticky = "false";
    if ($automobile_hub_sticky) {
    $automobile_hub_data_sticky = "true";
    }
    global $wp_customize;
?>
<div class="menubar <?php if( is_user_logged_in() && !isset( $wp_customize ) ){ echo "login-user";} ?>" data-sticky="<?php echo esc_attr($automobile_hub_data_sticky); ?>">
  	<div class="container right_menu">
  		<div class="row">
	    	<div class="menubox col-lg-8 col-md-2 col-2 align-self-center">
	      		<div class="innermenubox">
		      			<div class="toggle-nav mobile-menu">
	            			<button onclick="automobile_hub_menu_open_nav()" class="responsivetoggle"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Button','auto-motors'); ?></span></button>
	          			</div>
         	 		<div id="mySidenav" class="nav sidenav">
            			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'auto-motors' ); ?>">
			              	<?php 
			                  	wp_nav_menu( array(
				                    'theme_location' => 'primary-menu',
				                    'container_class' => 'main-menu clearfix' ,
				                    'menu_class' => 'clearfix',
				                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
				                    'fallback_cb' => 'wp_page_menu',
			                  	) );
			              	 ?>
              				<a href="javascript:void(0)" class="closebtn mobile-menu" onclick="automobile_hub_menu_close_nav()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Button','auto-motors'); ?></span></a>
	            		</nav>
	          		</div>
          			<div class="clearfix"></div>
        		</div>
	    	</div>
  			<div class="col-lg-3 col-md-8 col-8 social-media align-self-center">
  				<?php						  		
              $automobile_hub_header_fb_new_tab = esc_attr(get_theme_mod('automobile_hub_header_fb_new_tab','true'));
              $automobile_hub_header_twt_new_tab = esc_attr(get_theme_mod('automobile_hub_header_twt_new_tab','true'));
              $automobile_hub_header_ins_new_tab = esc_attr(get_theme_mod('automobile_hub_header_ins_new_tab','true'));
              $automobile_hub_header_ut_new_tab = esc_attr(get_theme_mod('automobile_hub_header_ut_new_tab','true'));
              $automobile_hub_header_pint_new_tab = esc_attr(get_theme_mod('automobile_hub_header_pint_new_tab','true'));
              ?>
  		      <?php if( get_theme_mod( 'automobile_hub_facebook_url' ) != '') { ?>
              <a <?php if($automobile_hub_header_fb_new_tab != false ) { ?>target="_blank" <?php } ?>href="<?php echo esc_url( get_theme_mod( 'automobile_hub_facebook_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('automobile_hub_facebook_icon','fab fa-facebook-f')); ?>"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'automobile_hub_twitter_url' ) != '') { ?>
              <a <?php if($automobile_hub_header_twt_new_tab != false ) { ?>target="_blank" <?php } ?>href="<?php echo esc_url( get_theme_mod( 'automobile_hub_twitter_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('automobile_hub_twitter_icon','fab fa-twitter')); ?>"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'automobile_hub_instagram_url' ) != '') { ?>
              <a <?php if($automobile_hub_header_ins_new_tab != false ) { ?>target="_blank" <?php } ?>href="<?php echo esc_url( get_theme_mod( 'automobile_hub_instagram_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('automobile_hub_instagram_icon','fab fa-instagram')); ?>"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'automobile_hub_youtube_url' ) != '') { ?>
              <a <?php if($automobile_hub_header_ut_new_tab != false ) { ?>target="_blank" <?php } ?>href="<?php echo esc_url( get_theme_mod( 'automobile_hub_youtube_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('automobile_hub_youtube_icon','fab fa-youtube')); ?>"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'automobile_hub_pint_url' ) != '') { ?>
              <a <?php if($automobile_hub_header_pint_new_tab != false ) { ?>target="_blank" <?php } ?>href="<?php echo esc_url( get_theme_mod( 'automobile_hub_pint_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('automobile_hub_pint_icon','fab fa-pinterest')); ?>"></i></a>
            <?php } ?>
  			</div>
      	<div class="col-lg-1 col-md-2 col-2 align-self-center d-flex justify-content-center align-items-center">
          <span class="search-bar">
              <button type="button" class="open-search"><i class="fas fa-search"></i></button>
          </span>
        </div>
      <div class="search-outer">
        <div class="inner_searchbox w-100 h-100">
            <?php get_search_form(); ?>
        </div>
        <button type="button" class="search-close"><?php esc_html_e('CLOSE', 'automobile-hub'); ?></button>
      </div>
	   </div>
  </div>
</div>
