<div class="entry-summary">
<?php if ( ( has_post_thumbnail() ) && ( !is_search() ) ) : ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
<?php endif; ?>
<span itemprop="description"><?php the_excerpt(); ?></span>
<a href="<?php echo get_the_permalink(); ?>" class="btn btn--purple btn--animated action__cta read-more">Read More</a>
<?php if ( is_search() ) { ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
<?php } ?>
</div>