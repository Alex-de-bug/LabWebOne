$('form').submit(function(e) {

    let y = $('#y').val();

    if (isNaN(Number.parseFloat(y)) || Number.parseFloat(y) < -3 || Number.parseFloat(y) > 3) {
        alert('Введите числовое значение от -3 до 3');
        return;
    }

    e.preventDefault();
    let form = $(this);

    jQuery.ajax({
        url: 'server_ex.php',
        type: 'GET',
        data: form.serialize(),
        success: function(data) {
            alert(data);
            // $('.result').html('<table class=".result">' + data + '</table>')
        },
        error: function() {
            alert('ERROR');
        }
    })
})