$(function () {


  // $(".slider")
  // // 最初のスライドに"add-animation"のclassを付ける(data-slick-index="0"が最初のスライドを指す)
  // .on("init", function () {
  //   $('.slick-slide[data-slick-index="0"]').addClass("add-animation");
  // })
  // // 通常のオプション
  // .slick({
  //   autoplay: true, // 自動再生ON
  //   fade: true, // フェードON
  //   arrows: false, // 矢印OFF
  //   speed: 1000, // スライド、フェードアニメーションの速度1000ミリ秒
  //   autoplaySpeed: 3000, // 自動再生速度3000ミリ秒
  //   pauseOnFocus: false, // フォーカスで一時停止OFF
  //   pauseOnHover: false, // マウスホバーで一時停止OFF
  // })
  // .on({
  //   // スライドが移動する前に発生するイベント
  //   beforeChange: function (event, slick, currentSlide, nextSlide) {
  //     // 表示されているスライドに"add-animation"のclassをつける
  //     $(".slick-slide", this).eq(nextSlide).addClass("add-animation");
  //     // あとで"add-animation"のclassを消すための"remove-animation"classを付ける
  //     $(".slick-slide", this).eq(currentSlide).addClass("remove-animation");
  //   },
  //   // スライドが移動した後に発生するイベント
  //   afterChange: function () {
  //     // 表示していないスライドはアニメーションのclassを外す
  //     $(".remove-animation", this).removeClass(
  //       "remove-animation add-animation"
  //     );
  //   },
  // });


  //photosの4枚横スライドショー
    $('.slide_photos').slick({
      autoplaySpeed: 5000, 
      speed: 1500, 
      autoplay: true, 
      infinite: true, 
      slidesToShow: 4, 
      slidesToScroll: 4, 
      arrows: true, 
      prevArrow: '<div class="slick-prev"></div>', 
      nextArrow: '<div class="slick-next"></div>', 
      dots: true, 
      pauseOnFocus: false, 
      pauseOnHover: false, 
      pauseOnDotsHover: false, 
      responsive: [
    {
      breakpoint: 769, 
      settings: {
      slidesToShow: 2,
      speed: 600,
      }
    },
    {
      breakpoint: 480,
      settings: {
      slidesToShow: 1,
      centerMode: true,
      centerPadding: '0%',
      }
    }
    ]
  })

});