$(document).ready(function () {
    $('#nestable').nestable({
        maxDepth: 3,
    }).on('change', function () {
        const data = {
            menu: window.JSON.stringify($('#nestable').nestable('serialize')),
            _token: $('input[name=_token]').val()
        };
        $.ajax({
            url: '/admin/menu/guardar-orden',
            type: 'POST',
            dataType: 'JSON',
            data: data,
            success: function (respuesta) {
            }
        });
    });

    $('.eliminar-menu').on('click',function(event){
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: '¿Está seguro que desea eliminar el registro?',
            text: "Esta acción no se puede deshacer!",
            icon: 'warning',
            buttons: {
                cancel: "Cancelar",
                confirm: "aceptar"
            },
        }).then((value)=>{
            if (value){
                window.location.href = url;
            }
        });
    });

    $(function () {
        $('#leerMas').click(function () {
            var collapse_content_selector = $('#collapse16');
            var toggle_switch = $(this);
            $(collapse_content_selector).toggle(function () {
                if ($(this).css('display') == 'none') {
                    toggle_switch.html('Leer Mas...');
                } else {
                    toggle_switch.html('');
                }
            });
        });
    });

    $('#nestable').nestable('expandAll');
});
