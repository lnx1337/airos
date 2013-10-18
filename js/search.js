$(document).ready(function(){




$(function() {

	$(".auto").autocomplete({
		source: "/airos/index.php/productos/Autocom",
		minLength: 1
	});				

});


$(".icon-search").live('click',function(){  
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