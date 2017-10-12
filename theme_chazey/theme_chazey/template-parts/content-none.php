<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package chazey
 */

?>

	<!-- - 1 - Section with metrics info - -->
    <section class="search__metric-wrapper">
        <h1 class="search__metric-header"><?php esc_html_e( 'Nothing Found', 'chazey' ); ?></h1>
	</section><!-- .page-header -->

	<!-- - Section with partners info - -->
	<section class="search__main_3">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php
				printf(
					wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'chazey' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					),
					esc_url( admin_url( 'post-new.php' ) )
				);
			?></p>

		<?php elseif ( is_search() ) : ?>

			<h4><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'chazey' ); ?></h4><br/>
			<?php
				get_search_form();

		else : ?>

			<h4><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'chazey' ); ?></h4>
			<?php
				get_search_form();

		endif; ?>
	</section><!-- .page-content -->
