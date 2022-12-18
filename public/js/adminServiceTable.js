
// ========== SERVICE ADD ==========    
$('#serviceaddNewbtn').on('click',function(){
    $('#serviceAddModal').modal('show');
});

$('#addServicebtn').on('click',function(){
    var addNewSpinner = "<div class='d-flex justify-content-center'><div class='spinner-border spinner-border-sm' role='status'></div></div>";
    $('#addServicebtn').html(addNewSpinner);

    var serviceName = $('#serviceName').val();
    var serviceDesc = $('#serviceDesc').val();
    var serviceImg = $('#serviceImg').val();
    if(serviceImg==''){

    }
    else{
        var url = '/serviceAddUrl';
        var dataObject = {serviceName:serviceName,serviceDesc:serviceDesc}
        axios.post(url,dataObject)
        .then(function(response){
            if(response.data==1){
                var serviceImgFile = $('#serviceImg').prop('files')[0];
    
                var fileData = new FormData();
                fileData.append('servicefileData',serviceImgFile);
                var url2 = '/serviceImageInsert';
    
                axios.post(url2,fileData)
                .then(function(response){
                    getServiceData();
                    $('#serviceAddModal').modal('hide');
                    tata.success('ডাটা সফল ভাবে ডাটাবেজে সংরক্ষিত করা হয়েছে',' ');
                })
                .catch(function(error){
                    tata.error('দুঃখিত। আবার চেষ্টা করুণ',' ');
                });
            }
            else{
                tata.error('দুঃখিত। আবার চেষ্টা করুণ',' ');
            }
        })
        .catch(function(error){
            tata.error('দুঃখিত। আবার চেষ্টা করুণ',' ');
        });
    }
    $('#addServicebtn').html('Add');
});

// ========== SERVICE ADD ==========  


// ========== SERVICE GET ==========  
function getServiceData() {
    axios.get('/getServiceTableData')
    .then(function(response){
        var jsonData = response.data;
        $('#serviceTable').DataTable().destroy();
        $('#ServiceTableRow').empty();
        $.each(jsonData,function(i){
            $('<tr>').html(
                "<td>" + jsonData[i].service_id + "</td>" +
                "<td>" + jsonData[i].service_name + "</td>" +
                "<td>" + jsonData[i].service_details + "</td>" +
                "<td><img src='" + jsonData[i].service_image + "' width='100px'></td>" +
                "<td><button class='btn btn-success catchServiceUpdate' id='catchServiceUpdate' data-id=" + jsonData[i].service_id + ">Update</button></td>"+
                "<td><button class='btn btn-danger catchServiceDelete' id='catchServiceDelete' data-id=" + jsonData[i].service_id + ">Delete</button></td>"
            ).appendTo('#ServiceTableRow');
        });
        
        $('.catchServiceDelete').on('click',function(){
            $('#serviceDeleteModal').modal('show');
            var deleteServiceID = $(this).data('id');
            $('#getServiceDataID').html(deleteServiceID);
        });
        
        $('.catchServiceUpdate').on('click',function(){
            $('#serviceUpdateModal').modal('show');
            var updateServiceID = $(this).data('id');
            var url = '/updateServiceGet';
            var dataObject = {id:updateServiceID};
            axios.post(url,dataObject)
            .then(function(response){
                var data = response.data;

                $('#serviceUpdateID').html(data[0].service_id);
                $('#serviceNameUpdate').val(data[0].service_name);
                $('#serviceDescUpdate').val(data[0].service_details);
                
                $('#image-update').html("<img src='"+data[0].service_image+"' width='100px'>");

                
            })
            .catch(function(error){

            })
        });

        
        // ============ DataTable ==========
        $('#serviceTable').DataTable();
        $('.dataTables_length').addClass('bs-select');

    })
    .catch(function (error) {
        tata.error('দুঃখিত। আবার চেষ্টা করুণ',' ');
    });
}
// ========== SERVICE GET ==========  



$('#getServiceID').on('click',function(){
    var spinner = "<div class='d-flex justify-content-center'><div class='spinner-border spinner-border-sm' role='status'></div></div>";
    $('#getServiceID').html(spinner);

    var serviecDltID = $('#getServiceDataID').html();
    var url = '/serviceDeleteURL';
    var dataObject = {serviecDltID:serviecDltID};
    axios.post(url,dataObject)
    .then(function(response){
        getServiceData();
        $('#getServiceID').html('Delete');
        $('#serviceDeleteModal').modal('hide');
        tata.success('ডাটা সফল ভাবে ডিলিট হয়েছে',' ');
    })
    .catch(function(error){
        tata.error('দুঃখিত। আবার চেষ্টা করুণ',' ');
    });
});


$('#updateServicebtn').on('click',function(){
    var serviceUpdateID = $('#serviceUpdateID').html();
    var serviceNameUpdate = $('#serviceNameUpdate').val();
    var serviceDescUpdate = $('#serviceDescUpdate').val();
    
    var serviceImageGet = $('#image-update').val();

    var url = '/serviceUpdateURL';
    var dataObject = {
        serviceUpdateID:serviceUpdateID,
        serviceNameUpdate:serviceNameUpdate,
        serviceDescUpdate:serviceDescUpdate
    }
    axios.post(url,dataObject)
    .then(function(response){
        if(response.data==1){
            if(serviceImageGet==""){
                getServiceData();
                $('#getServiceID').html('Update');
                $('#serviceUpdateModal').modal('hide');
                tata.success('ডাটা সফল ভাবে আপডেট হয়েছে',' ');
            }
            else{
                var serviceImgUpdate = $('#serviceImgUpdate').prop('files')[0];
    
                var fileDataUpdate = new FormData();
                fileDataUpdate.append('servicefileData',serviceImgUpdate);

                var url2 = '/serviceImageUpdate';
                axios.post(url2,fileDataUpdate)
                .then(function(response){
                    getServiceData();
                    $('#getServiceID').html('Update');
                    $('#serviceUpdateModal').modal('hide');
                    tata.success('ডাটা সফল ভাবে আপডেট হয়েছে',' ');
                })
                .catch(function(error){
                    tata.error('ছবি আপডেট হয়নি !');
                });
            }
        }
        else{
            tata.error('দুক্ষিত! ডাটা আপডেট হয়নি','');
        }
    })
    .catch(function(error){
        tata.error('দুক্ষিত! ডাটা আপডেট হয়নি','');
    });
});