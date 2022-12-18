@extends('mainLayout.masterLayout')

@section('title')
FAQ - Aponseba
@endsection

@section('destination')
    FAQ's
@endsection

@section('content')

<section>
        <div class="container">
            <div class="faq-header">
                <h1>Frequently asked questions</h1>
            </div>
            <div class="faq-section">
                আমরা অনেক সময় অনেক ধরনের প্রশ্নের সম্মুখীন হই। যার মধ্যে বেশিরভাগ প্রশ্নই একই ধরনের। 
                তাছাড়া সকলে আমাদের ফেসবুক পেইজে বা সরাসরি ফোন করে প্রায় একই ধরনের প্রশ্ন জিজ্ঞেস করেন।
                যার কারনে সবার সব প্রশ্নের উত্তর যথাসময়ে দেওয়া আমাদের পক্ষে মাঝে মাঝে সম্ভব হয়ে উঠেনা।
                তাই কিছু সাধারন প্রশ্নের উত্তর দেওয়া হয়েছে। এর বাহিরে আরো কোনো প্রশ্ন থাকলে যোগাযোগ করুন আমাদের
                ফেসবুক পেইজে।
                আমাদের ফেসবুক পেইজ লিঙ্ক : <a style="color: #e4405f; border-bottom: #e4405f dotted 1px;" href="https://www.facebook.com/aponseheba/" target="_blank" rel="noopener noreferrer">Apon Seba - আপন সেবা</a>
                <br>
                অথবা যেকোনো সময় ফোন করতে পারেন <a style="color: #e4405f; border-bottom: #e4405f dotted 1px;" href="tel:+8801617799750">+8801617-799750</a> এই নম্বরে।
            </div>


            <div data-aos="fade-top"
            data-aos-delay="00" 
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-once="false" class="faq-card">
                <div class="inline">
                    <div class="faq-icons">
                        <h3><i class="far fa-arrow-alt-circle-right"></i></h3>
                    </div>
                    <div class="questions">
                        <h3> ন্যানি, আয়া, নার্স বা ফিজিওথেরাপিস্ট কিভাবে পাব ?</h3>
                    </div>
                </div>
                <div class="answers">
                    <p>
                        <a href="{{URL('/form')}}">এই ফর্মটি পুরন করুন</a>
                        <br><br>
                        জরুরী দরকার লাগলে আমাদেরকে সকাল ১০টা থেকে রাত ১০টা পর্যন্ত ফোন করতে পারেন এই নাম্বারে:
                        <br>
                        <a class="letter-spaceing" href="tel:+8801617799750">+880 1617-799750</a>
                        <br>
                        <br>
                        রবিউল ইসলাম
                        <br>
                        CEO, আপন সেবা
                        <br>
                    </p>
                </div>
            </div>

            
            <div data-aos="fade-right"
            data-aos-delay="00" 
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-once="false" class="faq-card">
                <div class="inline">
                    <div class="faq-icons">
                        <h3><i class="far fa-arrow-alt-circle-right"></i></h3>
                    </div>
                    <div class="questions">
                        <h3> নিরাপত্তার জন্য আপনারা কি করেন ?</h3>
                    </div>
                </div>
                <div class="answers">
                    <div class="ul">
                        <ul>
                            <li>আমরা ন্যাশনাল আইডি যাচাই করি / We verify the national ID</li>
                            <li>বাসায় গিয়ে ঠিকানা যাচাই করি / We verify the address by visiting</li>
                            <li>আইডির কপি আমাদের কাছে রাখি / We keep a copy of the national ID</li>
                        </ul>
                    </div>
                </div>
            </div>

            
            <div data-aos="fade-up"
            data-aos-delay="00" 
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-once="false" class="faq-card">
                <div class="inline">
                    <div class="faq-icons">
                        <h3><i class="far fa-arrow-alt-circle-right"></i></h3>
                    </div>
                    <div class="questions">
                        <h3> ন্যানি/আয়া/অ্যাটেন্ডেন্টের বেতন এত বেশি কেন ?</h3>
                    </div>
                </div>
                <div class="answers">
                    <p>
                        আমরা বিশ্বস্ত ও অভিজ্ঞ লোক দিয়ে থাকি। এই সার্ভিসের জন্য এটাই বর্তমান গড় বেতন।
                        <br>
                        <br>
                        We provide trusted and experienced care providers. This is the current salary range for this type of job in your area.
                    </p>
                </div>
            </div>

                        
            <div data-aos="fade-up"
            data-aos-delay="00" 
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-once="false" class="faq-card">
                <div class="inline">
                    <div class="faq-icons">
                        <h3><i class="far fa-arrow-alt-circle-right"></i></h3>
                    </div>
                    <div class="questions">
                        <h3> এই ওয়েভসাইট ছাড়া আপনাদের সাথে কিভাবে যোগাযোগ করবো ?</h3>
                    </div>
                </div>
                <div class="answers">
                    <p>
                        এই ওয়েভসাইট ছাড়াও আপনারা আরো বিভিন্ন উপায়ে আমাদের সাথে যোগাযোগ করতে পারবেন।<br>
                        যেকোনো প্রয়োজনে মেসেজ করতে পারেন আমাদের ফেসবুক পেইজে. <br>
                        আমাদের ফেসবুক পেইজ লিঙ্ক : <a style="color: #e4405f; border-bottom: #e4405f dotted 1px;" href="https://www.facebook.com/aponseheba/" target="_blank" rel="noopener noreferrer">Apon Seba - আপন সেবা</a>
                        <br>
                        অথবা যেকোনো সময় ফোন করতে পারেন <a style="color: #e4405f; border-bottom: #e4405f dotted 1px;" href="tel:+8801617799750">+8801617-799750</a> এই নম্বরে।
                    </p>
                </div>
            </div>

            
            <div data-aos="fade-down"
            data-aos-delay="00" 
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-once="false" class="faq-card">
                <div class="inline">
                    <div class="faq-icons">
                        <h3><i class="far fa-arrow-alt-circle-right"></i></h3>
                    </div>
                    <div class="questions">
                        <h3> ন্যানি, আয়া, নার্স বা ফিজিওথেরাপিস্ট আর কোনো সার্ভিস দেন আপানারা ?</h3>
                    </div>
                </div>
                <div class="answers">
                    <p>
                        হ্যাঁ। আমরা আপনাকে/ আপনার বাচ্চাকে প্রাইভেট পড়ানোর জন্য ঢাকা ভার্সিটি, বুয়েট সহ অন্যান্য ইউনিভার্সিটি বা কলেজে অধ্যয়ন করা অভিজ্ঞ ছাত্র/ছাত্রী প্রদান করি।
                        তাছাড়া বাসায় কাজ করার জন্য ভেরিফাইড এবং অভিজ্ঞ  কাজের বুয়া দেই।
                    </p>
                </div>
            </div>
            
            <div data-aos="fade-down"
            data-aos-delay="00" 
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-once="false" class="faq-card">
                <div class="inline">
                    <div class="faq-icons">
                        <h3><i class="far fa-arrow-alt-circle-right"></i></h3>
                    </div>
                    <div class="questions">
                        <h3>একজন ন্যানি বা ব্যাবিসিটার এর কাজ কি কি ?</h3>
                    </div>
                </div>
                <div class="answers">
                    <p>
                        আমাদের ন্যানিরা বাচ্চার খাবার তৈরি, কাপড় ধোয়া, এগুলি করবে, তবে বাসার অন্য কারো রান্না, কাপড় ধোয়া, এই সব কাজ ন্যানির কাজে অন্তর্ভূক্ত নয়
                        <br>
                        <br>
                        Our nannies will prepare food for the child under their care and may wash their clothing, but cooking for others in the house, doing the laundry, etc. are not part of the nanny’s job description.
                    </p>
                </div>
            </div>
            
        </div>
    </section>


@endsection