// Table making for show users who need service
// Need service table

function getData() {
    axios.get('/getTableData')
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
                            "<td>" + jsonData[i].firstName + " " + jsonData[i].lastName + "</td>" +
                            "<td>" + jsonData[i].gender + "</td>" +
                            "<td><a href='tel:+88" + jsonData[i].number + "'>" + jsonData[i].number + "</a></td>" +
                            "<td><a href='mailto:" + jsonData[i].email + "'>" + jsonData[i].email + "</a></td>" +
                            "<td>" + jsonData[i].FB + "</td>" +
                            "<td>" + jsonData[i].service + "</td>" +
                            "<td>" + jsonData[i].address + "</td>" +
                            "<td>" + jsonData[i].city + "</td>" +
                            "<td>" + jsonData[i].zip + "</td>" +
                            "<td>" + jsonData[i].nid + "</td>" +
                            "<td>" + jsonData[i].created_at + "</td>" +
                            "<td><button type='button' class='btn btn-primary catchDataID' data-id=" + jsonData[i].id + ">" + "Delete</button></td>"
                        ).appendTo('#tableRow');
                    });
                }
                $('.catchDataID').on('click',function () {
                    var deleteID = $(this).data('id');
                    $('#exampleModal').modal('show');
                    $('#getID1').html(deleteID);
                });

                $('#userTable').DataTable();
                $('.dataTables_length').addClass('bs-select');
            } else {
                $('#tr').addClass('d-none');
                $('#tableLoader').addClass('d-none');
                $('#tableNothing').removeClass('d-none');
            }
        }).catch(function (error) {
            $('#tr').addClass('d-none');
            $('#tableLoader').addClass('d-none');
            $('#tableNothing').removeClass('d-none');
        });
}

$('.getID').on('click', function () {

    var getId = $('#getID1').html();

    var url = "/axiosDelete";
    var data = {
        id: getId
    };
    axios.post(url, data)
        .then(function (response) {
            $('#exampleModal').modal('hide');
            tata.success('ডাটা সফল ভাবে ডিলিট হয়েছে !',' ');
            getData();
        })
        .catch(function (error) {
            tata.error('দুক্ষিত! ডাটা ডিলিট হয়নি',' ');
        });
});

// End
// Need service table