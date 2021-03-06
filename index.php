<?php get_header(); ?>

<div class="content">
	<section id="page-wrapper">
		<?php while (have_posts()) : the_post() ?>
			<article id="post-<?php the_ID(); ?>" <?php if(!is_single() && !is_page()) post_class(); else post_class('single') ?>>
				<header>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<small><?php the_date('d. m. Y'); ?></small>
				</header>
				<div class="page-content">
					<?php 
						if(!is_single() && !is_page()) {
							echo '<div class="post-thumbnail">';
							the_post_thumbnail();
							echo '</div>';

							the_excerpt();
						} else {
							the_content();
						}
					?>
					<div class="clear"></div>

					<div class="left tags">
						<?php
							$categories = get_the_category();
							if($categories){
								foreach($categories as $category) {
									echo '<a href="' . get_category_link($category->term_id) . '" class="btn btn-line btn-small" title="' . esc_attr(sprintf( __("View all posts in %s"), $category->name)) . '">' . $category->cat_name . '</a>';
								}
							}

							$tags = get_the_tags();
							if($tags) {
								foreach($tags as $tag) {
									echo '<a href="' . get_tag_link($tag->term_id) . '" class="btn btn-line btn-small" title="' . esc_attr(sprintf( __("View all posts tagged with %s"), $tag->name)) . '">' . $tag->name . '</a>';
								}
							}
						?>
					</div>
					<div class="right">
						<?php
							if(!is_single() && !is_page())
								comments_popup_link(
									'<i class="icon-plus-sign"></i> kommentieren',
									'<i class="icon-comment"></i> ein Kommentar',
									'<i class="icon-comments"></i> % Kommentare',
									'comment-button btn'
								);
						?>
					</div>
					<div class="clear"></div>
					<?php if(is_single() && !is_page()): ?>
						<section id="post-comments">
							<?php comments_template(); ?>
						</section>
					<?php endif; ?>
				</div>
			</article>				
		<?php endwhile; ?>

		<div class="clear"></div>
		<div class="left" style="margin-bottom:20px;">
			<?php previous_posts_link('<span class="btn btn-light"><i class="icon-caret-left"></i> vorherige Seite</span>'); ?>
		</div>
		<div class="right" style="margin-bottom:20px;">
			<?php next_posts_link('<span class="btn btn-light">nächste Seite <i class="icon-caret-right"></i></span>'); ?>
		</div>
	</section>

<?php get_sidebar(); ?>