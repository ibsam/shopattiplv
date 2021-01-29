$(function () {

    var table = $('#users-table').DataTable({
        processing: true,
  
        serverSide: true,
  
     responsive : true,
  
        ajax: "/admin/commission",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'percentage', name: 'percentage'},
            {data: 'status', name: 'status'},
            {data: 'created_at', name: 'Created At'},
            {data: 'updated_at', name: 'updated At'},
  
            {data: 'action', name: 'action', orderable: false, searchable: false},
  
  
  
        ]
    });
  
  });
  