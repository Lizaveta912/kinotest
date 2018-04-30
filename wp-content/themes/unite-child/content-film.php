<?php
	/**
	 * @package unite-child
	 */
?>
<div class="col-md-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	    <header class="entry-header page-header">

	        <a href="<?php the_permalink() ?>"
	           title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'unite-featured', array( 'class' => 'thumbnail' ) ); ?></a>

	        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	        <p> Странa:
				<?php
					$cur_terms = get_the_terms( $post->ID, 'country' );
					foreach ( $cur_terms as $cur_term ) {
						echo '<a href="' . get_term_link( (int) $cur_term->term_id, $cur_term->taxonomy ) . '">' . $cur_term->name . '</a>,';
					}
				?>
	        </p>
	        <p> Год: 
				
				<?php
					$cur_terms = get_the_terms( $post->ID, 'year' );
					foreach ( $cur_terms as $cur_term ) {
						echo '<a href="' . get_term_link( (int) $cur_term->term_id, $cur_term->taxonomy ) . '">' . $cur_term->name . '</a>';
					}
				?>
	        </p>
	        <p> Жанры: 
				<?php
					$cur_terms = get_the_terms( $post->ID, 'genre' );
					foreach ( $cur_terms as $cur_term ) {
						echo '<a href="' . get_term_link( (int) $cur_term->term_id, $cur_term->taxonomy ) . '">' . $cur_term->name . '</a>,';
					}
				?>
	        </p>
	        <p> Актеры: 
				<?php
					$cur_terms = get_the_terms( $post->ID, 'actor' );
					foreach ( $cur_terms as $cur_term ) {
						echo '<a href="' . get_term_link( (int) $cur_term->term_id, $cur_term->taxonomy ) . '">' . $cur_term->name . '</a>,';
					}
				?>
	        </p>
	        <p>
	            Цена: <b><?= get_post_meta( $post->ID, 'film_price', true ) ?></b>
	            
	        </p>
	        <p>
	        	Дата: <b><?= get_post_meta( $post->ID, 'film_date', true ) ?></b>
	        </p>
			<?php if ( 'film' == get_post_type() ) : ?>
	            <div class="entry-meta">
					<?php unite_posted_on(); ?>
	            </div><!-- .entry-meta -->
			<?php endif; ?>
	    </header><!-- .entry-header -->
		
		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	        <div class="entry-summary">
				<?php the_excerpt(); ?>
	            <p><a class="btn btn-primary read-more"
	                  href="<?php the_permalink(); ?>"><?php _e( 'Continue reading', 'unite' ); ?> 
	                  <i class="fa fa-chevron-right"></i></a></p>
	        </div><!-- .entry-summary -->
	<!-- 	<?php //else : ?>
	        <div class="entry-content">
				
				<?php //if ( of_get_option( 'blog_settings' ) == 1 || ! of_get_option( 'blog_settings' ) ) : ?>
					<?php// the_content( __( 'Continue reading <i class="fa fa-chevron-right"></i>', 'unite' ) ); ?>
				<?php //elseif ( of_get_option( 'blog_settings' ) == 2 ) : ?>
					<?php //the_excerpt(); ?>
				<?php //endif; ?>
				
				<?php
					//wp_link_pages( array(
					//	'before' => '<div class="page-links">' . __( 'Pages:', 'unite' ),
					//	'after'  => '</div>',
					//) );
				?>
	        </div><!- -->- .entry-content -->
		 <?php endif; ?>

	    <footer class="entry-meta">
			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
				<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'unite' ) );
				if ( $categories_list && unite_categorized_blog() ) :
					?>
	                <span class="cat-links"><i class="fa fa-folder-open-o"></i>
						<?php printf( __( ' %1$s', 'unite' ), $categories_list ); ?>
				</span>
				<?php endif; // End if categories ?>
				
				<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'unite' ) );
				if ( $tags_list ) :
					?>
	                <span class="tags-links"><i class="fa fa-tags"></i>
						<?php printf( __( ' %1$s', 'unite' ), $tags_list ); ?>
				</span>
				<?php endif; // End if $tags_list ?>
			<?php endif; // End if 'post' == get_post_type() ?>
			
			<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
	            <span class="comments-link"><i
	                        class="fa fa-comment-o"></i><?php comments_popup_link( __( 'Leave a comment', 'unite' ), __( '1 Comment', 'unite' ), __( '% Comments', 'unite' ) ); ?></span>
			<?php endif; ?>
			
			<?php edit_post_link( __( 'Edit', 'unite' ), '<i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span>' ); ?>
	    </footer><!-- .entry-meta -->
	    <!-- <hr class="section-divider"> -->
	    <hr style="border-top: 3px solid #eee;">
	</article><!-- #post-## -->
</div>
