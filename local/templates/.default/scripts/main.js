$(document).ready(function(){
  $('.product-gallery__main').slick({
    arrows: false,
    fade: true,
    asNavFor: '.product-gallery__under'
  })

  $('.product-gallery__under').slick({
    slidesToShow: 3,
    asNavFor: '.product-gallery__main'
  })


  $('#catalog-link').hover(()=>{
    $('.submenu').css('display', 'block')
  }, ()=>{
    $('.submenu').css('display', 'none')
  })
})