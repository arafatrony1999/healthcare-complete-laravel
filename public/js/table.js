// // Table making for show users who need service
// // Need service table

// function getData() {
//     axios.get('/getTableData')
//         .then(function (response) {
//             if (response.status = 200) {
//                 $('#loader').addClass('d-none');
//                 $('#tr').addClass('d-none');
//                 $('#userTable').removeClass('d-none');
//                 $('#tableLoader').addClass('d-none');
//                 var jsonData = response.data;
//                 if (jsonData == '') {
//                     $('#loader').addClass('d-none');
//                     $('#tr').addClass('d-none');
//                     $('#tableLoader').addClass('d-none');
//                     $('#tableNothing').removeClass('d-none');
//                 } else {
//                     $('#userTable').DataTable().destroy();
//                     $('#tableRow').empty();
//                     $.each(jsonData, function (i) {
//                         $('<tr>').html(
//                             "<td>" + jsonData[i].id + "</td>" +
//                             "<td>" + jsonData[i].firstName + " " + jsonData[i].lastName + "</td>" +
//                             "<td>" + jsonData[i].gender + "</td>" +
//                             "<td><a href='tel:+88" + jsonData[i].number + "'>" + jsonData[i].number + "</a></td>" +
//                             "<td><a href='mailto:" + jsonData[i].email + "'>" + jsonData[i].email + "</a></td>" +
//                             "<td>" + jsonData[i].FB + "</td>" +
//                             "<td>" + jsonData[i].service + "</td>" +
//                             "<td>" + jsonData[i].address + "</td>" +
//                             "<td>" + jsonData[i].city + "</td>" +
//                             "<td>" + jsonData[i].zip + "</td>" +
//                             "<td>" + jsonData[i].nid + "</td>" +
//                             "<td>" + jsonData[i].created_at + "</td>" +
//                             "<td><button type='button' class='btn btn-primary catchDataID' data-id=" + jsonData[i].id + ">" + "Delete</button></td>"
//                         ).appendTo('#tableRow');
//                     });
//                 }
//                 $('.catchDataID').on('click',function () {
//                     var deleteID = $(this).data('id');
//                     $('#exampleModal').modal('show');
//                     $('#getID1').html(deleteID);
//                 });

//                 $('#userTable').DataTable();
//                 $('.dataTables_length').addClass('bs-select');
//             } else {
//                 $('#tr').addClass('d-none');
//                 $('#tableLoader').addClass('d-none');
//                 $('#tableNothing').removeClass('d-none');
//             }
//         }).catch(function (error) {
//             $('#tr').addClass('d-none');
//             $('#tableLoader').addClass('d-none');
//             $('#tableNothing').removeClass('d-none');
//         });
// }

// $('.getID').on('click', function () {

//     var getId = $('#getID1').html();

//     var url = "/axiosDelete";
//     var data = {
//         id: getId
//     };
//     axios.post(url, data)
//         .then(function (response) {
//             $('#exampleModal').modal('hide');
//             getData();
//         })
//         .catch(function (error) {
//             alert("Something went wrong!")
//         });
// });

// // End
// // Need service table








// // Table making for show users who need Jobs
// // Need Job table

// function getAllData() {
//     axios.get('/getAllData')
//         .then(function (response) {

//             if (response.status = 200) {

//                 $('#tableRow').empty();

//                 $('#loader').addClass('d-none');
//                 $('#tr').addClass('d-none');
//                 $('#userTable').removeClass('d-none');
//                 $('#tableLoader').addClass('d-none');

//                 var jsonData = response.data;

//                 if (jsonData == '') {

//                     $('#loader').addClass('d-none');
//                     $('#tr').addClass('d-none');
//                     $('#tableLoader').addClass('d-none');
//                     $('#tableNothing').removeClass('d-none');

