@extends('mainLayout.formLayout')

@section('title')
    Contact us - Aponseba
@endsection


@section('destination-form')
    Contact Us
@endsection

@section('content')

<section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>যেকোনো প্রয়োজনে নিচের লিঙ্কে ক্লিক করে মেসেজ করুন আমাদের ফেসবুক পেইজে।
                <br>ফেসবুক পেইজ লিঙ্কঃ <a href="https://www.facebook.com/aponseheba">https://www.facebook.com/aponsebea</a>       
            </p>
        </div>
        <div class="container-contact">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>152 / 2 আরামবাগ, ঢাকা, বাংলাদেশ</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <a href="tel:01617799750">+880 1617-799750</a>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <a href="mailto:aponsebahomecare@gmail.com">aponsebahomecare@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="" id="ContactForm">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="fullName" placeholder="Full Name" required="required">
                    </div>
                    <div class="inputBox">
                        <input type="text" name="ContactPhone" placeholder="Your phone number" required="required">
                    </div>
                    <div class="inputBox">
                        <input type="text" name="ContactEmail" placeholder="Enter Your email" required="required">
                    </div>
                    <div class="inputBox">
                        <textarea name="ContactMessage" placeholder="Type your messege...." required="required"></textarea>
                    </div>
                    <div class="inputBox">
                        <button id="submitContactForm" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection