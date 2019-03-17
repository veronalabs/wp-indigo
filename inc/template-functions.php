<?php

//Show Profile
function indigo_show_profile() {
	get_template_part( "template-parts/profile" );
}

// Menu Generator
function indigo_show_menu() {

	if ( has_nav_menu( 'primary-menu' ) ) {
		$menu_args = array(
			'menu'            => 'primary-menu',
			'menu_class'      => 'list',
			'container'       => 'div',
			'container_class' => 'nav-home'
		);

		if ( ! is_front_page() ) {
			$menu_args['container_class'] = 'nav';
		}

		wp_nav_menu( $menu_args );
	}
}

// Show Post Tags
function indigo_show_tags() {
	the_tags( '', ' ', '');
}

// Show Name Field
function indigo_show_avatar() {
	if ( get_theme_mod( 'avatar' ) != "" ) {
		echo '<img class="selfie" src="' . get_theme_mod( 'avatar' ) . '" />';
	} else {
		global $theme_url;
		echo '<img class="selfie" src="' . $theme_url . '/assets/images/profile.jpg" />';
	}
}


// Show Name Field
function indigo_show_name() {
	echo get_theme_mod( 'name', 'John Doe' );
}


// Show Name Field
function indigo_show_bio() {
	echo get_theme_mod( 'bio', 'A Man who travels the world eating noodles' );
}

