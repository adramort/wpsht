<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <article class="article">
        <figure class="article-figure">
            <a href="<?php the_permalink(); ?>" class="article-figure-link">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail('article-figure-img'); } else { ?>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/preview.png'); ?>" class="article-figure-img" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" />
                <?php } ?>
            </a>
        </figure>
        <div class="article-content">
            <div class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        </div>
        <div class="article-content"><?php the_excerpt(); ?></div>
        <div class="article-footer">
            <span class="article-date"><?php the_date(); ?></span>
            <span class="article-author"><?php the_author(); ?></span>
            <span class="article-category"><?php the_category(', '); ?></span>
        </div>
    </article>
<?php endwhile; ?>

<?php the_posts_pagination( array(
    'mid_size' => 2,
    'prev_text' => __('Previous'),
    'next_text' => __('Next'),
) ); ?>

<?php get_footer(); ?>