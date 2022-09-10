<?php get_header(); ?>
<div class="wrapper">
  <div class="blogs">
    <h1 class="section_title blogs_title">Blogs</h1>

    <div class="blogs_wrapper">

    <?php if(have_posts()): while(have_posts()) : the_post(); ?>
    
      <div class="blogs_item blogs_right_img">
        <div class="blogs_img">
        <?php the_post_thumbnail(); ?>
          <!-- <img src="<?php echo get_template_directory_uri();?>/img/other-blogs.jpg" alt=""> -->
        </div>
        <div class="blogs_txt">
          <a href="<?php the_permalink(); ?>">
          <p><?php the_time('Y.m.d'); ?><br><span class="blogs_txt_sub"><?php the_title(); ?></span></p></a>
        </div>
      </div>


      <!-- <div class="blogs_item">
        <div class="blogs_img">
        <?php the_post_thumbnail(); ?> 
          <img src="<?php echo get_template_directory_uri();?>/img/other-blogs.jpg" alt=""> 
        </div>
        <div class="blogs_txt blogs_txt_right">
          <a href="<?php the_permalink(); ?>"><p><?php the_title(); ?><br><span class="blogs_txt_sub">春です</span></p></a>
        </div>
      </div>  -->

      <!-- <div class="blogs_item blogs_right_img">
        <div class="blogs_img">
          <img src="<?php echo get_template_directory_uri();?>/img/other-blogs.jpg" alt="">
        </div>
        <div class="blogs_txt">
          <a href="blog.html"><p>April 2021<br><span class="blogs_txt_sub">春です</span></p></a>
        </div>
      </div>

      <div class="blogs_item">
        <div class="blogs_img">
          <img src="<?php echo get_template_directory_uri();?>/img/other-blogs.jpg" alt="">
        </div>
        <div class="blogs_txt blogs_txt_right">
          <a href="blog.html"><p>April 2021<br><span class="blogs_txt_sub">春です</span></p></a>
        </div>
      </div>

      <div class="blogs_item blogs_right_img">
        <div class="blogs_img">
          <img src="<?php echo get_template_directory_uri();?>/img/other-blogs.jpg" alt="">
        </div>
        <div class="blogs_txt">
          <a href="blog.html"><p>April 2021<br><span class="blogs_txt_sub">春です</span></p></a>
        </div>
      </div>

      <div class="blogs_item">
        <div class="blogs_img">
          <img src="<?php echo get_template_directory_uri();?>/img/other-blogs.jpg" alt="">
        </div>
        <div class="blogs_txt blogs_txt_right ">
          <a href="blog.html"><p>April 2021<br><span class="blogs_txt_sub">春です</span></p></a>
        </div>
      </div> -->
      <?php endwhile; endif; ?>
    </div>
</div>
    <?php get_footer(); ?>