$(document).ready(function(){


$(".icon-search").live('click',function(){  
var textSearch =$("#search").val();

if(textSearch.length > 0 && textSearch != null){
  $.ajax({
           type: "POST",
           data:"search="+textSearch,
           url: "/airos/index.php/productos/search",
           success: function(data){
           	alert(data);
             $('.productos-random').html(data);
          }
        });


}

return false;
});


});