//                 } else {
//                     $('#userTable').DataTable().destroy();
//                     $('#tableRow').empty();
//                     $.each(jsonData, function (i) {
//                         var stringImg = jsonData[i].image;
//                         $('<tr>').html(
//                             "<td>" + jsonData[i].id + "</td>" +
//                             "<td>" + jsonData[i].firstName + " " + jsonData[i].lastName + "</td>" +
//                             "<td>" + jsonData[i].gender + "</td>" +
//                             "<td><a href='tel:+88" + jsonData[i].number + "'>" + jsonData[i].number + "</a></td>" +
//                             "<td><a href='mailto:" + jsonData[i].email + "'>" + jsonData[i].email + "</a></td>" +
//                             "<td>" + jsonData[i].FB + "</td>" +
//                             "<td>" + jsonData[i].address + "</td>" +
//                             "<td>" + jsonData[i].city + "</td>" +
//                             "<td>" + jsonData[i].zip + "</td>" +
//                             "<td>" + jsonData[i].nid + "</td>" +
//                             "<td><img width='50px' src='" + stringImg + "'></td>" +
//                             "<td>" + jsonData[i].created_at + "</td>" +
//                             "<td><button type='button' id='deleteBtnJobTable' class='btn btn-primary catchDataID' data-id=" + jsonData[i].id + ">" + "Delete</button></td>"
//                         ).appendTo('#tableRow');
//                     });
//                 }
//                 $('.catchDataID').on('click',function () {
//                     var deleteID = $(this).data('id');
//                     $('#exampleModal').modal('show');
//                     $('#getJobDataID').html(deleteID);
//                 });

//                 $('#userTable').DataTable();
//                 $('.dataTables_length').addClass('bs-select');
//             } else {
//                 $('#tr').addClass('d-none');
//                 $('#tableLoader').addClass('d-none');
//                 $('#tableNothing').removeClass('d-none');
//             }
//         }).catch(function (error) {
//             $('#tr').addClass('d-none');
//             $('#tableLoader').addClass('d-none');
//             $('#tableNothing').removeClass('d-none');
//         });
// }

// $('#getJobID').on('click',function () {


//     var spinner = "<div class='spinner-border' role='status'></div>"
//     $('#getJobID').html(spinner);


//     var getJobDataID = $('#getJobDataID').html();

//     var url = "/axiosFormDataDelete";
//     var data = {
//         id: getJobDataID
//     };
//     axios.post(url, data)
//         .then(function (response) {
//             $('#exampleModal').modal('hide');
//             getAllData();
//             $('#getJobID').html("Delete");
//         })
//         .catch(function (error) {
//             alert("Something went wrong!")
//         });
// });


// // End
// // End Job table




// // Start visitor information table
// // Visitor information

// function getVisitorData() {

//     axios.get('/getVisitorsData')
//         .then(function (response) {

//             if (response.status = 200) {
//                 $('#loader').addClass('d-none');
//                 $('#tr').addClass('d-none');
//                 $('#userTable').removeClass('d-none');
//                 $('#tableLoader').addClass('d-none');
//                 var jsonData = response.data;
//                 if (jsonData == '') {
//                     $('#loader').addClass('d-none');
//                     $('#tr').addClass('d-none');
//                     $('#tableLoader').addClass('d-none');
//                     $('#tableNothing').removeClass('d-none');
//                 } else {
//                     $('#userTable').DataTable().destroy();
//                     $('#tableRow').empty();
//                     $.each(jsonData, function (i) {
//                         $('<tr>').html(
//                             "<td>" + jsonData[i].id + "</td>" +
//                             "<td>" + jsonData[i].ip + "</td>" +
//                             "<td>" + jsonData[i].time_date + "</td>"
//                         ).appendTo('#tableRow');
//                     });
//                 }
//                 $('#userTable').DataTable();
//                 $('.dataTables_length').addClass('bs-select');
//             } else {
//                 $('#tr').addClass('d-none');
//                 $('#tableLoader').addClass('d-none');
//                 $('#tableNothing').removeClass('d-none');
//             }
//         });
// }

// End
// Visitor information table 



// // Start Contact Table 
// // CONTACT TABLE 

// function getContactTableData() {
//     axios.get('/getContactTableData')
//         .then(function (response) {

