<?php
/**
 * @package unite-child
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page-header">
	<h4 class="entry-single-title "><?php the_title(); ?></h4>
	</header><!-- .entry-header -->
		<?php 
                    if ( of_get_option( 'single_post_image', 1 ) == 1 ) :
                        the_post_thumbnail( 'unite-featured', array( 'class' => 'thumbnail' )); 
                    endif;
                  ?>
		<p> <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
        	Жанры:
			<?php
				$cur_terms = get_the_terms( $post->ID, 'genre' );
				$end_element = array_pop($cur_terms);
					foreach ( $cur_terms as $cur_term ) {
						echo '<a href="' . get_term_link( (int) $cur_term->term_id, $cur_term->taxonomy ) . '">' . $cur_term->name . '</a>,';
					}
					echo '<a href="' . get_term_link( (int) $end_element->term_id, $end_element->taxonomy ) . '">' . $end_element->name . '</a>.';
			?>
        </p>
        <p> <span class="glyphicon glyphicon-flag" aria-hidden="true"></span>
        	Странa: 
			<?php
				$cur_terms = get_the_terms( $post->ID, 'country' );
				$end_element = array_pop($cur_terms);
					foreach ( $cur_terms as $cur_term ) {
						echo '<a href="' . get_term_link( (int) $cur_term->term_id, $cur_term->taxonomy ) . '">' . $cur_term->name . '</a>,';
					}
					echo '<a href="' . get_term_link( (int) $end_element->term_id, $end_element->taxonomy ) . '">' . $end_element->name . '</a>.';
			?>
        </p>
        <p> Год: 
			
			<?php
				$cur_terms = get_the_terms( $post->ID, 'year' );
				$end_element = array_pop($cur_terms);
					foreach ( $cur_terms as $cur_term ) {
						echo '<a href="' . get_term_link( (int) $cur_term->term_id, $cur_term->taxonomy ) . '">' . $cur_term->name . '</a>,';
					}
					echo '<a href="' . get_term_link( (int) $end_element->term_id, $end_element->taxonomy ) . '">' . $end_element->name . '</a>.';
			?>
        </p>
        <p> Актеры: 
			<?php
				$cur_terms = get_the_terms( $post->ID, 'actor' );
				$end_element = array_pop($cur_terms);
					foreach ( $cur_terms as $cur_term ) {
						echo '<a href="' . get_term_link( (int) $cur_term->term_id, $cur_term->taxonomy ) . '">' . $cur_term->name . '</a>,';
					}
					echo '<a href="' . get_term_link( (int) $end_element->term_id, $end_element->taxonomy ) . '">' . $end_element->name . '</a>.';
			?>
        </p>
        <label>
			<span class="glyphicon glyphicon-bitcoin" aria-hidden="true"></span>
	        Цена: <b><?= get_post_meta( $post->ID, 'film_price', true ) ?></b>   
        </label>
        <br>
        <label>
        	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
        	Дата сеанса: <b><?= get_post_meta( $post->ID, 'film_date', true ) ?></b>
        </label>

	<div class="entry-content">
		<p class="new-l-style"><i><b>
	        Сюжет:
        </b></i>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'unite' ),
				'after'  => '</div>',
			) );
		?>
		</p>
		<hr class="section-divider2">
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php unite_posted_on(); ?>
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'unite' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'unite' ) );

			if ( ! unite_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = '<i class="fa fa-folder-open-o"></i> %2$s. <i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">permalink</a>.';
				} else {
					$meta_text = '<i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">permalink</a>.';
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = '<i class="fa fa-folder-open-o"></i> %1$s <i class="fa fa-tags"></i> %2$s. <i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">permalink</a>.';
				} else {
					$meta_text = '<i class="fa fa-folder-open-o"></i> %1$s. <i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">permalink</a>.';
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>

		<?php edit_post_link( __( 'Edit', 'unite' ), '<i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span>' ); ?>
		<?php unite_setPostViews(get_the_ID()); ?>

	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
