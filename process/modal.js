function fetchData(id) {
    // console.log(id);
    $.ajax({
        url: "../process/modalprocess.php",
        method: "post",
        data: {
            id: id
        },
        success: function(response) {
            $("#modalcontent").html(response);
        }
    })
}