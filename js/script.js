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