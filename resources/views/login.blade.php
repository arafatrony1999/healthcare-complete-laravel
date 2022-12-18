<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        body {
            background: #222D32;
            font-family: 'Roboto', sans-serif;
        }
        
        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            height: auto;
            background: #1A2226;
            text-align: center;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }
        
        .login-key {
            height: 100px;
            font-size: 80px;
            line-height: 100px;
            background: -webkit-linear-gradient(#27EF9F, #0DB8DE);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .login-title {
            margin-top: 15px;
            text-align: center;
            font-size: 30px;
            letter-spacing: 2px;
            margin-top: 15px;
            font-weight: bold;
            color: #ECF0F5;
        }
        
        .login-form {
            margin-top: 25px;
            text-align: left;
        }

        form{
            padding: 20px
        }
        
        input[type=text] {
            background-color: #1A2226;
            border: none;
            border-bottom: 2px solid #0DB8DE;
            border-top: 0px;
            border-radius: 0px;
            font-weight: bold;
            outline: 0;
            margin-bottom: 20px;
            padding-left: 0px;
            color: #ECF0F5;
        }
        
        input[type=password] {
            background-color: #1A2226;
            border: none;
            border-bottom: 2px solid #0DB8DE;
            border-top: 0px;
            border-radius: 0px;
            font-weight: bold;
            outline: 0;
            padding-left: 0px;
            margin-bottom: 20px;
            color: #ECF0F5;
        }
        
        .form-group {
            margin-bottom: 40px;
            outline: 0px;
        }
        
        .form-control:focus {
            border-color: inherit;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-bottom: 2px solid #0DB8DE;
            outline: 0;
            background-color: #1A2226;
            color: #ECF0F5;
        }
        
        input:focus {
            outline: none;
            box-shadow: 0 0 0;
        }
        
        .form-control-label {
            font-size: .9rem;
            color: white;
            font-weight: bold;
            letter-spacing: 1px;
        }
        
        .btn-outline-primary {
            border-color: #0DB8DE;
            color: #0DB8DE;
            font-weight: bold;
            letter-spacing: 1px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        }
        
        .btn-outline-primary:hover {
            background-color: #0DB8DE;
        }
        
        .login-button {
            text-align: center;
            margin: 25px auto;
        }
        
        .login-text {
            padding-left: 0px;
            color: #A2A4A4;
        }
        
        .login-text{
            display: none;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="" id="onSubmit">
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input name="adminUserName" value="" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input name="adminPassword" value="" type="password" class="form-control" required>
                            </div>

                            <div class="col-lg-6 login-text">
                                Username or password incorrect. Please check again!
                            </div>
                            <div class="col-lg-6 login-button">
                                <button type="submit" id="loginButton" class="btn btn-outline-primary">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{URL::asset('js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{URL::asset('js/axios.js')}}"></script>
    <script>
        $('#onSubmit').on('submit',function(event){
            event.preventDefault();

            var spinner = "<div class='spinner-border' role='status'></div>"
            $('#loginButton').html(spinner);

            var jobFormData = $(this).serializeArray();
            var adminUserName = jobFormData[0]['value'];
            var adminPassword = jobFormData[1]['value'];

            url = '/adminCheck';
            data = {adminUserName:adminUserName,adminPassword:adminPassword};
            axios.post(url,data)
            .then(function(response){
                if(response.data==1){
                    window.location.href="/admin";
                }else{
                    $('.login-text').css('display','block');
                    $('#loginButton').html("LOGIN");

                }
            })
            .catch(function(error){
            });
        });
    </script>
</body>
</html>