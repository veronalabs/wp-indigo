<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-indigo
 */
?>

<footer id="colophon" class="c-footer site-footer">

    <div class="c-footer__wrapper">

        <?php wp_indigo_socials_links( false ); ?>        

        <div class="c-footer__content">

            <div class="c-footer__site-info <?php wp_indigo_is_footer_widget_active() ?>">

                <?php  if( is_active_sidebar( 'footer-widget' ) && get_theme_mod( 'footer_style' , 'no-widget') !== 'no-widget' ) : ?>
                <div class="c-footer__widgets">
                    <div id="header-widget-area" class="c-footer__widget widget-area" role="complementary">
                        <?php dynamic_sidebar( 'footer-widget' ); ?>
                    </div>
                </div>
                <?php endif; ?>

                <div class="c-footer__copy">

                    <?php echo esc_html(get_theme_mod( 'copytext' , esc_html__( 'WP-Indigo by', 'wp-indigo' ) )); ?>
                    
                    <a class="c-footer__link h5 u-link--secondary" href="<?php echo esc_url( get_theme_mod( 'copylink', esc_url('http://vitathemes.com/') ) ); ?>">
                        <?php echo esc_html(get_theme_mod( 'copylink_text', esc_html__( 'VitaThemes' , 'wp-indigo') ) ) ; ?>
                    </a>

                    <?php wp_indigo_get_footer_menu('wp-indigo-primary-footer'); ?>

                </div>   
                    
            </div><!-- .site-info -->

        </div>

    </div>

</footer><!-- #colophon -->

<?php wp_indigo_get_home_section_close_tag(); ?>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>