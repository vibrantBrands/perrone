
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
      autoplay: true,
      infinite: true,
      slidesToShow: 1,
      dots: true,
      slidesToScroll: 1,
      cssEase: "ease",
      autoplaySpeed: 1000,
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

  $('.menu-toggle').click(function(){
        $(this).toggleClass('active');
        $(this).toggleClass('inactive');
        $('.nav').toggle(); 
        $('body').toggleClass('menu-open');
    });

  

});