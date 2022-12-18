@extends('mainLayout.adminLayout')
@section('content')

<main>

  <table id="userTable" class="table table-striped d-none display">
      <thead>
          <tr>
              <th scope="col">ID</th>
              <th scope="col">Full Name</th>
              <th scope="col">Phone Number</th>
              <th scope="col">Email Address</th>
              <th scope="col">Messege</th>
              <th scope="col">Date & Time</th>
              <th scope="col">Action</th>
          </tr>
      </thead>

      <tbody id="ContacttableRow">

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
                <h2 class="p-3">Are you sure you want to delete this Messege?</h2>
                <h2 class="" id="getContactDataID"></h2>
              </div>
              <div class="modal-footer">
                  <button data-id="" id="getContactID" type="button" class="btn btn-danger">Delete</button>
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
<script src="{{URL::asset('js/adminContactTable.js')}}"></script>
<script>
    getContactTableData();
</script>

@endsection