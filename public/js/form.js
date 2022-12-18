function sendData(){

    var spinner = "<div class='spinner-border' role='status'></div>"
    
    $('#formRegisterButton').html(spinner);

    var firstName = document.getElementById('firstName').value;

    if(firstName===""){
        $('#firstName').css('border','2px solid #f93154');
        $('.warning').css('display','block');
        $('#formRegisterButton').html("Register");
    }else{
        $('#firstName').css('border','2px solid green');
        $('.warning').css('display','none');

        var lastName = document.getElementById('lastName').value;
        if(lastName===""){
            $('#lastName').css('border','2px solid #f93154');
            $('.warning1').css('display','block');
            $('#formRegisterButton').html("Register");
        }else{
            $('#lastName').css('border','2px solid green');
            $('.warning1').css('display','none');
    
            if(document.getElementById('male').checked){
                var gender = document.getElementById('male').value;
            }
            else{
                var gender = document.getElementById('female').value;
            }

            var phoneNumber = document.getElementById('phoneNumber').value;

            if(phoneNumber===""){
                $('#phoneNumber').css('border','2px solid #f93154');
                $('.warning2').css('display','block');
                $('#formRegisterButton').html("Register");
            }else{
                $('#phoneNumber').css('border','2px solid green');
                $('.warning2').css('display','none');

                var emailaddrs = document.getElementById('emailaddrs').value;
                var FBid = document.getElementById('FBid').value;

                if(document.getElementById('attendant').checked){
                    var services = document.getElementById('attendant').value;
                }
                else if(document.getElementById('nurse').checked){
                    var services = document.getElementById('nurse').value;
                }
                else if(document.getElementById('pycho').checked){
                    var services = document.getElementById('pycho').value;
                }
                else if(document.getElementById('nani').checked){
                    var services = document.getElementById('nani').value;
                }
                else if(document.getElementById('maid').checked){
                    var services = document.getElementById('maid').value;
                }
                else{
                    var services = document.getElementById('tutor').value;
                }

                var addr = document.getElementById('addr').value;
                var city = document.getElementById('city').value;
                var zip = document.getElementById('zip').value;
                var nid = document.getElementById('nid').value;

                var url = "/axiosInsert";
                var data = {firstName:firstName, lastName:lastName, gender:gender, phoneNumber:phoneNumber, emailaddrs:emailaddrs, FBid:FBid, services:services, addr:addr, city:city, zip:zip, nid:nid};
    

                axios.post(url,data)
                .then(function (response) {
                    $('#sendUserName').html("<div class='text-adjust'>Thanks"+" "+firstName+" "+lastName+"!<br>"+"Your form has submitted successfully. We will contact you as soon as possible.</div>")
                    $('#exampleModal').modal('show');
                })
                .catch(function (error) {
                    $('#sendUserName').html("<img class='adjust' src='images/SorryEmoji.png' <br> Something went wrong! <br> Try again.")
                    $('#exampleModal').modal('show');
                });
            }
        }
    }
}



