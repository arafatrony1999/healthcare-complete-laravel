

// Table making for show users who need Jobs
// Need Job table

function getAllData() {
    axios.get('/getAllData')
        .then(function (response) {

            if (response.status = 200) {

                $('#tableRow').empty();

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
                        var stringImg = jsonData[i].image;
                        $('<tr>').html(
                            "<td>" + jsonData[i].id + "</td>" +
                            "<td>" + jsonData[i].firstName + " " + jsonData[i].lastName + "</td>" +
                            "<td>" + jsonData[i].gender + "</td>" +
                            "<td><a href='tel:+88" + jsonData[i].number + "'>" + jsonData[i].number + "</a></td>" +
                            "<td><a href='mailto:" + jsonData[i].email + "'>" + jsonData[i].email + "</a></td>" +
                            "<td>" + jsonData[i].FB + "</td>" +
                            "<td>" + jsonData[i].address + "</td>" +
                            "<td>" + jsonData[i].city + "</td>" +
                            "<td>" + jsonData[i].zip + "</td>" +
                            "<td>" + jsonData[i].nid + "</td>" +
                            "<td><img width='50px' src='" + stringImg + "'></td>" +
                            "<td>" + jsonData[i].created_at + "</td>" +
                            "<td><button type='button' id='deleteBtnJobTable' class='btn btn-primary catchDataID' data-id=" + jsonData[i].id + ">" + "Delete</button></td>"
                        ).appendTo('#tableRow');
                    });
                }
                $('.catchDataID').on('click',function () {
                    var deleteID = $(this).data('id');
                    $('#exampleModal').modal('show');
                    $('#getJobDataID').html(deleteID);
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

$('#getJobID').on('click',function () {


    var spinner = "<div class='spinner-border' role='status'></div>"
    $('#getJobID').html(spinner);


    var getJobDataID = $('#getJobDataID').html();

    var url = "/axiosFormDataDelete";
    var data = {
        id: getJobDataID
    };
    axios.post(url, data)
        .then(function (response) {
            $('#exampleModal').modal('hide');
            getAllData();
            $('#getJobID').html("Delete");
            tata.success('ডাটা সফল ভাবে ডিলিট হয়েছে !',' ');
        })
        .catch(function (error) {
            tata.error('দুক্ষিত! ডাটা ডিলিট হয়নি',' ');
        });
});


// End
// End Job table
