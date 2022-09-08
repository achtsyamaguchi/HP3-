$(function () {


  


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