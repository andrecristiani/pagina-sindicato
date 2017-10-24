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

