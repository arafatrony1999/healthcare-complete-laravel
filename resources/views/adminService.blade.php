@extends('mainLayout.adminLayout')
@section('content')

<main>

    <div style="margin: 2rem" class="addNewServiceBtn">
        <button id="serviceaddNewbtn" class="btn btn-primary">Add New</button>
    </div>

    <table id="serviceTable" class="table table-striped display">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Service Name</th>
                <th scope="col">Service Description</th>
                <th scope="col">Service Image</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>

        <tbody id="ServiceTableRow">

        </tbody>
    </table>


    <!-- Modal -->
    <div class="modal fade" id="serviceAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form>
                        <div class="form-group my-3">
                            <label for="serviceName">Service Name</label>
                            <input type="text" class="form-control" id="serviceName" aria-describedby="emailHelp" placeholder="Enter Service Name">
                        </div>
                        <div class="form-group my-3">
                            <label for="serviceDesc">Service Description</label>
                            <textarea class="form-control" id="serviceDesc" rows="3"></textarea>
                        </div>
                        <div class="form-group my-3">
                            <label for="serviceImg">Service Image</label>
                            <input type="file" class="form-control" id="serviceImg">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button data-id="" id="addServicebtn" type="button" class="get btn btn-danger">Add</button>
                    <button onclick="$('#serviceAddModal').modal('hide')" type="button" class="btn btn-success" data-mdb-dismiss="modal">
                        Cancle
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="serviceUpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form>
                        <div id="serviceUpdateID" class="d-none"></div>
                        <div class="form-group my-3">
                            <label for="serviceNameUpdate">Service Name</label>
                            <input type="text" class="form-control" id="serviceNameUpdate" aria-describedby="emailHelp" placeholder="Enter Service Name">
                        </div>
                        <div class="form-group my-3">
                            <label for="serviceDescUpdate">Service Description</label>
                            <textarea class="form-control" id="serviceDescUpdate" rows="3"></textarea>
                        </div>

                        <div class="img-update" id="image-update">

                        </div>

                        <div class="form-group my-3">
                            <label for="serviceImgUpdate">Service Image</label>
                            <input type="file" class="form-control" id="serviceImgUpdate">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button data-id="" id="updateServicebtn" type="button" class="get btn btn-danger">Update</button>
                    <button onclick="$('#serviceUpdateModal').modal('hide')" type="button" class="btn btn-success" data-mdb-dismiss="modal">
                        Cancle
                    </button>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="serviceDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h2 class="p-3">Are you sure you want to delete this data ?</h2>
                    <h2 class="d-none" id="getServiceDataID"></h2>
                </div>
                <div class="modal-footer">
                    <button data-id="" id="getServiceID" type="button" class="get btn btn-danger">Delete</button>
                    <button onclick="$('#serviceDeleteModal').modal('hide')" type="button" class="btn btn-success" data-mdb-dismiss="modal">
                        Cancle
                    </button>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection




@section('script')

<script src="{{URL::asset('js/adminServiceTable.js') }}"></script>
<script>
    getServiceData();
</script>

@endsection