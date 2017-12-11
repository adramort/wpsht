
<?php get_header(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="post-img-page">
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) { 
					the_post_thumbnail('tam-resim'); 
					} else { ?>
						<img src="<?php echo esc_url(get_template_directory_uri() . '/images/gorsel-yok.png'); ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" />
					<?php } ?>
			</div>
				<div class="post-title-page"><?php the_title(); ?></div>
				<div class="post-footer-page">
					<span class="post-date-page"><?php the_date(); ?></span>
					<span class="post-author-page"><?php the_author(); ?></span>
					<span class="post-comment-page"><?php comments_number( __( 'Leave a comment', 'ogbbblog' ), __( '1 Comment', 'ogbbblog' ), __( '% Comments', 'ogbbblog' ) ); ?></span>
					<span class="post-category-page"><?php the_category(', '); ?></span>
				</div>
				<div class="post-content-page"><?php the_content(); ?></div>
				<?php endwhile; endif; ?>

			<div class="tags"><?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?></div>

		</div>
		<?php comments_template(); ?>

<?php get_footer(); ?>