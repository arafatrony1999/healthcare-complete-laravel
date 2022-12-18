@extends('mainLayout.adminLayout')
@section('content')

<main>

  <table id="JobTable" class="table table-striped d-none display">
      <thead>
          <tr>
              <th scope="col">ID</th>
              <th scope="col">সার্ভিস</th>
              <th scope="col">ঠিকানা</th>
              <th scope="col">রুগির সমস্যা</th>
              <th scope="col">রুগির বয়স</th>
              <th scope="col">রুগির লিঙ্গ</th>
              <th scope="col">শিফট</th>
              <th scope="col">Action (Update)</th>
              <th scope="col">Action (Delete)</th>
          </tr>
      </thead>

      <tbody id="JobTableRow">

      </tbody>


  </table>


  <table class="table table-striped d-none">
      <tbody>
          <div id="tableNothing" class="text-center d-none">
              <p>Sorry!</p>
              <p>No data found</p>
              <button onclick="location.reload()" class="btn btn-primary">Click to refresh the page</button>
          </div>
      </tbody>
  </table>

  <table class="table table-striped">
      <tbody id>
          <img id="tableLoader" src="{{URL::asset('images/loader.gif')}}" alt="">
      </tbody>
  </table>


  <!-- Modal -->
  <div class="modal fade" id="exampleModalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-body">
                <h2 class="p-3">Update this user</h2>
                <form>
                  
                    <div class="row my-3">
                      <div class="col">
                        <label class="form-label" for="form3Example3">সার্ভিস</label>
                        <input type="text" id="job-service" class="form-control" />
                      </div>
                  
                      <div class="col">
                        <label class="form-label" for="form3Example3">ঠিকানা</label>
                        <input type="text" id="job-address" class="form-control" />
                      </div>
                    </div>
                  
                    <div class="row my-3">
                      <div class="col">
                        <label class="form-label" for="form3Example3">রুগির সমস্যা</label>
                        <input type="text" id="job-problem" class="form-control" />
                      </div>
                  
                      <div class="col">
                        <label class="form-label" for="form3Example3">রুগির বয়স</label>
                        <input type="text" id="job-age" class="form-control" />
                      </div>
                    </div>
                  
                    <div class="row my-3">
                      <div class="col">
                        <label class="form-label" for="form3Example3">রুগির লিঙ্গ</label>
                        <input type="text" id="job-gender" class="form-control" />
                      </div>
                  
                      <div class="col">
                        <label class="form-label" for="form3Example3">শিফট</label>
                        <input type="text" id="job-shift" class="form-control" />
                      </div>
                    </div>
                  
                    <h2 class="d-none" id="getJobPageDataID"></h2>
                    <div class="modal-footer">
                      <div class="d-none" id="warningUpdate">
                        <p style="color: red">
                          <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                          দুঃখিত। আপনি কোনো ডাটা আপডেট করেননি ।
                        </p>
                      </div>
                      <button data-id="" id="getJobPageUpdateID" type="button" class="get btn btn-success">Update</button>
                      <button onclick="$('#exampleModalUpdate').modal('hide')" type="button" class="btn btn-primary" data-mdb-dismiss="modal">
                          Cancle
                      </button>
                    </div>
                </form>
              </div>
          </div>
      </div>
  </div>






  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
              <h2 class="p-3">Are you sure you want to delete this data?</h2>
              <h2 class="d-none" id="getJobPageDataID"></h2>
            </div>
            <div class="modal-footer">
                <button data-id="" id="getJobPageID" type="button" class="get btn btn-danger">Delete</button>
                <button onclick="$('#exampleModal').modal('hide')" type="button" class="btn btn-success" data-mdb-dismiss="modal">
                    Cancle
                </button>
            </div>
        </div>
    </div>
</div>

</main>

@endsection




@section('script')
<script src="{{URL::asset('js/adminJobManageTable.js')}}"></script>
<script>
    adminJobManageTable();
</script>

@endsection