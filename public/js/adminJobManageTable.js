
// start Job table 
// JOB TABLE 

function adminJobManageTable() {

    axios.get('/getAllJobTablePostData')
        .then(function (response) {

            if (response.status = 200) {

                $('#JobTableRow').empty();

                $('#loader').addClass('d-none');
                $('#tr').addClass('d-none');
                $('#JobTable').removeClass('d-none');
                $('#tableLoader').addClass('d-none');

                var jsonData = response.data;

                if (jsonData == '') {

                    $('#loader').addClass('d-none');
                    $('#tr').addClass('d-none');
                    $('#tableLoader').addClass('d-none');
                    $('#tableNothing').removeClass('d-none');

                } else {

                    $('#JobTable').DataTable().destroy();
                    $('#JobTableRow').empty();
                    $.each(jsonData, function (i) {
                        $('<tr>').html(
                            "<td>" + jsonData[i].id + "</td>" +
                            "<td>" + jsonData[i].needservice + "</td>" +
                            "<td>" + jsonData[i].patientaddress + "</td>" +
                            "<td>" + jsonData[i].problem + "</td>" +
                            "<td>" + jsonData[i].age + "</td>" +
                            "<td>" + jsonData[i].gender + "</td>" +
                            "<td>" + jsonData[i].shift + "</td>" +
                            "<td><button type='button' class='btn btn-primary catchJobUpdateDataID' data-id=" + jsonData[i].id + ">" + "Update</button></td>" +
                            "<td><button type='button' class='btn btn-danger catchJobDataID' data-id=" + jsonData[i].id + ">" + "Delete</button></td>"
                        ).appendTo('#JobTableRow');
                    });
                }


                $('.catchJobDataID').on('click',function () {
                    var deleteJobID = $(this).data('id');
                    $('#exampleModal').modal('show');
                    $('#getJobPageDataID').html(deleteJobID);
                });

                $('.catchJobUpdateDataID').on('click', function () {
                    var UpdateJobID = $(this).data('id');
                    $('#getJobPageDataID').html(UpdateJobID);

                    var getJobMainID = $('#getJobPageDataID').html();

                    var getValueUrl = "/getValueUrl";
                    var getValueData = {
                        UpdateJobID: getJobMainID
                    };

                    axios.post(getValueUrl, getValueData)
                        .then(function (response) {
                            var jsonData = response.data;
                            $('#job-service').val(jsonData[0].needservice);
                            $('#job-address').val(jsonData[0].patientaddress);
                            $('#job-problem').val(jsonData[0].problem);
                            $('#job-age').val(jsonData[0].age);
                            $('#job-gender').val(jsonData[0].gender);
                            $('#job-shift').val(jsonData[0].shift);
                        })
                        .catch(function (error) {

                        });

                    $('#exampleModalUpdate').modal('show');
                });

                $('#JobTable').DataTable();
                $('.dataTables_length').addClass('bs-select');
            } else {
                $('#tr').addClass('d-none');
                $('#tableLoader').addClass('d-none');
                $('#tableNothing').removeClass('d-none');
            }
        });
}


// Job page delete 
$('#getJobPageID').on('click',function () {

    var spinner = "<div class='spinner-border' role='status'></div>"

    $('#getJobPageID').html(spinner);

    var getJobPageDataID = $('#getJobPageDataID').html();


    var Joburl = "/JobPageDataDelete";
    var getJobPageDataID = {
        id: getJobPageDataID
    };

    axios.post(Joburl, getJobPageDataID)
        .then(function (response) {
            if (response.data == 1) {
                $('#exampleModal').modal('hide');
                adminJobManageTable();
                $('#getJobPageID').html("Delete");
                tata.success('ডাটা সফল ভাবে ডিলিট হয়েছে !',' ');
            }
        })
        .catch(function (error) {
            tata.error('দুক্ষিত! ডাটা ডিলিট হয়নি',' ');
        });
});


// Job table axios update 

$('#getJobPageUpdateID').on('click', function () {
    var getJobMainID = $('#getJobPageDataID').html();

    var spinner = "<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>"

    $('#getJobPageUpdateID').html(spinner);

    var jobService = $('#job-service').val();
    var jobAddress = $('#job-address').val();
    var jobProblem = $('#job-problem').val();
    var jobAge = $('#job-age').val();
    var jobGender = $('#job-gender').val();
    var jobShift = $('#job-shift').val();

    updateURL = "/updateURL";
    updateData = {
        getJobMainID: getJobMainID,
        jobService: jobService,
        jobAddress: jobAddress,
        jobProblem: jobProblem,
        jobAge: jobAge,
        jobGender: jobGender,
        jobShift: jobShift
    };

    axios.post(updateURL, updateData)
        .then(function (response) {
            if (response.data == 1) {
                adminJobManageTable();
                $('#getJobPageUpdateID').html("Update");
                $('#exampleModalUpdate').modal('hide');
                tata.success('ডাটা আপডেট হয়েছে !',' ');
            } else {
                $('#getJobPageUpdateID').html("Update failed! ");
                $('#warningUpdate').removeClass('d-none');
                setTimeout(function(){
                    $('#getJobPageUpdateID').html("Update");
                    $('#warningUpdate').addClass('d-none');
                }, 3000);
            }
        })
        .catch(function (error) {
            tata.error('দুক্ষিত! ডাটা আপডেট হয়নি',' ');
            $('#getJobPageUpdateID').html('Update');
        });
});
