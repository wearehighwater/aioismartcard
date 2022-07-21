<footer class="footer">
	<div class="container">
		<div class="logo-holder">
			<div class="logo">
				<a href="{{get_home_url()}}"><img src="{{get_field('footer_logo','options')['url']}}" alt="AIOI SYSTEMS"></a>
			</div>
			<div class="link">
				<span class="title">Download Free Demo</span>
				<div class="app-btn-holder">
					@foreach(get_field('apps','options') as $apps)
					<a href="{{$apps['app_link']}}"><img src="{{$apps['app_image']}}" alt="Mobile App"></a>
					@endforeach
				</div>
			</div>
		</div>
		<div class="footer-content">
			{{
	          wp_nav_menu(array(
	              'theme_location'  => 'footer',
	                'depth'           => 2,
	                'container'       => '',
	                'container_class' => '',
	                'menu_class'      => 'footer-nav list-unstyled',
	                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
	                'walker'          => new WP_Bootstrap_Navwalker()
	          ))
	        }}
			<div class="footer-info">
				<h3>AIOI Systems USA Corp</h3>
				<span class="address"><a href="https://goo.gl/maps/r4DyCbg2gBJaz5919" target="_blank">19925 Stevens Creek Blvd. Suite 100 Cupertino, CA 95014</a></span>
				<span class="tel">Tel: <a href="tel:4089737835">(408) 973-7835</a></span>
				<span class="fax">Fax: (408) 973-7235</span>
				<span class="email">Email: <a href="mailto:info@aioisystemsusa.com">info@aioisystemsusa.com</a></span>
			</div>
		</div>
	</div>
</footer>