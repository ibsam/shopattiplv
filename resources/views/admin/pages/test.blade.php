@extends('admin/layouts/contentLayoutMaster') // choose any one option {contentLayoutMaster/fullLayoutMaster}

@section('title', 'Test Page')  // change title accrodingly

@section('content')
<div class="card">
  <div class="card-header">
    <h4 class="card-title">Kick start your next project 🚀</h4>
  </div>
  <div class="card-body">
    <div class="card-text">
        <div class="container mt-5">
            <h2 class="mb-4">Laravel 7|8 Yajra Datatables Example</h2>
            <table class="table table-bordered yajra-datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Phone</th>
                        <th>DOB</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
  </div>
</div>

@endsection

@section('page-script')
<script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.list') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'url_name', name: 'url_name'},
            {data: 'name', name: 'name'},
            {data: 'name', name: 'name'},
            {data: 'name', name: 'name'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });
</script>

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

@endsection