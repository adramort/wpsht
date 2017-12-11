
<?php get_header(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="post-img-single">
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) { 
					the_post_thumbnail('ogbbblog-post-img-single'); 
					} else { ?>
						<img src="<?php echo esc_url(get_template_directory_uri() . '/images/gorsel-yok.png'); ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" />
					<?php } ?>
			</div>
				<div class="post-title-single"><?php the_title(); ?></div>
				<div class="post-footer-single">
					<span class="post-date-single"><?php the_date(); ?></span>
					<span class="post-author-single"><?php the_author(); ?></span>
					<span class="post-comment-single"><?php comments_number( __( 'Leave a comment', 'ogbbblog' ), __( '1 Comment', 'ogbbblog' ), __( '% Comments', 'ogbbblog' ) ); ?></span>
					<span class="post-category-single"><?php the_category(', '); ?></span>
				</div>
				<div class="post-content-single"><?php the_content(); ?></div>
				<?php wp_link_pages('before=<p>&after=</p>&pagelink=%'); ?> <!--yazi icinde galeri yapma kodu-->

				<?php endwhile; endif; ?>

			<div class="tags"><?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?></div>

			<div class="navigate-single">
				<div class="previous-post"><?php previous_post_link('%link', __('Previous Post','ogbbblog')); ?></div>
				<div class="next-post"><?php next_post_link('%link', __('Next Post','ogbbblog')); ?></div>
			</div>
		</div>
		<?php comments_template(); ?>

<?php get_footer(); ?>