//             if (response.status = 200) {

//                 $('#ContacttableRow').empty();

//                 $('#loader').addClass('d-none');
//                 $('#tr').addClass('d-none');
//                 $('#userTable').removeClass('d-none');
//                 $('#tableLoader').addClass('d-none');

//                 var jsonData = response.data;

//                 if (jsonData == '') {

//                     $('#loader').addClass('d-none');
//                     $('#tr').addClass('d-none');
//                     $('#tableLoader').addClass('d-none');
//                     $('#tableNothing').removeClass('d-none');

//                 } else {

//                     $('#userTable').DataTable().destroy();
//                     $('#ContacttableRow').empty();
//                     $.each(jsonData, function (i) {
//                         $('<tr>').html(
//                             "<td>" + jsonData[i].id + "</td>" +
//                             "<td>" + jsonData[i].fullName + "</td>" +
//                             "<td>" + jsonData[i].contactPhoneNumber + "</td>" +
//                             "<td>" + jsonData[i].contactEmail + "</td>" +
//                             "<td>" + jsonData[i].contactMessege + "</td>" +
//                             "<td>" + jsonData[i].created_at + "</td>" +
//                             "<td><button type='button' class='btn btn-primary catchContactDataID' data-id=" + jsonData[i].id + ">" + "Delete</button></td>"
//                         ).appendTo('#ContacttableRow');
//                     });
//                 }

//                 $('.catchContactDataID').on('click',function () {
//                     var deleteContactID = $(this).data('id');
//                     $('#exampleModal').modal('show');
//                     $('#getContactDataID').html(deleteContactID);
//                 });

//                 $('#userTable').DataTable();
//                 $('.dataTables_length').addClass('bs-select');
//             } else {
//                 $('#tr').addClass('d-none');
//                 $('#tableLoader').addClass('d-none');
//                 $('#tableNothing').removeClass('d-none');
//             }
//         });
// }

// $('#getContactID').click(function () {

//     var spinner = "<div class='spinner-border' role='status'></div>"

//     $('#getContactID').html(spinner);

//     var getContactDataID = $('#getContactDataID').html();


//     var contacturl = "/ContactFormDataDelete";
//     var Contactdata = {
//         id: getContactDataID
//     };

//     axios.post(contacturl, Contactdata)
//         .then(function (response) {
//             if (response.data == 1) {
//                 $('#exampleModal').modal('hide');
//                 getContactTableData();
//                 $('#getContactID').html("Delete");
//             }
//         })
//         .catch(function (error) {
//             alert("Something went wrong!");
//         });
// });


// // start Job table 
// // JOB TABLE 

// function adminJobManageTable() {

//     axios.get('/getAllJobTablePostData')
//         .then(function (response) {

//             if (response.status = 200) {

//                 $('#JobTableRow').empty();

//                 $('#loader').addClass('d-none');
//                 $('#tr').addClass('d-none');
//                 $('#JobTable').removeClass('d-none');
//                 $('#tableLoader').addClass('d-none');

//                 var jsonData = response.data;

//                 if (jsonData == '') {

//                     $('#loader').addClass('d-none');
//                     $('#tr').addClass('d-none');
//                     $('#tableLoader').addClass('d-none');
//                     $('#tableNothing').removeClass('d-none');

//                 } else {

//                     $('#JobTable').DataTable().destroy();
//                     $('#JobTableRow').empty();
//                     $.each(jsonData, function (i) {
//                         $('<tr>').html(
//                             "<td>" + jsonData[i].id + "</td>" +
//                             "<td>" + jsonData[i].needservice + "</td>" +
//                             "<td>" + jsonData[i].patientaddress + "</td>" +
//                             "<td>" + jsonData[i].problem + "</td>" +
//                             "<td>" + jsonData[i].age + "</td>" +
//                             "<td>" + jsonData[i].gender + "</td>" +
//                             "<td>" + jsonData[i].shift + "</td>" +
//                             "<td><button type='button' class='btn btn-primary catchJobUpdateDataID' data-id=" + jsonData[i].id + ">" + "Update</button></td>" +
//                             "<td><button type='button' class='btn btn-danger catchJobDataID' data-id=" + jsonData[i].id + ">" + "Delete</button></td>"
//                         ).appendTo('#JobTableRow');
//                     });
//                 }


