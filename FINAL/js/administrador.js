$(document).ready(function(){
  $('.fixed-action-btn').floatingActionButton();
  $('.tooltipped').tooltip();
  
  $(".ver").click(function(){
    alert("V -> " + $(this).attr("data-boleta"));
  });

  $(".editar").click(function(){
    alert("ED -> " + $(this).attr("data-boleta"));
  });

  $(".eliminar").click(function(){
    alert("EL -> " + $(this).attr("data-boleta"));
  });

  $(".pdf").click(function(){
    alert("PDF -> " + $(this).attr("data-boleta"));
  });

  $(".correo").click(function(){
    alert("CO -> " + $(this).attr("data-boleta"));
  });
});