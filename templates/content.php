<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="entry-summary">
    <div class="row">
        <div class="col-sm-3"> <?php if ( has_post_thumbnail()) : ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail('thumbnail'); ?></a><?php endif; ?></div>
        <div class="col-sm-9"><?php the_excerpt(); ?><?php get_template_part('templates/entry-meta'); ?></div>
    </div>
    
  </div>
</article>
