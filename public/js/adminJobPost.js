
$('#onSubmit').on('submit',function(event){
    event.preventDefault();
    var jobFormData = $(this).serializeArray();
    var service = jobFormData[0]['value'];
    var address = jobFormData[1]['value'];
    var problem = jobFormData[2]['value'];
    var age = jobFormData[3]['value'];
    var gender = jobFormData[4]['value'];
    var shift = jobFormData[5]['value'];

    if(service==="" || address==="" || problem==="" || age==="" || gender==="" || shift==="" ){
        tata.error('সবগুলো ফিল্ড অবশ্যই পূরণ করতে হবে',' ');
    }
    else{
        url = '/onsubmitjobform';
        data = {service:service, address:address, problem:problem, age:age, gender:gender, shift:shift};
    
        axios.post(url,data)
        .then(function(response){
            if(response.data==1){
                var anchor = "<a href=''>Click here to manage all jobs</a>";
                $('#appendStatus').html("One job submitted successfully! <br> <a href='/adminJobManage'>Click here to manage all jobs</a>")
                $('#exampleModal').modal('show');
            }
        })
        .catch(function(error){
            alert("Something went wrong");
        });
    }
});