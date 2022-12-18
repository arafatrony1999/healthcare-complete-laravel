@extends('mainLayout.adminLayout')
@section('content')

<main>

  <table id="userTable" class="table table-striped d-none display">
      <thead>
          <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Gender</th>
              <th scope="col">Phone</th>
              <th scope="col">Email</th>
              <th scope="col">FB</th>
              <th scope="col">Address</th>
              <th scope="col">City</th>
              <th scope="col">Zip</th>
              <th scope="col">NID</th>
              <th scope="col">Image</th>
              <th scope="col">Apply date-time</th>
              <th scope="col">Action</th>
          </tr>
      </thead>

      <tbody id="tableRow">

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
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-body text-center">
                <h2 class="p-3">Are you sure you want to delete this data ?</h2>
                <h2 class="d-none" id="getJobDataID"></h2>
              </div>
              <div class="modal-footer">
                  <button data-id="" id="getJobID" type="button" class="get btn btn-danger">Delete</button>
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
<script src="{{URL::asset('js/adminJobTable.js') }}"></script>
<script>
    getAllData();
</script>

@endsection