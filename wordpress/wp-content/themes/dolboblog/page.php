
<?php get_header(); ?>
    <article id="article-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <?php the_title( '<h3 class="article-title">', '</h3>' ); ?>
                <?php if ( has_post_thumbnail() ) { ?>
                    <figure class="article-figure article-figure__post">
                        <?php the_post_thumbnail('article-figure-img'); ?>
                    </figure>  
                <?php }  ?>
            
            <div class="article-footer">
                <span class="article-meta"> <?php the_meta(); ?> </span>
                <span class="article-date"><?php the_date(); ?></span>
                <span class="article-author"><?php the_author(); ?></span>
                <span class="article-category"><?php the_category(', '); ?></span>
                <span class="tags"><?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?></span>
            </div>
            
            <div class="post-content"><?php the_content(); ?></div>
            
        <?php endwhile; endif; ?>

    </article>
<?php get_footer(); ?>