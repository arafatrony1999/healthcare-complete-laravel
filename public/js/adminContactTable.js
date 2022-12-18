
// Start Contact Table 
// CONTACT TABLE 

function getContactTableData() {
    axios.get('/getContactTableData')
        .then(function (response) {

            if (response.status = 200) {

                $('#ContacttableRow').empty();

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
                    $('#ContacttableRow').empty();
                    $.each(jsonData, function (i) {
                        $('<tr>').html(
                            "<td>" + jsonData[i].id + "</td>" +
                            "<td>" + jsonData[i].fullName + "</td>" +
                            "<td>" + jsonData[i].contactPhoneNumber + "</td>" +
                            "<td>" + jsonData[i].contactEmail + "</td>" +
                            "<td>" + jsonData[i].contactMessege + "</td>" +
                            "<td>" + jsonData[i].created_at + "</td>" +
                            "<td><button type='button' class='btn btn-primary catchContactDataID' data-id=" + jsonData[i].id + ">" + "Delete</button></td>"
                        ).appendTo('#ContacttableRow');
                    });
                }

                $('.catchContactDataID').on('click',function () {
                    var deleteContactID = $(this).data('id');
                    $('#exampleModal').modal('show');
                    $('#getContactDataID').html(deleteContactID);
                });

                $('#userTable').DataTable();
                $('.dataTables_length').addClass('bs-select');
            } else {
                $('#tr').addClass('d-none');
                $('#tableLoader').addClass('d-none');
                $('#tableNothing').removeClass('d-none');
            }
        });
}



$('#getContactID').on('click',function () {

    var spinner = "<div class='spinner-border' role='status'></div>"

    $('#getContactID').html(spinner);

    var getContactDataID = $('#getContactDataID').html();


    var contacturl = "/ContactFormDataDelete";
    var Contactdata = {
        id: getContactDataID
    };

    axios.post(contacturl, Contactdata)
        .then(function (response) {
            if (response.data == 1) {
                $('#exampleModal').modal('hide');
                getContactTableData();
                $('#getContactID').html("Delete");
                tata.success('ডাটা সফল ভাবে ডিলিট হয়েছে !',' ');
            }
        })
        .catch(function (error) {
            tata.error('দুক্ষিত! ডাটা ডিলিট হয়নি',' ');
        });
});
