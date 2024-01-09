  //transforma a variável do input number em float e fixa duas casas decimais depois da vírgula
  $("input").on("change",function(){  
        $(this).val(parseFloat($(this).val()).toFixed(2));
    });


