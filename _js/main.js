
$( document ).ready(function() {
  
  $('.image-slider').slick({
      autoplay: true,
      infinite: true,
      slidesToShow: 1,
      dots: true,
      slidesToScroll: 1,
      cssEase: "ease",
      autoplaySpeed: 4000,
      pauseOnHover: true,
      lazyLoad: 'ondemand',
    });

  $('.testimonials .scroller').slick({
      autoplay: false,
      infinite: true,
      slidesToShow: 1,
      dots: true,
      slidesToScroll: 1,
      cssEase: "ease",
      autoplaySpeed: 14000,
      pauseOnHover: false,
      lazyLoad: 'ondemand',
    });

  $('.product-slider').slick({
      autoplay: false,
      arrows: true,
      infinite: true,
      slidesToShow: 1,
      dots: false,
      slidesToScroll: 1,
      cssEase: "ease",
      autoplaySpeed: 1000,
      pauseOnHover: false,
      lazyLoad: 'ondemand',
    });

    $('.landing-slider').slick({
      autoplay: true,
      infinite: true,
      slidesToShow: 1,
      arrows: false,
      dots: false,
      slidesToScroll: 1,
      cssEase: "ease",
      autoplaySpeed: 3000,
      pauseOnHover: false,
      lazyLoad: 'ondemand',
    });

    $('.product-images').slick({
      autoplay: true,
      infinite: true,
      slidesToShow: 1,
      arrows: true,
      dots: true,
      slidesToScroll: 1,
      cssEase: "ease",
      autoplaySpeed: 3000,
      pauseOnHover: false,
      lazyLoad: 'ondemand',
    });

  $('.menu-toggle').click(function(){
        $(this).toggleClass('active');
        $(this).toggleClass('inactive');
        $('.nav').toggle(); 
        $('body').toggleClass('menu-open');
    });

  $('.read-specs').click(function(){
    $('.spec-wrapper').toggleClass('open');
  });

});