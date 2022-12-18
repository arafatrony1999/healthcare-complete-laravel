@extends('mainLayout.formLayout')

@section('title')
    Service Apply - Aponseba
@endsection

@section('destination-form')
    Service Form
@endsection

@section('content')

<section class="container">
    <div class="form-group">
        <fieldset class="the-fieldset">
            <legend class="the-legend">Fill the form</legend>

            <div class="dummy-details">
                নিচের ফর্মটি পূরণ করুন। ফর্মটি পুরণ করার সময় অবশ্যই আপনার ফোন নম্বর, ঠিকানা ভালো ভাবে 
                যাচাই করে তারপর ফর্ম সাবমিট করুন। <br>
                (Optional) চিহ্নিত ফিল্ড গুলো খালি রেখে দিতে পারেন। কিন্তু বাকি ফিল্ড গুলো
                অবশ্যই পূরণ করতে হবে। <br>
                জরুরী প্রয়োজনে যোগাযোগ করুন <a href="tel:+8801617799750">+880 1617-799750</a> এই নম্বরে।
            </div>

            <div class="col-md-6 margin-css">
                <label for="inputCity" class="form-label">First Name</label>
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
                </div>
                <span class="warning2">Please enter your Phone Number!</span>
            </div>

            <div class="col-md-6 margin-css">
                <label class="visually-hidden" for="autoSizingInputGroup">Email Address (Optional)</label>
                <div class="input-group">
                    <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <input type="text" class="form-control" id="emailaddrs" placeholder="Enter your email address">
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
            <!-- important -->

            
            <legend class="col-form-label col-sm-2 pt-0">Service you need</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="service" id="attendant"
                        value="আয়া / অ্যাটেন্ডেন্ট" checked>
                    <label class="form-check-label" for="gridRadios1">
                        আয়া / অ্যাটেন্ডেন্ট
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="service" id="nurse"
                        value="নার্স">
                    <label class="form-check-label" for="gridRadios2">
                        নার্স
                    </label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="service" id="pycho"
                        value="ফিজিওথেরাপিস্ট">
                    <label class="form-check-label" for="gridRadios3">
                        ফিজিওথেরাপিস্ট
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="service" id="nani"
                        value="ব্যাবিসিটার / ন্যানি">
                    <label class="form-check-label" for="gridRadios2">
                        ব্যাবিসিটার / ন্যানি
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="service" id="maid"
                        value="সেবিকা / সহকারী">
                    <label class="form-check-label" for="gridRadios2">
                        সেবিকা / সহকারী
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="service" id="tutor"
                        value="প্রাইভেট টিউটর">
                    <label class="form-check-label" for="gridRadios2">
                        প্রাইভেট টিউটর
                    </label>
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
                <label for="inputCity" class="form-label">NID Card Number (Optional)</label>
                <input type="text" id="nid" class="form-control" placeholder="Enter your NID card number"
                    required>
            </div>

            <div class="col-12 margin-css">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                        I agree to the <a href="" target="_blank" rel="noopener noreferrer">Terms and
                            Conditions</a>
                    </label>
                </div>
            </div>

            <div class="col-12 margin-css">
                <button onclick="sendData()" id="formRegisterButton" class="btn btn-primary"> Register </button>
            </div>
        </fieldset>
    </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h1 class="p-1">
                    <span id="sendUserName"></span>
                </h1>
                <h2 class="d-none" id="getID1"></h2>
            </div>
            <div class="modal-footer">
                <button onclick="hide()" id="getID" type="button" class="getID btn btn-danger">Cancel</button>
            </div>
        </div>
    </div>
</div>
@endsection
