function memberStatus(id, status) {
    console.log(id, status);
    $.ajax({
        url: "../process/updateMemberStatus.php",
        method: "post",
        data: {
            role: "status",
            id: id,
            status: status
        },
        success: function(response) {
            console.log(response);
            location.reload();

        }
    })
}

function refreshStatus() {
    $.ajax({
        url: "../process/updateMemberStatus.php",
        method: "get",
        success: function(response) {
            console.log(response);

        }
    })
}