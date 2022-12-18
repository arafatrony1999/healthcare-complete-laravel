@extends('mainLayout.formLayout')

@section('title')
    Job Apply - Aponseba
@endsection

@section('destination-form')
    Job Apply
@endsection

@section('content')

<section class="container">
    <div class="form-group">
        <fieldset class="the-fieldset">
            <legend class="the-legend">Fill the form</legend>

            <div class="dummy-details">
                নিচের ফর্মটি পূরণ করুন। ফর্মটি পুরণ করার সময় অবশ্যই আপনার ফোন নম্বর, ঠিকানা, NID কার্ড ভালো ভাবে 
                যাচাই করে তারপর ফর্ম সাবমিট করুন। <br>
                (Optional) চিহ্নিত ফিল্ড গুলো খালি রেখে দিতে পারেন। কিন্তু বাকি ফিল্ড গুলো
                অবশ্যই পূরণ করতে হবে। <br>
                আমাদের সাপোর্ট টিম খুব দ্রুতো আপনার সাথে যোগাযোগ করবে। ধন্যবাদ। <br>
                জরুরী প্রয়োজনে যোগাযোগ করুন <a href="tel:+8801617799750">+880 1617-799750</a> এই নম্বরে।
            </div>

            <div class="col-md-6 margin-css">
                <label for="validationCustomUsername" class="form-label">First Name</label>
                <input type="text" id="firstName" class="form-control" placeholder="Enter your first name"
                    required>
                <span class="warning">Please enter your first name!</span>
            </div>

            <div class="col-md-6 margin-css">
                <label for="inputCity" class="form-label">Last Name</label>
                <input type="text" id="lastName" class="form-control" placeholder="Enter your last name"
                    required>
                <span class="warning1">Please enter your last name!</span>
            </div>


            <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="Male" id="male">
                    <label class="form-check-label" for="gridRadios1">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="Female" id="female">
                    <label class="form-check-label" for="gridRadios2">
                        Female
                    </label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="gender" disabled>
                    <label class="form-check-label" for="gridRadios3">
                        Other
                    </label>
                </div>
            </div>

            <div class="col-md-6 margin-css">
                <label class="visually-hidden" for="autoSizingInputGroup">Phone Number</label>
                <div class="input-group">
                    <div class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <input type="text" class="form-control" id="phoneNumber" placeholder="Enter your phone number" required>
                    <span class="warning2">Please enter your Phone Number!</span>
                </div>
            </div>

            <div class="col-md-6 margin-css">
                <label class="visually-hidden" for="autoSizingInputGroup">Email Address</label>
                <div class="input-group">
                    <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <input required type="text" class="form-control" id="emailaddrs" placeholder="Enter your email address">
                    <span class="warning5">Please enter your email address!</span>
                </div>
            </div>

            <div class="col-md-6 margin-css">
                <label class="visually-hidden" for="autoSizingInputGroup">Facebook ID link (Optional)</label>
                <div class="input-group">
                    <div class="input-group-text"><i class="fab fa-facebook-f" aria-hidden="true"></i>
                    </div>
                    <input type="text" class="form-control" id="FBid" placeholder="Provide your facebook ID link">
                </div>
            </div>

            <div class="col-md-6 margin-css">
                <label class="visually-hidden" for="autoSizingInputGroup">Permanent Address</label>
                <div class="input-group">
                    <div class="input-group-text"><i class="far fa-address-card"></i></div>
                    <input type="text" class="form-control" id="addr" placeholder="Enter your permanent address" required>
                </div>
            </div>

            <br>
            <p>City / Division</p>
            <select class="form-select margin-css" id="city" aria-label="Default select example">
                <option selected>Select your city</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Cumilla">Cumilla</option>
                <option value="Chandpur">Chandpur</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Chittagong">Chittagong</option>
                <option value="Borishal">Borishal</option>
                <option value="Gazipur">Gazipur</option>
                <option value="Gopalgonj">Gopalgonj</option>
                <option value="Moymonshing">Moymonshing</option>
            </select>


            <div class="col-md-2 margin-css">
                <label for="inputZip" class="form-label">Zip Code (Optional)</label>
                <input type="text"  class="form-control" id="zip">
            </div>

            
            <div class="col-md-6 margin-css">
                <label for="inputCity" class="form-label">NID Card Number</label>
                <input type="text" id="nid" class="form-control" placeholder="Enter your NID card number"
                    required>
                <span class="warning3">Please enter your NID card number!</span>
            </div>


            <div class="file-upload col-md-6">
                <button class="file-upload-btn" type="button"
                    onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

                <div class="image-upload-wrap">
                    <input id="inputFile" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                    <div class="drag-text">
                        <h3>Drag and drop a file or select add Image</h3>
                    </div>
                </div>
                <div class="file-upload-content">
                    <img class="file-upload-image" src="#" alt="your image" />
                    <div class="image-title-wrap">
                        <button type="button" onclick="removeUpload()" class="remove-image">Remove <span
                                class="image-title">Uploaded Image</span></button>
                    </div>
                </div>
            </div>

            <div class="col-12 margin-css">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        I agree to the <a href="" target="_blank" rel="noopener noreferrer">Terms and
                            Conditions</a>
                    </label>
                </div>
            </div>

            <div class="col-12 margin-css">
                <button onclick="formSendData()" id="roundSpinner" class="btn btn-primary"> Register </button>
            </div>
        </fieldset>
    </div>
</section>


<div class="modal fade" id="validateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <h1 class="p-1">
                    <span id="sendUserName"></span>
                </h1>
                {{-- <h4 class="my-2">We have send you a 6 digit code at your email address. Enter the code below.</h4>
                <form>
                    <div class="form-group my-3">
                        <label for="inputValid">Enter 6 digit code</label>
                        <input type="text" class="form-control" id="inputValid" aria-describedby="emailHelp" placeholder="Enter your code">
                    </div>
                </form> --}}
            </div>
            <div class="modal-footer">
                <button onclick="hide()" type="button" class="getID btn btn-danger">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function (e) {
                $('.image-upload-wrap').hide();

                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-content').show();

                $('.image-title').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);

        } else {
            removeUpload();
        }
    }

    function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
    }
    $('.image-upload-wrap').bind('dragover', function () {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function () {
        $('.image-upload-wrap').removeClass('image-dropping');
    });

</script>
@endsection