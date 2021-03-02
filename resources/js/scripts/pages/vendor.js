$(function () {

    var table = $('#users-table').DataTable({
        processing: true,
  
        serverSide: true,
  
     responsive : true,
  
        ajax: "/admin/vendor",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},
            {data: 'vendor_type', name: 'vendor_type'},
            {data: 'status', name: 'status'},
            {data: 'user_id', name: 'user_id'},
            {data: 'created_at', name: 'Created At'},
            {data: 'updated_at', name: 'updated At'},
  
            {data: 'action', name: 'action', orderable: false, searchable: false},
  
  
  
        ]
    });
  
  });