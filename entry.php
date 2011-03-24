<div class="post hentry" id="post-<?php the_ID(); ?>">
	<div class="post-date">
	<span><?php the_time('l'); ?></span> <a href="<?php echo get_option('home'); ?>/<?php the_time('Y/m') ?>"><?php the_time('F') ?></a> <a href="<?php echo get_option('home'); ?>/<?php the_time('Y/m/d') ?>"><?php the_time('jS') ?></a> <a href="<?php echo get_option('home'); ?>/<?php the_time('Y') ?>"><?php the_time('Y') ?></a>
  </div>
  <br />
  <h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <!--<div class="maru">
	  <a>　</a>
	  <a>　</a>
  </div> -->
    <p class="social-services">
    <a href="http://twitter.com/share?url=<?php the_permalink() ?>&via=noize_hioki" class="twitter-share-button">Tweet</a>
    <a href="http://b.hatena.ne.jp/entry/<?php the_permalink() ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php the_title(); ?>" data-hatena-bookmark-layout="standard" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加" height="24" width="50" style="border: none;" /></a>
   <iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>&layout=standard&show_faces=false&width=400&action=like&colorscheme=light" allowtransparency="true" style="border: medium none; overflow: hidden; width: 400px; height: 26px;" frameborder="0" scrolling="no"></iframe>
  </p>

  <div class="entry-content">
    <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>', false); ?>
    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
  </div>

  <div class="post-metadata">
    <span class="label">Category</span> <?php the_category(' ') ?>
    <?php the_tags('<span class="label">Tags</span> ', ' ', ''); ?>
  </div>
 
</div>
