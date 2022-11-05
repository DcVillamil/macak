$(' li a.listar').on('click', function(e) {
    e.preventDefault();
    // $('#contenido li ').on('click', function(e) {
    //     e.preventDefault();
    // });
    var aID = $(this).attr('href');
    // console.log(aID);
    $.post(aID, function(data) {
        if (aID != "#") {
            $("#contenido").html(data);
        }
    });
});