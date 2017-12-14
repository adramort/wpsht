<?php get_header(); ?>

<div class="grid">
    <?php while (have_posts()) : the_post(); ?>
        <article class="article">
            <figure class="article-figure">
            <?php echo types_render_field( "photo", array( "size" => "thumbnail" )); ?>
            </figure>
            <div class="article-content">
                <div class="post-title">user: <?php echo types_render_field( "name" ); ?></div>
                <span class="article-age">age: <?php echo types_render_field( "age" ); ?></span>
                <span class="article-company">company: <?php echo types_render_field( "company" ); ?></span>
            </div>
            <div class="article-review"><?php the_content(); ?></div>
        </article>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>