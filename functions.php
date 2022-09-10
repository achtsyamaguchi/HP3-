<?php  add_theme_support('menus'); ?>

<?php 
function post_has_archive($args, $post_type){
  if('post'== $post_type){
    $args['rewrite']=true;
    $args ["label"] = '投稿'; /*「投稿」のラベル名 */
    $args['has_archive']='blogs'; /* アーカイブにつけるスラッグ名 */
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
?>

<?php add_theme_support('post-thumbnails');?>