//                 $('.catchJobDataID').on('click',function () {
//                     var deleteJobID = $(this).data('id');
//                     $('#exampleModal').modal('show');
//                     $('#getJobPageDataID').html(deleteJobID);
//                 });

//                 $('.catchJobUpdateDataID').on('click', function () {
//                     var UpdateJobID = $(this).data('id');
//                     $('#getJobPageDataID').html(UpdateJobID);

//                     var getJobMainID = $('#getJobPageDataID').html();

//                     var getValueUrl = "/getValueUrl";
//                     var getValueData = {
//                         UpdateJobID: getJobMainID
//                     };

//                     axios.post(getValueUrl, getValueData)
//                         .then(function (response) {
//                             var jsonData = response.data;
//                             $('#job-service').val(jsonData[0].needservice);
//                             $('#job-address').val(jsonData[0].patientaddress);
//                             $('#job-problem').val(jsonData[0].problem);
//                             $('#job-age').val(jsonData[0].age);
//                             $('#job-gender').val(jsonData[0].gender);
//                             $('#job-shift').val(jsonData[0].shift);
//                         })
//                         .catch(function (error) {

//                         });

//                     $('#exampleModalUpdate').modal('show');
//                 });

//                 $('#JobTable').DataTable();
//                 $('.dataTables_length').addClass('bs-select');
//             } else {
//                 $('#tr').addClass('d-none');
//                 $('#tableLoader').addClass('d-none');
//                 $('#tableNothing').removeClass('d-none');
//             }
//         });
// }


// // Job page delete 
// $('#getJobPageID').on('click',function () {

//     var spinner = "<div class='spinner-border' role='status'></div>"

//     $('#getJobPageID').html(spinner);

//     var getJobPageDataID = $('#getJobPageDataID').html();


//     var Joburl = "/JobPageDataDelete";
//     var getJobPageDataID = {
//         id: getJobPageDataID
//     };

//     axios.post(Joburl, getJobPageDataID)
//         .then(function (response) {
//             if (response.data == 1) {
//                 $('#exampleModal').modal('hide');
//                 adminJobManageTable();
//                 $('#getJobPageID').html("Delete");
//             }
//         })
//         .catch(function (error) {
//             alert("Something went wrong!");
//         });
// });


// // Job table axios update 

// $('#getJobPageUpdateID').on('click', function () {
//     var getJobMainID = $('#getJobPageDataID').html();

//     var spinner = "<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>"

//     $('#getJobPageUpdateID').html(spinner);

//     var jobService = $('#job-service').val();
//     var jobAddress = $('#job-address').val();
//     var jobProblem = $('#job-problem').val();
//     var jobAge = $('#job-age').val();
//     var jobGender = $('#job-gender').val();
//     var jobShift = $('#job-shift').val();

//     updateURL = "/updateURL";
//     updateData = {
//         getJobMainID: getJobMainID,
//         jobService: jobService,
//         jobAddress: jobAddress,
//         jobProblem: jobProblem,
//         jobAge: jobAge,
//         jobGender: jobGender,
//         jobShift: jobShift
//     };

//     axios.post(updateURL, updateData)
//         .then(function (response) {
//             if (response.data == 1) {
//                 adminJobManageTable();
//                 $('#getJobPageUpdateID').html("Update");
//                 $('#exampleModalUpdate').modal('hide');
//             } else {
//                 $('#getJobPageUpdateID').html("Update failed! ");
//                 $('#warningUpdate').removeClass('d-none');
//             }
//         })
//         .catch(function (error) {

//         });
// });




// $('#serviceaddNewbtn').on('click',function(){
//     $('#serviceAddModal').modal('show');
// });

