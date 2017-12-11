
<?php get_header(); ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="post">
					<div class="post-img">
						<a href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail('qqq-post-img'); } else { ?>
								<img src="<?php echo esc_url(get_template_directory_uri() . '/images/gorsel-yok.png'); ?>" class="post-img" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" />
							<?php } ?>								
						</a>

					</div>
					<div class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
					<div class="post-footer">
						<span class="post-date"><?php the_date(); ?></span>
						<span class="post-author"><?php the_author(); ?></span>
						<span class="post-comment"><?php comments_number( __( 'Leave a comment' ), __( '1 Comment' ), __( '% Comments' ) ); ?></span>
						<span class="post-category"><?php the_category(', '); ?></span>
					</div>
					<div class="post-excerpt"><?php the_excerpt(); ?></div>
					<div class="devami"><a href="<?php the_permalink(); ?>"><?php esc_html_e('More'); ?></a></div>
				</div>
			<?php endwhile; ?>

				
				<?php the_posts_pagination( array(
				    'mid_size' => 3,
				    'prev_text' => __( 'Previous' ),
				    'next_text' => __( 'Next' ),
				) ); ?>
				


<?php get_footer(); ?>