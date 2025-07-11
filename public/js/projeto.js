function deleteRegistroPaginacao(rotaUrl, idDoRegistro){
// alert(rotaUrl);
// alert(idDoRegistro);
    if(confirm("Deseja mesmo excluir o registro!")){
        $.ajax({
            url: rotaUrl,
            method: 'DELETE',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                id: idDoRegistro,
            },
            beforeSend: function(){
                $.blockUI({
                    message: 'Carregando...',
                    timeout: 2000,
                });
            },
        }).done(function (data){
            $.unblockUI();
            console.log(data)
            if(data.success == true){
                window.location.reload();
            }else{
                alert('Não foi possível buscar os dados.')
            }
        }).fail(function (data){
            $.unblockUI();
            alert('Não foi possível buscar os dados.');
        });
    }
}

$('#mascara_valor').mask('#,##0,00', {reverse: true})
