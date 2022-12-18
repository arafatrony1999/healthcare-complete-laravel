@extends('mainLayout.adminLayout')
@section('content')

<main>

  <table id="userTable" class="table table-striped d-none">
      <thead>
          <tr>
              <th scope="col">ID</th>
              <th scope="col">Visitor IP</th>
              <th scope="col">Visit time</th>
          </tr>
      </thead>

      <tbody id="tableRow">

      </tbody>

  </table>


  <table class="table table-striped">
      <tbody id>
          <img id="tableLoader" src="{{URL::asset('images/loader.gif')}}" alt="">
      </tbody>
  </table>

</main>

@endsection

@section('script')

<script src="{{URL::asset('js/adminSiteVisitor.js')}}"></script>
<script>
    getVisitorData();
</script>

@endsection