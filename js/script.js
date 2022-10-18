var score = 0;

document.getElementById("sumarpto");



function puntaje(){
    result = score ++;
    if(result == 1){
        document.getElementById('sumarpto').innerHTML='Un dulce de mil pesos';
    }else if(result == 5){
        document.getElementById('sumarpto').innerHTML='Un dulce de 5 mil pesos';
    }else if(result == 10){
        document.getElementById('sumarpto').innerHTML='Un dulce de 10 mil pesos';
    }else if(result == 15){
        document.getElementById('sumarpto').innerHTML='Un dulce de 15 mil pesos';
    }
}



// jquery para modal eliminar participante
$('#eliminar').on('show.bs.modal', function(e){
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

    $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
});



// jquery para modal eliminar premio
$('#eliminar_premio').on('show.bs.modal', function(e){
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

    $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
});