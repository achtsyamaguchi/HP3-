$(function () {
//スクロールしたら自動で次のセクションまでいく
var current;
$.scrollify({
section:".scroll_box",
setHeights:false,
before:function(i,box){
current = i;
},
});

$(window).on('resize',function(){
if(current){
var currentScrl = $('.scroll_box').eq(current).offset().top;
$(window).scrollTop(currentScrl);
}
});

$(window).scroll(function() {
  $(".spring_top1_txt").each(function() {
    var scroll = $(window).scrollTop();
    var blockPosition = $(this).offset().top;
    var windowHeihgt = $(window).height();
    if (scroll > blockPosition - windowHeihgt + 300) {
      $(this).addClass("blockin");
    }
  });
});



});




