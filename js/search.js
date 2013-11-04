$(document).ready(function(){




$(function() {

	$(".auto").autocomplete({
		source: "/airos/index.php/productos/Autocom",
		minLength: 1
	});				

});



$( "#search" ).keypress(function( event ) {
  if ( event.which == 13 ) {
       
         event.preventDefault();
         var textSearch =$("#search").val();
          if(textSearch.length > 0 && textSearch != null){
            $.ajax({
                     type: "POST",
                     data:"search="+textSearch,
                     url: "/airos/index.php/productos/search",
                     success: function(data){
                       $('.productos-random').html(data);
                    }
                  });

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
           url: "/airos/index.php/productos/search",
           success: function(data){
             $('.productos-random').html(data);
          }
        });


}

return false;
});


});