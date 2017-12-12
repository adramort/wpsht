<?php get_header(); ?>
    <div id="article-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <figure class="article-figure">
                <?php if ( has_post_thumbnail() ) { 
                    the_post_thumbnail('article-figure-img'); 
                    } else { ?>
                        <img class="article-figure-img" src="<?php echo esc_url(get_template_directory_uri() . '/images/gorsel-yok.png'); ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" />
                    <?php } ?>
            </figure>
            
            <div class="post-title-single"><?php the_title(); ?></div>
            
            <div class="post-footer-single">
                <span class="post-date"><?php the_date(); ?></span>
                <span class="post-author"><?php the_author(); ?></span>
                <span class="post-comment"><?php comments_number( __( 'Leave a comment' ), __( '1 Comment' ), __( '% Comments' ) ); ?></span>
                <span class="post-category"><?php the_category(', '); ?></span>
            </div>
                
            <div class="post-content"><?php the_content(); ?></div>
                
            <?php wp_link_pages('before=<p>&after=</p>&pagelink=%'); ?>

        <?php endwhile; endif; ?>

        <div class="tags"><?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?></div>

        <div class="navigate-single">
            <div class="previous-post"><?php previous_post_link('%link', __('Previous Post')); ?></div>
            <div class="next-post"><?php next_post_link('%link', __('Next Post')); ?></div>
        </div>
    </div>
    
<?php get_footer(); ?>