// $('#addServicebtn').on('click',function(){
//     var addNewSpinner = "<div class='d-flex justify-content-center'><div class='spinner-border spinner-border-sm' role='status'></div></div>";
//     $('#addServicebtn').html(addNewSpinner);

//     var serviceName = $('#serviceName').val();
//     var serviceDesc = $('#serviceDesc').val();
//     var serviceImg = $('#serviceImg').val();
//     if(serviceImg==''){

//     }
//     else{
//         var url = '/serviceAddUrl';
//         var dataObject = {serviceName:serviceName,serviceDesc:serviceDesc}
//         axios.post(url,dataObject)
//         .then(function(response){
//             if(response.data==1){
//                 var serviceImgFile = $('#serviceImg').prop('files')[0];
    
//                 var fileData = new FormData();
//                 fileData.append('servicefileData',serviceImgFile);
//                 var url2 = '/serviceImageInsert';
    
//                 axios.post(url2,fileData)
//                 .then(function(response){
//                     getServiceData();
//                     $('#serviceAddModal').modal('hide');
//                     tata.success('ডাটা সফল ভাবে ডাটাবেজে সংরক্ষিত করা হয়েছে',' ');
//                 })
//                 .catch(function(error){
//                     tata.error('দুঃখিত। আবার চেষ্টা করুণ',' ');
//                 });
//             }
//             else{
//                 alert('fuck')
//             }
//         })
//         .catch(function(error){
//             alert('fuck2')
//         });
//     }
//     $('#addServicebtn').html('Add');
// });



// function getServiceData() {
//     axios.get('/getServiceTableData')
//     .then(function(response){
//         var jsonData = response.data;
//         $('#serviceTable').DataTable().destroy();
//         $('#ServiceTableRow').empty();
//         $.each(jsonData,function(i){
//             $('<tr>').html(
//                 "<td>" + jsonData[i].service_id + "</td>" +
//                 "<td>" + jsonData[i].service_name + "</td>" +
//                 "<td>" + jsonData[i].service_details + "</td>" +
//                 "<td><img src='" + jsonData[i].service_image + "' width='100px'></td>" +
//                 "<td><button class='btn btn-success catchServiceUpdate' id='catchServiceUpdate' data-id=" + jsonData[i].service_id + ">Update</button></td>"+
//                 "<td><button class='btn btn-danger catchServiceDelete' id='catchServiceDelete' data-id=" + jsonData[i].service_id + ">Delete</button></td>"
//             ).appendTo('#ServiceTableRow');
//         });
        
//         $('.catchServiceDelete').on('click',function(){
//             $('#serviceDeleteModal').modal('show');
//             var deleteServiceID = $(this).data('id');
//             $('#getServiceDataID').html(deleteServiceID);
//         });
        
//         $('.catchServiceUpdate').on('click',function(){
//             $('#serviceDeleteModal').modal('show');
//             var deleteServiceID = $(this).data('id');
//         });

        
//         // ============ DataTable ==========
//         $('#serviceTable').DataTable();
//         $('.dataTables_length').addClass('bs-select');

//     })
//     .catch(function (error) {
//         tata.error('দুঃখিত। আবার চেষ্টা করুণ',' ');
//     });


// }



// $('#getServiceID').on('click',function(){
//     var spinner = "<div class='d-flex justify-content-center'><div class='spinner-border spinner-border-sm' role='status'></div></div>";
//     $('#getServiceID').html(spinner);

//     var serviecDltID = $('#getServiceDataID').html();
//     var url = '/serviceDeleteURL';
//     var dataObject = {serviecDltID:serviecDltID};
//     axios.post(url,dataObject)
//     .then(function(response){
//         getServiceData();
//         $('#getServiceID').html('Delete');
//         $('#serviceDeleteModal').modal('hide');
//         tata.success('ডাটা সফল ভাবে ডিলিট হয়েছে',' ');
//     })
//     .catch(function(error){
//         tata.error('দুঃখিত। আবার চেষ্টা করুণ',' ');
//     });
// });