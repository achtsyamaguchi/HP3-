
<?php get_header(); ?>
<div class="wrapper">
<section class="blog">
    <div class="blog_wrapper">
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
      <div class="blog_img">
        <?php the_post_thumbnail(); ?>
        <!-- <img src="<?php echo get_template_directory_uri();?>/img/blog_top.jpg" alt=""> -->
      </div>
    <div class="blog_inner">
      <div class="blog_title">
        <h1><?php the_time('Y.m.d'); ?><br><?php the_title(); ?></h1>
      </div>
      <div class="blog_txt">
        <p>
          <?php the_content(); ?>
        <!-- 仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章の仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章 -->
        </p>
      </div>
    </div>

    <div class="pagenation">
      <!-- <a class="prev" href="#">preview</a> -->
      <?php previous_post_link('%link <','Preview'); ?>
      <a class="send_blogs" href="<?php echo esc_url(get_permalink(12)); ?>">BLOG</a>
      <?php next_post_link('> %link','Next'); ?>
    </div>
    <?php endwhile; endif; ?>
    </div>
    <?php get_footer(); ?>