function formSendData() {
    var spinner = "<div class='spinner-border mx-3' role='status'></div>";
    
    $('#roundSpinner').html(spinner);

    var firstName = document.getElementById('firstName').value;
    if(firstName===""){
        $('#firstName').css('border','2px solid #f93154');
        $('.warning').css('display','block');
        $('#roundSpinner').html("Register");
    }
    else{
        $('#firstName').css('border','2px solid green');
        $('.warning').css('display','none');

        var lastName = document.getElementById('lastName').value;
        if(lastName===""){
            $('#lastName').css('border','2px solid #f93154');
            $('.warning1').css('display','block');
            $('#roundSpinner').html("Register");
        }
        else{
            $('#lastName').css('border','2px solid green');
            $('.warning1').css('display','none');

            if(document.getElementById('male').checked){
                var gender = document.getElementById('male').value;
            }
            else{
                var gender = document.getElementById('female').value;
            }

            var phoneNumber = document.getElementById('phoneNumber').value;
            if(phoneNumber===""){
                $('#phoneNumber').css('border','2px solid #f93154');
                $('.warning2').css('display','block');
                $('#roundSpinner').html("Register");
            }else{
                $('#phoneNumber').css('border','2px solid green');
                $('.warning2').css('display','none');
    
                var emailaddrs = document.getElementById('emailaddrs').value;

                if(emailaddrs==""){
                    $('#emailaddrs').css('border','2px solid #f93154');
                    $('.warning5').css('display','block');
                    $('#roundSpinner').html("Register");
                }
                else{
                    $('#emailaddrs').css('border','2px solid green');
                    $('.warning5').css('display','none');

                    var FBid = document.getElementById('FBid').value;
                    var addr = document.getElementById('addr').value;
                    var city = document.getElementById('city').value;
                    var zip = document.getElementById('zip').value;
                    var nid = document.getElementById('nid').value;
                    if(nid===""){
                        $('#nid').css('border','2px solid #f93154');
                        $('.warning3').css('display','block');
                        $('#roundSpinner').html("Register");
                    }
                    else{
                        $('#nid').css('border','2px solid green');
                        $('.warning3').css('display','none');
            
                    
                        var allFormData = {
                            firstName:firstName,
                            lastName:lastName,
                            gender:gender,
                            phoneNumber:phoneNumber,
                            emailaddrs:emailaddrs,
                            FBid:FBid,
                            addr:addr,
                            city:city,
                            zip:zip,
                            nid:nid
                        };

                        var url1 = "/applyFormInsert";


                        axios.post(url1,allFormData)
                        .then(function (response) {
                            
                            var myFile = document.getElementById('inputFile').files[0];

                            var fileData = new FormData();
                            fileData.append('fileData1',myFile);
                            var url2 = '/applyFormImageInsert';

                            var config = {headers:{'content-type':'multipart/form-data'}};

                            axios.post(url2,fileData,config)
                            .then(function(response){
                                alert('picture upload success');
                            })
                            .catch(function(error){
                                alert('picture upload failed');
                            });

                            $('#sendUserName').html("<div class='text-adjust'>Thanks"+" "+firstName+" "+lastName+",<br>We received your application successfully.</div>")
                            $('#validateModal').modal('show');
                            $('#roundSpinner').html('Register');
                        })
                        .catch(function (error) {
                            $('#sendUserName').html("<img class='adjust' src='images/SorryEmoji.png' <br> Something went wrong! <br> Try again.")
                            $('#validateModal').modal('show');
                        });
                    }
                }
            }
        }
    }
}

$('#getValidate').on('click',function(){
    var validation_code = $('#inputValid').val();

    var url = '/validityURL';
    var dataObject = {code:validation_code};

    axios.post(url,dataObject)
    .then(function(response){
        if(response.data==1){
            tata.success('Your application has submited successfully!',' ');
            $('#validateModal').modal('hide');
        }
        else{
            tata.error('The code you entered is incorrect.','Check and try again');
        }
    })
    .catch(function(error){
        tata.error('We are unable to handle the request!','Please try again later');
    })
});

function hide(){
    $('#validateModal').modal('hide');
    location.reload();
}


$('#a').on('click',function(){
    $('#validateModal').modal('show');
});
// Start contact form insert
// CONTACT FORM 


$('#ContactForm').on('submit',function(event){
    event.preventDefault();
    var spinner = "<div class='spinner-border' role='status'></div>";
    $("#submitContactForm").html(spinner);
    var ContactFormData = $(this).serializeArray();

    var fullName = ContactFormData[0]['value'];
    var contactPhoneNumber = ContactFormData[1]['value'];
    var contactEmailAddr = ContactFormData[2]['value'];
    var contactMessege = ContactFormData[3]['value'];

    var url = '/contactFormDataSubmit';
    var data = {fullName:fullName, contactPhoneNumber:contactPhoneNumber, contactEmailAddr:contactEmailAddr, contactMessege:contactMessege};

    axios.post(url,data)
    .then(function(response){
        location.reload();
    })
    .catch(function(error){
        alert("failed");
    });

});
