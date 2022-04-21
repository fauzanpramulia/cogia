// var speed= 5;
// var marginY = 0;
// var destination= 0;
// var scroller = null;
//
// function pindah(id){
//   destination = document.getElementById(id).offsetTop;
//
//   scroller = setTimeout(function(){
//     pindah(id);
//   }, 1);
//
//   marginY = marginY+speed;
//
//   if(marginY >= destination){
//     clearTimeout(scroller);
//
//   }
//
//   window.scroll(0,marginY);
//
// }

// pindah('content1'); return false;  pakai ini untuk di atas

$(document).ready(function(){
  $('.ui a').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname) {
      var $target = $(this.hash);
      $target = $target.length && $target
      || $('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        $('html,body')
        .animate({scrollTop: targetOffset}, 1000);
       return false;
      }
    }
  });
});
