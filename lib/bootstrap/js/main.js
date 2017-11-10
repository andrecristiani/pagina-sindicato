$('document').ready(function(){
    $("#btn-cana").click();
});

$(".btn-group .btn-default").click(function(){
    $(".div-cotacao").css('display', 'none');
    $(".btn-group>button").css('background-color', 'white');
    $(this).css('background-color', 'rgba(0,0,0,0.2)');
});

$("#btn-cana").click(function(){
    $("#div-cana").css('display', 'block');
});

$("#btn-cafe").click(function(){
    $("#div-cafe").css('display', 'block');
});

$("#btn-milho").click(function(){
    $("#div-milho").css('display', 'block');
});

$("#btn-amendoin").click(function(){
    $("#div-amendoin").css('display', 'block');
});

$("#btn-gado").click(function(){
    $("#div-gado").css('display', 'block');
});

$("#btn-frango").click(function(){
    $("#div-frango").css('display', 'block');
});

$("#login").click(function(){
    alert("clicou!");
});

$('button[data-toggle=popover]').popover({ 
    html : true,
    //trigger: "click", // може да се смени
    content: function() {
      return $('#popover_content_wrapper').html();
    }
});
