<!--Gonderinin sifre korumali olup olmadigini gormek icin bir test var ve eger oyleyse sablonun islenmesini durduruyor.-->
<?php if ( post_password_required() ) return; ?>
<!--Gonderinin sifre korumali olup olmadigini gormek icin bir test var ve eger oyleyse sablonun islenmesini durduruyor.-->

<div id="comments" class="comments-area">
	<!--Yazi ile iliskili yorumlarin olup olmadigini sorgular.--> 
    <?php if ( have_comments() ) : ?>
	<!--Yazi ile iliskili yorumlarin olup olmadigini sorgular.-->
	
        <!--Yorumlarin ustunde gorunen yazinin basligini ve yorum sayisini yazdirir.-->
		<h2 class="comments-title">
            <?php
				$comments_number = get_comments_number();
				if ( 1 === $comments_number ) {
					/* translators: %s: post title */
					printf( esc_html_x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'ogbbblog'), get_the_title() );
				} else {
					printf(
						/* translators: 1: number of comments, 2: post title */
						esc_html(_nx(
							'%1$s thought on &ldquo;%2$s&rdquo;',
							'%1$s thoughts on &ldquo;%2$s&rdquo;',
							$comments_number,
							'comments title',
							'ogbbblog')),
						esc_html(number_format_i18n( $comments_number )),
						get_the_title()
					);
				}
			?>
        </h2>
		<!--Yorumlarin ustunde gorunen yazinin basligini ve yorum sayisini yazdirir..-->
 
        <ol class="comment-list">
            <!--Yorumlari sirali liste olarak yazdirir.-->
			<?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 50,
                ) );
            ?>
			<!--Yorumlari sirali liste olarak yazdirir.-->
        </ol>
		
		<!--Admin panelinden ayarladigimiz en fazla yorum sayisi kadar yorum var mi diye sorgular.-->
        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<!--Admin panelinden ayarladigimiz en fazla yorum sayisi kadar yorum var mi diye sorgular.-->
			
			<!--Admin panelinden ayarladigimiz yorum sayisindan fazla ise yorumlari sayfalar.-->
			<nav class="navigation comment-navigation" role="navigation">
				<h1 class="screen-reader-text section-heading"><?php esc_html_e('Comment navigation','ogbbblog'); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( esc_html__('Older Comments', 'ogbbblog') ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__('Newer Comments','ogbbblog') ); ?></div>
			</nav>
			<!--Admin panelinden ayarladigimiz yorum sayisindan fazla ise yorumlari sayfalar.-->
        <?php endif; ?>
 
		<!--Yazi yoruma kapaliysa, yoruma kapali olduklarini gosteren bir satir goruntuler.-->
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
			<p class="no-comments"><?php esc_html_e('Comments are closed.','ogbbblog'); ?></p>
        <?php endif; ?>
		<!--Yazi yoruma kapaliysa, yoruma kapali olduklarini gosteren bir satir goruntuler.-->
		
    <?php endif; ?>
    <?php
		comment_form( array(
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',
		) );
	?>
 
</div>