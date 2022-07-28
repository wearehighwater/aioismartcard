<header class="header">
  <div class="container">
    <strong class="logo">
      <a href="{{get_home_url()}}"><img src="{{get_field('site_logo','options')['url']}}" alt="AIOI SYSTEMS"></a>
    </strong>
    <div class="nav-drop">
      <div class="nav-area">
        {{
          wp_nav_menu(array(
              'theme_location'  => 'primary',
                'depth'           => 2,
                'container'       => '',
                'container_class' => '',
                'menu_class'      => 'menu list-unstyled',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker()
          ))
        }}
        <div class="btn-holder">
          <a href="{{get_field('header_button','options')['url']}}" class="btn btn-secondary smooth-scroll">{{get_field('header_button','options')['title']}}</a>
          <a href="{{get_field('header_button_2','options')['url']}}" class="btn btn-primary">{{get_field('header_button_2','options')['title']}}</a>
        </div>
      </div>
    </div>
  </div>
  <a href="#" class="menu-opener"><span></span></a>
</header>