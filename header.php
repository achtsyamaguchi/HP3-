<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="<?php bloginfo('description'); ?>" />
 <title><?php bloginfo('name'); ?></title>

 <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>

 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Allura&family=BIZ+UDGothic&family=EB+Garamond:ital@1&family=Indie+Flower&family=Inter:wght@100;200;300;400&family=M+PLUS+Rounded+1c:wght@300;400;500;700&family=Noto+Sans+JP&family=Noto+Serif+JP:wght@400;500;600;700;900&family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Orelega+One&family=Roboto:ital,wght@0,500;1,100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/eej3kcp.css">
 <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css">
 <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css">
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header_inner">
      <nav class="header_nav">
        <!-- <ul class="header_ul">
          <li class="header_li"><a href="<?php echo home_url(); ?>">home</a></li>
          <li class="header_li"><a href="<?php echo get_template_directory_uri();?>/html/photos.html">photos</a></li>
          <li class="header_li"><a href="<?php echo get_template_directory_uri();?>/html/contact.html">contact</a></li>
          <li class="header_li"><a href="<?php echo get_template_directory_uri();?>/html/blogs.html">blog</a></li>
        </ul> -->
        <?php
          $args = array(
            'menu' => 'menu',
            'menu_class' => 'header_ul',
            'container' => false,
          );
          wp_nav_menu($args); ?>
      </nav>
    </div>
  </header>
