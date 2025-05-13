<?php
/*
* Display Logo and contact details
*/
?>

<div class="headerbox">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-12 align-self-md-center">
        <?php $automobile_hub_logo_settings = get_theme_mod( 'automobile_hub_logo_settings','Different Line');
        if($automobile_hub_logo_settings == 'Different Line'){ ?>
          <div class="logo">
            <?php if( has_custom_logo() ) automobile_hub_the_custom_logo(); ?>
            <?php if(get_theme_mod('automobile_hub_site_title',true) != ''){ ?>
              <?php if (is_front_page() && is_home()) : ?>
                <h1 class="text-capitalize">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                </h1> 
              <?php else : ?>
                  <p class="text-capitalize site-title">
                      <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                  </p>
              <?php endif; ?>
            <?php }?>
            <?php $automobile_hub_description = get_bloginfo( 'description', 'display' );
            if ( $automobile_hub_description || is_customize_preview() ) : ?>
              <?php if(get_theme_mod('automobile_hub_site_tagline',false) != ''){ ?>
                <p class="site-description"><?php echo esc_html($automobile_hub_description); ?></p>
              <?php }?>
            <?php endif; ?>
          </div>
        <?php }else if($automobile_hub_logo_settings == 'Same Line'){ ?>
          <div class="logo logo-same-line">
            <div class="row">
              <div class="col-lg-5 col-md-5 align-self-md-center">
                <?php if( has_custom_logo() ) automobile_hub_the_custom_logo(); ?>
              </div>
              <div class="col-lg-7 col-md-7 align-self-md-center">
                <?php if(get_theme_mod('automobile_hub_site_title',true) != ''){ ?>
                  <?php if (is_front_page() && is_home()) : ?>
                    <h1 class="text-capitalize">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                    </h1> 
                  <?php else : ?>
                      <p class="text-capitalize site-title">
                          <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                      </p>
                  <?php endif; ?>
                <?php }?>
                <?php $automobile_hub_description = get_bloginfo( 'description', 'display' );
                if ( $automobile_hub_description || is_customize_preview() ) : ?>
                  <?php if(get_theme_mod('automobile_hub_site_tagline',false) != ''){ ?>
                    <p class="site-description"><?php echo esc_html($automobile_hub_description); ?></p>
                  <?php }?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
      <div class="call col-lg-3 col-md-4 align-self-md-center">
        <?php if( get_theme_mod( 'automobile_hub_call' ) != '') { ?>
          <div class="row">
            <div class="col-lg-2 col-md-3 align-self-md-center"><i class="<?php echo esc_attr(get_theme_mod('automobile_hub_call_icon','fas fa-phone')); ?>"></i></div>
            <div class="col-lg-10 col-md-9 align-self-md-center">
              <p class="simplep mb-0"><a href="tel:<?php echo esc_html( get_theme_mod('automobile_hub_call','') ); ?>"><?php echo esc_html( get_theme_mod('automobile_hub_call','') ); ?></a></p>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="email col-lg-3 col-md-4 align-self-md-center">
        <?php if( get_theme_mod( 'automobile_hub_mail' ) != '') { ?>
          <div class="row">
            <div class="col-lg-2 col-md-3 align-self-md-center"><i class="<?php echo esc_attr(get_theme_mod('automobile_hub_mail_icon','fas fa-envelope-open')); ?>"></i></div>
            <div class="col-lg-10 col-md-9 align-self-md-center">
              <p class="simplep mb-0"><a href="mailto:<?php echo esc_html( get_theme_mod('automobile_hub_mail','') ); ?>"><?php echo esc_html( get_theme_mod('automobile_hub_mail','') ); ?></a></p>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="marker col-lg-3 col-md-4 align-self-md-center">
        <?php if( get_theme_mod( 'automobile_hub_location' ) != '') { ?>
          <div class="row">
            <div class="col-lg-2 col-md-3 align-self-md-center"><i class="fas fa-map-marker-alt"></i></div>
            <div class="col-lg-10 col-md-9 align-self-md-center">
              <p class="simplep mb-0"><?php echo esc_html( get_theme_mod('automobile_hub_location','') ); ?></p>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
