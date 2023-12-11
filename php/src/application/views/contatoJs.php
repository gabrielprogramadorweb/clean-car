<script>
$(document).ready(function() {
    $('form').submit(function(e) {
        e.preventDefault();

        // Obter dados do formulário
        var formData = {
            'nome': $('#nome').val(),
            'email': $('#email').val(),
            'mensagem': $('#mensagem').val()
        };
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut",
            "toastClass": "toast-custom",
            "iconClasses": {
                "success": 'toast-success-icon',
            },
            "titleClass": "toast-title-custom"
        };
        // Enviando os dados usando AJAX
        $.ajax({
            type: 'POST',
            url: '<?= site_url('contato/enviar_mensagem'); ?>',
            data: formData,
            success: function(response) {
                // Notificação de sucesso usando Toastr
                toastr.success('Sua mensagem foi enviada com sucesso.');

                // Zerar os dados do formulário
                $('form')[0].reset();
            },
            error: function(error) {
                console.log('Erro ao enviar mensagem:', error);
            }
        });
    });
});
</script>