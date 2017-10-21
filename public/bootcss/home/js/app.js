
//轮播速率
$('.carousel').carousel({
  interval: 2000,
})
//监听右侧下拉栏状态
$(document).ready(function() {
  $(window).scroll(function() {
    if ($(document).scrollTop()<=0){
      $('nav').css('background','')
      $('nav').addClass('navbar-light')
    }else{
      $('nav').removeClass('navbar-light')
      $('nav').css('background','-webkit-gradient(linear, 0 0, 0 bottom, from(pink), to(rgba(255,192,203,0.0))');
      $('nav').css('border','0px');
    }
  });
});
//监听窗口改变
$('.carousel-inner').css('height',$(window).height())
$(window).resize(function(){
  $('.carousel-inner').css('height',$(window).height())
})
