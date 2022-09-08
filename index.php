
  
<?php get_header(); ?>
  <div class="slider scroll_box">
    <div class="slick_img">
      <img src="<?php echo get_template_directory_uri();?>/img/sakura.jpg" alt=""/>
    </div>
    <div class="slick_img">
      <img src="<?php echo get_template_directory_uri();?>/img/summer-top-pc.jpg" alt=""/>
    </div>
    <div class="slick_img">
      <img src="<?php echo get_template_directory_uri();?>/img/autumn-top-pc.jpg" alt=""/>
    </div>
    <div class="slick_img">
      <img src="<?php echo get_template_directory_uri();?>/img/winter-top-pc.jpg" alt=""/>
    </div>
  </div>

  <div class="main_title">
    <h1 class="section_title top_title">Four seasons<br><small class="main_title_sub">四季</small></h1>
  </div>

<div class="wrapper">
  <section class="spring_top1">
    <div class="scroll_box">
      <img src="<?php echo get_template_directory_uri();?>/img/sakura.jpg" alt="桜">
    </div>

    <div class="spring_top1_txt">
      <h3>
        four seasons<br><span>四季</span>
      </h3>
      <p class="spring_top1_sub_title">世界の四季</p>
      <p>日本の四季<br>
        日本の四季は特殊です<br>
        日本が特徴的なのは「春」<br>
        と<br>
        「秋」が明確に季節となっ<br>
        ていることです。</p>
    </div>
  </section>

  <section class="spring_top2">
    <div class="scroll_box">
      <img src="<?php echo get_template_directory_uri();?>/img/spring-top-pc.jpg" alt="桜">
    </div>
    <div class="spring_top2_inner">
    <h2 class="section_title title_other">Spring</h2>
    <div class="btn">
      <a href="<?php echo esc_url(get_permalink(8)); ?>">View Photos</a>
    </div>
    </div>
    </section>

  <section class="summer_top">
    <div class="scroll_box">
      <img src="<?php echo get_template_directory_uri();?>/img/summer-top-pc.jpg" alt="海">
    </div>
    <div class="summer_top_inner">
      <h2 class="section_title title_other">Summer</h2>
      <div class="btn">
        <a href="<?php echo esc_url(get_permalink(8)); ?>">View Photos</a>
      </div>
      </div>
  </section>

  <section class="autumn_top">
    <div class="scroll_box">
      <img src="<?php echo get_template_directory_uri();?>/img/autumn-top-pc.jpg" alt="紅葉">
    </div>
    <div class="autumn_top_inner">
      <h2 class="section_title title_other">Autumn</h2>
      <div class="btn">
        <a href="<?php echo esc_url(get_permalink(8)); ?>">View Photos</a>
      </div>
      </div>
  </section>

  <section class="winter_top">
    <div class="scroll_box">
      <img src="<?php echo get_template_directory_uri();?>/img/winter-top-pc.jpg" alt="雪景色">
    </div>
    <div class="winter_top_inner">
      <h2 class="section_title title_other">Winter</h2>
      <div class="btn">
        <a href="<?php echo esc_url(get_permalink(8)); ?>">View Photos</a>
      </div>
      </div> 
  </section>
  

  <?php get_footer(); ?>
