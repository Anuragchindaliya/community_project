function fetchData(id, role) {
    var link;
    if (role == 'member') {
        link = "../process/modalprocess.php";
    } else if (role == 'child') {
        link = "../process/childModal.php"
    }
    $.ajax({
        url: link,
        method: "post",
        data: {
            id: id
        },
        success: function(response) {
            $("#modalcontent").html(response);
        }
    })
}