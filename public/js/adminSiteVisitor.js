

// Start visitor information table
// Visitor information

function getVisitorData() {

    axios.get('/getVisitorsData')
        .then(function (response) {

            if (response.status = 200) {
                $('#loader').addClass('d-none');
                $('#tr').addClass('d-none');
                $('#userTable').removeClass('d-none');
                $('#tableLoader').addClass('d-none');
                var jsonData = response.data;
                if (jsonData == '') {
                    $('#loader').addClass('d-none');
                    $('#tr').addClass('d-none');
                    $('#tableLoader').addClass('d-none');
                    $('#tableNothing').removeClass('d-none');
                } else {
                    $('#userTable').DataTable().destroy();
                    $('#tableRow').empty();
                    $.each(jsonData, function (i) {
                        $('<tr>').html(
                            "<td>" + jsonData[i].id + "</td>" +
                            "<td>" + jsonData[i].ip + "</td>" +
                            "<td>" + jsonData[i].time_date + "</td>"
                        ).appendTo('#tableRow');
                    });
                }
                $('#userTable').DataTable();
                $('.dataTables_length').addClass('bs-select');
            } else {
                $('#tr').addClass('d-none');
                $('#tableLoader').addClass('d-none');
                $('#tableNothing').removeClass('d-none');
            }
        });
}