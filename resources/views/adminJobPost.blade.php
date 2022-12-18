@extends('mainLayout.adminLayout')
@section('content')

<main> 
    <div style="margin: 20px 0" class="main-container container">
        <p style="color: green; text-decoration: underline;" class="text-center my-5">সবগুলা ফিল্ড অবশ্যই বাংলা ভাষায় পূরণ করতে হবে</p>
        <form action="" id="onSubmit" autocomplete="off" class="row g-3 needs-validation" novalidate>
            <div class="col-md-4">
                <label for="post-service" class="form-label">কোন সার্ভিস প্রয়োজন?</label>
                <input required="" value="" type="text" name="post-service" class="form-control" id="post-service">
            </div>

            <div class="col-md-4">
                <label for="post-address" class="form-label">ঠিকানা</label>
                <input required="" value="" type="text" name="post-address" class="form-control" id="post-address">
            </div>

            <div class="col-md-4">
                <label for="post-problem" class="form-label">রুগির সমস্যা</label>
                <input required="" value="" type="text" name="post-problem" class="form-control" id="post-problem">
            </div>

            <div class="col-md-4">
                <label for="post-age" class="form-label">রুগির বয়স</label>
                <input required="" value="" type="text" name="post-age" class="form-control" id="post-age">
            </div>

            <div class="col-md-4">
                <label for="post-gender" class="form-label">রুগির লিঙ্গ</label>
                <input required="" value="" type="text" name="post-gender" class="form-control" id="post-gender">
            </div>

            <div class="col-md-4">
                <label for="post-shift" class="form-label">শিফট</label>
                <input required="" value="" type="text" name="post-shift" class="form-control" id="post-shift">
            </div>
            
            <div class="col-12">
                <button name="submit" class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</main>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
              <h2 class="p-3" id="appendStatus"></h2>
            </div>
            <div class="modal-footer">
                <button onclick="location.reload()" data-id="" id="getID" type="button" class="getID btn btn-success">Submit another Job</button>
                <button onclick="window.location.href='/admin'" id="getID" type="button" class="getID btn btn-primary">Go to admin panel</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script src="{{URL::asset('js/adminJobPost.js') }}"></script>
@endsection