// Show Name Field
function indigo_show_socials() {
	global $theme_url;

	if ( get_theme_mod( 'social-facebook' ) != "" ) {
		echo '<a class="link" data-title="' . get_theme_mod( 'social-facebook' ) . '" href="' . get_theme_mod( 'social-facebook' ) . '" target="_blank">
			<svg class="icon icon-facebook"><use xlink:href="' . $theme_url . '/assets/images/defs.svg#icon-facebook"></use></svg>
		</a>';
	}
	if ( get_theme_mod( 'social-twitter' ) != "" ) {
		echo '<a class="link" data-title="' . get_theme_mod( 'social-twitter' ) . '" href="' . get_theme_mod( 'social-twitter' ) . '" target="_blank">
			<svg class="icon icon-facebook"><use xlink:href="' . $theme_url . '/assets/images/defs.svg#icon-twitter"></use></svg>
		</a>';
	}
	if ( get_theme_mod( 'social-instagram' ) != "" ) {
		echo '<a class="link" data-title="' . get_theme_mod( 'social-instagram' ) . '" href="' . get_theme_mod( 'social-instagram' ) . '" target="_blank">
			<svg class="icon icon-facebook"><use xlink:href="' . $theme_url . '/assets/images/defs.svg#icon-instagram"></use></svg>
		</a>';
	}
	if ( get_theme_mod( 'social-pinterest' ) != "" ) {
		echo '<a class="link" data-title="' . get_theme_mod( 'social-pinterest' ) . '" href="' . get_theme_mod( 'social-pinterest' ) . '" target="_blank">
			<svg class="icon icon-facebook"><use xlink:href="' . $theme_url . '/assets/images/defs.svg#icon-pinterest"></use></svg>
		</a>';
	}
	if ( get_theme_mod( 'social-linkedin' ) != "" ) {
		echo '<a class="link" data-title="' . get_theme_mod( 'social-linkedin' ) . '" href="' . get_theme_mod( 'social-linkedin' ) . '" target="_blank">
			<svg class="icon icon-facebook"><use xlink:href="' . $theme_url . '/assets/images/defs.svg#icon-linkedin"></use></svg>
		</a>';
	}
	if ( get_theme_mod( 'social-youtube' ) != "" ) {
		echo '<a class="link" data-title="' . get_theme_mod( 'social-youtube' ) . '" href="' . get_theme_mod( 'social-youtube' ) . '" target="_blank">
			<svg class="icon icon-facebook"><use xlink:href="' . $theme_url . '/assets/images/defs.svg#icon-youtube"></use></svg>
		</a>';
	}
	if ( get_theme_mod( 'social-spotify' ) != "" ) {
		echo '<a class="link" data-title="' . get_theme_mod( 'social-spotify' ) . '" href="' . get_theme_mod( 'social-spotify' ) . '" target="_blank">
			<svg class="icon icon-facebook"><use xlink:href="' . $theme_url . '/assets/images/defs.svg#icon-spotify"></use></svg>
		</a>';
	}
	if ( get_theme_mod( 'social-github' ) != "" ) {
		echo '<a class="link" data-title="' . get_theme_mod( 'social-github' ) . '" href="' . get_theme_mod( 'social-github' ) . '" target="_blank">
			<svg class="icon icon-facebook"><use xlink:href="' . $theme_url . '/assets/images/defs.svg#icon-github"></use></svg>
		</a>';
	}
	if ( get_theme_mod( 'social-gitlab' ) != "" ) {
		echo '<a class="link" data-title="' . get_theme_mod( 'social-gitlab' ) . '" href="' . get_theme_mod( 'social-gitlab' ) . '" target="_blank">
			<svg class="icon icon-facebook"><use xlink:href="' . $theme_url . '/assets/images/defs.svg#icon-gitlab"></use></svg>
		</a>';
	}
	if ( get_theme_mod( 'social-lastfm' ) != "" ) {
		echo '<a class="link" data-title="' . get_theme_mod( 'social-lastfm' ) . '" href="' . get_theme_mod( 'social-lastfm' ) . '" target="_blank">
			<svg class="icon icon-facebook"><use xlink:href="' . $theme_url . '/assets/images/defs.svg#icon-lastfm"></use></svg>
		</a>';
	}
	if ( get_theme_mod( 'social-stackoverflow' ) != "" ) {
		echo '<a class="link" data-title="' . get_theme_mod( 'social-stackoverflow' ) . '" href="' . get_theme_mod( 'social-stackoverflow' ) . '" target="_blank">
			<svg class="icon icon-facebook"><use xlink:href="' . $theme_url . '/assets/images/defs.svg#icon-stackoverflow"></use></svg>
		</a>';
	}
	if ( get_theme_mod( 'social-quora' ) != "" ) {
		echo '<a class="link" data-title="' . get_theme_mod( 'social-quora' ) . '" href="' . get_theme_mod( 'social-quora' ) . '" target="_blank">
			<svg class="icon icon-facebook"><use xlink:href="' . $theme_url . '/assets/images/defs.svg#icon-quora"></use></svg>
		</a>';
	}
	if ( get_theme_mod( 'social-reddit' ) != "" ) {
		echo '<a class="link" data-title="' . get_theme_mod( 'social-reddit' ) . '" href="' . get_theme_mod( 'social-reddit' ) . '" target="_blank">
			<svg class="icon icon-facebook"><use xlink:href="' . $theme_url . '/assets/images/defs.svg#icon-reddit"></use></svg>
		</a>';
	}
	if ( get_theme_mod( 'social-medium' ) != "" ) {
		echo '<a class="link" data-title="' . get_theme_mod( 'social-medium' ) . '" href="' . get_theme_mod( 'social-medium' ) . '" target="_blank">
			<svg class="icon icon-facebook"><use xlink:href="' . $theme_url . '/assets/images/defs.svg#icon-medium"></use></svg>
		</a>';
	}
	if ( get_theme_mod( 'social-vimeo' ) != "" ) {
		echo '<a class="link" data-title="' . get_theme_mod( 'social-vimeo' ) . '" href="' . get_theme_mod( 'social-vimeo' ) . '" target="_blank">
			<svg class="icon icon-facebook"><use xlink:href="' . $theme_url . '/assets/images/defs.svg#icon-vimeo"></use></svg>
		</a>';
	}
	if ( get_theme_mod( 'social-lanyrd' ) != "" ) {
		echo '<a class="link" data-title="' . get_theme_mod( 'social-lanyrd' ) . '" href="' . get_theme_mod( 'social-lanyrd' ) . '" target="_blank">
			<svg class="icon icon-facebook"><use xlink:href="' . $theme_url . '/assets/images/defs.svg#icon-lanyrd"></use></svg>
		</a>';
	}
	if ( get_theme_mod( 'social-mail' ) != "" ) {
		echo '<a class="link" data-title="' . get_theme_mod( 'social-mail' ) . '" href="' . get_theme_mod( 'social-mail' ) . '" target="_blank">
			<svg class="icon icon-facebook"><use xlink:href="' . $theme_url . '/assets/images/defs.svg#icon-mail"></use></svg>
		</a>';
	}
}