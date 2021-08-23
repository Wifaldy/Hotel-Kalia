$(function() {
    $('#tambahDataMahasiswa').on('click', function() {
        $('#exampleModalLabel').html("Tambah Data Mahasiswa");
        $('.modal-footer button[type=submit]').html("Tambah Data");
        $('#nama').val("");
        $('#umur').val("");
        $('#kelas').val("");


    })


    $('.tampilModalUbah').on('click', function() {
        $('.modal-body form').attr('action', 'http://localhost:8080/mvc/public/mahasiswa/ubah');

        $('#exampleModalLabel').html("Ubah Data Mahasiswa");
        $('.modal-footer button[type=submit]').html("Ubah Data");

        const id = $(this).data('id');

        $.ajax({
            url: "http://localhost:8080/mvc/public/mahasiswa/getubah",
            data: { id: id },
            method: "post",
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#umur').val(data.umur);
                $('#kelas').val(data.kelas);
                $('#id').val(data.id);
            }
        })
    });

});