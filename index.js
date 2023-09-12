$('form').submit(function(e) {
    let x = Number.parseInt($('#param_x').val());
    let y = $('#y').val();
    y = Number.parseFloat(y);
    if (isNaN(Number.parseFloat(y)) || Number.parseFloat(y) < -3 || Number.parseFloat(y) > 3) {
        alert('Введите числовое значение от -3 до 3');
        return;
    }

    let r =$('#param_r').val();

    if (r==="") {
        alert('Заполните параметр R');
        return;
    }

    drawPoint(x,y,r);
    e.preventDefault();
    let form = $(this);

    jQuery.ajax({
        url: 'server_ex.php',
        type: 'GET',
        data: form.serialize(),
        success: function(data) {
            $('.database_table').html(data);
        },
        error: function() {
            alert('ERROR');
        }
    })
})

$('.clear_table').click(function (e){
    e.preventDefault();
    let form = $(this);

    jQuery.ajax({
        url: 'clear_table.php',
        type: 'GET',
        data: form.serialize(),
        success: function(data) {
            $('.database_table').html(data);
        },
        error: function() {
            alert('ERROR');
        }
    })
})
