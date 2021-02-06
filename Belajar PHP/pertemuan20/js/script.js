$(document).ready(function() {
    // hilangkan tombol cari
    $('#tombol-cari').hide();


    // event ketika keyword ditulis
    $('#keyword').on('keyup', function() {
        // memunculkan icon loadng
        $('.loader').show();

        // ajax menggunakan load
        // $('#container').load('ajax/armada.php?keyword=' + $('#keyword').val());
        
        // $.get()
        $.get('ajax/armada.php?keyword=' + $('#keyword').val(), function(data) {
            $('#container').html(data);
            $('.loader').hide();
        })
    });

});