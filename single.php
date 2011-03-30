<?php get_header(); ?>

  <div id="content" class="widecolumn">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="navigation">
    <div class="align-right"><?php next_post_link('<span>[newer]</span> %link ') ?></div>
    <div class="align-left"><?php previous_post_link(' %link <span>[older]</span>') ?></div>
  </div>

  <?php include (TEMPLATEPATH . '/entry.php'); ?>
  <div id="feedbacks">
	<?php comments_template(); ?>
  </div>
  <div class="navigation">
    <div class="align-right"><?php next_post_link('<span>[newer]</span> %link ') ?></div>
    <div class="align-left"><?php previous_post_link(' %link <span>[older]</span>') ?></div>
  </div>
  
  <?php endwhile; else: ?>

  <p>Sorry, no posts matched your criteria.</p>

  <?php endif; ?>
<?php include( TEMPLATEPATH . '/PlaySpace.php' ); ?>
</div>

<?php get_footer(); ?>
