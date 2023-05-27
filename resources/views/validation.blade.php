@extends('mainLayout.formLayout')

@section('title')
    Verify Account
@endsection

@section('destination-form')
    Email Verification
@endsection

@section('content')

<section class="text-center six-digit-code-container">
    <h4 class="my-2">
        We have send you a 6 digit code at your email address
        <span style="color: blue; text-decoration: underline">({{session()->get('sessionEmailAddr')}})</span>
        Enter the code below.
    </h4>

    @if (session()->has('validity'))
        @if (session()->get('validity') === false)
            <div class="alert alert-danger" role="alert">
                Your given verification code has been expired. <a href="/new_verification_code?email={{ session()->get('email') }}&id={{ session()->get('id')}}" style="text-decoration: underline">Request a new one.</a>
            </div>
        @endif
    @endif

    @if (session()->has('code_error'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('code_error') }}. <a href="/new_verification_code?email={{ session()->get('email') }}&id={{ session()->get('id')}}" style="text-decoration: underline">Request a new one.</a>
        </div>
    @endif

    <form action="/account_validation" method="POST">
        @csrf
        <div class="form-group my-3">
            <label for="inputValid">Enter 6 digit code</label>
            <input type="text" name="code" class="form-control" id="inputValid" aria-describedby="emailHelp" placeholder="Enter your code">
        </div>

        <button type="submit" class="btn btn-primary">Verify</button>

        @if (session()->has('resend'))
            <div class="alert alert-success" role="alert">
                <span>Code resend successful. Please check your mail inbox or check spam folder.</span>
            </div>
        @endif
        <div class="my-3">
            Didn't recieved a code?
            <a href="/new_verification_code?email={{ $email }}&id={{ $id }}" style="text-decoration: underline;">Send code again.</a>
        </div>
    </form>
</section>

@endsection