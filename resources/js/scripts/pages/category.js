$(function () {

    var table = $('#users-table').DataTable({
        processing: true,
  
        serverSide: true,
  
     responsive : true,
  
        ajax: "/admin/category",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data:'type',name:'Type'}, 
            {data: 'logo', name: 'logo'},
            // {data: 'created_at', name: 'Created At'},
            // {data: 'updated_at', name: 'updated At'},
            {data:'active',name:"Active"},
            {data:'menubit',name:"Display On Menu"},
            {data: 'action', name: 'action', orderable: false, searchable: false},
  
  
  
        ]
    });
  
  });