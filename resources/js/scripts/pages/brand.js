$(function () {

    var table = $('#users-table').DataTable({
        processing: true,
  
        serverSide: true,
  
     responsive : true,
  
        ajax: "/brand",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'description', name: 'description'},
            {data: 'created_at', name: 'Created At'},
            {data: 'updated_at', name: 'updated At'},
  
            {data: 'action', name: 'action', orderable: false, searchable: false},
  
  
  
        ]
    });
  
  });
  