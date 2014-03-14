$(document).ready(function(){




$(function() {

	$(".auto").autocomplete({
		source: "/index.php/productos/Autocom",
		minLength: 1
	});				

});





$("#search").keypress(function( event ) {
  if ( event.which == 13 ) {
       
         event.preventDefault();
         var textSearch =$("#search").val();
          if(textSearch.length > 0 && textSearch != null){
            $.ajax({
                     type: "POST",
                     data:"search="+textSearch,
                     url: "/index.php/productos/search",
                     success: function(data){
                       $('.productos-random').html(data);
                       $target = $(".list-view");
                       $('html, body').stop().animate({
                       
                          'scrollTop': $target.offset().top
                       
                       }, 900, 'swing', function () {
                          window.location.hash = $target;
                          return false;
                       });
                       return false;


                    }
                  });
              return false;
            }

          }
  

  });


$(document).keypress(function(e) {
    
    /*if(e.which == 13) {
        alert('You pressed enter!');
    }
    */
});


$(".icon-search").click(function(){  
var textSearch =$("#search").val();

if(textSearch.length > 0 && textSearch != null){
  $.ajax({
           type: "POST",
           data:"search="+textSearch,
           url: "/index.php/productos/search",
           success: function(data){
             $('.productos-random').html(data);

                       $target = $(".list-view");
                       $('html, body').stop().animate({
                          'scrollTop': $target.offset().top
                       }, 900, 'swing', function () {
                          window.location.hash = $target;
                          return false;
                       });
                       return false;


          }
        });


}

return false;
});


});