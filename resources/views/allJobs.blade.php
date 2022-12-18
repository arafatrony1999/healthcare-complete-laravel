@extends('mainLayout.masterLayout')

@section('destination')
    Available Jobs
@endsection

@section('content')
<section>
        <div class="services-container">
            <h1>Available Jobs</h1>
            <p>
                আমরা সকল কাজের জন্য অভিজ্ঞ লোক নিয়োগ দেই। আপনার অভিজ্ঞতা না থাকলে দয়া করে আবেদন করবেন না।
                তাছাড়া আবেদন করার সময় আমরা আপনার কাছে ন্যাশনাল আইডিকার্ড সহ আরো বিভিন্ন তথ্য জানতে চাইবো
                এবং আপনারা অবশ্যই সকল তথ্য দিয়ে আমাদের সহযোগিতা করতে হবে। অন্যথায় আপনার আবেদন গ্রহণযোগ্য হবেনা।
                <br>
                <a style="border-bottom: #1ACCFD solid 1px; color:  #1ACCFD;"  href="{{URL('/apply')}}"> এখানে আবেদন করুন </a>
            </p>
        
            @foreach ($results as $results)
                <div class="seba-card">
                    <h3>জরুরী ভিত্তিতে একজন {{$results->needservice}} প্রয়োজন। </h3>
                    <table style="width:100%">
                        <tbody>
                            <tr style="text-align: center">
                                <td style="width: 40%;">ঠিকানা</td>
                                <td style="width: 10%">:</td>
                                <td style="width: 50%">{{$results->patientaddress}}</td>
                            </tr>
                            <tr style="text-align: center">
                                <td style="width: 40%">রুগির সমস্যা</td>
                                <td style="width: 10%">:</td>
                                <td style="width: 50%">{{$results->problem}}</td>
                            </tr>
                            <tr style="text-align: center">
                                <td style="width: 40%">রুগির বয়স</td>
                                <td style="width: 10%">:</td>
                                <td style="width: 50%">{{$results->age}}</td>
                            </tr>
                            <tr style="text-align: center">
                                <td style="width: 40%">রুগির লিঙ্গ</td>
                                <td style="width: 10%">:</td>
                                <td style="width: 50%">{{$results->gender}}</td>
                            </tr>
                            <tr style="text-align: center">
                                <td style="width: 40%">শিফট(ঘন্টা)</td>
                                <td style="width: 10%">:</td>
                                <td style="width: 50%">{{$results->shift}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="a-container">
                        <a href="{{URL('/apply')}}">আবেদন করুন</a>
                    </div>
                </div>
            @endforeach 
        </div>
    </section>
@endsection