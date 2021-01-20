$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('nav').addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
  }
});

equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 $(container).each(function() {

   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

$(document).ready(function() {
    equalheight('.news-item');
    
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
        $('.btn').tooltip({title: "<div id='custom-search-input'> <div class='input-group col-md-12'> <input type='text' class='form-                                control input-lg' placeholder='Zoeken...'> <span class='input-group-btn'> <button class='btn btn-info                               btn-lg' type='button'> <span class='glyphicon glyphicon-search'></span></button></span></div></div>",
                           html: true, 
                           placement: "bottom", 
                           trigger: "click"
                          });
    });
    
});

$(window).resize(function(){
  equalheight('.news-item');
});

